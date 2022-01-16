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
        Schema::create('payments', function (Blueprint $table) {

            $table->tinyInteger('TransactionNo')->comment('mã số giao dịch');
            $table->tinyInteger('TransactionStatus')->comment('1: thành công, 2:thất bại');
            $table->tinyInteger('type')->comment('1: trực tiếp, 2: online')->default(2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
