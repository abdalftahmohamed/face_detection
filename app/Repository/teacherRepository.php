<?php

namespace App\Repository;
use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class teacherRepository implements TeacherRepositoryInterface{

    public function getAllTeachers(){
        $Teachers=Teacher::all();
        return view('pages.Teachers.Teachers', compact('Teachers'));
    }
    public function Getspecialization_gender(){
        $specializations = specialization::all();
        return view('pages.Teachers.create',compact('specializations'));
    }
    public function StoreTeachers($request){

        try {
//            return $request;
            $Teachers = new Teacher();
            $Teachers->first_name =  $request->first_name;
            $Teachers->last_name =  $request->last_name;
            $Teachers->phone = $request->phone;
            $Teachers->email = $request->email;
            $Teachers->password =Hash::make($request->password);
            $Teachers->Specialization_id = $request->Specialization_id;
            $Teachers->address = $request->address;
            $Teachers->save();
            session()->flash('Add', trans('notifi.add'));
            return redirect()->route('Teachers.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
    public function editTeachers($id)
    {
        $Teachers= Teacher::findOrFail($id);
        $specializations = specialization::all();
        return view('pages.Teachers.Edit',compact('Teachers','specializations'));
    }
    public function UpdateTeachers($request)
    {
        try {
            $Teachers = Teacher::findOrFail($request->id);
            $Teachers->first_name =  $request->first_name;
            $Teachers->last_name =  $request->last_name;
            $Teachers->phone = $request->phone;
            $Teachers->email = $request->email;
            $Teachers->password =Hash::make($request->password);
            $Teachers->Specialization_id = $request->Specialization_id;
            $Teachers->address = $request->address;
            $Teachers->save();
            session()->flash('Update', trans('notifi.update'));
            return redirect()->route('Teachers.index');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
    public function DeleteTeachers($request)
    {
        Teacher::findOrFail($request->id)->delete();
        session()->flash('delete', trans('notifi.delete'));
        return redirect()->route('Teachers.index');
    }
    public function sinup($request){
        $Teachers = new Teacher();
        $Teachers->first_name =  $request->first_name;
        $Teachers->last_name =  $request->last_name;
        $Teachers->phone = $request->phone;
        $Teachers->email = $request->email;
        $Teachers->password =Hash::make($request->password);
        $Teachers->Specialization_id = $request->Specialization_id;
        $Teachers->address = $request->address;
        $Teachers->message = $request->message;
        $Teachers->save();
        session()->flash('Add', trans('notifi.add'));
        return redirect()->route('Teachers.index');
    }
    public function attend(){
        $currentDate = Carbon::now()->format('Y-m-d');
        $id=auth()->user()->id;
//      mycursor.execute("SELECT COUNT(*) FROM accs_hist WHERE CONCAT(accs_date, accs_prsn) = CONCAT(curdate(), '" + pnbr + "')")
        $check = DB::table('accs_hist')->where("CONCAT(accs_date,accs_prsn) = CONCAT($currentDate,$id)");


        if ($check)
        {
            $j=trans('messages.Active');
            return "<span class='badge badge-success' >$j</span>";
        }
        else{
            $j=__('messages.InActive');
            return "<span class='badge badge-danger'>$j</span>";
        }
    }


}
