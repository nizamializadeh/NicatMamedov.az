<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chees extends Model
{
    protected $fillable = [
        'header', 'description'
    ];

    public function images(){
        return $this->hasMany('App\Chessimage', 'chess_id');
    }
    public static function history()
    {
        return static::orderBy('id','DESC')->get();
    }
}
