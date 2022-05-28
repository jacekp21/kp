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
            $table->string('vendor_id');
            $table->string('warehouse_id');
            $table->char('currency', 3);
            $table->text('remark');
            $table->float('sub_total')->nullable();;
            $table->float('discount')->nullable();;
            $table->float('tax')->nullable();;
            $table->float('total')->nullable();;
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
