<?php

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
        //$user = factory(\App\User::class, 5)->create();
        $products = factory(\App\product::class, 10)->create();
        $restaurants = factory(\App\restaurant::class, 5)->create();
        $this->call(LaratrustSeeder::class);
    }
}
