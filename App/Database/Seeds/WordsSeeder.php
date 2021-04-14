<?php
namespace App\Database\Seeds;

use App\Database\Factories\WordFactory;
use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new WordFactory)->create(20)->save();
    }
}
