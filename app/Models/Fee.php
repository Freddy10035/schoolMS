<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;


    protected $fillable = [
        'grade',
        'amount',
    ];


    // //These Fees belong to one student
    // public function student(){
    //     return $this->belongsTo(Student::class, 'student_id');
    // }
}


