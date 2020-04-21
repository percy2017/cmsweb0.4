<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs_fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('field')->nullable();
            $table->string('type')->nullable();
            $table->text('details')->nullable();

            $table->foreignId('hs_form_type_id')->constrained();

            $table->softDeletes();
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
        Schema::dropIfExists('hs_fields');
    }
}
