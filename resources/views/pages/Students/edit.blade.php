@extends('layouts.master')
@section('css')

    @section('title')
        {{trans('main_trans.Student_Edit')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('main_trans.Student_Edit')}}
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
                    <form action="{{route('Students.update','test')}}" method="post" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="title">first name</label>
                                <input type="text" value="{{$Students->first_name}}" name="first_name" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" value="{{$Students->id}}" name="id" class="form-control">

                        <div class="form-row">
                            <div class="col">
                                <label for="title">Last name</label>
                                <input type="text" value="{{$Students->last_name}}" name="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <label for="title">phone</label>
                                <input type="text" value="{{$Students->phone}}" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="title">Email</label>
                                <input type="email" value="{{$Students->email}}" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="title">password</label>
                                <input value="{{$Students->password}}" type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <br>
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col">--}}
{{--                                <label for="inputCity">Specialization</label>--}}
{{--                                <select class="custom-select my-1 mr-sm-2" name="specialization_id">--}}
{{--                                    <option selected disabled>Select</option>--}}
{{--                                    @foreach($specializations as $specialization)--}}
{{--                                        <option value="{{ $specialization->id }}" {{ $specialization->id == $Students->specialization_id ? 'selected' : ""}}>{{$specialization->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                @error('Specialization_id')--}}
{{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                        </div>--}}

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
                                <label for="academic_year">Year Academy <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="year">
                                    <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                    @php
                                        $current_year = date("Y");
                                    @endphp
                                    @for($year=$current_year; $year<=$current_year +2 ;$year++)
                                        <option value="{{ $year}}" {{$year == $Students->academic_year ? 'selected' : ' '}}>{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                         </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ID:</label>
                                <input class="form-control" value="{{$Students->Passport_ID_Student}}" type="text"  name="Passport_ID_Student" data-date-format="yyyy">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col">
                                <label for="title">message</label>
                                <input type="text" value="{{$Students->message}}" name="message" class="form-control">
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
    @toastr_js
    @toastr_render
    <script>
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "{{ URL::to('Get_classrooms') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Classroom_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Classroom_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');
                                $('select[name="Classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            $('select[name="Classroom_id"]').on('change', function () {
                var Classroom_id = $(this).val();
                if (Classroom_id) {
                    $.ajax({
                        url: "{{ URL::to('Get_Sections') }}/" + Classroom_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="section_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
