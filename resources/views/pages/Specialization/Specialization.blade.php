@extends('layouts.master')
@section('css')

    @section('title')
        Courses
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        Courses
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


                                <a href="{{route('Specialization.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">Add Course</a><br><br>
                                <div class="table-responsive">
                                    @include('sessions')

                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Notes</th>
                                            <th>process</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Specializations as $Specialization)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$Specialization->name}}</td>
                                                <td>{{$Specialization->notes}}</td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Select
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('Specialization.edit',$Specialization->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;Edit</a>
                                                            <a class="dropdown-item" href="#"><i style="color: #0000cc" class="fa fa-edit"></i>&nbsp;delete&nbsp;</a>
                                                        </div>
                                                    </div>
                                                </td>

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



@endsection
