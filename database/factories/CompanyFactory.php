<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CompanyFactory extends Factory
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
            'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
            'address' => $faker->address(),
            'phone_number' => $faker->phoneNumber(),
            'name' => $faker->realText(10),
            'representative'=>$faker->name(),
            'corporation_scale' => $faker->randomElement([
                                                            'no_employee',
                                                            'very_small',
                                                            'smaller',
                                                            'small',
                                                            'medium',
                                                            'large',
                                                            'small_large',
                                                            'medium_large',
                                                            'very_large',
                                                            'over_thousand'
                                                        ]),
            'business_type' => random_int(1, 11),
            'prefecture' => random_int(1,48),
            'founded_year'=>random_int(2000,2022),
            'founded_month'=>random_int(1,12),
            'capital'=>random_int(1000,1500),
            'company_url'=>$faker->url(),
            'logo'=>'assets/img/tsukubnobi/no_logo.png',
        ];
    }
}
