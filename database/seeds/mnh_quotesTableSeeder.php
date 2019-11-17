<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class mnh_quotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mnh_quotes')->insert([
            'desc' => Str::random(20),
            'from' => Str::random(10),
            'status' => 0,
        ]);
    }
}
