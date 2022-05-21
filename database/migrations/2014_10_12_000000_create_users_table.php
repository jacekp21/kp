<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('position');
            $table->string('no_telp');
            $table->string('role');
            $table->boolean('status');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('user')->insert(
            array(
                'username'      => 'admin',
                'password'      => Hash::make('123'),
                'position'      => 'admin',
                'no_telp'       => '12345',
                'role'          => 'admin',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
