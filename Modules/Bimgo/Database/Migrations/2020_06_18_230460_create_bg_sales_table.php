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
            $table->string('type'); //Al Contado, Al Credito, 
            $table->string('state'); //Pedido Realizado, En espera de Pago, Pedido Enviado 
            $table->double('discounts');
            $table->double('subtotal');
            $table->double('total');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');         

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('bg_customers');  

            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('bg_locations');

            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('bg_payments');

            $table->unsignedBigInteger('loyalty_id');
            $table->foreign('loyalty_id')->references('id')->on('bg_loyalties');

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
