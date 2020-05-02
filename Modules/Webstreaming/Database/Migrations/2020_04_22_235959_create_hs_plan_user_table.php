<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsPlanUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs_plan_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('hs_plan_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->date('start', 0)->nullable();
            $table->date('finish', 0)->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('hs_plan_user');
    }
}
