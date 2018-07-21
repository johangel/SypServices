<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    protected $fillable =[
      'first_lastname',
      'second_lastname',
      'role',
      'role_name',
      'branch_Office',
      'user_id'
    ];
}
