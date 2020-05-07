<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('apertura');
            $table->string('observaciones');
            $table->string('fecha_apertura');
            $table->string('fecha_cierre');
            $table->string('monto_inicial');
            $table->string('monto_final');
            $table->string('monto_real');
            $table->string('monto_faltante');
            $table->string('total_egreso');
            $table->string('total_ingreso');
            $table->string('estado')->default('A');

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
        Schema::dropIfExists('bg_cashes');
    }
}
