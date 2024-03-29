<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->integer("product_id")->unsigned();
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete('cascade');

            $table->foreign("product_id")
                ->references("id")
                ->on("products")
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
        Schema::dropIfExists('appeals');
    }
}
