<?php
// app/Models/Deposit.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = ['gateway', 'amount', 'code', 'status','sum'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function confirmation()
    {
        return $this->hasOne(DepositConfirmation::class);
    }


    public function getSumAttribute()
    {
        return $this->where('user_id', $this->user_id)->where('status', 'approved')->sum('amount');
    }
}
