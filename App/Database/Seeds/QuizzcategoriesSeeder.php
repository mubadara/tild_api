<?php
namespace App\Database\Seeds;

use App\Database\Factories\QuizzcategoryFactory;
use Illuminate\Database\Seeder;

class QuizzcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new QuizzcategoryFactory)->create(20)->save();
    }
}
