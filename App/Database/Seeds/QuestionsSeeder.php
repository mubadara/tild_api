<?php
namespace App\Database\Seeds;

use App\Database\Factories\QuestionFactory;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new QuestionFactory)->create(50)->save();
    }
}
