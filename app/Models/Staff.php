<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends \Illuminate\Foundation\Auth\User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
