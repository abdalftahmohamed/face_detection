@extends('layouts.master')
@section('css')

    @section('title')
        {{trans('main_trans.list_students')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('main_trans.list_students')}}
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                @include('sessions')

                                <a href="{{route('Students.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>first name</th>
                                            <th>last name</th>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>year</th>
                                            <th>Attendance Today</th>
                                            <th>{{trans('Students_trans.Processes')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($students as $student)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$student->first_name}}</td>
                                                <td>{{$student->last_name}}</td>
                                                <td>{{$student->Passport_ID_Student}}</td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->phone}}</td>
                                                <td>{{$student->year}}</td>
                                                <td>
                                                        <?php
                                                        $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
//                            date('Y-m-d')
                                                        $check = \Illuminate\Support\Facades\DB::table('accs_hist')->where('accs_date','=',$currentDate)->where('accs_prsn','=',$student->id)->count();

                                                        if ($check == 0)
                                                        {
//                                        echo "InActive";
                                                            echo "<span class='badge badge-danger'>InActive</span>";
                                                        }
                                                        else{
//                                        echo "Active";
                                                            echo "<span class='badge badge-success'>Active</span>";
                                                        }

                                                        ?>
                                                </td>

<td>
    <div class="dropdown show">
        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            العمليات
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{route('Students.edit',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>Edit</a>
            <a class="dropdown-item" href="{{route('Attendance.edit',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>Details of Attendant</a>
            <a class="dropdown-item" href="{{route('courses',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>Show Courses</a>
            <a class="dropdown-item" data-target="#Delete_Student{{ $student->id }}" data-toggle="modal" href="#Delete_Student{{ $student->id }}"><i style="color: red" class="fa fa-trash"></i>Delete</a>

        </div>
    </div>
</td>

                                            </tr>
                                        @include('pages.Students.Delete')
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
