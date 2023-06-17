<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ route('dashboard.Students') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>

        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i>Attendance<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                <li> <a href="{{route('Attendance.edit',\Illuminate\Support\Facades\Auth::user()->id)}}">Show All Attendance</a></li>
            </ul>
        </li>



        <!-- Settings-->
        <li>
{{--            <a href="{{route('profile-student.index')}}"><i class="fas fa-id-card-alt"></i><span--}}
                <a href="{{route('profile-student.index')}}"><i class="fas fa-id-card-alt"></i><span
                    class="right-nav-text">Profile</span></a>
        </li>

    </ul>
</div>
