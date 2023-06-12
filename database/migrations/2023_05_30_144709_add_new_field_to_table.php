<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->string('given_name');
            $table->string('furigana_sur');
            $table->string('furigana_given');
            $table->string('phone_number');
            // $table->text('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('given_name');
            $table->dropColumn('furigana_sur');
            $table->dropColumn('furigana_given');
            $table->dropColumn('phone_number');
            $table->dropColumn('avatar');
        });
    }
}
