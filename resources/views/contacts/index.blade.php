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

                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>{{trans('Students_trans.Processes')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $i)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$i->name}}</td>
                                                <td>{{$i->email}}</td>
                                                <td>{{$i->phone}}</td>
                                                <td>{{$i->message}}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
{{--                                                            <form action="{{route('contacts.destroy',$i->id)}}" method="post">--}}
{{--                                                                @csrf--}}
{{--                                                                @method('DELETE')--}}
{{--                                                            </form>--}}
{{--                                                            <a class="dropdown-item" href="{{route('contacts.destroy',$i->id)}}"><i style="color:red" class="fa fa-edit"></i>Delete</a>--}}
                                                            <a class="dropdown-item" data-target="#Delete_Student{{ $i->id }}" data-toggle="modal" href="#Delete_Student{{ $i->id }}"><i style="color: red" class="fa fa-trash"></i>Delete</a>
{{--                                                            <a class="dropdown-item" href="{{route('Attendance.edit',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>Details of Attendant</a>--}}

                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @include('contacts.Delete')
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
