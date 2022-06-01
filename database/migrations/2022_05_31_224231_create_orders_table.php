<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->text('order_no');
            $table->date('order_date');
            $table->string('total');
            $table->string('payment_method');
            $table->integer('shippingAddress_id')->unsigned()->nullable();
            $table->foreign('shippingAddress_id')->on('shipping_addresses')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('shipping_method');
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
