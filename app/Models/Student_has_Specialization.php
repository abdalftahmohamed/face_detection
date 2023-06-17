<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_has_Specialization extends Model
{
    protected $guarded=[''];
    protected $table='student_has_specializations';
    use HasFactory;

    public function courses(){
        return $this->belongsTo('App\Models\Specialization', 'specialization_id');
    }
    public function studendss(){
        return $this->belongsTo('App\Models\Student', 'student_id');
    }
}
