<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChessimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chessimages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->unsignedBigInteger('chess_id')->index();
            $table->foreign('chess_id')->references('id')->on('chees')->onDelete('cascade');
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
        Schema::dropIfExists('chessimages');
    }
}
