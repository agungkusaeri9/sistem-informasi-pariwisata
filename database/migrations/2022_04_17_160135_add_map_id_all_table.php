<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMapIdAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->integer('map_id')->nullable()->after('image');
        });
        Schema::table('culinaries', function (Blueprint $table) {
            $table->integer('map_id')->nullable()->after('image');
        });
        Schema::table('cultures', function (Blueprint $table) {
            $table->integer('map_id')->nullable()->after('image');
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->integer('map_id')->nullable()->after('image');
        });
        Schema::table('setting', function (Blueprint $table) {
            $table->integer('map_id')->nullable()->after('logo');
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
            $table->dropColumn('map_id');
        });
        Schema::table('culinaries', function (Blueprint $table) {
            $table->dropColumn('map_id');
        });
        Schema::table('cultures', function (Blueprint $table) {
            $table->dropColumn('map_id');
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('map_id');
        });
        Schema::table('setting', function (Blueprint $table) {
            $table->dropColumn('map_id');
        });
    }
}
