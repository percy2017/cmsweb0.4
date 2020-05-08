<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsMeetingParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs_meeting_participant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('hs_meeting_id')->constrained();
            $table->foreignId('hs_participant_id')->constrained();
            $table->time('join')->nullable();
            $table->time('exit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hs_meeting_participant');
    }
}
