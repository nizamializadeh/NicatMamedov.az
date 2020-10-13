<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portimage extends Model
{
    public function  chess(){
        return $this->belongsTo('App\Portfolio');
    }
}
