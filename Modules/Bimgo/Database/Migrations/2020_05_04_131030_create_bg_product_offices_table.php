<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgProductOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_product_offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stock');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('bg_products');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')->references('id')->on('bg_branch_offices');

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
        Schema::dropIfExists('bg_product_offices');
    }
}
