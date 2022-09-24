<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_categories', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("brand_id")->unsigned();
            $table->integer("category_id")->unsigned();

            $table->foreign("brand_id")
                ->references("id")
                ->on("brands")
                ->onDelete('cascade');

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands_categories');
    }
}
