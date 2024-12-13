<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'User_Login';

    protected $fillable = [
        'username',
        'password',
    ];

    public $timestamps = false;

    //Untuk validasi password
    public function validatePassword($password)
    {
        return Hash::check($password, $this->password);
    }

    //Untuk koneksi ke Model-model yang dibuat agar username dapat tersimpan saat menambahkan data
    public function Vendor_Rebate()
    {
        return $this->hasMany(Vendor_Rebate::class);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /*
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    /*
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    */
}
