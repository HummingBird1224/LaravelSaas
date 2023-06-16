<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceUI;
use App\Models\ServicePricePlan;
use App\Models\Review;
use App\Models\Guide;
use App\Models\User;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->count(10)->create()
                ->each(function($service){
                    $faker = Faker::create('ja_JP');
                    for($i=1; $i<4; $i++){
                        ServiceUI::create([
                            'description'=>$faker->realText(200),
                            'service_id'=>$service->id,
                            'portfolio'=>'uploads/services/uis/'.$faker->randomElement([
                                'ui1.png','ui2.png','ui3.png','ui4.png'
                            ]),
                        ]);
                        ServicePricePlan::create([
                            'service_id'=>$service->id,
                            'title'=>$faker->realText(10),
                            'description'=>$faker->realText(100),
                            'price'=>$faker->randomElement([0,5000, 10000, 12000]),
                            'monthly'=>$faker->randomElement([0,500, 1000, 1500]),
                            'initial'=>0,
                            'min_user'=>$faker->randomElement([0,1,2,3,4,5 ]),
                            'min_usage'=>random_int(1,12),                            
                        ]);
                        Review::create([
                            'service_id'=>$service->id,
                            'user_id'=>$faker->randomElement(User::pluck('id')->toArray()),
                            'title'=>$faker->realText(10),
                            'description'=>$faker->realText(300),
                            'effect_after_implementation'=>$faker->realText(300),
                            'good_point'=>$faker->realText(300),
                            'bad_point'=>$faker->realText(100),
                            'score'=>$faker->randomElement([1,2,3,4,5 ]),
                            'status'=>$faker->randomElement(['publishing', 'rejected', 'approved'] ),                            
                        ]);
                    }
                    Guide::create([
                        'title' => $faker->realText(10),
                        'description'=>$faker->realText(300),
                        'image'=>'uploads/guides/images/'.$faker->randomElement([
                            'guide1.png', 'guide2.png', 'guide3.png', 'guide4.png'
                        ]), 
                        'data'=>'uploads/guides/materials/test.txt',
                        'free'=>0
                    ]);
                });
    }
}
