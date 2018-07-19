<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Work extends Authenticatable
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
