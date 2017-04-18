<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->default("first_name");
            $table->string('second_name')->default("second_name");
            $table->string('email')->unique()->default("email@email.email");
            $table->string('password')->default("password");
            $table->string('phone')->default("phone");
            $table->string('img')->default("null");
            $table->string('sex')->default("man");
            $table->string('state')->default("DF");
            $table->string('status')->default("logged");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }
}
