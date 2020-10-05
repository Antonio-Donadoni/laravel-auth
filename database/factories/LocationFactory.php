<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
      'name' => $faker -> company(),
      'street' => $faker -> streetAddress(),
      'city' => $faker -> city(),
      'country' => $faker -> country()
    ];
});
