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

                        </div>
                        <div class="contact__widget__item__text">
                            <h5>security</h5>
                            <span data-aos="fade-up-right" data-aos-delay="2600" style="color: #ffffff;">
                                    Do not give  data to anyone
                                </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__widget__item last__item">
                        <div class="contact__widget__item__icon">

                        </div>
                        <div class="contact__widget__item__text">
                            <h5>data</h5>
                            <span data-aos="fade-up-right" data-aos-delay="3000" style="color: #ffffff;">
                                    Write it clearly, accurately, and in detail
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

    <!--bottom Footer Section End -->

</footer>

<!--Contact Form section -->
<section class="ContactFormSec close" id="ContactForm">
    <div class="container">
        <div class="request">
            <button class="modal__close" data-modal-close=""></button>
            <h2 class="request__h2">
                you are welcome
            </h2>


            <form method="POST" data-success-id="thank"  action="{{route('signup.teach')}}" data-error-id="error" class="form request__form" data-form="">
                @csrf
                @include('sessions')
                <div class="form__row">
                    <div class="form__column">
                        <div class="fieldset">
                            <div class="label"> First Name</div>
                            <div class="fieldset__focus">
                                <input type="text" name="first_name" data-field-name="first_name" class="input"
                                       data-required="">
                            </div>
                            <div class="error">
                                enter correct Name
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="label"> Last Name</div>
                            <div class="fieldset__focus">
                                <input type="text" name="last_name" data-field-name="last_name" class="input"
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
                            <div class="label">Password</div>
                            <div class="fieldset__focus">
                                <input type="password" name="password" data-field-name="password" class="input"
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
                        <div class="fieldset">
                            <div class="label">Address</div>
                            <div class="fieldset__focus">
                                <input type="text" name="address" data-field-name="address" class="input"
                                       data-required="">
                            </div>
                            <div class="error">
                                enter correct Name
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="label">Courses</div>
                            <div class="fieldset__focus" data-custom-select="city">
                                <!--custom-select-->

                                <div class="custom-select__outer">
                                    <select name="Specialization_id" class="custom-select__head"  >
                                        @foreach($specializations as $specialization)
                                            <option class="custom-select__body" value="{{$specialization->id}}">
                                                <div class="custom-select__item custom-select__item_hide"  >{{$specialization->name}}</div>
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>


                            <div class="fieldset">
                                <div class="label">Message</div>
                                <div class="fieldset__focus">
                                    <input type="text" name="message" data-field-name="message" class="input"
                                           data-required="">
                                </div>
                                <div class="error">
                                    enter correct Name
                                </div>
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
