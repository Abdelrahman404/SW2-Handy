<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    protected $guarded = [];

    public function users(){

        return $this->hasMany(User::class);
    }
}
