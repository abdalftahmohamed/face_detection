@extends('layouts.master')
@section('css')

    @section('title')
        {{trans('main_trans.list_students')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')

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
{{--                                <a href="{{route('Students.create')}}" class="btn btn-success btn-sm" role="button"--}}
{{--                                   aria-pressed="true">{{trans('main_trans.add_student')}}</a><br><br>--}}

                                <a class="modal-effect btn btn-sm btn-success" href="{{ url('export_excel') }}"
                                   style="color:white"><i class="fas fa-file-download"></i>export_excel</a>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Dates</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attends as $x)
                                            <tr>
                                                <td>{{ $loop->index+1}}</td>
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
