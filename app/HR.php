<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HR extends Model
{
     protected $fillable = [
           'no',
           'date',
           'item',
           'quantity',
           'driver',
           'state',
        ];
}
