<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $fillable = [
        'cate_id','header', 'description'
    ];
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
