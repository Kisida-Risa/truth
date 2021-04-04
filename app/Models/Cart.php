<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected $fillable = [
        'sub_image_file_name',
        'sub_name',
        'sub_details',
        'sub_price',
    ];
    public function User()
    {
        $cart->users()->attach($user, 
        ['sub_name',
         'sub_price', 
         'sub_image_file_name',
         'user_id' 
        ]);
    }    

}
