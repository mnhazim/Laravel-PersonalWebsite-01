<?php

use Illuminate\Database\Seeder;

class mnh_lookup_varTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mnh_lookup_var')->insert([
            'id_mst' => 1,
            'title' => 'activity',
        ]);
    }
}
