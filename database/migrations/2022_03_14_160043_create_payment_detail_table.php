<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_detail', function (Blueprint $table) {
            $table->id();
            $table->string('po_no');
            $table->string('item');
            $table->string('qty');
            $table->string('unit');
            $table->float('unit_price');
            $table->float('discount');
            $table->float('tax');
            $table->string('cheque_no');
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
        Schema::dropIfExists('payment_detail');
    }
}
