<?php

namespace App\Database\Factories;

use App\Models\Category;
use Leaf\Date;
use Leaf\Str;

class CategoryFactory extends Factory
{
	public $model = Category::class;

	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'name' => $this->faker->word,
			'created_at' => Date::now(),
			'updated_at' => Date::now(),
		];
	}
}
