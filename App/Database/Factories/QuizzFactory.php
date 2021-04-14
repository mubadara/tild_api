<?php

namespace App\Database\Factories;

use App\Models\Quizz;
use Leaf\Date;
use Leaf\Str;

class QuizzFactory extends Factory
{
	public $model = Quizz::class;

	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'title' => $this->faker->word,
			'created_at' => Date::now(),
			'updated_at' => Date::now(),
		];
	}
}
