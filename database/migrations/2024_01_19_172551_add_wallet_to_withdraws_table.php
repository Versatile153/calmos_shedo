<?php

// database/migrations/yyyy_mm_dd_hhmmss_add_wallet_to_withdraws_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWalletToWithdrawsTable extends Migration
{
    public function up()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->string('wallet')->nullable(); // Adjust the column type as needed
        });
    }

    public function down()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->dropColumn('wallet');
        });
    }
}
