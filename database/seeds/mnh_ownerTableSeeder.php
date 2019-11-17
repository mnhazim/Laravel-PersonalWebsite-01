<?php

use Illuminate\Database\Seeder;

class mnh_ownerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mnh_owner')->insert([
            'name' => 'Muhamad Noor Hazim Bin Mohamed Esa',
            'notel' => '0167832383',
            'email' => 'noorhazimesa@gmail.com',
            'descwebsite' => 'Assalamualaikum WBT & Welcome to my personal site.This site mainly focused on sharing my personal experiences with programming, cyber security, Internet Of Things(IoT) or even anything that I find interesting that can be shared.',
            'position' => 'Programmer',
            'desc' => '',
            'address' => '',
            'age' => 1996,
            'password' => md5('hazim123'),
            'visitor' => 1324,
        ]);
    }
}
