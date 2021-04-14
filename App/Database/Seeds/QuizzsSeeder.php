<?php
namespace App\Database\Seeds;

use App\Database\Factories\QuizzFactory;
use Illuminate\Database\Seeder;

class QuizzsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new QuizzFactory)->create(5)->save();
    }
}
