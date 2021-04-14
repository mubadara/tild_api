<?php

namespace App\Database\Factories;

use App\Models\Question;
use App\Models\Response;
use App\Models\Word;
use Leaf\Date;
use Leaf\Str;

class ResponseFactory extends Factory
{
	public $model = Response::class;
	public $question = Question::class;

	/**
	 * Create the blueprint for your factory
	 * 
	 * @return array
	 */
	public function definition()
	{
		
		return [
			'question' => rand(0, count($this->question::all())),
			'body' => $this->faker->paragraph(3, true),
			'is_correct' => rand(0, 1),
			'created_at' => Date::now(),
			'updated_at' => Date::now(),
		];
	}
}
