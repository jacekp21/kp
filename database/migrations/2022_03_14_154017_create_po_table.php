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
            $table->double('sub_total', 12,2);
            $table->double('discount', 12, 2)->nullable();;
            $table->double('tax', 12, 2)->nullable();
            $table->double('total', 12, 2)->nullable();
            $table->enum('status', array('active', 'void'))->nullable();
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
