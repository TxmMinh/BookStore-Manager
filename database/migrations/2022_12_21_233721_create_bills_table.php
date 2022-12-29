<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id'); // id khách hàng
            $table->integer('staff_id'); // id nhân viên
            $table->integer('sum_money'); // tổng tiền cần thanh toán
            $table->integer('payment'); // tiền trả
            $table->integer('debt'); // tiền nợ
            $table->string('book_id_list', 1500);
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
        Schema::dropIfExists('bills');
    }
};
