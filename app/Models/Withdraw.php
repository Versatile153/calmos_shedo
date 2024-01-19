<?php

// app/Models/Withdraw.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = ['gateway', 'amount', 'status','user_id','wallet'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Add relationships or additional methods as needed
}
