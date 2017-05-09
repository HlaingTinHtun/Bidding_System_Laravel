<?php

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
            $table->string('address');
            $table->string('township');
            $table->string('order_note');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('dealer_id')->unsigned();
            $table->foreign('dealer_id')->references('id')->on('dealers');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('users');

            $table->date('order_date');
            $table->decimal('price',10,2);

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
        Schema::drop('orders');
    }
}
