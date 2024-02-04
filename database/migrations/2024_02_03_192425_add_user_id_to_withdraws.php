<?php

// database/migrations/2022_01_01_000000_add_user_id_to_withdrawals.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToWithdraws extends Migration
{
    public function up()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            // Add the user_id column to withdrawals table
            $table->foreignId('user_id')->constrained(); // Assuming user_id is a foreign key referencing the users table
        });
    }

    public function down()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            // Reverse the changes made in the 'up' method
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
