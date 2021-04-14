<?php

namespace App\Database\Factories;

use App\Models\Category;
use App\Models\Quizz;
use App\Models\QuizzCategory;
use Leaf\Str;

class QuizzcategoryFactory extends Factory
{
	public $model = QuizzCategory::class;
	public $quizzs = Quizz::class;
	public $cat = Category::class;
	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'category_id' => rand(0, count($this->quizzs::all())),
			'quizz_id' => rand(0, count($this->cat::all()))
		];
	}
}
