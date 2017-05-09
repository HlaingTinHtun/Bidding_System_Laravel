<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
             $table->increments('id');
             $table->string('name');
             $table->longtext('descr');
             $table->decimal('initialprice',10,2);
             $table->date('end_date');
             $table->string('image_url');
             $table->integer('buyer_id');
             $table->integer('successful_bid_id');
             $table->string('slug')->unique();
             $table->integer('cat_id')->unsigned();
             $table->foreign('cat_id')->references('id')->on('product_category')->onDelete('cascade');

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
        Schema::drop('products');
    }
}
