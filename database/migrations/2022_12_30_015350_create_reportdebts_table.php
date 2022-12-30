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
        Schema::create('reportdebts', function (Blueprint $table) {
            $table->id();
            $table->integer('month');
            $table->integer('customer_id');
            $table->integer('no_dau');
            $table->integer('phat_sinh');
            $table->integer('no_cuoi');
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
        Schema::dropIfExists('reportdebts');
    }
};
