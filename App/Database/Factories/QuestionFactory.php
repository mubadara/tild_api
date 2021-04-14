<?php

namespace App\Database\Factories;

use App\Models\Question;
use App\Models\Quizz;
use App\Models\Word;
use Leaf\Date;
use Leaf\Str;

class QuestionFactory extends Factory
{
	public $model = Question::class;
	public $words = Word::class;
	public $quizzs = Quizz::class;

	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		return [
			'word' => rand(0, count($this->words::all())),
			'quizz' => rand(0, count($this->quizzs::all())),
			'created_at' => Date::now(),
			'updated_at' => Date::now()
		];
	}
}
