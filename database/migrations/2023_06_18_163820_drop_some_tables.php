<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSomeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('category_comparison_points');
        Schema::dropIfExists('category_good_bad_points');
        Schema::dropIfExists('category_necessary_points');
        Schema::table('categories', function (Blueprint $table) {
            $table->text('necessary_points')->nullable();
            $table->text('good_points')->nullable();
            $table->text('bad_points')->nullable();
            $table->text('comparison_points')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
