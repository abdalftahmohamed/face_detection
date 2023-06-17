<!DOCTYPE html>
<html lang="en">
@section('title')
    {{trans('main_trans.Main_title')}}
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
    @livewireStyles
</head>

<body style="font-family: 'Cairo', sans-serif">

<div class="wrapper" style="font-family: 'Cairo', sans-serif">

    <!--=================================
preloader -->

    <div id="pre-loader">
        <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
    </div>

    <!--=================================
preloader -->

    @include('layouts.main-header')

    @include('layouts.main-sidebar')

    <!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title" >
            <div class="row">
                <div class="col-sm-6" >
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">Dashboard Admin</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <!-- widgets -->
        <div class="row" >
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-success">
                                        <i class="fas fa-user-graduate highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">Students</p>
                                <h4>{{\App\Models\Student::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Students.index')}}" target="_blank"><span class="text-danger">Show Details</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">Teachers</p>
                                <h4>{{\App\Models\Teacher::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Teachers.index')}}" target="_blank"><span class="text-danger">Show Details</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fas fa-chalkboard highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">Courses</p>
                                <h4>{{\App\Models\Specialization::count()}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('Specialization.index')}}" target="_blank"><span class="text-danger">Show Details</span></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Orders Status widgets-->


        <div class="row">

            <div  style="height: 400px;" class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="tab nav-border" style="position: relative;">
                            <div class="d-block d-md-flex justify-content-between">
                                <div class="d-block w-100">
                                    <h5 style="font-family: 'Cairo', sans-serif" class="card-title">##</h5>
                                </div>
                                <div class="d-block d-md-flex nav-tabs-custom">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active show" id="students-tab" data-toggle="tab"
                                               href="#students" role="tab" aria-controls="students"
                                               aria-selected="true">Student</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="teachers-tab" data-toggle="tab" href="#teachers"
                                               role="tab" aria-controls="teachers" aria-selected="false">Teacher
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent">

                                {{--students Table--}}
                                <div class="tab-pane fade active show" id="students" role="tabpanel" aria-labelledby="students-tab">
                                    <div class="table-responsive mt-15">
                                        <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                            <thead>
                                            <tr  class="table-info text-danger">
                                                <th>#</th>
                                                <th>first name</th>
                                                <th>last name</th>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>year</th>
{{--                                                <th>Specialization</th>--}}
                                                <th>Attendance Today</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(\App\Models\Student::latest()->take(5)->get() as $student)
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{$student->first_name}}</td>
                                                    <td>{{$student->last_name}}</td>
                                                    <td>{{$student->Passport_ID_Student}}</td>
                                                    <td>{{$student->email}}</td>
                                                    <td>{{$student->phone}}</td>
                                                    <td>{{$student->year}}</td>
{{--                                                    <td>{{$student->specializations->name}}</td>--}}
                                                    <td>
                                                        <?php
                                                        $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
//                            date('Y-m-d')
                                                        $check = \Illuminate\Support\Facades\DB::table('accs_hist')->where('accs_date','=',$currentDate)->where('accs_prsn','=',$student->id)->count();

                                                        if ($check == 0)
                                                        {
//                                        echo "InActive";
                                                            echo "<span class='badge badge-danger'>InActive</span>";
                                                        }
                                                        else{
//                                        echo "Active";
                                                            echo "<span class='badge badge-success'>Active</span>";
                                                        }

                                                        ?>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{--teachers Table--}}
                                <div class="tab-pane fade" id="teachers" role="tabpanel" aria-labelledby="teachers-tab">
                                    <div class="table-responsive mt-15">
                                        <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                            <thead>
                                            <tr  class="table-info text-danger">
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>{{trans('Teacher_trans.specialization')}}</th>
                                                <th>phone</th>
                                            </tr>
                                            </thead>

                                            @foreach($Teachers as $Teacher)
                                                <tbody>
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{$Teacher->first_name}}</td>
                                                    <td>{{$Teacher->last_name}}</td>
                                                    <td>{{$Teacher->email}}</td>
                                                    <td>{{$Teacher->address}}</td>
                                                    <td>{{$Teacher->specializations->name}}</td>
                                                    <td>{{$Teacher->phone}}</td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <livewire:calendar />--}}

        <!--=================================
wrapper -->

        <!--=================================
footer -->

        {{--        @include('layouts.footer')--}}
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')
{{--@livewireScripts--}}
@stack('scripts')

</body>

</html>
