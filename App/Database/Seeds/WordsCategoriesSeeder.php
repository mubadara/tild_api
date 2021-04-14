<?php
namespace App\Database\Seeds;

use App\Database\Factories\WordsCategoryFactory;
use App\Models\Word;
use App\Models\Category;
use Illuminate\Database\Seeder;

class WordsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new WordsCategoryFactory)->create(50)->save();
    }
}
