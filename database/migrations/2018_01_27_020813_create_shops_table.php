<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('name',50);
            $table->string('phone',20);
            $table->string('type',50);
            $table->string('latitude',20);
            $table->string('longitude',20);
            $table->string('creator_surname',50);
            $table->string('creator_firstname',50);
            $table->string('creator_email',50);
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
        Schema::dropIfExists('shops');
    }
}
