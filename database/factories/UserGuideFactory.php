<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Guide;

class UserGuideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */ 
    public function definition()
    {
        // return [
        //     'user_id'=>$this->faker->randomElement(User::where('role', 'client')->pluck('id')->toArray()),
        //     'guide_id'=>$this->faker->randomElement(Guide::pluck('id')->toArray()),
        //     'status'=>'down'
        // ];
        return [
            'user_id'=>$this->faker->randomElement(User::pluck('id')->toArray()),
            'service_id'=>$this->faker->randomElement(Guide::pluck('id')->toArray()),
            'action'=>$this->faker->randomElement(['up', 'down'])
        ];
    }
}
