<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="dist/slick/slick-theme.css">
    <link rel="stylesheet" href="dist/slick/slick.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <style type="text/css">

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;

        }

        /*.slick-slide {*/
        /*margin: 0px 20px;*/
        /*}*/



        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


    </style>
</head>
<body>
<div class="top-nav-section ">
    <div class="container top-nav-section-container">
        <div class="navbar-collapse">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="#">LOGIN|SIGNUP</a>
                </li>
            </ul>

        </div>
    </div>
</div>
@yield('content')

</body>
</html>