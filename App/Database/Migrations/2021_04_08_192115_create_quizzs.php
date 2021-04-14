<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizzs extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("quizzs")):
            $this->capsule::schema()->create("quizzs", function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->timestamps();
            });
        endif;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $this->capsule::schema()->dropIfExists("quizzs");
    }
}
