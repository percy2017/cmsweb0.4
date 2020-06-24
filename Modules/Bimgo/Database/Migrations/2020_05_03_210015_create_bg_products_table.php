<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->text('images_large')->nullable();
            $table->string('tags')->nullable();
            $table->string('stars')->nullable();
            $table->text('characteristics')->nullable();
            $table->boolean('published')->default(false);
            $table->boolean('offer')->default(false);
            
            $table->integer('views')->default(0);
            $table->text('description_long')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('bg_sub_categories');

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('bg_brands');

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
        Schema::dropIfExists('bg_products');
    }
}
