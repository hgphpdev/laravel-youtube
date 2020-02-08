<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <!-- Favicons -->
        <link href="{{asset('img/favicon.png')}}" rel="icon">
        <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header id="header">

            <div id="topbar">
                <div class="container">
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="logo float-left">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <h1 class="text-light"><a href="#intro" class="scrollto"><span>Rapid</span></a></h1>
                    <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
                </div>

                <nav class="main-nav float-right d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#intro">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li class="drop-down"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li class="drop-down"><a href="#">Drop Down 2</a>
                                    <ul>
                                        <li><a href="#">Deep Drop Down 1</a></li>
                                        <li><a href="#">Deep Drop Down 2</a></li>
                                        <li><a href="#">Deep Drop Down 3</a></li>
                                        <li><a href="#">Deep Drop Down 4</a></li>
                                        <li><a href="#">Deep Drop Down 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                                <li><a href="#">Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#footer">Contact Us</a></li>
                    </ul>
                </nav><!-- .main-nav -->

            </div>
        </header><!-- #header -->

        @yield('content')

        <footer id="footer" class="section-bg">
            <div class="footer-top">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="footer-info">
                                        <h3>Rapid</h3>
                                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                                    </div>

                                    <div class="footer-newsletter">
                                        <h4>Our Newsletter</h4>
                                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                                        <form action="" method="post">
                                            <input type="email" name="email"><input type="submit"  value="Subscribe">
                                        </form>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <div class="footer-links">
                                        <h4>Useful Links</h4>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Terms of service</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                        </ul>
                                    </div>

                                    <div class="footer-links">
                                        <h4>Contact Us</h4>
                                        <p>
                                            A108 Adam Street <br>
                                            New York, NY 535022<br>
                                            United States <br>
                                            <strong>Phone:</strong> +1 5589 55488 55<br>
                                            <strong>Email:</strong> info@example.com<br>
                                        </p>
                                    </div>

                                    <div class="social-links">
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="form">

                                <h4>Send us a message</h4>
                                <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
                                <form action="{{route('contactUs')}}" method="post" role="form" class="contactForm ajaxForm" enctype="multipart/form-data">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" value="{{old('subject')}}" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control uploadFile"  data-file-upload-url="{{route('uploadFile')}}" name="file" value="" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{old('message')}}</textarea>
                                        <div class="validation"></div>
                                    </div>

                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                    <div id="errormessage"></div>
                                    <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- #footer -->
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
        <!-- Contact Form JavaScript File -->
        <script src="{{asset('js/jquery.noty.packaged.js')}}"></script>
        <script src="{{asset('js/LaravelFormValidator.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{asset('js/main.js')}}"></script>

        <!--custom.js-->
        <script src="{{asset('js/custom.js')}}"></script>

        <script>
phpdev.setup({
    underfieldError: false,
    showBorderError: true,
    refreshCsrfToken: true,
    csrfTokenUrl: '{{route("refreshToken")}}', //this must be full url
//    csrfTokenUrl: false, //this must be full url
    notifyError: true,
});
        </script>
        <script>
            function hhh(e) {
                console.log(e);
                console.log('request successfully done');
            }
        </script>
    </body>
</html>