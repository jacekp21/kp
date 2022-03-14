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
            $table->string('Vendor');
            $table->Text('Address');
            $table->date('Date Of Invoice');
            $table->string('No Invoice');
            $table->float('Currency');
            $table->string('Warehouse');
            $table->string('Term');
            $table->string('Unit');
            $table->float('Unit Price');
            $table->float('Discount');
            $table->float('tax');
            $table->float('Sub Total');
            $table->float('Ongkir');
            $table->float('Dp');
            $table->float('Total');
            $table->Text('Note');
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
