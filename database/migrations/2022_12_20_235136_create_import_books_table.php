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
        Schema::create('import_books', function (Blueprint $table) {
            $table->id();
            $table->integer('book_code'); // Mã Sách
            $table->integer('staff_code'); // Mã Nhân Viên
            $table->integer('extra_number'); // Số lượng nhập thêm
            //$table->decimal('unit_import', $precision = 8, $scale = 2); // Đơn giá nhập
            $table->integer('unit_import');
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
        Schema::dropIfExists('import_books');
    }
};
