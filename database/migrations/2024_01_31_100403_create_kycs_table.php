<?php
// database/migrations/{timestamp}_create_kycs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Foreign key to users table
            $table->string('full_name');
            $table->string('nid_number');
            $table->string('gender');
            $table->json('you_hobby')->nullable();
            $table->string('nid_photo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kycs');
    }
}
