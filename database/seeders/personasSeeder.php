<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombres' => 'Victor',
            'apellidos' => 'Peña',
            'edad' => 30,
        ]);
   
        DB::table('personas')->insert([
            'nombres' => 'Juan',
            'apellidos' => 'Soria',
            'edad' => 23,
        ]);
    }
}
