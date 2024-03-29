<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments("id");
            $table->string("content");
            $table->integer("product_id")->unsigned();
            $table->integer("user_id")->unsigned();

            $table->foreign("product_id")
                ->references("id")
                ->on("products")
                ->onDelete('cascade');

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
