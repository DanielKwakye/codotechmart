<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubteldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubteldetails', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('shop_id');
            $table->string('client_id',60);
            $table->string('client_secret',60);
             $table->string('merchant_key',60);
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
        Schema::dropIfExists('hubteldetails');
    }
}
