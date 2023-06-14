<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LargeCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->randomElement([
                                                '財務・会計',
                                                '営業・顧客管理',
                                                'BtoCビジネスツール',
                                                'マーケティング',
                                                '生産・販売管理',
                                                '人事・給与',
                                                'コラボレーション',
                                                '通信インフラ',
                                                'データ分析・管理',
                                                '運用管理・監視'
                                            ]),
        ];
    }
}
