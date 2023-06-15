<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UserGuide;

class UserGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserGuide::factory()->count(15)->create();
    }
}
