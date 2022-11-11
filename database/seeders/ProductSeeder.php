<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Coca-cola',
            'code' => '1',
            'image' => 'https://i.pinimg.com/564x/3d/3a/43/3d3a432abbd2c5c834c413e56781692f.jpg',
            'categories_id' => '1',
            'description' => 'Bebida azucarada',
            'price' => 1500,
            'amount' => 100,
        ]);


        DB::table('products')->insert([

            'name' => 'Arroz guisado',
            'code' => '2',
            'image' => 'https://i.pinimg.com/564x/e9/e9/d5/e9e9d5bee72bf41bc4662b9a1be4f96a.jpg',
            'categories_id' => '2',
            'description' => 'Almuerzo común',
            'price' => 4000,
            'amount' => 1,

        ]);

        DB::table('products')->insert([

            'name' => 'Jugo de naranja',
            'code' => '3',
            'image' => 'https://i.pinimg.com/564x/bb/71/fe/bb71fe7ebf1979ee93488bddc95de816.jpg',
            'categories_id' => '3',
            'description' => 'Jugo natural',
            'price' => 1200,
            'amount' => 100,

        ]);

        DB::table('products')->insert([

            'name' => 'Pepsi',
            'code' => '4',
            'image' => 'https://i.pinimg.com/736x/36/9f/b1/369fb16d87c7a113d99b86a5b37c7f1f.jpg',
            'categories_id' => '1',
            'description' => 'Bebida azucarada',
            'price' => 1400,
            'amount' => 100,

        ]);

        DB::table('products')->insert([

            'name' => 'Fideos con salsa',
            'code' => '5',
            'image' => 'https://i.pinimg.com/564x/c1/5f/1e/c15f1e9c3da01e922c1d23f21fcab96e.jpg',
            'categories_id' => '2',
            'description' => 'Almuerzo común',
            'price' => 5500,
            'amount' => 2,

        ]);

        DB::table('products')->insert([

            'name' => 'Carne Asada',
            'code' => '6',
            'image' => 'https://i.pinimg.com/564x/a0/e7/c9/a0e7c9714376195d5bb17462c85d0745.jpg',
            'categories_id' => '2',
            'description' => 'Almuerzo común',
            'price' => 5500,
            'amount' => 2,

        ]);


        //Product::factory(5)->create();
    }
}
