<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // //This contact belong to one student
    // public function student()
    // {
    //     return $this->hasOne(Student::class, 'student_id');
    // }
}
