<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePyDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('py_detail', function (Blueprint $table) {
            $table->id();
            $table->string('py_id');
            $table->string('payment_id');
            $table->string('description');
            $table->string('qty');
            $table->string('unit');
            $table->double('unit_price', 12,2);
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
        Schema::dropIfExists('py_detail');
    }
}
