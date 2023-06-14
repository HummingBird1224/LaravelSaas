<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LargeCategory;

class LargeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LargeCategory::factory()->count(10)->create();
    }
}
