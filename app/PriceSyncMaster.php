<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceSyncMaster extends Model
{
    protected $fillable = [
        'status', 'no_of_prods',
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
