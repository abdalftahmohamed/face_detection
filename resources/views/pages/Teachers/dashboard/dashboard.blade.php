<!DOCTYPE html>
<html lang="en">
@section('title')
    Teacher Dashboard
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

</head>

</head>

<body style="font-family: 'Cairo', sans-serif">

<div class="wrapper" style="font-family: 'Cairo', sans-serif">


    @include('layouts.main-header')

    @include('layouts.main-sidebar')

    <!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title" >
            <div class="row">
                <div class="col-sm-6" >
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif"> Welcome: {{auth()->user()->name}}</h4>
                </div><br><br>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>


        <!-- Orders Status widgets-->
        <div class="calendar-main mb-30">
            <?php
            $currentDate=\Carbon\Carbon::now()->format('Y-m-d');

            $check = \Illuminate\Support\Facades\DB::table('accs_hist')->where('accs_date','=',$currentDate)->count();

//            if ($check == 0)
//            {
//                echo "<span class='badge badge-danger'>InActive</span>";
//                echo "<br>";
                $url = 'http://127.0.0.1:5000/fr_page';
                echo "<a href='" . $url . "'>Attendance_Today</a>";

//            }
//            else{
//                echo "<span class='badge badge-success'>Active</span>";
//            }

            ?>
        </div>

        <div class="row">


            <div  style="height: 400px;" class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="tab nav-border" style="position: relative;">
                            <div class="d-block d-md-flex justify-content-between">

                                <div class="d-block w-100">
                                    <h5 style="font-family: 'Cairo', sans-serif" class="card-title">The Last Process Of The System</h5>
                                </div>
                                <div class="d-block d-md-flex nav-tabs-custom">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link active show" id="students-tab" data-toggle="tab"--}}
{{--                                               href="#students" role="tab" aria-controls="students"--}}
{{--                                               aria-selected="true">ٍStudents</a>--}}
{{--                                        </li>--}}
{{--                                        <a class="modal-effect btn btn-sm btn-success" href="{{ route('Attendance.index') }}"--}}
{{--                                           style="color:white"><i class="fas warning"></i>Attendance Today</a>--}}
                                        <li class="nav-item">

                                            <a class="nav-link active show" href="{{ route('Attendance.index') }}"
                                               style="color:white"><i class="fas warning"></i>Attendance Today</a>
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
                                                <th>first Name</th>
                                                <th>Last Name</th>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Year</th>
                                                <th>Attendance Today</th>
                                                <th>{{trans('Students_trans.Processes')}}</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($students as $student)
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{$student->studendss->first_name}}</td>
                                                    <td>{{$student->studendss->last_name}}</td>
                                                    <td>{{$student->studendss->Passport_ID_Student}}</td>
                                                    <td>{{$student->studendss->email}}</td>
                                                    <td>{{$student->studendss->phone}}</td>
                                                    <td>{{$student->studendss->year}}</td>
                                                    <td>
                                                        <?php
                                                        $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
//                            date('Y-m-d')
                                                        $check = \Illuminate\Support\Facades\DB::table('accs_hist')->where('accs_date','=',$currentDate)->where('accs_prsn',$student->studendss->id)->count();

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
                                                    </td>
                                                    <td>
                                                        <div class="dropdown show">
                                                            <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Show
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
{{--                                                                <a class="dropdown-item" href="{{route('courses',$student->id)}}"><i style="color:green" class="fa fa-edit"></i>Show Courses</a>--}}
                                                                <a class="dropdown-item" href="{{route('Attendance.edit',$student->studendss->id)}}"><i style="color:green" class="fa fa-edit"></i>Details of Attendant</a>
                                                            </div>
                                                        </div>
                                                    </td>

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
@stack('scripts')

</body>

</html>
