<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entory extends Model
{

    protected $table = 'entorys';

    protected $fillable = [
        'user_id','texts_id','read_id'
    ];

    public function text()
    {
        return $this->hasOne('App\Text','id','texts_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
