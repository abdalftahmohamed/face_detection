<?php

namespace App\Http\Controllers\Students;

use App\Exports\AttendExport;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Student_has_Specialization;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{



    public function index()
    {
        $currentDate=\Carbon\Carbon::now()->format('Y-m-d');
        $attends_today = Attendance::where('accs_date','=',$currentDate)->get();
        return view('pages.Students.attend_today',compact('attends_today'));
    }

    public function store(Request $request)
    {
        try {

            foreach ($request->attendences as $studentid => $attendence) {

                if( $attendence == 'presence' ) {
                    $attendence_status = true;
                } else if( $attendence == 'absent' ){
                    $attendence_status = false;
                }

                Attendance::create([
                    'student_id'=> $studentid,
                    'grade_id'=> $request->grade_id,
                    'classroom_id'=> $request->classroom_id,
                    'section_id'=> $request->section_id,
                    'teacher_id'=> $request->teacher_id,
                    'attendence_date'=> date('Y-m-d'),
                    'attendence_status'=> $attendence_status
                ]);

            }

            toastr()->success(trans('messages.success'));
            return redirect()->back();

        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $students = Student::with('attendance')->where('accs_prsn',$id)->get();
        $Processers=Teacher::all();
        return view('pages.Attendance.index',compact('students','Processers'));
    }


    public function edit($id)
    {
        $Students = Student::findorfail($id);
        $attends = Attendance::where('accs_prsn',$id)->get();
        return view('pages.Students.attend',compact('attends','Students'));
    }


    public function update(Request $request)
    {

    }


    public function destroy(Request $request)
    {

    }

    public function courses(Request $request,$id)
    {
//        dd('hello: '.$id);
//        $courses = Student::with('specializations')->where('student_id',$id)->get();
        $courses = Student_has_Specialization::where('student_id',$id)->get();
        return view('pages.Students.courses',compact('courses'));
    }
    public function export()
    {
        return Excel::download(new AttendExport, 'students.xlsx');
    }
}
