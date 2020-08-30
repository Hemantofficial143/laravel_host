<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistTxn extends Model
{
    protected $fillable = [
        'user_id','prod_id',
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
