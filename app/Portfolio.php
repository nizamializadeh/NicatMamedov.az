<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    public function images(){
        return $this->hasMany('App\Portimage', 'port_id');
    }
}
