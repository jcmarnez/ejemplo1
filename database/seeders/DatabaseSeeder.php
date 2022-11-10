<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\personas;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        personas::factory(50)->create();
        $this->call(personasSeeder::class);
            
    }
}