<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('code')->nullable();
            $table->integer('stock')->nullable();
            $table->double('price')->default(0);
            $table->double('price_last')->default(0);
            $table->boolean('default');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('bg_products');

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
        Schema::dropIfExists('bg_product_details');
    }
}
