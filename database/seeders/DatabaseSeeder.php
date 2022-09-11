<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // Listing::create([
        //     'id' => '495023',
        //     'title' => 'Movers needed!',
        //     'tags' =>  'labor,cash',
        //     'location' => 'La Costa, CA',
        //     'email' => 'johndoe@gmail.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        //     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'
        // ]);
        Listing::factory(5)->create();
    }
}
