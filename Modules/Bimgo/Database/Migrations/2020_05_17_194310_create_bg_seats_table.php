<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_seats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concepto');
            $table->string('monto');
            $table->string('tipo');
            $table->string('fecha');
            $table->string('hora');
            $table->string('estado')->default('A');

            $table->unsignedBigInteger('caja_id');
            $table->foreign('caja_id')->references('id')->on('bg_cashes');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bg_seats');
    }
}
