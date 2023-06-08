<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guide::factory()->count(20)->create();
    }
}
