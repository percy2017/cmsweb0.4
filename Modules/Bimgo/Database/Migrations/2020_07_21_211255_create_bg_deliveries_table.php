<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('price_shipping')->nullable();
            $table->string('day_delivhour_deliveryery')->nullable();
            $table->string('')->nullable();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('bg_products');

            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('bg_regions');



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
        Schema::dropIfExists('bg_deliveries');
    }
}
