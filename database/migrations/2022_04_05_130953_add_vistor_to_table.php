<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVistorToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('image');
        });
        Schema::table('culinaries', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('image');
        });
        Schema::table('cultures', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('image');
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('image');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('image');
        });
        Schema::table('setting', function (Blueprint $table) {
            $table->integer('visitor')->default(0)->after('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
        Schema::table('culinaries', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
        Schema::table('cultures', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
        Schema::table('setting', function (Blueprint $table) {
            $table->dropColumn('visitor');
        });
    }

}
