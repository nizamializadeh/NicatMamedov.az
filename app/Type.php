<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
    ];
    public function faqs()
    {
        return $this->hasMany(faq::class,'cate_id');
    }
}
