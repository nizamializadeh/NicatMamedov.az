<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->unsignedBigInteger('port_id')->index();
            $table->foreign('port_id')->references('id')->on('portfolios')->onDelete('cascade');
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
        Schema::dropIfExists('portimages');
    }
}
