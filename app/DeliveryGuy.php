<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class DeliveryGuy extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'uniqid','user_id', 'phone_number', 'ride_reg_no'
    ];
}
