<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->string('code_vnpay')->comment('code giao dịch vnp');
            $table->string('code_bank')->comment('code giao dịch ngân hàng');
            $table->string('vnp_response_code')->comment('code giao dịch ngân hàng');
            $table->string('vnp_response_code')->comment('mã phản hồi');
            $table->string('note')->comment('ghi chú');
            $table->float('tiền')->comment(' số tiền thanh toán');
            $table->float('thanh_vien')->comment('thanh viên thanh toán');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
