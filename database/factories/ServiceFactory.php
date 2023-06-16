<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

use App\Models\User;
use App\Models\Category;

class ServiceFactory extends Factory
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
            'user_id'=>$faker->randomElement(User::pluck('id')->toArray()),
            'guide_id'=>random_int(34, 43),
            'title'=>$this->faker->text(8),
            'description'=>$faker->realText(300),
            'logo'=>'uploads/services/logos/'.$faker->randomElement([
                'logo1.png','logo2.png','logo3.png','logo4.png','logo5.png','logo6.png'
            ]),
            'category_id'=>$faker->randomElement(Category::pluck('id')->toArray()),
            // 'guide_id'=>$faker->randomElement(Guide::pluck('id')->toArray()),
        ];
    }
}
