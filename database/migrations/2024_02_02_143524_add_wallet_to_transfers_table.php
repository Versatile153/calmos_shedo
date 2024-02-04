<?php

// database/migrations/2022_02_01_000000_add_wallet_to_transfers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWalletToTransfersTable extends Migration
{
    public function up()
    {
        Schema::table('transfers', function (Blueprint $table) {
            $table->string('wallet')->nullable(); // Add the 'wallet' column
        });
    }

    public function down()
    {
        Schema::table('transfers', function (Blueprint $table) {
            $table->dropColumn('wallet'); // Reverse the changes if needed
        });
    }
}
