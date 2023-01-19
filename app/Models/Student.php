<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
    ];

    // //This student is managed by one Staff
    // public function staff()
    // {
    //     return $this->belongsTo(Staff::class, 'staff_id');
    // }


    // //This contact belongs to one student
    // public function contact()
    // {
    //     return $this->hasOne(Contact::class, 'student_id');
    // }


    // //This student has done a lot of transactions
    // public function transaction()
    // {
    //     return $this->hasMany(Transaction::class, 'student_id');
    // }

    // //This contact belong to one student
    // public function fees()
    // {
    //     return $this->hasMany(Fees::class, 'student_id');
    // }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}

