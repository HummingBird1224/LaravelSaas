<?php

namespace Database\Factories;

use App\Models\LargeCategory;
use App\Models\Issue;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $faker = Faker::create('ja_JP');
        return [
            'title'=>$faker->realText(10),
            'description'=>$faker->realText(300),
            'guide_id'=>random_int(1, 20),
            'success_method'=>$faker->realText(400),
            'large_category_id'=>$faker->randomElement(LargeCategory::pluck('id')->toArray()),
            'issue_id'=>$faker->randomElement(Issue::pluck('id')->toArray()),
        ];
    }
}
