<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use App\Repository\TeacherRepositoryInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Teachercontroller extends Controller
{

    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {
        return $this->Teacher->getAllTeachers();
    }

    public function create()
    {

        return $this->Teacher->Getspecialization_gender();
    }


    public function store(StoreTeachers $request)
    {
        return $this->Teacher->StoreTeachers($request);
    }

    public function edit($id)
    {

        return $this->Teacher->editTeachers($id);
    }


    public function update(Request $request)
    {

        return $this->Teacher->UpdateTeachers($request);
    }

    public function destroy(Request $request)
    {
        return $this->Teacher->DeleteTeachers($request);
    }


    public function sinup(StoreTeachers $request){
        return $this->Teacher->sinup($request);

    }
    public function attend(){
        return $this->Teacher->attend();
    }


}
