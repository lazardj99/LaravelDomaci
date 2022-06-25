<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pica::factory()->count(10)->create();
    }
}
