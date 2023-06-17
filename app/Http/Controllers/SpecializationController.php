<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SpecializationController extends Controller
{

    public function index()
    {
        $Specializations=Specialization::all();
        return view('pages.Specialization.Specialization',compact('Specializations'));
    }

    public function create()
    {
        return view('pages.Specialization.create');
    }


    public function store(Request $request)
    {
        try {
//            return $request;
            $Specialization = new Specialization();
            $Specialization->name =  $request->name;
            $Specialization->save();
            session()->flash('Add', trans('notifi.add'));
            return redirect()->route('Specialization.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Specialization= Specialization::findOrFail($id);
        return view('pages.Specialization.edit',compact('Specialization'));
    }

    public function update(Request $request, $id)
    {
        try {
            $Teachers = Specialization::findOrFail($request->id);
            $Teachers->name =  $request->name;
            $Teachers->save();
            session()->flash('Update', trans('notifi.update'));
            return redirect()->route('Specialization.index');
        }
        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {

    }
}
