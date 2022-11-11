<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Tables')->insert([
            'number' => 'Numero 1',
            'image' => 'https://i.pinimg.com/564x/79/e6/22/79e62261e395208fabae8c29d66992b1.jpg'
        ]);

        DB::table('Tables')->insert([
            'number' => 'Numero 2',
            'image' => 'https://i.pinimg.com/564x/79/e6/22/79e62261e395208fabae8c29d66992b1.jpg'
        ]);

        DB::table('Tables')->insert([
            'number' => 'Numero 3',
            'image' => 'https://i.pinimg.com/564x/79/e6/22/79e62261e395208fabae8c29d66992b1.jpg'
        ]);

        DB::table('Tables')->insert([
            'number' => 'Numero 4',
            'image' => 'https://i.pinimg.com/564x/79/e6/22/79e62261e395208fabae8c29d66992b1.jpg'
        ]);

        //
        /*
        $data = [
            'number' => 1,
        ];

        Table::create($data);


        Table::factory(5)->create();
        */
    }
}
