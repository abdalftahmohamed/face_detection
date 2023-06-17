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

<!-- Offcanvas Menu End -->
@include('sessions')

<!-- Header Section Begin -->
@include('layouts.header')

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

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="/img/contact/ci-1.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Phone Number</h5>
                            <span data-aos="fade-up-right" data-aos-delay="2600" style="color: #ffffff;">
                                    +01 123 456 789
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <img src="/img/contact/ci-2.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Email Address</h5>
                            <span data-aos="fade-up-right" data-aos-delay="2800" style="color: #ffffff;">
                                    Info@vivida-eg.com
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item last__item">
                        <div class="contact__widget__item__icon">
                            <img src="/img/contact/ci-3.png" alt="">
                        </div>
                        <div class="contact__widget__item__text">
                            <h5>Office Location</h5>
                            <span data-aos="fade-up-right" data-aos-delay="3000" style="color: #ffffff;">
                                   kafrelsheikh, Egypt
                                </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5">
                       <pre>


                       </pre>
                    <div class="contact_for_form">
                        <a href="#ContactForm" class="primary-btn normal-btn" data-aos="flip-left"
                           data-aos-delay="2400" style="color: #ffffff;">
                            SEND REQUEST
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!--bottom Footer Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#">Vivda</a>
                    </div>
                    <p>kafr elsheikh <br /> Egypt</p>
                    <ul>
                        <li>Info@vivida-eg.com</li>
                        <li>+84 123 456 789</li>
                    </ul>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                <div class="footer__widget">
                    <h6>smart</h6>
                    <ul>
                        <li><a href="./about.html">About Us</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="950">
                <div class="footer__widget">
                    <h6>parteners</h6>
                    <ul>
                        <li><a href="{{route('login.show','student')}}">students</a></li>
                        <li><a href="{{route('login.show','teacher')}}">teachers </a></li>
                        <li><a href="{{route('login.show','admin')}}">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="copyright__text">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--bottom Footer Section End -->

</footer>

<!--Contact Form section -->
<section class="ContactFormSec close" id="ContactForm">
    <div class="container">
        <div class="request">
            <button class="modal__close" data-modal-close=""></button>
            <h2 class="request__h2">
                Don't hesitate to contact us
            </h2>

            <form method="POST" action="{{route('contacts.store')}}" data-success-id="thank" data-error-id="error" class="form request__form"
                  data-form="">
                @csrf
                <div class="form__row">
                    <div class="form__column">
                        <div class="fieldset">
                            <div class="label">Name</div>
                            <div class="fieldset__focus">
                                <input type="text" name="name" data-field-name="name" class="input"
                                       data-required="">
                            </div>
                            <div class="error">
                                enter correct Name
                            </div>
                        </div>

                        <div class="fieldset">
                            <div class="label">E-mail</div>
                            <div class="fieldset__focus">
                                <input type="text" name="email" data-field-name="email" class="input"
                                       data-required="">
                            </div>
                            <div class="error">
                                enter correct E-mail
                            </div>
                        </div>

                        <div class="fieldset">
                            <div class="label">Phone</div>
                            <div class="fieldset__focus">
                                <input type="text" data-field-name="phone" name="phone" class="input"
                                       data-required="">
                            </div>
                            <div class="error">
                                enter correct Phone
                            </div>
                        </div>

                    </div>
                    <div class="form__column">


                        <div class="fieldset messagefield">
                            <div class="label">Message</div>
                            <div class="fieldset__focus">
                                    <textarea type="text" name="message" data-field-name="message" class="input"
                                              data-required=""></textarea>
                            </div>
                            <div class="error">enter correct Message</div>
                        </div>
                    </div>
                </div>

                <div class="contact_btn">

                    <button class="primary-btn normal-btn" data-aos="flip-left" type="submit"><input type="submit" value="SEND REQUEST"></button>

                </div>


            </form>

        </div>
    </div>
</section>
<!--Contact Form section-->






<!-- Js Plugins -->

<!-- Animate -->
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
<script src="/js/aos.js"></script>

</body>

</html>
