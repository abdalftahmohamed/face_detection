<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Specialization extends Model
{
    use HasFactory;
    protected $fillable=['name'];


    public function students()
    {
        return $this->belongsToMany('App\Models\Student','student_has_specializations');
    }
}
