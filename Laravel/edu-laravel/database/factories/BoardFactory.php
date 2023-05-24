<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    // 팩토리 생성 : php artisan make:factory BoardFactory --model=Board
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            // randomNumber(자릿수) : 1은 0-9까지 2는 0-99까지
            // realText : 100글자까지 지정
            'category' => $this->faker->randomNumber(1)
            , 'btitle' => $this->faker->realText(100)
            , 'bcontent' => $this->faker->realText(2000)
            , 'created_at' => $date
            , 'updated_at' => $date
        ];
    }
}
