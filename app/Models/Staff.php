<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department',
        'email',
        'password',
    ];


    //Relationship to student
    public function student(){
        return $this->hasMany(Student::class, 'staff_students');

    }
}
