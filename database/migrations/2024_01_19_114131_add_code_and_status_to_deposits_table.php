<?php
// database/migrations/xxxx_xx_xx_add_code_and_status_to_deposits_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeAndStatusToDepositsTable extends Migration
{
    public function up()
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->string('code')->unique()->nullable();
            $table->enum('status', ['pending', 'approved'])->default('pending');
        });
    }

    public function down()
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('status');
        });
    }
}
