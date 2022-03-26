<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po', function (Blueprint $table) {
            $table->id();
            $table->date('Po Date');
            $table->string('Po Number');
            $table->string('Vendor');
            $table->string('Warehouse');
            $table->float('Currency');
            $table->string('Description Of Goods');
            $table->string('Qty');
            $table->string('Unit');
            $table->float('Unit Price');
            $table->text('Remark');
            $table->float('Sub Total');
            $table->float('Discount');
            $table->float('Tax');
            $table->float('Total');
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
        Schema::dropIfExists('po');
    }
}
