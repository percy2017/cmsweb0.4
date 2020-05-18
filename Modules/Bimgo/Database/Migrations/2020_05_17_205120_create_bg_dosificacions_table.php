<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgDosificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_dosificacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('autorizacion');
            $table->string('fecha_emision');
            $table->string('llave_dosificacion');
            $table->string('leyenda_lectura');
            $table->string('actividad_economica');
            $table->string('nit');
            $table->string('estado')->default('A');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')->references('id')->on('bg_branch_offices');

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
        Schema::dropIfExists('bg_dosificacions');
    }
}
