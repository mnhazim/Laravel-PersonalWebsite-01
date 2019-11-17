<?php

use Illuminate\Database\Seeder;

class mnh_postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mnh_post')->insert([
            'id_var' => 1,
            'title' => 'Power Point Training',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus ipsum ut magna sagittis feugiat. Donec nec dui id lacus vulputate finibus. Vestibulum in mi in nisl sodales tempor. Nullam accumsan lacus ac nunc ullamcorper, vitae mollis nulla finibus. Integer efficitur nisi at odio malesuada, quis iaculis massa placerat',
            'place' => 'politeknik',
            'status' => 1,
            'visitor' => 3241,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus ipsum ut magna sagittis feugiat. Donec nec dui id lacus vulputate finibus. Vestibulum in mi in nisl sodales tempor. Nullam accumsan lacus ac nunc ullamcorper, vitae mollis nulla finibus. Integer efficitur nisi at odio malesuada, quis iaculis massa placerat. Proin fermentum felis vitae cursus suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vehicula pellentesque est, eget consectetur mauris varius a. Etiam eu magna eu odio scelerisque molestie. Donec vitae lorem pulvinar elit posuere faucibus. Sed suscipit volutpat ipsum in commodo. Aenean lacus nibh, commodo id malesuada in, sollicitudin a ex. Etiam sapien lorem, convallis in leo condimentum, tristique tincidunt ipsum.',
            'image' => '',
        ]);
    }
}
