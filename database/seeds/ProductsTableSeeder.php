<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(['name'=>'You can heal your life', 'description'=>'Message is that we are each responsible for our own reality and dis-ease', 'price'=> 19, 'category_id'=>1, 'brand_id'=>3, 'user_id'=>3]);
        DB::table('products')->insert(['name'=>'Ishana klankschaal', 'description'=>'Zijn zeer mooie klankschalen. Ze zijn goudkleurig terwijl de buitenzijde zwart is met een gouden strook', 'price'=>66, 'category_id'=>3, 'brand_id'=>2, 'user_id'=>4]);
        DB::table('products')->insert(['name'=>'Yoga flow balans', 'description'=>'A matter of balans the perfect combination of asanas en meditation gives you peace strength en new energie', 'price'=> 18, 'category_id'=>1, 'brand_id'=>4,'user_id'=>3]);
        DB::table('products')->insert(['name'=>'Wierookstokjes brander en bewaardoos bloemdecor', 'description'=>'Gaatjes om wierookstokjes te branden; tijden het branden valt de as in het doosje.','price'=> 10, 'category_id'=>2, 'brand_id'=>1, 'user_id'=>4]);
        DB::table('products')->insert(['name'=>'Boedha beeldje', 'description'=>'Boedha beeldje van 14cm met een rond zen tuintje','price'=> 9, 'category_id'=>4, 'brand_id'=>3, 'user_id'=>15]);
        DB::table('products')->insert(['name'=>'Mini tuin decoratie', 'description'=>'Mini tuin decoratie vrouwen feng shui zen ','price'=> 15, 'category_id'=>4, 'brand_id'=>3, 'user_id'=>5]);
    }
}
