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
                                Welcome : {{\Illuminate\Support\Facades\Auth::user()->first_name}}
                                <br>
                                <a class="modal-effect btn btn-sm btn-success" href="{{ url('export_excel') }}"
                                   style="color:white;float: left"><i class="fas fa-file-download"></i>export_excel</a>
                                <br>

                                <div class="table-responsive">

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">

                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Dates</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attends_today as $x)
                                            <tr>
{{--                                                <td>{{ $loop->index+1 }}</td>--}}
                                                <td>{{$x->students->id}}</td>
                                                <td>{{$x->students->first_name.$x->students->last_name}}</td>
                                                <td>{{$x->students->email}}</td>
                                                <td>{{$x->students->phone}}</td>
                                                <td>{{$x->accs_added}}</td>
                                            </tr>
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
