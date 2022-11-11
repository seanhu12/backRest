<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class BoletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('Boletas')->insert([
            'tables_id' => '11',
            'total' => '5500',
        ]);

        DB::table('Boletas')->insert([
            'tables_id' => '12',
            'total' => '6700',
        ]);
    }
}
