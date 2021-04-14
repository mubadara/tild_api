<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizzCategories extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("quizz_categories")):
            $this->capsule::schema()->create("quizz_categories", function (Blueprint $table) {
                $table->integer('category_id');
                $table->integer('quizz_id');
            });
        endif;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $this->capsule::schema()->dropIfExists("quizz_categories");
    }
}
