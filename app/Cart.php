<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use Notifiable;
    protected $fillable = [
        'product_array',
        'total_price',
        'user_name',
        'user_email',
        'uniqid',
        'status',
        'contact',
        'location'
    ];
}
