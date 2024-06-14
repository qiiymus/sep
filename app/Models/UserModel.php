<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Model
{
    use HasFactory, Notifiable;

    /*protected $table = "student";
    protected $primarykey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     
    protected $fillable = [
        'User_ID',
        'Password',
        'UserType',
        'Image',
        'Name',
        'Mykid_Num',
        'BirthCert_Num',
        'Birthdate',
        'Age',
        'Address',
        'class'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     
    protected $hidden = [
        'password',
        'remember_token',
    ];*/

    protected $table = 'student'; // Replace with your actual table name
    protected $fillable = [
        'Name',
        'Mykid_Num',
        'BirthCert_Num',
        'Birthdate',
        'Age',
        'Address',
        'class',
        'p_name',
        'mykad',
        'Phone_Num',
        'Email',
        'Relationship',
        'Occupation',
        'p_address'
    ];
}


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    /*protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    
}
