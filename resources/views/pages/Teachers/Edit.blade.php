@extends('layouts.master')
@section('css')

@section('title')
    {{ trans('Teacher_trans.Edit_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Teacher_trans.Edit_Teacher') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
@include('sessions')

                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Teachers.update','test')}}" method="post">
                             {{method_field('patch')}}
                             @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">first name</label>
                                        <input type="text" name="first_name" value="{{$Teachers->first_name}}" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{$Teachers->id}}">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Last name</label>
                                        <input type="text" name="last_name" value="{{$Teachers->last_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">phone</label>
                                        <input type="text" name="phone" value="{{$Teachers->phone}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Email</label>
                                        <input type="email" name="email" value="{{$Teachers->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">password</label>
                                        <input type="password" name="password" value="{{$Teachers->password}}" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <select class="custom-select my-1 mr-sm-2" name="Specialization_id">
                                    <option value="{{$Teachers->specialization_id}}">{{$Teachers->specializations->name}}</option>
                                    @foreach($specializations as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                    @endforeach
                                </select>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">phone</label>
                                        <input type="text" name="address" value="{{$Teachers->address}}" class="form-control">
                                    </div>
                                </div>



                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Parent_trans.Next')}}</button>
                    </form>
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
