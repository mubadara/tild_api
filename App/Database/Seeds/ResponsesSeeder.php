<?php
namespace App\Database\Seeds;

use App\Database\Factories\ResponseFactory;
use Illuminate\Database\Seeder;

class ResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new ResponseFactory)->create(200)->save();
    }
}
