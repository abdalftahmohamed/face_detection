@extends('layouts.master')
@section('css')
@section('title')
    {{ trans('Teacher_trans.Add_Teacher') }}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Teacher_trans.Add_Teacher') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Teachers.store')}}" method="post">
                             @csrf
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">first name</label>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">Last name</label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">phone</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputCity">Course</label>
                                    <select class="custom-select my-1 mr-sm-2" name="Specialization_id">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($specializations as $specialization)
                                            <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Specialization_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{trans('Teacher_trans.Address')}}</label>
                                <textarea class="form-control" name="address"
                                          id="exampleFormControlTextarea1" rows="4"></textarea>
                                @error('Address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Submit</button>
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
