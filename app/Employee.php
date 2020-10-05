<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [

  'first_name',
  'last_name',
  'date_of_birth',
  'personal_code',
  'location_id'

  ];

  public function location() {

    return $this ->belongsTo('App\Location');
  }

  public function tasks() {

    return $this ->belongsToMany('App\Task');
  }
}
