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
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet"> -->

    <!-- Css Styles -->
    <!--    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
    <!--Aos Library-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>

<!-- Header Section Begin -->
@include('layouts.header')

<footer class="footer set-bg" id="footer-sec" style="background-color: #1a1a1a;">


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container contact_wrapper ">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__form__text">
                        <div class="section-title">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">

                        </div>
                        <div class="contact__widget__item__text">
                            <h5> Email </h5>
                            <span data-aos="fade-up-right" data-aos-delay="2800" style="color: #ffffff;">
                                    Enter your Email
                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item last__item">
                        <div class="contact__widget__item__icon">

                        </div>
                        <div class="contact__widget__item__text">
                            <h5>password</h5>
                            <span data-aos="fade-up-right" data-aos-delay="3000" style="color: #ffffff;">
                                    Do not give your password to anyone
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
                        <a href="#ContactForm" class="primary-btn normal-btn" data-aos="flip-left" data-aos-delay="2400"
                           style="color: #ffffff;">
                            Log in
                        </a>


                    </div>
                    @if($type == 'teacher')
                        <a href="{{route('signup.teachers')}}" class="primary-btn normal-btn" data-aos="flip-left" data-aos-delay="2400"
                           style="color: #ffffff;">
                            {{--                                <input type="submit" value="sign up" style="color: #ffffff;">--}}
                            sign up
                        </a>
                    @elseif($type == 'student')
                        <a href="{{route('signup.Students')}}" class="primary-btn normal-btn" data-aos="flip-left"
                           style="color: #ffffff;">
                            {{--                            <input type="submit" value="">--}}
                            sign up

                        </a>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->

    <!--bottom Footer Begin -->

    <!--bottom Footer Section End -->

</footer>

<!--Contact Form section -->
<section class="ContactFormSec close" id="ContactForm">
    @if($type == 'student')
        <h3 style="font-family: 'Cairo', sans-serif; color: white; text-align: center; padding-top: 40px "
            class="mb-30">Log In To Student</h3>
    @elseif($type == 'teacher')
        <h3 style="font-family: 'Cairo', sans-serif; color: white; text-align: center; padding-top: 40px "
            class="mb-30">Log In To Teacher</h3>
    @else
        <h3 style="font-family: 'Cairo', sans-serif; color: white; text-align: center; padding-top: 40px "
            class="mb-30">Log In To Admin</h3>
    @endif
    <div class="container">
        <div class="request">
            <button class="modal__close" data-modal-close=""></button>
            <h2 class="request__h2">

            </h2>


            <form method="POST" data-success-id="thank" action="{{route('login')}}" data-error-id="error"
                  class="form request__form" data-form="">
                @csrf
                @include('sessions')
                <div class="form__row">
                    <div class="form__column">
                        <div class="fieldset">
                            <div class="label">Email</div>
                            <div class="fieldset__focus">
                                <input id="email" type="email" class="input"
                                       name="email"
                                       data-required="" autocomplete="off">
                                <input type="hidden" value="{{$type}}" name="type">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                        </div>
                        <div class="fieldset">
                            <div class="label"> password</div>
                            <div class="fieldset__focus">
                                <input id="password" type="password"
                                       class="input" name="password"
                                       required autocomplete='off'>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                        </div>
                        <div class="contact_btn">

                            <button class="primary-btn normal-btn" data-aos="flip-left" type="submit"><input type="submit" value="GoT"></button>

                        </div>

                    </div>
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


