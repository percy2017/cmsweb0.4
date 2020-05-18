<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount');
            $table->string('tipo_venta');
            $table->string('pagada');
            $table->string('importe');
            $table->string('importe_ice');
            $table->string('importe_exento');
            $table->string('tasa_cero');
            $table->string('subtotal');
            $table->string('descuentos');
            $table->string('importe_base');
            $table->string('debito_fiscal');
            $table->string('cobro_adicional');
            $table->string('monto_recibido');
            $table->string('venta_tipo');
            $table->string('estado')->default('A');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('caja_id');
            $table->foreign('caja_id')->references('id')->on('bg_cashes');

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('bg_customers');           

            $table->timestamps();
            $table->softDeletes();

            //venta, dosificacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bg_sales');
    }
}
