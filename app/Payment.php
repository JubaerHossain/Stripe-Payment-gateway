<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =[
        'amount','plan','charge_id','stripe_id','quantity'
    ];
}
