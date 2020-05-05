<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("status_id");
            $table->bigInteger("formation_id");
            $table->string("type");
            $table->string("email");
            $table->string("curriculumvitae");
            $table->string("lettermotivation");
            $table->string("notes");
            $table->string("screenshotENT");
            $table->string("identity");

            $table->foreign('email')->references('email')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('formation_id')->references('id')->on('formation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
