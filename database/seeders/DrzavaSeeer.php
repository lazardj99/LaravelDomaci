<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrzavaSeeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Drzava::factory()->count(10)->create();
    }
}
