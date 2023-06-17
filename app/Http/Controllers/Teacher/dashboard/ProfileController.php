<?php

namespace App\Http\Controllers\Teacher\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $information = Teacher::findorFail(auth()->user()->id);
        return view('pages.Teachers.dashboard.profile', compact('information'));
    }

    public function update(Request $request, $id)
    {

        $information = Teacher::findorFail($id);

        if (!empty($request->password)) {
            $information->first_name = $request->first_name;
            $information->last_name = $request->last_name;
            $information->phone = $request->phone;
            $information->password = Hash::make($request->password);
            $information->save();
        } else {
            $information->first_name = $request->first_name;
            $information->last_name = $request->last_name;
            $information->phone = $request->phone;
            $information->save();
        }
        toastr()->success(trans('messages.Update'));
        return redirect()->back();


    }
}
