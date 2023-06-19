<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ServiceUser;

class UserGuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceUser::factory()->count(15)->create();
    }
}
