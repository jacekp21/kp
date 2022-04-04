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
            $table->string('vendor');
            $table->Text('address');
            $table->date('invoice_date');
            $table->string('invoice_no');
            $table->float('currency');
            $table->string('warehouse');
            $table->string('term');
            $table->string('unit');
            $table->float('unit_price');
            $table->float('discount');
            $table->float('tax');
            $table->float('sub_total');
            $table->float('ongkir');
            $table->float('dp');
            $table->float('total');
            $table->Text('note');
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
