<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id');
            $table->date('inv_date');
            $table->char('currency',3);
            $table->string('warehouse_id');
            $table->string('term');
            $table->float('discount')->nullable();
            $table->float('tax')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('total')->nullable();
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
        Schema::dropIfExists('ap');
    }
}
