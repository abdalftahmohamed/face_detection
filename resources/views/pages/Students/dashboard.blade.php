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
                    <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">Welcome :- {{\Illuminate\Support\Facades\Auth::user()->first_name.' '.\Illuminate\Support\Facades\Auth::user()->last_name}} </h4>
                </div><br><br>
                <div class="col-sm-6">
                    @if($gg == null)
                        <form action='{{url('http://127.0.0.1:5000/addprsn')}}' method='post'>
                            @csrf
                            <?php
                                $ids = \Illuminate\Support\Facades\DB::table('prs_mstr')->where('prs_nbr', auth()->user()->id)->count();
                                if($ids != 0){
                                    $user = \App\Models\Student::findOrFail(\Illuminate\Support\Facades\Auth::user()->id);
                                    $user->image = \Illuminate\Support\Facades\Auth::user()->id;
                                    $user->save();

                                }else
//                                    return "not found";

                                ?>
                            <input type='hidden' name='id' value="{{auth()->user()->id}}">
                            <button type='submit' name="submit" value="submit">Upload Image</button>
                        </form>

                    @endif

                    <br>




                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <div class="calendar-main mb-30">
            <?php
            $currentDate=\Carbon\Carbon::now()->format('Y-m-d');

            $check = \Illuminate\Support\Facades\DB::table('accs_hist')->where('accs_date','=',$currentDate)->where('accs_prsn','=',auth()->user()->id)->count();

            if ($check == 0)
            {
                echo "<span class='badge badge-danger'>InActive</span>";

            }
            else{
                echo "<span class='badge badge-success'>Active</span>";
            }

            ?>
{{--            <livewire:calendar-student />--}}
        </div>

    </div>
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
