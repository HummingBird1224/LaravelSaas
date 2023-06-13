<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNamesFieldInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('surname', 'first_name');
            $table->renameColumn('given_name', 'last_name');
            $table->renameColumn('furigana_sur', 'furigana_first');
            $table->renameColumn('furigana_given', 'furigana_last');
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
            $table->renameColumn('first_name', 'surname');
            $table->renameColumn('last_name', 'given_name');
            $table->renameColumn('furigana_first', 'furigana_sur');
            $table->renameColumn('furigana_last', 'furigana_given');
        });
    }
}
