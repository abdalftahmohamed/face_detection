@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('main_trans.add_student')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('main_trans.add_student')}}
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

                    <form method="post"  action="{{ route('Students.store') }}" autocomplete="off" enctype="multipart/form-data">
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
                                <input type="text"  name="phone" class="form-control">
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
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col">--}}
{{--                                <label for="inputCity">Specialization</label>--}}
{{--                                <select class="custom-select my-1 mr-sm-2" name="specialization_id">--}}
{{--                                    <option selected disabled>Select</option>--}}
{{--                                    @foreach($specializations as $specialization)--}}
{{--                                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                @error('Specialization_id')--}}
{{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Courses</label>
                            <select multiple class="form-control" name="specialization_id[]" style="overflow: auto" id="exampleFormControlSelect2">
                                @foreach($specializations as $specialization)
                                    <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col">--}}
{{--                                <label for="inputCity">Teacher</label>--}}
{{--                                <select class="custom-select my-1 mr-sm-2" name="teacher_id">--}}
{{--                                    <option selected disabled>Select</option>--}}
{{--                                    @foreach($teachers as $teacher)--}}
{{--                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                        </div>--}}

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="academic_year">Year:<span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="year">
                                    <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                    @php
                                        $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +2 ;$year++)
                                        <option value="{{ $year}}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ID:</label>
                                <input class="form-control" type="text"  name="Passport_ID_Student" data-date-format="yyyy">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Message</label>
                                <input class="form-control" type="text"  name="message" >
                            </div>
                        </div>

                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('Students_trans.submit')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
@endsection
