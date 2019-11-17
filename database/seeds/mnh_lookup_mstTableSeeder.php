<?php

use Illuminate\Database\Seeder;

class mnh_lookup_mstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mnh_lookup_mst')->insert([
            'title' => 'post-type',
        ]);
    }
}
