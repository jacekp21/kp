<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_detail', function (Blueprint $table) {
            $table->id();
            $table->string('No Po');
            $table->string('Item');
            $table->string('Qty');
            $table->string('Unit');
            $table->float('Unit Price');
            $table->float('Discount');
            $table->float('tax');
            $table->float('Amount');
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
        Schema::dropIfExists('ap_detail');
    }
}
