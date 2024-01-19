<?php
// app/Models/DepositConfirmation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositConfirmation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status', 'file'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deposit()
    {
        return $this->belongsTo(Deposit::class);
    }




}

