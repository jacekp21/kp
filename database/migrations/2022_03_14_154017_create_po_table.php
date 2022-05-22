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
            $table->date('po_date');
            $table->string('po_no');
            $table->string('vendor');
            $table->string('warehouse');
            $table->char('currency', 3);
            $table->string('description');
            $table->string('qty');
            $table->string('unit');
            $table->float('unit_price');
            $table->text('remark');
            $table->float('sub_total');
            $table->float('discount');
            $table->float('tax');
            $table->float('total');
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
