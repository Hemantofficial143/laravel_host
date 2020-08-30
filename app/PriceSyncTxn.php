<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceSyncTxn extends Model
{
    protected $fillable = [
        'sync_id', 'prod_id',
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
