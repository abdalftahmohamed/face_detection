   <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIVID</title>

    <!-- Google Font -->
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet"> -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"> <!--Aos Library-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--w3-animate-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

@include('layouts.header')
<!-- Hero Section Begin -->
<section class="hero" id="myhero"  data-color-sec="dark">
    <div class="hero__slider owl-carousel">

        <div class="hero__items set-bg" data-setbg="img/hero/hero-5.jpg">
            <div class="hero__text">
                <h2>Quality is not only our standard.</h2>
                <a href="" class="primary-btn">learn more</a>
                <a href="{{route('contacts.about')}}" class="more_btn" data-aos="zoom-in">Discover more</a>
                <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad" id="about-sec" data-color-sec="white">
    <div class="backgrnd_word">
        <span class="line" data-aos="fade-up" data-aos-delay="200"> ABOUT</span>
    </div>
    <div class="container">
        <div class="row">
            <div class="section-title forabout">
                <!-- <span data-aos="fade-right">who are we</span> -->
                <h2 data-aos="fade-up" data-aos-duration=".5s" data-aos-delay="400">
                    Smart Attendance System </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="about__para__text" data-aos="fade-right" data-aos-duration="1s" data-aos-delay="600">
                        <p>is a computerized system that is designed to streamline and automate the process of managing attendance and departure in various settings</p>
                        <p>Anisotropic elements that randomly sample. Quisque sit amet nisl ante. Fusce lacinia non
                            tellus id gravida. Cras neque dolor, volutpat et hendrerit et.</p>
                    </div>
                    <!-- <a href="./about.html" class="primary-btn normal-btn" data-aos="flip-left">Learn More</a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="about__para__text" data-aos="fade-up" data-aos-duration="1.5s" data-aos-delay="600">
                        <p>such as universities, schools, and workplaces. The system uses advanced technologies,  to accurately and efficiently record attendance data for each individual.

                        </p>
                        <p>The Smart Attendance System offers many benefits over traditional attendance management methods, such as paper-based sign-in sheets or manual data entry</p>
                    </div>

                </div>
            </div>
            <a href="{{route('contacts.about')}}" class="primary-btn normal-btn" data-aos="flip-left">Learn More</a>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Project Section Begin -->
<section class="project" id="project-sec" data-color-sec="dark">
    <!-- <div class="container"> -->
    <div class="row">
        <!-- <div class="project__slider owl-carousel"> -->
        <div class="col-lg-4 project__item">
            <div class="project__slider__item set-bg" data-setbg="img/project/1.jpg">
                <div class="project__slider__item__hover">
                    <h5>Students</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-4 project__item">
            <div class="project__slider__item set-bg" data-setbg="img/project/2.jpg">
                <div class="project__slider__item__hover">
                    <h5>Teachers</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-4 project__item">
            <div class="project__slider__item set-bg" data-setbg="img/project/3.jpg">
                <div class="project__slider__item__hover">
                    <h5>Admin</h5>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- </div> -->
</section>
<!-- Project Section End -->

<!-- Career Wana work with us-->
<section class="career" id="career-sec" data-color-sec="white">
    <div class="backgrnd_word">
        <span class="line" data-aos="fade-up">CAREER</span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title-career">
                    <h2 data-aos="fade-up" data-aos-duration=".5s" data-aos-delay="200">
                        Wanna work with us? </h2>
                </div>
                <div class="career__text">
                    <div class="career__para__text" data-aos="fade-up" data-aos-duration="1.5s" data-aos-delay="600">
                        <p>The primary goal of the system is to automate attendance-taking processes in educational and professional institutions, eliminating the need for manual data entry and reducing errors and inaccuracies.</p>
                    </div>
                </div>



                <a href="{{route('contacts.index')}}" class="primary-btn normal-btn" data-aos="flip-left">LET'S TALK</a>
            </div>
        </div>
    </div>
</section>
<!--Wana work with us End-->

@include('layouts.footer')

<!-- bigHeader-->
<section class="outerall"  data-color-sec="dark">
    <div class="bigHeader close" id="bigHeader">
        <div class="container contant">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bigheader__item__text w3-animate-bottom" >
                        <h5 data-aos="fade-right" data-aos-delay="200">General Inquiries:</h5>
                        <span data-aos="fade-up" data-aos-delay="400">info@vivida-eg.com</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bigheader__item__text w3-animate-bottom" animation-delay="2s" >
                        <h5>PR&Collaborations:</h5>
                        <span data-aos="fade-up" data-aos-delay="200">pr@vivida-eg.com</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="nav-links">
                        <li class="w3-animate-bottom">  <!--style="animation-delay:.5s;"-->
                            <a href="./pages/projects.html">Projects</a>
                        </li>
                        <li class="w3-animate-bottom"><a href="{{route('contacts.about')}}">About</a> </li>
                        <li class="w3-animate-bottom"><a href="#">Media</a></li>
                        <li class="w3-animate-bottom"><a href="./pages/blog.html">Blog</a>
                        <li class="w3-animate-bottom"><a href="./pages/careers.html">Careers</a></li>
                        <li class="w3-animate-bottom"><a href="{{route('contacts.index')}}">Contact</a></li>
                        <!-- <li class="w3-animate-bottom"><a href="#"><i class="fa fa-search"></i></a></li> -->

                        <li class="searchbtn_for_bigHeader w3-animate-bottom">
                            <!-- <button class="Search_button"> -->
                            <a><i class="fa fa-search"></i></a>
                            <form class="search__form_for_bigHeader" method="GET" action="/pages/search">
                                <input type="text" class="search__input_for_bigHeader" name="request" placeholder="Search">
                            </form>
                            <!-- </button> -->
                        </li>


                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="bigheader__item__text w3-animate-bottom" style="animation-duration: 1s;">
                        <h5>Careers:</h5>
                        <span data-aos="fade-up-right" data-aos-delay="3000">hr@yodezeen.com</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 bigheader__item__text w3-animate-left">
                    <p data-aos="fade-up" data-aos-delay="400">For each project the approach rests on a careful understanding of the space, or the site’s.</p>
                    <a href="./pages/contact.html" class="primary-btn normal-btn" data-aos="flip-left" style="color: #ffffff;">SEND REQUEST</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Js Plugins -->
<!-- Animate -->
<script src="js/animate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>  <!-- for loader -->

<!--Aos Library-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/aos.js"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

<!-- Animate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/animate.js"></script>


</body>
</html>














