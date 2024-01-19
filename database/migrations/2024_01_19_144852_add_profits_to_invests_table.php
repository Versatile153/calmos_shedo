<?php
// database/migrations/yyyy_mm_dd_hhmmss_add_profits_to_invests_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfitsToInvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invests', function (Blueprint $table) {
            $table->decimal('profits', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invests', function (Blueprint $table) {
            $table->dropColumn('profits');
        });
    }
}
