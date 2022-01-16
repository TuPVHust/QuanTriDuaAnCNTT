<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagiamgiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magiamgias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sanphamid')->unsigned();
            $table->string('ten_ma');
            $table->string('note');
            $table->float('phan tram');
            $table->date('n_bat_dau');
            $table->date('n_ket_thuc');
            $table->timestamps();
    //        $table->foreign('sanphamid')->references('id')->on('sanpham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magiamgias');
    }
}
