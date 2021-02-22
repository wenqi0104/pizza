<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('pizzas')->insert([
            'name' => 'American',
            'base' => 'garlic',
            'type' => 'crust',
        ]);
    }


}
