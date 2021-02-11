<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'logistical_price','uniqid'
    ];

    protected $table = 'locations';
}
