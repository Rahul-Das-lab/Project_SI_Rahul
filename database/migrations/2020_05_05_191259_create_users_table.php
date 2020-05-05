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
            $table->string("name")->nullable();
            $table->string("firstname")->nullable();
            $table->string("password");
            $table->string("card_id")->nullable();
            $table->date("birth_date")->nullable();
            $table->string("address")->nullable();
            $table->integer("notel")->nullable();
            $table->boolean("type");
            $table->string("comment");
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
