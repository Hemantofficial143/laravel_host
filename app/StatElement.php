<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatElement extends Model
{
    protected $fillable = [
        'location','element','url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date_time' => 'datetime',
    ];
}
