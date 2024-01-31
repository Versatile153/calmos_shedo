<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'country',
       'referral_link',
       'referred_by',
        'password',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

// app/Models/User.php

public function transactions()
{
    return $this->hasMany(Transaction::class);
}

public function invests()
{
    return $this->hasMany(Invest::class);
}

public function tickets()
{
    return $this->hasMany(Ticket::class);
}



// User.php

public function referredUsers()
{
    return $this->hasMany(User::class, 'referred_by', 'referral_link');
}


public function withdrawals()
{
    return $this->hasMany(Withdraw::class);
}

}
