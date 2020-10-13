<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chessimage extends Model
{
    public function  chess(){
        return $this->belongsTo('App\Chees');
    }
}
