<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = [
        'title','text','number','user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
