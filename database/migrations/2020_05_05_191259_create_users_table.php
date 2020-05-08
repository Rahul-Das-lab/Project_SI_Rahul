<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->primary('email');
            $table->string("email")->unique();
            $table->bigInteger("type_id");
            $table->string("name")->nullable();
            $table->string("firstname")->nullable();
            $table->string("password");
            $table->string("card_id")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("address")->nullable();
            $table->string("notel")->nullable();
            $table->string("comment")->nullable();

            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
