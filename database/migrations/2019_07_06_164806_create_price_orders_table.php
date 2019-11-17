<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedinteger('orders_id')->nullable();
            $table->foreign('orders_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');
            $table->string('price');
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
        Schema::dropIfExists('price_orders');
    }
}
