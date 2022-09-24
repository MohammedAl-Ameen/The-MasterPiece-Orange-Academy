<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("color");
            $table->double("price");
            $table->string("description");
            $table->string("rating")->nullable();
            $table->integer("brand_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->integer("order_id")->unsigned()->nullable();
            $table->integer("category_id")->unsigned();
            $table->string("image_url");



            $table->foreign("brand_id")
                ->references("id")
                ->on("brands")
                ->onDelete('cascade');

            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onDelete('cascade');

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete('cascade');
            $table->timestamps();

            $table->foreign("order_id")
                ->references("id")
                ->on("orders")
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
        Schema::dropIfExists('products');
    }
}
