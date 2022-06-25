<?php

namespace Database\Seeders;

use App\Models\Drzava;
use App\Models\user_pica;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
     
        $this->call(DrzavaSeeer::class);
        $this->call(PicaSeeder::class);
        $this->call(PicaUserSeeder::class);
    
        
    }
}
