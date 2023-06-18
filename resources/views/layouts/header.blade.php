
<!-- Page Preloder -->
<div id="preloder" >
    <div class="loader">
        <div>
            <span class="bigletter letters-1">V</span>
            <span class="letters letters-1">V</span>
        </div>
        <div>
            <span class="bigletter letters-2">I</span>
            <span class="letters letters-2">I</span>
        </div>
        <div>
            <span class="bigletter letters-3">V</span>
            <span class="letters letters-3">V</span>
        </div>
        <div>
            <span class="bigletter letters-4">I</span>
            <span class="letters letters-4">I</span>
        </div>
        <div>
            <span class="bigletter letters-5">D</span>
            <span class="letters letters-5">D</span>
        </div>

        <!-- <span class="letters letters-1">V</span>
        <span class="letters letters-2">I</span>
        <span class="letters letters-3">V</span>
        <span class="letters letters-4">D</span>
        <span class="letters letters-5">A</span> -->
    </div>
</div>
<!-- Header Section Begin -->
<header class="header" id="myHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <div class="black-logo" id="black-logo">
                        <a href="{{route('selection')}}" >
                            <img src="/img/logo/last black.png" alt="logo-vivda">
                        </a>
                    </div>

                    <div class="white-logo hide" id="white-logo" >
                        <a href="{{route('selection')}}" >
                            <img src="/img/logo/VIVID-white.png" alt="logo-vivda">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="header__menu mobile-menu" >
                    <!-- Nav Toggler Btn -->
                    <a href="{{route('selection')}}">
                        <div class="menuheader projects menu__projects" id="littlebtn">
                            <span class="button-projects__line"></span>
                            <span class="button-projects__line"></span>
                            <span class="button-projects__line"></span>
                        </div>
                    </a>

                    <ul id="header-contant">
                        <div class="menuheader projects menu__projects">
                            <button class="button-projects projects__button-projects">
                                <span class="button-projects__line"></span>
                                <span class="button-projects__line"></span>
                                <span class="button-projects__line"></span>
                            </button>
                            <div class="projects__dropdown">
                                <a href="{{route('login.show','student')}}" class="projects__subitem">Student </a>
                                <a href="{{route('login.show','teacher')}}" class="projects__subitem">Teacher</a>
                                <a href="{{route('login.show','admin')}}" class="projects__subitem">Admin</a>
                            </div>
                        </div>

                        <li class="menuheader"><a href="#">Partners</a></li>
                        <li class="menuheader"><a href="{{route('contacts.about')}}">About</a></li>

                        <li class="menuheader"><a href="{{route('contacts.index')}}">Contact</a></li>

                        <li class="searchbtn">
                            <button class="Search_button">
                                <a href="#"><i class="fa fa-search"></i></a>
                                <form class="search__form" method="GET" action="/search">
                                    <input type="text" class="search__input" name="request" placeholder="Search">
                                </form>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- <div class="canvas__open"> <i class="fa fa-bars"></i></div>  -->
    </div>
</header>
<!-- Header Section End -->
