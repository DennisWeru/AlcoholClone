<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'main_photo', 'description','other_photos','price','category','uniqid','quantity','tally'
    ];
}
