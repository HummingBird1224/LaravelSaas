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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('kana_first')->nullable();
            $table->string('kana_last')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('_token');
            $table->enum('role', ['admin', 'client', 'user'])->default('user');
            $table->string('phone_number');
            $table->string('avatar')->nullable();
            $table->string('company_name')->nullable();
            $table->string('corporation_scale')->nullable();
            $table->integer('business_type')->nullable();
            $table->integer('prefecture')->nullable();
            $table->string('address')->nullable();
            $table->string('department')->nullable();
            $table->string('official_position')->nullable();
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
        Schema::dropIfExists('users');
    }
}
