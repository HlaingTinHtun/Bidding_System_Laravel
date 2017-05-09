<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid', function (Blueprint $table) {
             $table->increments('id');
             $table->decimal('amount',10,2);
             $table->date('bidded_at');
             $table->string('slug')->unique();
             $table->integer('bidder_id')->unsigned();
             $table->foreign('bidder_id')->references('id')->on('users')->onDelete('cascade');

             $table->integer('product_id')->unsigned();

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
        Schema::drop('bid');
    }
}
