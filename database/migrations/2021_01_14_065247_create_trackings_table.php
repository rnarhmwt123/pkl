<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_rw');
            $table->integer('sembuh');
            $table->integer('positive');
            $table->integer('meninggal');
            $table->date('tanggal');
            $table->foreign('id_rw')->references('id')
                  ->on('rws')->onDelete('cascade');
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
        Schema::dropIfExists('trackings');
    }
}
