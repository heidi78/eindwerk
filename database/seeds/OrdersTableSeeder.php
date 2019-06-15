<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert(['user_id'=>2, 'token'=>'34c56748']);
        DB::table('orders')->insert(['user_id'=>5, 'token'=>'25258ld7']);
        DB::table('orders')->insert(['user_id'=>8, 'token'=>'uj847477']);
        DB::table('orders')->insert(['user_id'=>7, 'token'=>'ju785148']);
    }
}
