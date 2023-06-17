@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('Students_trans.Student_details')}}
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

                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>courses</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($courses as $x)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$x->courses->name}}</td>
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
