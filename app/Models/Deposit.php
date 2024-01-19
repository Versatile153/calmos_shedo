<?php
// app/Models/Deposit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = ['gateway', 'amount', 'code', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function confirmation()
    {
        return $this->hasOne(DepositConfirmation::class);
    }
}
