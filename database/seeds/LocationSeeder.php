<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{

    public function run()
    {
        factory(Location::class, 10) -> create();
    }
}
