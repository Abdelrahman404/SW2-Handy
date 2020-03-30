<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $guarded = [];


    public function user(){

        return $this->belongs(User::class);
    }
}
