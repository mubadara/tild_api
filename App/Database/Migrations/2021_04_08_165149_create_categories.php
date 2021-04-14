<?php 
namespace App\Database\Migrations;

use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateCategories extends Database {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        if(!$this->capsule::schema()->hasTable("categories")):
            $this->capsule::schema()->create("categories", function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
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
        $this->capsule::schema()->dropIfExists("categories");
    }
}
