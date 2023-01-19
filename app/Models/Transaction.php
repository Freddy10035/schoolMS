<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'number of transactions',
    ];
    

    // //These transactions belong to one student
    // public function student(){
    //     return $this->belongsTo(Student::class, 'student_id');
    // }
}