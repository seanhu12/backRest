<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('Categoria')->insert([
            
        ]);
        */

        DB::table('Pedidos')->insert([
            'boletas_id' => '1',
            'products_id' => '1',
            'cant' => '2',
        ]);

        DB::table('Pedidos')->insert([
            'boletas_id' => '1',
            'products_id' => '2',
            'cant' => '2',
        ]);

        DB::table('Pedidos')->insert([
            'boletas_id' => '2',
            'products_id' => '3',
            'cant' => '1',
        ]);

        DB::table('Pedidos')->insert([
            'boletas_id' => '2',
            'products_id' => '5',
            'cant' => '1',
        ]);
    }
}
