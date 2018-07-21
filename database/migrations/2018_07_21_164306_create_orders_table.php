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
          $table->string('receptor-email');
          $table->string('receptor-adress');
          $table->string('receptor-name');
          $table->string('sender-adress');
          $table->string('sender-name');
          $table->date('recepcion-date');
          $table->string('img_name');
          $table->string('payType');
          $table->string('scale');
          $table->string('material-description');
          $table->string('zone');
          $table->string('observations');
          $table->string('product-name');
          $table->integer('price');
          $table->integer('quantity');
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
