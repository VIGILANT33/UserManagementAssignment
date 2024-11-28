<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /** @use HasFactory<\Database\Factories\UserProfileFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'pincode'
    ];
    public function user()
    {
        // Defining  the one-one relationship between Users and UserProfiles tables
        return $this->belongsTo(User::class, 'user_id');
    }
}
