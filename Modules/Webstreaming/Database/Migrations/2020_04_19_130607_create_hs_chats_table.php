<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs_chats', function (Blueprint $table) {
            $table->id();
            $table->string('message')->nullable();
            $table->string('message_type')->nullable();
            $table->string('transmitter')->nullable();
            $table->string('receiver')->nullable();
            $table->string('file')->nullable();

            $table->foreignId('hs_meeting_id')->constrained();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hs_chats');
    }
}
