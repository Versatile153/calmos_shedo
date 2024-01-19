<?php
// database/migrations/create_deposit_confirmations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositConfirmationsTable extends Migration
{
    public function up()
    {
        Schema::create('deposit_confirmations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->enum('status', ['approved', 'unapproved'])->default('unapproved');
            $table->string('file'); // You might want to adjust the data type based on your needs.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('deposit_confirmations');
    }
}
