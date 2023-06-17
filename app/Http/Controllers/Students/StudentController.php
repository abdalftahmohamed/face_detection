<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentsRequest;
use App\Models\Specialization;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
//        $currentDate=\Carbon\Carbon::now()->format('Y/m/d H:i:s');
//        dd($currentDate);
        return view('pages.Students.index', compact('students'));
    }


    public function create()
    {
        $specializations = specialization::all();
        $teachers = Teacher::all();
        return view('pages.Students.add', compact('specializations','teachers'));

    }

    public function store(StoreStudentsRequest $request)
    {

        try {
            $students = new Student();
            $students->first_name = $request->first_name;
            $students->last_name = $request->last_name;
            $students->email = $request->email;
            $students->phone = $request->phone;
            $students->password = Hash::make($request->password);
            $students->year = $request->year;
            $students->message = $request->message;
            $students->Passport_ID_Student = $request->Passport_ID_Student;
            $students->save();
            $students->specializations()->attach($request->specialization_id);
//

            session()->flash('Add', trans('notifi.add'));
            return redirect()->route('Students.index');
        } catch (\Exception $e) {
//            وهنا يعمل رجوع عن الحفظ
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $Students = Student::findorfail($id);
        $specializations = Specialization::all();
        return view('pages.Students.edit',compact('Students','specializations'));
    }


    public function update(StoreStudentsRequest $request)
    {
        try
        {
            $students=Student::findorfail($request->id);
            $students->first_name = $request->first_name;
            $students->last_name = $request->last_name;
            $students->email = $request->email;
            $students->phone = $request->phone;
            $students->password = Hash::make($request->password);
            $students->year = $request->year;
            $students->message = $request->message;
            $students->Passport_ID_Student = $request->Passport_ID_Student;
            $students->save();

            session()->flash('Update', trans('notifi.update'));
            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {
        try {
            Student::destroy($request->id);
            session()->flash('delete', trans('notifi.delete'));
            return redirect()->route('Students.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }    }

    public function singnup_student(StoreStudentsRequest $request){
        try {
//            return $request;
            $students = new Student();
            $students->first_name = $request->first_name;
            $students->last_name = $request->last_name;
            $students->email = $request->email;
            $students->phone = $request->phone;
            $students->password = Hash::make($request->password);
            $students->year = $request->year;
            $students->message = $request->message;
            $students->Passport_ID_Student = $request->Passport_ID_Student;
            $students->save();
            $students->specializations()->attach($request->specialization_id);
//هنا النهاية للكود بتاعي
            toastr()->success(trans('messages.success'));
            return redirect()->route('Students.index');
        } catch (\Exception $e) {
//            وهنا يعمل رجوع عن الحفظ
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function attends($id){
        $Students = Student::findorfail($id);
    }

}
