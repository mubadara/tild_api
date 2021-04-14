<?php

namespace App\Database\Factories;

use App\Models\Word;
use Leaf\Date;
use Leaf\Str;

class WordFactory extends Factory
{
	public $model = Word::class;

	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'word' => $this->faker->word,
			'definition' => $this->faker->paragraph(3, true),
			'is_valid' => rand(0, 1),
			'created_at' => \Leaf\Date::now(),
			'updated_at' => \Leaf\Date::now()
		];
	}
}
