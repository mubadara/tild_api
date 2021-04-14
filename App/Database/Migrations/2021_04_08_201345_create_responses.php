<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateResponses extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("responses")):
            $this->capsule::schema()->create("responses", function (Blueprint $table) {
                $table->increments('id');
                $table->foreignId('question');
                $table->text('body');
                $table->boolean('is_correct');
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
        $this->capsule::schema()->dropIfExists("responses");
    }
}
