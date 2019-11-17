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
        $this->call(mnh_quotesTableSeeder::class);
        $this->call(mnh_ownerTableSeeder::class);
        $this->call(mnh_lookup_mstTableSeeder::class);
        $this->call(mnh_lookup_varTableSeeder::class);
        $this->call(mnh_postTableSeeder::class);
    }
}
