<?php

namespace Database\Factories;

use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class GuideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    // protected $model = Guide::class;

    public function definition()
    {
        $faker = Faker::create('ja_JP');

        return [
            'category_id'=>$faker->unique()->randomElement(Category::pluck('id')->toArray()),
            'title' => $faker->realText(10),
            'description'=>$faker->realText(300),
            'image'=>'uploads/guides/images/'.$faker->randomElement([
                'guide1.png', 'guide2.png', 'guide3.png', 'guide4.png'
            ]), 
            'data'=>'uploads/guides/materials/test.txt',
            'free'=>1
        ];
    }
}
