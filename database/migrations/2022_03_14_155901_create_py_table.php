<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('py', function (Blueprint $table) {
            $table->id();
            $table->string('ap_no');
            $table->string('vendor_id');
            $table->date('pay_date');
            $table->char('currency',3);
            $table->string('warehouse_id');
            $table->double('discount', 12,2);
            $table->double('tax', 12,2);
            $table->double('sub_total', 12,2);
            $table->double('total', 12,2);
            $table->string('po_no');
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
        Schema::dropIfExists('py');
    }
}
