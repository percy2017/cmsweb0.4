<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->boolean('default')->default(false);
            $table->text('address')->nullable();

            $table->string('map')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('bg_regions');

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('bg_customers');

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
        Schema::dropIfExists('bg_locations');
    }
}
