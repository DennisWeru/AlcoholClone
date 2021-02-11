<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'uniqid','user_id'
    ];
}
