<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

class StripeController extends Controller
{
    public function index(Request $request) {

        $user = $request->user();
        return view('ajax.index')->with([
            'intent' => $user->createSetupIntent()
        ]);
    }

    public function subscribe(Request $request) {

        $user = $request->user();

        if(!$user->subscribed('main')) {

            $payment_method = $request->payment_method;
            $plan = $request->plan;
            $user->newSubscription('main', $plan)->create($payment_method);
            $user->load('subscriptions');

        }

        return $this->status();

    }

    // 課金をキャンセル
    public function cancel(Request $request) {

        $request->user()
            ->subscription('main')
            ->cancel();
        return $this->status();

    }

    // キャンセルしたものをもとに戻す
    public function resume(Request $request) {

        $request->user()
            ->subscription('main')
            ->resume();
        return $this->status();

    }

    // プランを変更する
    public function change_plan(Request $request) {

        $plan = $request->plan;
        $request->user()
            ->subscription('main')
            ->swap($plan);
        return $this->status();

    }

    // カードを変更する
    public function update_card(Request $request) {

        $payment_method = $request->payment_method;
        $request->user()
            ->updateDefaultPaymentMethod($payment_method);
        return $this->status();

    }

    // 課金状態を返す
    public function status() {

        $status = 'unsubscribed';
        $user = auth()->user();
        $details = [];

        if($user->subscribed('main')) { // 課金履歴あり

            if($user->subscription('main')->cancelled()) {  // キャンセル済み

                $status = 'cancelled';

            } else {    // 課金中

                $status = 'subscribed';

            }

            $subscription = $user->subscriptions->first(function($value){

                return ($value->name === 'main');

            })->only('ends_at', 'stripe_plan');

            $details = [
                'end_date' => ($subscription['ends_at']) ? $subscription['ends_at']->format('Y-m-d') : null,
                'plan' => \Arr::get(config('services.stripe.plans'), $subscription['stripe_plan']),
                'card_last_four' => $user->card_last_four
            ];

        }

        return [
            'status' => $status,
            'details' => $details
        ];

    }
    
}
