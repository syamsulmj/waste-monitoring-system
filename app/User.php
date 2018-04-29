<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['staff_id', 'name', 'username', 'password'];

    static function getName($staff_id) {
      $name = User::where('staff_id', $staff_id)->first();
      
      return $name->name;
    }
}
