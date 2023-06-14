<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IssueFactory extends Factory
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
                                                'ペーパーレス化を進めたい',
                                                'リモートワークを進めたい',
                                                '採用の課題を解決したい',
                                                '契約から請求までの課題を解決したい',
                                                '組織の成長を促進したい',
                                            ]),
                                        ];
    }
}
