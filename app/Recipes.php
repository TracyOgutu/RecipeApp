<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    //The $guarded property should contain an array of attributes that you do not want to be mass assignable. 
    //In this case all attributes will be mass assignable because the array is empty. 
    protected $guarded = [];

    //Many recipes can belong to a single user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
