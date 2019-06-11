<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name'=>'Spiru']);
        DB::table('brands')->insert(['name'=>'Ishana']);
        DB::table('brands')->insert(['name'=>'Louise Hay']);
        DB::table('brands')->insert(['name'=>'Sinah Diepold']);
    }
}
