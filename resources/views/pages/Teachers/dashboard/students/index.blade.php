@extends('layouts.master')
@section('css')

    @section('title')
        قائمة الحضور والغياب للطلاب
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        قائمة الحضور والغياب للطلاب
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ session('status') }}</li>
            </ul>
        </div>
    @endif

    <h5 style="font-family: 'Cairo', sans-serif;color: red"> تاريخ اليوم : {{ date('Y-m-d') }}</h5>
    <form method="post" action="{{ route('attendance') }}" autocomplete="off">

        @csrf

        <table style="text-align: center" id="datatable" class="table center-aligned-table table-hover mb-0">
            <thead>
            <tr  class="table-info text-danger">
                <th>#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>phone</th>
                <th>year</th>
{{--                <th>specialization</th>--}}
                <th>ID_Student</th>
                <th>Attendance Today</th>
            </tr>
            </thead>
            <tbody>
            @forelse(\App\Models\Student::latest()->take(5)->get() as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$student->first_name .' '. $student->last_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->Passport_ID_Student}}</td>
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
                    @empty
                        <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                </tr>
            @endforelse
            </tbody>
        </table>

{{--        <P>--}}
{{--            <button class="btn btn-success" type="submit">{{ trans('Students_trans.submit') }}</button>--}}
{{--        </P>--}}
    </form><br>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
