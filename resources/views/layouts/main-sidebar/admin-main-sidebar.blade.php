<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">System of Student attendance </span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>





        <!-- sections-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                        class="right-nav-text">Courses</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('Specialization.index')}}">Show Courses</a></li>
            </ul>
        </li>


        <!-- Teachers-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#teachers-menu"><i class="fas fa-user-graduate"></i>{{trans('main_trans.Teachers')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="teachers-menu" class="collapse">
                <li> <a href="{{route('Teachers.index')}}">Show All Teachers</a></li>
            </ul>
        </li>

        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i>{{trans('main_trans.students')}}<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                {{--                <li> <a href="{{route('Students.create')}}">Add New Student</a></li>--}}
                <li> <a href="{{route('Students.index')}}">Show All Students</a></li>
            </ul>
        </li>

        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Contacts-menu"><i class="fas fa-user-graduate"></i>Contacts<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
            <ul id="Contacts-menu" class="collapse">
                {{--                <li> <a href="{{route('Students.create')}}">Add New Student</a></li>--}}
                <li> <a href="{{route('contacts.create')}}">Contacts</a></li>
            </ul>
        </li>

        <!-- Settings-->
        <li>
{{--            {{route('settings.index')}}--}}
            <a href="{{route('settings.index')}}"><i class="fas fa-cogs"></i><span class="right-nav-text">{{trans('main_trans.Settings')}} </span></a>
        </li>



    </ul>
</div>
