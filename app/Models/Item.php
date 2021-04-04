<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $fillable = [
        'image_file_name',
        'title',
        'body',
        'price',
    ];
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function condition()
    {
        return $this->belongsTo(ItemCondition::class, 'item_condition_id');
    }
    public function User()
    {
        return $this->belongsToMany('App\Models\User', 'cart');
    }

    public function users()
        {
            return $this->belongsToMany('App\Models\User','cart')->withPivot('user_id');
        }
}
