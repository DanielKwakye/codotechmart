<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourierPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('paid_on');
            $table->date('expired_at');
            $table->integer('courier_id');
            $table->integer('amount');
            $table->tinyInteger('months');
            $table->string('type',100);
            $table->tinyInteger('active',10);
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
        Schema::dropIfExists('courier_payments');
    }
}
