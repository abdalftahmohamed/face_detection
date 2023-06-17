<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | VIVID</title>

    <!-- Google Font -->
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet"> -->

    <!-- Css Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Aos Library-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <div>
            <span class="bigletter letters-1">V</span>
            <span class="letters letters-1">V</span>
        </div>
        <div>
            <span class="bigletter  letters-2">I</span>
            <span class="letters letters-2">I</span>
        </div>
        <div>
            <span class="bigletter  letters-3">V</span>
            <span class="letters letters-3">V</span>
        </div>
        <div>
            <span class="bigletter  letters-4">I</span>
            <span class="letters letters-4">I</span>
        </div>
        <div>
            <span class="bigletter  letters-5">D</span>
            <span class="letters letters-5">D</span>
        </div>
    </div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#">Vivda</a>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>

<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header" id="myHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <div class="black-logo" id="black-logo">
                        <a href="./index.html" >
                            <img src="./img/logo/last black.png" alt="logo-vivda">
                        </a>
                    </div>

                    <div class="white-logo hide" id="white-logo">
                        <a href="./index.html" >
                            <img src="./img/logo/VIVID-white.png" alt="logo-vivda">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <nav class="header__menu mobile-menu">
                    <!-- Nav Toggler Btn -->
                    <a href="./bigfooter.html">
                        <div class="nav-toggler closenavtglr hide" id="littlebtn">
                            <span></span>
                            <span></span>
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
                                <a href="./projects.html#COMMERCIAL" class="projects__subitem">students </a>
                                <a href="./teacher.html#RESIDENTIAL" class="projects__subitem">teacher</a>
                                <a href="./admin.html#ARCHITECTURE" class="projects__subitem">Admin</a>
                            </div>
                        </div>

                        <li class="menuheader"><a href="./projects.html">Partners</a></li>
                        <li class="menuheader"><a href="./about.html">About</a></li>

                        <li class="menuheader"><a href="./contacts.html">Contact</a></li>

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

<footer class="footer set-bg" id="footer-sec" style="background-color: #1a1a1a;">


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container contact_wrapper ">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__form__text">
                        <div class="section-title">
                            <h2 data-aos="fade-right" data-aos-delay="2200" style="color: #ffffff; width: 80%;">
                                Get in touch with us
                            </h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-5">


                <br/>
                <button id="startBtn"  style="background-color: white;color: #1a1a1a; border-radius: 20px; width: 200px;height: 50px; " onclick="openCam()">Open Webcam</button>
                <br/><br/>
                <video id="videoCam" style="width: 400px; height: 400px;"></video>
                <button id="startBtn"  style="background-color: white;color: #1a1a1a; border-radius: 20px; width: 200px;height: 50px; ">capture</button>
            </div>
        </div>
        </div>
    </section>

    <!-- Contact Section End -->

    <!--bottom Footer Begin -->

    <!--bottom Footer Section End -->

</footer>






<!-- Js Plugins -->

<!-- Animate -->


<script>
    function openCam(){
        let All_mediaDevices=navigator.mediaDevices
        if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
            console.log("getUserMedia() not supported.");
            return;
        }
        All_mediaDevices.getUserMedia({
            audio: true,
            video: true
        })
            .then(function(vidStream) {
                var video = document.getElementById('videoCam');
                if ("srcObject" in video) {
                    video.srcObject = vidStream;
                } else {
                    video.src = window.URL.createObjectURL(vidStream);
                }
                video.onloadedmetadata = function(e) {
                    video.play();
                };
            })
            .catch(function(e) {
                console.log(e.name + ": " + e.message);
            });
    }
</script>
<script src="/js/animate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!--Aos Library-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/aos.js"></script>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/main.js"></script>

<!-- Animate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="/js/animate.js"></script>

<!--Aos Library-->
<link href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<script src="js/aos.js"></script>

</body>

</html>
