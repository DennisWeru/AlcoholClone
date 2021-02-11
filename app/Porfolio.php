<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porfolio extends Model
{

    protected $fillable = [
        'address', 'contact', 'email','other_photos','facebook','twitter','uniqid','instagram','about_us'
    ];
}
