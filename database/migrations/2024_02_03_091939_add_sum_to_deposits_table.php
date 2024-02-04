<?php
// database/migrations/2022_02_01_000000_add_sum_to_deposits_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSumToDepositsTable extends Migration
{
    public function up()
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->decimal('sum', 10, 2)->default(0.00);
        });

        // Update the 'sum' column for existing records
        $userDeposits = \App\Models\Deposit::where('user_id', auth()->id())
            ->where('status', 'approved')
            ->orderBy('created_at')
            ->get();

        $cumulativeSum = 0;

        foreach ($userDeposits as $deposit) {
            $cumulativeSum += $deposit->amount;
            $deposit->update(['sum' => $cumulativeSum]);
        }
    }

    public function down()
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->dropColumn('sum');
        });
    }
}

