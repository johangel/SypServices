<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('Order_id')->nullable();
            $table->string('name');
            $table->string('weight');
            $table->string('dimensions')->nullable();
            $table->string('picture')->nullable();
            $table->string('material');
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
}
