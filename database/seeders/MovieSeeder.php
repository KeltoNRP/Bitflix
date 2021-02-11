<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run()
    {
        //factory(Movie::class, 10)->create();
        Movie::factory (2)->create();
        //factory(\App\Models\Movie::class, 10)->create();
    }
}
