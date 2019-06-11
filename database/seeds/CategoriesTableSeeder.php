<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'boeken']);
        DB::table('categories')->insert(['name'=>'kaarsen']);
        DB::table('categories')->insert(['name'=>'gongen']);
        DB::table('categories')->insert(['name'=>'beelden']);
    }
}
