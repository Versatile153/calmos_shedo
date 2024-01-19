<?php
// database/migrations/yyyy_mm_dd_hhmmss_create_withdraws_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->string('gateway');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['paid', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('withdraws');
    }
}
