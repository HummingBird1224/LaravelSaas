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
            'guide_id'=>random_int(35, 44),
            'success_method'=>$faker->realText(400),
            'necessary_points'=>$faker->realText(200),
            'comparison_points'=>$faker->realText(150),
            'good_points'=>$faker->realText(150),
            'bad_points'=>$faker->realText(100),
            'large_category_id'=>$faker->randomElement(LargeCategory::pluck('id')->toArray()),
            'issue_id'=>$faker->randomElement(Issue::pluck('id')->toArray()),
        ];
    }
}
