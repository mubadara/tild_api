<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateWords extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("words")):
            $this->capsule::schema()->create("words", function (Blueprint $table) {
                $table->increments('id');
                $table->string('word')->unique();
                $table->text('definition');
                $table->boolean('is_valid');
                $table->foreignId('user');
                $table->integer('upvotes');
                $table->integer('downvotes');
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
        $this->capsule::schema()->dropIfExists("words");
    }
}
