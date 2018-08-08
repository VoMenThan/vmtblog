
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap Personal Resume Template">
    <meta name="keywords" content="onepage, cv, resume, Bootstrap, one page, template, app, mobile">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="MHS">
    <base href="{{ asset('') }}">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114x114.png">
    <title>Vo Men Than | @yield('title')</title>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/et-line-font/style.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendor/animate.css">
    <link href="css/main.css" rel="stylesheet">

    @yield('css')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="vendor/html5shiv.js"></script>
    <script src="vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--preloader start-->
<!--<div id="preloader">-->
    <!--<div id="loader"></div>-->
<!--</div>-->
<!--preloader end-->

@include('layouts.menu')

@yield('content')


<!-- footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="copyright wow fadeInUp">&copy; Bản Quyền 2018 : Võ Mến Thân Đăng Ký Bản Quyền.</span>
                <ul class="social-link wow fadeInUp">
                    <li><a href="https://www.facebook.com/vomenthan" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="g-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->


<!--scripts-->
<script src="vendor/jquery-2.1.3.min.js"></script>
<script src="vendor/bs/js/bootstrap.min.js"></script>
<script src="vendor/owl/owl.carousel.min.js"></script>
<script src="vendor/jquery.nav.js"></script>
<script src="vendor/jquery.animateNumber.min.js"></script>
<script src="vendor/visible.js"></script>
<script src="vendor/wow.min.js"></script>

<!--portfolio-->
<script src="vendor/isotope.js"></script>
<script src="vendor/imagesloaded.pkgd.js"></script>
<script src="vendor/masonry-grid.js"></script>

<!--typist-->
<script src="vendor/typist.js"></script>

<!-- magnific popup -->
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!--google map. // if you don't need google map remove this script-->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCVkU7YnGfown4_i_sm6X36HP2jWTv54&callback=initMap"></script>-->
<!--<script src="vendor/google-map-init.js"></script>-->

<!--[if lt IE 9]>
<script src="vendor/modernizr.js"></script>
<![endif]-->

<!--contact form-->
<script type="text/javascript" src="vendor/contact-form/form-validator.min.js"></script>
<script type="text/javascript" src="vendor/contact-form/contact-form-script.js"></script>
<script src="js/scripts.min.js"></script>

@yield('script')

</body>
</html>

