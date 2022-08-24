<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProduct');
            $table->string('price');
            $table->unsignedInteger('status');
            $table->string('images')->nullable();
            $table->string('describe');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categorys');
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
};
