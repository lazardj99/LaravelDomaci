<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PicaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PicaUser::factory()->count(10)->create();
    }
}
