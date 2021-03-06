<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('public/test/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/test/css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('public/test/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('views/Layouts/style_for_Devine.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('public/test/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('public/test/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('public/test/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('public/test/js/mdb.min.js')}}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

    <link rel="stylesheet" href="{{asset('public/test/css/style_for_container_news.css')}}">
    <style>

        body, html {
            height: 60%;
        }
        .bg {
            /* The image used */
            background-image: url("{{asset('img/body1.png')}}");

            /* Half height */
            height: 50%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0;
        }

        p {
            margin: 0 0 10px;
        }



        /* Container
        ===================*/
        .container {
            width: 100%;
            max-width: 1170px;
            margin: 0 auto;
        }


        /* Header
        ===================*/

        .header {
            width: 100%;
            height: 100px;

            position: absolute;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .header__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 35px 0;

            border-bottom: 1px solid #515369;
        }


        /* Nav
        ===================*/

        .nav {
            display: flex;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .nav__link {
            margin-left: 50px;

            color:lightgray;
            text-decoration: none;
            opacity: .75;

            transition: opacity .1s linear;
        }

        .nav__link:first-child {
            margin-left: 0;
        }

        .nav__link:hover {
            opacity: 1;
        }


        /* Intro
        ===================*/


        .intro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 1300px;
            padding-top: 100px;

            background: #31344e url("{{asset('img/intro-bg.jpg')}}") center no-repeat / cover;
        }

        .intro__inner {
            width: 100%;
            max-width: 970px;
            margin: 0 auto;

            text-align: center;
        }

        .intro__title {
            margin: 0 0 30px;

            font-family: 'Open Sans', sans-serif;
            font-size: 65px;
            line-height: 1.1;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
        }

        .intro__subtitle {
            margin-bottom: 60px;

            font-size: 22px;
            color: #fff;
            line-height: 1.5;
            font-weight: 400;
        }


        /* Button
        ===================*/
        .btn {
            display: inline-block;
            vertical-align: top;
            padding: 14px 40px;

            border-radius: 2px;
            border: 0;
            cursor: pointer;

            font-family: 'Raleway', sans-serif;
            font-size: 13px;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;

            transition: background .1s linear;
        }

        .btn--red {
            background-color: #e84545;
        }

        .btn--red:hover {
            background-color: #dd3434;
        }



        /* Features
        ===================*/
        .features {
            display: flex;
            flex-wrap: wrap;
            margin: 95px 0;
        }

        .features__item {
            width: 33.33333%;
            padding: 0 40px;
            margin: 25px 0;

            text-align: center;
        }

        .features__icon {
            margin-bottom: 25px;
        }

        .features__title {
            margin-bottom: 20px;

            font-size: 14px;
            color: #2d3033;
            font-weight: 700;
            text-transform: uppercase;
        }

        .features__text {
            font-size: 14px;
            line-height: 1.5;
            color: #6c7279;
        }

        .1pos{
              color: #515369;
              width:225px;
              height: 225px;
          }

        /* Works */
        .works {
            display: flex;
            flex-wrap: wrap;

        }

        .works__item {
            width: 25%;
            height: 350px;

            border-bottom: 1px solid #fff;
            border-right: 1px solid #fff;

            position: relative;
            overflow: hidden;
        }

        .works__item:hover .works__content {
            opacity: 1;
        }

        .works__photo {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;

            transform: translate3d(-50%, -50%, 0);
        }

        .works__content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;

            background-color: rgba(232, 69, 69, .9);
            opacity: 0;

            text-align: center;

            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;

            transition: opacity .2s linear;
        }

        .works__title {
            margin-bottom: 5px;

            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
        }

        .works__text {
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body style="background-color: #1d2124">
@include('Layouts.Navbar')
@include('Layouts.Bodycontent')
@yield('content')
@include('Layouts.Footer')
</body>
</html>


