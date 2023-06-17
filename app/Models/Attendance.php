<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table='accs_hist';
    protected $guarded=[''];

    public function students(){
        return $this->belongsTo('App\Models\Student', 'accs_prsn');
    }


}
