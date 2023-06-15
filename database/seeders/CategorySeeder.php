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
       
        Category :: factory()->count(10)->create()
                    ->each(function($category){
                         $faker = Faker::create('ja_JP');
                        for($i=1; $i<3; $i++){
                            CategoryComparisonPoint::create([
                                'category_id'=>$category->id,
                                'title'=>$faker->realText(20),
                                'contents'=>$faker->realText(350),
                            ]);
                        }
                        for($j=1; $j<4; $j++ ){
                            CategoryGoodBadPoint::create([
                                'category_id'=>$category->id,
                                'title'=>$faker->realText(20),
                                'contents'=>$faker->realText(250),
                                'status'=>$faker->randomElement([0,1])
                            ]);
                        }
                        for($l=1; $l<3; $l++){  
                            CategoryNecessaryPoint::create([
                                'category_id'=>$category->id,
                                'title'=>$faker->realText(20),
                                'contents'=>$faker->realText(400),
                            ]);
                        }                                             
                    });
    }
}
