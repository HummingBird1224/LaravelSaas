<?php

namespace Database\Factories;

use App\Models\Guide;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Faker\Factory as Faker;

class GuideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Guide::class;

    public function definition()
    {
        $faker = Faker::create('ja_JP');

        return [
            'title' => $faker->realText(10),
            'image' => $faker->randomElement(Guide::pluck('image')->toArray()),
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'material'=>'uploads/guides/materials/test.txt',
        ];
    }
}
