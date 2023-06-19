<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Service;
use App\Models\ServiceUser;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        // User::factory(5)->create();
        // $this->call([
        //     CategorySeeder::class,
        // ]);
        for($i=0; $i<15; $i++){
            DB::table('service_user')->insert([
                'user_id'=>$faker->randomElement(User::pluck('id')->toArray()),
                'service_id'=>$faker->randomElement(Service::pluck('id')->toArray()),
                'action'=>$faker->randomElement(['up', 'down'])
            ]);
        }
    }
}
