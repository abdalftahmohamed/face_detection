@extends('layouts.master')
@section('css')

@section('title')
    Sittings
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    Sittings
@stop
<!-- breadcrumb -->
@endsection
@section('content')


  @include('sessions')


<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{route('settings.update','test')}}">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-6 border-right-2 border-right-blue-400">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Name<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="school_name" value="{{ $setting['school_name'] }}" required type="text" class="form-control" placeholder="Name of School">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="current_session" class="col-lg-2 col-form-label font-weight-semibold">The Current Year<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <select data-placeholder="Choose..." required name="current_session" id="current_session" class="select-search form-control">
                                        <option value=""></option>
                                        @for($y=date('Y', strtotime('- 3 years')); $y<=date('Y', strtotime('+ 1 years')); $y++)
                                            <option {{ ($setting['current_session'] == (($y-=1).'-'.($y+=1))) ? 'selected' : '' }}>{{ ($y-=1).'-'.($y+=1) }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Name Abbreviation</label>
                                <div class="col-lg-9">
                                    <input name="school_title" value="{{ $setting['school_title'] }}" type="text" class="form-control" placeholder="School Acronym">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Phone</label>
                                <div class="col-lg-9">
                                    <input name="phone" value="{{ $setting['phone'] }}" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Email</label>
                                <div class="col-lg-9">
                                    <input name="school_email" value="{{ $setting['school_email'] }}" type="email" class="form-control" placeholder="School Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Address<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input required name="address" value="{{ $setting['address'] }}" type="text" class="form-control" placeholder="School Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Date Of The First Term</label>
                                <div class="col-lg-9">
                                    <input name="end_first_term" value="{{ $setting['end_first_term'] }}" type="text" class="form-control date-pick" placeholder="Date Term Ends">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Date Of The First Term</label>
                                <div class="col-lg-9">
                                    <input name="end_second_term" value="{{ $setting['end_second_term'] }}" type="text" class="form-control date-pick" placeholder="Date Term Ends">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label font-weight-semibold">Logo</label>
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <img style="width: 100px" height="100px" src="{{ URL::asset('attachments/logo/'.$setting['logo']) }}" alt="loading...">
                                    </div>
                                    <input name="logo" accept="image/*" type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Submit</button>
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
@endsection
