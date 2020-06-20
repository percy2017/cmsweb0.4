<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bg_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name_bussiness');
            $table->string('banner')->nullable();
            $table->string('nit_ci')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();

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
        Schema::dropIfExists('bg_customers');
    }
}
