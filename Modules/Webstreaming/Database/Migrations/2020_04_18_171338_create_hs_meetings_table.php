<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs_meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('user_id')->nullable();

            $table->date('day')->nullable();
            $table->time('start', 0)->nullable();
            $table->time('finish', 0)->nullable();
            $table->string('meeting_types')->nullable();
            $table->text('link')->nullable();
            $table->string('banner')->nullable();
            $table->text('descriptions')->nullable();
            $table->integer('participants_active')->default(0)->nullable();
            $table->integer('participants_reject')->default(0)->nullable();
            $table->integer('participants')->default(0)->nullable();
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
        Schema::dropIfExists('hs_meetings');
    }
}
