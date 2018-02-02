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
            $table->string('order_number');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->string('full_address')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('notes')->nullable();
            $table->string('delivery_option')->default('yes');
            $table->string('delivery_fee')->default('0.00');
            $table->string('status')->default('processing');
            $table->string('payment')->nullable();
            $table->integer('courier_id');
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
