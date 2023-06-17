<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Translatable\HasTranslations;

class Student extends Authenticatable
{
//    use SoftDeletes;
    protected $guarded =[];

    // علاقة بين الطلاب والصور لجلب اسم الصور  في جدول الطلاب
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }

    public function Teacher(){
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }

    public function specializations()
    {
        return $this->belongsToMany('App\Models\Specialization','student_has_specializations');
    }
    // علاقة بين جدول الطلاب وجدول الحضور والغياب
    public function attendance()
    {
        return $this->hasMany('App\Models\Attendance', 'student_id');
    }
    public function courses()
    {
        return $this->hasMany('App\Models\Student_has_Specialization', 'student_id');
    }

}
