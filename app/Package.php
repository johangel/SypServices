<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
      'Order_id', 'name', 'weight', 'weight_unit',
      'dimensions', 'picture', 'material',
    ];
}
