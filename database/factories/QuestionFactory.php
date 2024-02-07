<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Question::class;
    public function definition(): array
    {
        return [
            'title'=>$this->faker->title,
            'slug'=>Str::slug($this->faker->title),
            'body'=>$this->faker->text,
            'user_id' => User::factory()->create()->id
        ];
    }
}
