<?php

namespace App\Exports;

use App\Models\Attendance;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class AttendExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $currentDate=\Carbon\Carbon::now()->format('Y-m-d');
//        $attends_today = Attendance::where('accs_date','=',$currentDate)->get();
//        foreach ($attends_today as $value)
//            dd($value);
//        return Student::where('id',$value->id)->get($value->students->phone);
//        $attendanceData = Attendance::with('students') // استبدل "relationName" بالاسم الصحيح للعلاقة في نموذج Attendance
//        ->select('email', 'phone')->get();
        return Attendance::where('accs_date','=',$currentDate)->select('accs_prsn','accs_date')->get();
//        return $attendanceData;
    }


}
