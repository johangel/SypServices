<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'receptor-name',
      'receptor-adress',
      'receptor-email',
      'scale',
      'payType',
      'zone',
      'sender-name',
      'sender-adress',
      'recepcion-date',
      'observations',
      'quantity',
      'price',
      'code',
      'emition-data',
      'specialCares',
      'packaging'
    ];
}
