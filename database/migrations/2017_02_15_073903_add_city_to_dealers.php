<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityToDealers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->string ('city');
            $table->string('company');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('company');
            $table->dropColumn('address');
        });
    }
}
