<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('ja_JP');
        return [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            // 'kana_first' => $faker->kanaName(),
            // 'kana_last' => $faker->kanaLastName(),
            'role' => $faker->randomElement(['user', 'client']),
            'email' => $this->faker->unique()->safeEmail(),
            'password'=>Hash::make('family'),
            'address' => $faker->address(),
            'phone_number' => $faker->phoneNumber(),
            'company_name' => $faker->realText(10),
            '_token'=>Str::random(20),
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
            'department' => $faker->randomElement([
                                                    'infomation_system',
                                                    'marketing',
                                                    'sales',
                                                    'corporate_planning',
                                                    'public_relations',
                                                    'human_resources',
                                                    'general_or_leagal',
                                                    'accounting',
                                                ]),
            'official_position' => $faker->randomElement([
                                                    'executive',
                                                    'officer',
                                                    'division_manager',
                                                    'manager',
                                                    'assistant_manager',
                                                    'general_staff',
                                                    'temporary_worker',
                                                    'accounting',
                                                ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    // public function withPersonalTeam()
    // {
    //     if (! Features::hasTeamFeatures()) {
    //         return $this->state([]);
    //     }

    //     return $this->has(
    //         Team::factory()
    //             ->state(function (array $attributes, User $user) {
    //                 return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
    //             }),
    //         'ownedTeams'
    //     );
    // }
}
