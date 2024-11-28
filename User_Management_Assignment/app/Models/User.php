<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    protected $keyType = 'string';
    public $incrementing = false;

    //Fillables defined to fill mass data of user if needed to only mentioned fields
    protected $fillable = [
        'user_id',
        'password',
        'name',
        'email',
        'mobile_no',
        'status',
    ];

    protected $hidden = [
        'password',
        // 'remember_token',// Only for Remember me Feature
    ];

    public function userProfile()
    {
        // Defining  the one-one relationship between Users and UserProfiles tables
        return $this->hasOne(UserProfile::class, 'user_id', 'user_id');
    }
}
