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
{{--<form method="POST" data-success-id="thank"  action="{{route('signup.teach')}}" data-error-id="error" class="form request__form" data-form="">--}}
{{--    @csrf--}}
{{--    <div class="form__row">--}}
{{--        <div class="form__column">--}}
{{--            <div class="fieldset">--}}
{{--                <div class="label"> FIRST Name</div>--}}
{{--                <div class="fieldset__focus">--}}
{{--                    <input type="text" name="first_name" data-field-name="first_name" class="input"--}}
{{--                           data-required="">--}}
{{--                </div>--}}
{{--                <div class="error">--}}
{{--                    enter correct Name--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="fieldset">--}}
{{--                <div class="label"> LAST Name</div>--}}
{{--                <div class="fieldset__focus">--}}
{{--                    <input type="text" name="last_name" data-field-name="last_name" class="input"--}}
{{--                           data-required="">--}}
{{--                </div>--}}
{{--                <div class="error">--}}
{{--                    enter correct Name--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="fieldset">--}}
{{--                <div class="label">E-mail</div>--}}
{{--                <div class="fieldset__focus">--}}
{{--                    <input type="text" name="email" data-field-name="email" class="input"--}}
{{--                           data-required="">--}}
{{--                </div>--}}
{{--                <div class="error">--}}
{{--                    enter correct E-mail--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="fieldset">--}}
{{--                <div class="label">Phone</div>--}}
{{--                <div class="fieldset__focus">--}}
{{--                    <input type="text" data-field-name="phone" name="phone" class="input"--}}
{{--                           data-required="">--}}
{{--                </div>--}}
{{--                <div class="error">--}}
{{--                    enter correct Phone--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="fieldset">--}}
{{--                <div class="label"> ADRESS</div>--}}
{{--                <div class="fieldset__focus">--}}
{{--                    <input type="text" name="address" data-field-name="address" class="input"--}}
{{--                           data-required="">--}}
{{--                </div>--}}
{{--                <div class="error">--}}
{{--                    enter correct Name--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="form__column">--}}
{{--                <div class="fieldset">--}}
{{--                    <div class="label">Specialization</div>--}}
{{--                    <div class="fieldset__focus" data-custom-select="city">--}}
{{--                        <!--custom-select-->--}}

{{--                        <div class="custom-select__outer">--}}
{{--                            <select name="city" class="custom-select__head"  >--}}
{{--                                @foreach($specializations as $specialization)--}}
{{--                                    <option class="custom-select__body" value="{{$specialization->id}}">--}}
{{--                                        <div class="custom-select__item custom-select__item_hide" >{{$specialization->name}}</div>--}}
{{--                                    </option>--}}
{{--                                @endforeach--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="fieldset">--}}
{{--                    <div class="label">Message</div>--}}
{{--                    <div class="fieldset__focus">--}}
{{--                        <input type="text" name="message" data-field-name="message" class="input"--}}
{{--                               data-required="">--}}
{{--                    </div>--}}
{{--                    <div class="error">--}}
{{--                        enter correct Name--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="contact_btn">--}}
{{--                    <a href="" class="primary-btn normal-btn" data-aos="flip-left">--}}
{{--                        <input type="submit" value="sign up">--}}
{{--                    </a>--}}

{{--                </div>--}}

{{--                <div class="contact_btn">--}}
{{--                    <a href="" class="primary-btn normal-btn" data-aos="flip-left">--}}
{{--                        <input type="submit" value="sign up">--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</form>--}}


<form action="{{route('signup.teach')}}" method="POST" data-success-id="thank" data-error-id="error" class="form request__form" data-form="">>
    @csrf
    <div class="fieldset">
        <div class="label"> FIRST Name</div>
        <div class="fieldset__focus">
            <input type="text" name="first_name" data-field-name="first_name" class="input"
                   data-required="">
        </div>
        <div class="error">
            enter correct Name
        </div>
    </div>

    <div class="fieldset">
        <div class="label">Last name</div>
        <div class="fieldset__focus">
            <input type="text" name="last_name" data-field-name="last_name" class="input"
                   data-required="">
        </div>
        <div class="error">
            enter correct Name
        </div>
    </div>

    <div class="fieldset">
        <div class="label">phone</div>
        <div class="fieldset__focus">
            <input type="text" name="phone" data-field-name="phone" class="input"
                   data-required="">
        </div>
        <div class="error">
            enter correct Name
        </div>
    </div>


    <div class="fieldset">
        <div class="label">Email</div>
        <div class="fieldset__focus">
            <input type="text" name="email" data-field-name="email" class="input"
                   data-required="">
        </div>
        <div class="error">
            enter correct Name
        </div>
    </div>

    <div class="fieldset">
        <div class="label">password</div>
        <div class="fieldset__focus">
            <input type="password" name="password" data-field-name="password" class="input"
                   data-required="">
        </div>
        <div class="error">
            enter correct Name
        </div>
    </div>

    <div class="fieldset">
        <div class="label">Specialization</div>
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


    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Submit</button>
{{--    <div class="contact_btn">--}}
{{--        <a href="" class="primary-btn normal-btn" data-aos="flip-left">--}}
{{--            <button type="submit" value="sign up"></button>--}}
{{--        </a>--}}
{{--    </div>--}}
</form>

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
