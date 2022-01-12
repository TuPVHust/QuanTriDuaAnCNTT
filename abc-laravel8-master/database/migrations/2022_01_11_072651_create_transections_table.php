<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transections', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('user_id')->unsigned();
            $table->float('total_money');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->tinyInteger('status')->comment('1: thành công, 2:thất bại');
            $table->tinyInteger('type')->comment('1: trực tiếp, 2: online')->default(2);
           $table->string('note')->comment('ghi chú');
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
        Schema::dropIfExists('transections');
    }
}
