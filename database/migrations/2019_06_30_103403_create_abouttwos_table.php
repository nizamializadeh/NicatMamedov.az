<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbouttwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouttwos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->string('name');
            $table->string('specialty');
            $table->string('fb');
            $table->string('inst');
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
        Schema::dropIfExists('abouttwos');
    }
}
