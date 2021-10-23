<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culinaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->default(1)->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('slug');
            $table->string('unit');
            $table->bigInteger('price');
            $table->string('facility');
            $table->text('description');
            $table->string('location');
            $table->string('image');
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
        Schema::dropIfExists('culinaries');
    }
}
