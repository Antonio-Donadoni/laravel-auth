<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = [

    'name',
    'street',
    'city',
    'country'

  ];

  public function employees() {

    return $this ->hasMany('App\Employee');
  }


}
