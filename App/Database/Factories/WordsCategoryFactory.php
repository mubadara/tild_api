<?php

namespace App\Database\Factories;

use App\Models\Category;
use App\Models\Word;
use App\Models\WordCategory;

class WordsCategoryFactory extends Factory
{
	public $model = WordCategory::class;
	public $words = Word::class;
	public $cat = Category::class;
	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'word_id' => rand(0, count($this->words::all())),
			'category_id' => rand(0, count($this->cat::all()))
		];
	}
}
