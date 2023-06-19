<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Category;
use App\Models\CategoryComparisonPoint;
use App\Models\CategoryGoodBadPoint;
use App\Models\CategoryNecessaryPoint;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Category :: factory()->count(10)->create();
    }
}
