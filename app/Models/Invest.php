<?php
// app\Models\Invest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'gateway', 'status'];

    // Eloquent relationship: Each investment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
