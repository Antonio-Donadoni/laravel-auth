<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $faker -> jobTitle() ,
      'description' => $faker -> text($maxNbChars = 20),
      'start_date' => $faker -> dateTimeThisYear(),
      'end_date' => $faker -> dateTimeThisYear()
    ];
});
