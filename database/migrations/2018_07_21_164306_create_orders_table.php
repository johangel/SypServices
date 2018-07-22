<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('code');
          $table->string('receptor-email');
          $table->string('receptor-adress');
          $table->string('receptor-name');
          $table->string('sender-adress');
          $table->string('sender-name');
          $table->date('recepcion-date');
          $table->string('payType');
          $table->string('scale');
          $table->string('zone');
          $table->string('observations');
          $table->integer('price');
          $table->integer('quantity');
          $table->date('emition-data');
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
        Schema::dropIfExists('orders');
    }
}
