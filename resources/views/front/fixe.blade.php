@php
    $config = DB::table('configurations')->first();
@endphp

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Cysec" />
    <meta name="keywords" content="HTML,CSS,JavaScript" />
    <meta name="author" content="HiBootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>@yield('titre') - {{ config('app.name') }}</title>
    <link rel="icon" href="/assets-front/images/tab.png" type="image/png" sizes="16x16" />

    <link rel="stylesheet" href="/assets-front/css/bootstrap.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/animate.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets-front/css/owl.theme.default.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/meanmenu.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/magnific-popup.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/boxicons.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/flaticon.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/settings.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets-front/css/layers.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/assets-front/css/navigation.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="/assets-front/css/responsive.css" type="text/css" media="all" />
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader bg-red">
        <div class="preloader-wrapper">
            <div class="preloader-grid">
                <div class="preloader-grid-item preloader-grid-item-1"></div>
                <div class="preloader-grid-item preloader-grid-item-2"></div>
                <div class="preloader-grid-item preloader-grid-item-3"></div>
                <div class="preloader-grid-item preloader-grid-item-4"></div>
                <div class="preloader-grid-item preloader-grid-item-5"></div>
                <div class="preloader-grid-item preloader-grid-item-6"></div>
                <div class="preloader-grid-item preloader-grid-item-7"></div>
                <div class="preloader-grid-item preloader-grid-item-8"></div>
                <div class="preloader-grid-item preloader-grid-item-9"></div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="mobile-nav">
            <a href="index.html" class="mobile-brand">
                <img src="/logo-black.png" alt="logo" class="logo" />
            </a>
            <div class="navbar-option">
                <div class="navbar-option-item navbar-option-dots dropdown">
                    <button type="button" id="dot" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-menu-1"></i>
                    </button>
                    <ul class="dropdown-menu navbar-dots-dropdown">
                        <li class="dropdown-item">
                            <div class="navbar-option-item navbar-option-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" id="language3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-worldwide"></i>
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language3">
                                    <a class="dropdown-item" href="#">
                                        <img src="/assets-front/images/usa.png" alt="flag" />
                                        English
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="/assets-front/images/germany.png" alt="flag" />
                                        Deutsch
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="/assets-front/images/china.png" alt="flag" />
                                        简体中文
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="/assets-front/images/uae.png" alt="flag" />
                                        العربيّة
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="navbar-option-item navbar-option-account">
                                <a href="authentication.html"><i class="flaticon-user"></i></a>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="navbar-option-item navbar-option-cart">
                                <a href="cart.html"><i class="flaticon-shopping-bag"></i>
                                    <span class="option-badge option-badge-danger">2</span>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="navbar-option-item navbar-option-sidebar">
                                <span><i class="flaticon-menu"></i></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-option-item navbar-option-language dropdown language-option mobile-hide">
                    <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-worldwide"></i>
                        <span class="lang-name"></span>
                    </button>
                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                        <a class="dropdown-item" href="#">
                            <img src="/assets-front/images/usa.png" alt="flag" />
                            English
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="/assets-front/images/germany.png" alt="flag" />
                            Deutsch
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="/assets-front/images/china.png" alt="flag" />
                            简体中文
                        </a>
                        <a class="dropdown-item" href="#">
                            <img src="/assets-front/images/uae.png" alt="flag" />
                            العربيّة
                        </a>
                    </div>
                </div>
                <div class="navbar-option-item navbar-option-search dropdown">
                    <button type="button" id="search" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="flaticon-search"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="search">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="flaticon-search"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Search result" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="navbar-option-item navbar-option-account mobile-hide">
                    <a href="authentication.html"><i class="flaticon-user"></i></a>
                </div>
                <div class="navbar-option-item navbar-option-cart mobile-hide">
                    <a href="cart.html"><i class="flaticon-shopping-bag"></i>
                        <span class="option-badge option-badge-danger">2</span>
                    </a>
                </div>
                <div class="navbar-option-item navbar-option-sidebar mobile-hide">
                    <span><i class="flaticon-menu"></i></span>
                </div>
            </div>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="/logo-black.png" alt="logo" class="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link  active">
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Autres
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('teams') }}" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="authentication.html" class="nav-link">Authentication</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="forget-password.html" class="nav-link">Forget Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-option">
                        <div class="navbar-option-item navbar-option-language dropdown language-option">
                            <button class="dropdown-toggle" type="button" id="language2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-worldwide"></i>
                                <span class="lang-name"></span>
                            </button>
                            <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language2">
                                <a class="dropdown-item" href="#">
                                    <img src="/assets-front/images/usa.png" alt="flag" />
                                    English
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="/assets-front/images/germany.png" alt="flag" />
                                    Deutsch
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="/assets-front/images/china.png" alt="flag" />
                                    简体中文
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img src="/assets-front/images/uae.png" alt="flag" />
                                    العربيّة
                                </a>
                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-search">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="flaticon-search"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search result" />
                                </div>
                            </form>
                        </div>
                        <div class="navbar-option-item navbar-option-account">
                            <a href="authentication.html"><i class="flaticon-user"></i></a>
                        </div>
                        <div class="navbar-option-item navbar-option-cart">
                            <a href="cart.html"><i class="flaticon-shopping-bag"></i>
                                <span class="option-badge option-badge-danger">2</span>
                            </a>
                        </div>
                        <div class="navbar-option-item navbar-option-sidebar">
                            <span><i class="flaticon-menu"></i></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>







    @yield('body')





    <footer>
        <div class="footer-upper pt-100 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-content-item">
                            <div class="footer-logo">
                                <a href="index.html"><img src="/assets-front/images/logo.png" alt="logo" /></a>
                            </div>
                            <div class="footer-details">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniama met consectetur adipisi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="footer-right pl-80">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Cyber Services</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li><a href="ai-platforms.html">Cysec Discovery</a></li>
                                            <li><a href="ai-platforms.html">Cysec On-Demand</a></li>
                                            <li>
                                                <a href="ai-platforms.html">Cysec MobileSuite</a>
                                            </li>
                                            <li><a href="ai-platforms.html">Cysec Continous</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Support & Help</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li>
                                                <a href="blogs-list-with-sidebar.html">Blogs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Quick Links</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li>
                                                <a href="terms-services.html">Terms Of Services</a>
                                            </li>
                                            <li>
                                                <a href="privacy-policy.html">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="authentication.html">Authentication</a>
                                            </li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower bg-off-white">
            <div class="container">
                <div class="footer-lower-grid">
                    <div class="footer-lower-item footer-lower-info">
                        <div class="footer-copyright-text">
                            <p>
                                © Cysec is Proudly Owned by
                                <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                            </p>
                        </div>
                        <div class="footer-lower-action d-flex flex-wrap align-items-baseline">
                            <ul class="footer-action-list">
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-services.html">Terms Of Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-lower-item">
                        <ul class="footer-lower-social">
                            <li>
                                <a href="#">
                                    <i class="bx bxl-facebook-square"></i>
                                    <span class="social-tooltip">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-twitter"></i>
                                    <span class="social-tooltip">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-linkedin"></i>
                                    <span class="social-tooltip">Linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-pinterest-alt"></i>
                                    <span class="social-tooltip">Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

    <div class="sidebar-modal-wrapper">
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-modal-header">
                    <div class="sidebar-modal-logo">
                        <img src="/assets-front/images/logo.png" alt="logo" />
                    </div>
                    <div class="sidebar-modal-close">
                        <i class="flaticon-cross-sign"></i>
                    </div>
                </div>
                <div class="sidebar-modal-body">
                    <div class="sidebar-modal-para">
                        <p>
                            Cysec is a consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="sidebar-modal-content-item">
                        <h4>Contact Us:</h4>
                        <div class="contact-grid-para">
                            <i class="flaticon-network"></i>Level 2, 11 York St, Sydney
                            2000, Australia
                        </div>
                        <div class="contact-grid-para">
                            <i class="flaticon-phone-call"></i>
                            <p>
                                <a href="tel:0061-665-66785">+61 665 66785</a><br />
                                <a href="tel:0061-567-8907">+61 567 8907</a>
                            </p>
                        </div>
                        <div class="contact-grid-para">
                            <i class="flaticon-email"></i>
                            <p>
                                <a href="/cdn-cgi/l/email-protection#ddb4b3bbb2efedefed9dbea4aeb8bef3beb2b0"><span
                                        class="__cf_email__"
                                        data-cfemail="3950575f560b090b09795a404a5c5a175a5654">[email&#160;protected]</span></a><br />
                                <a href="/cdn-cgi/l/email-protection#d9aaaca9a9b6abad99baa0aabcbaf7bab6b4"><span
                                        class="__cf_email__"
                                        data-cfemail="5c2f292c2c332e281c3f252f393f723f3331">[email&#160;protected]</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="sidebar-modal-content-item">
                        <div class="sidebar-modal-share">
                            <p>Follow:</p>
                            <ul class="social-list">
                                <li>
                                    <a href="#"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-pinterest-alt"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets-front/js/jquery.min.js"></script>
    <script src="/assets-front/js/bootstrap.bundle.min.js"></script>

    <script src="/assets-front/js/jquery.magnific-popup.min.js"></script>

    <script src="/assets-front/js/owl.carousel.min.js"></script>
    <script src="/assets-front/js/scrollbar.js"></script>
    <script src="/assets-front/js/horizontal-scrollbar.js"></script>
    <script src="/assets-front/js/carousel-thumbs.min.js"></script>

    <script src="/assets-front/js/jquery.waypoints.min.js"></script>
    <script src="/assets-front/js/jquery.counterup.min.js"></script>

    <script src="/assets-front/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets-front/js/jquery.themepunch.tools.min.js"></script>

    <script src="/assets-front/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets-front/js/extensions/revolution.extension.video.min.js"></script>

    <script src="/assets-front/js/jquery.ajaxchimp.min.js"></script>

    <script src="/assets-front/js/form-validator.min.js"></script>

    <script src="/assets-front/js/contact-form-script.js"></script>

    <script src="/assets-front/js/jquery.meanmenu.min.js"></script>

    <script src="/assets-front/js/script.js"></script>
</body>

</html>
