<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Classic',
            'description' => 'BeffPatty,chedderCheese,grilled Onion , cocktailSauce.',
            'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/935-classic-burger.png',
            'price' => 20.00
         ]);
       
         DB::table('products')->insert([
             'name' => 'Classic Cheese',
             'description' => 'doubleBeef, tomato, cocktail sauce , cocktailSauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/941-classic-cheese.png',
             'price' => 30.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'Classic Double',
             'description' => 'doubleBeef,chedderCheese,grilled Onion , cocktailSauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/947-double-classic.png',
             'price' => 35.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'Classic Double Cheese',
             'description' => 'doubleBeef,doubleCheese,chedder Cheese, grilled onion.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/953-classic-double-cheese.png',
             'price' => 40.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'Italian style',
             'description' => 'beefPatty,fresh mozzarella italian salami, cocktailSauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/959-italian-style.png',
             'price' => 43.50
         ]);
         DB::table('products')->insert([
             'name' => 'Mozzarella Soft',
             'description' => 'beefpatty,freshmozzarella,tomato, cocktailSauce,onion.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/965-mozzarella-soft.png',
             'price' => 40.50
         ]);
         DB::table('products')->insert([
             'name' => ' Blue cheese',
             'description' => 'beefpatty,bluecheese ,cocktail Sauce, onion,cheese.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/971-blue-cheese.png',
             'price' => 45.00
         ]);
         DB::table('products')->insert([
             'name' => ' Chedder Cheese',
             'description' => 'beefpatty,bacon,cheddarCheese, cocktailSauce, cheese.',
             'photo' => ' https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/977-bacon-and-cheddar-cheese.png',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Swiss Cheese',
             'description' => 'beefpatty,bacon,cheddarcheese, lettuce, onions, chesse.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/983-swiss-cheese.png',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Grilled Chicken',
             'description' => 'grilledchicken breast,cheddar cheese ,white oregano.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/989-grilled.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Cheese',
             'description' => 'beef patty, cheddar cheese, tomato, onion, red paper.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/994-pepper----cheese.png ',
             'price' => 40.00
         ]);
         DB::table('products')->insert([
             'name' => 'Veggier',
             'description' => 'freshgrilledvegetables,broccoli, tomato,freshcucumber.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1000-veggie.png',
             'price' => 30.00 
         ]);
         DB::table('products')->insert([
             'name' => 'Mignon Steak',
             'description' => 'mignonsteak,buildyours,tomato, freshcucumber , onion.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1005-midnon-steak.png',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'BBQ Grilled Chicken',
             'description' => 'grilledchicken breast,rucola and barbecue sauce.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1010-bbq-grilled-chicken.png',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Steak',
             'description' => 'cognac,peppersauce,grilledpepper, cheddar cheese.',
             'photo' => 'https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1015-pepper-steak.png',
             'price' => 35.00
         ]);
         DB::table('products')->insert([
             'name' => 'Tuscan Style',
             'description' => 'tomato,rucola,figs,prosciutto, toma, fresh cucumber.',
             'photo' => ' https://static.ucraft.net/fs/userFiles/demo-burgerbar/images/1020-tuscan----style.png',
             'price' => 40.00
         ]);
    }
}
