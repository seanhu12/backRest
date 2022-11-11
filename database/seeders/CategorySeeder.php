<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Categories')->insert([
            'name' => 'Bebidas',
            'description' => 'Sólo bebidas',
        ]);


        DB::table('Categories')->insert([
            'name' => 'Almuerzo',
            'description' => 'Sólo comida',
        ]);


        DB::table('Categories')->insert([
            'name' => 'Jugo',
            'description' => 'Sólo jugos',

        ]);


        //Category::factory(5)->create();
    }
}
