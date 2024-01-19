<?php
// In the Ticket model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'user_id', 'subject', 'message', 'file', 'priority'
    ];

    // Define the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
