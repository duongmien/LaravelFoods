<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometre.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <title>Laravel Food</title>
    <link rel="icon" type="png" href="{{('frontend/assets/img/favicon.png')}}">

</head>

<body>
    <div class="preloader js-preloader">
        <img src="{{('frontend/assets/img/preloader.gif')}}" alt="Image">
    </div>

    <div class="page-wrapper">
        <header class="header-wrap style1">
            <div class="header-top">
                <div class="container">
                    <div class="close-header-top xl-none">
                        <button type="button"><i class="las la-times"></i></button>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-12">
                            <div class="header-top-left">
                                <div class="contact-item">
                                    <i class="flaticon-wall-clock"></i>
                                    <p>Mon - Sun[8:00am - 10:00pm]</p>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-phone-call"></i>
                                    <a href="tel:13454567877">0987456123</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-5">
                            <a href="home" class="logo"><img src="{{('frontend/assets/img/logo-white.png')}}" alt="Image"></a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-7">
                            <div class="main-menu-wrap">
                                <div class="menu-close xl-none">
                                    <a href="javascript:void(0)"><i class="las la-times"></i></a>
                                </div>
                                <div id="menu">
                                    <ul class="main-menu list-style">
                                        <li><a href="home">Home</a></li>
                                        <li><a href="shop">Shop</a></li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mobile-bar-wrap">
                                <a href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html" class="shopcart  xl-none">
                                    <i class="las la-shopping-cart"></i>
                                    <span>1</span>
                                </a>
                                <div class="mobile-top-bar xl-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="mobile-menu xl-none">
                                    <a href="javascript:void(0)"><i class="las la-bars"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 lg-none">
                            <div class="header-bottom-right">
                                <a href="#" tppabs="https://templates.hibootstrap.com/caban/default/cart.html" class="shopcart">
                                    <i class="las la-shopping-cart"></i>
                                    <span>1</span>
                                    <a href="login" class="btn style1">Sign in</a>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer-wrap">
            <div class="footer-top bg-f footer-bg-1 pt-100 pb-70">
                <div class="overlay op-9 bg-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-widget-wrap">
                                <div class="footer-widget">
                                    <a href="index.html" class="footer-logo">
                                        <img src="{{('frontend/assets/img/logo-white.png')}}" alt="Image">
                                    </a>
                                    <p class="comp-desc">Our feet are on the ground, but our the desi ambitions are to above the clouds a Here is how we move to satisfy our customers</p>
                                    <div class="contact-item-wrap">
                                        <div class="contact-item">
                                            <i class="flaticon-mail-1"></i>
                                            <a href="mailto:"><span class="__cf_email__"
                                                    data-cfemail="1e767b7272715e7d7f7c7f70307d7173">[email&#160;protected]</span></a>
                                        </div>
                                        <div class="contact-item">
                                            <i class="flaticon-phone-call"></i>
                                            <a href="tel:44345467890">+44-3454-678-90</a>
                                        </div>
                                    </div>
                                    <ul class="social-profile style1 list-style">
                                        <li><a target="_blank" href="javascript:if(confirm(%27https://facebook.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://facebook.com/%27"
                                                tppabs="https://facebook.com/"><i class="flaticon-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:if(confirm(%27https://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/%27"
                                                tppabs="https://twitter.com/"> <i class="flaticon-twitter-1"></i> </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                                tppabs="https://instagram.com/"> <i class="flaticon-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="javascript:if(confirm(%27https://youtube.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://youtube.com/%27"
                                                tppabs="https://youtube.com/"> <i class="flaticon-youtube"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">
                                        Quick Links
                                    </h4>
                                    <ul class="footer-menu list-style">
                                        <li><a href="about.html">AboutUs</a></li>
                                        <li><a href="javascript:if(confirm(%27https://templates.hibootstrap.com/caban/default/menus.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/caban/default/menus.html%27">Menus</a>
                                        </li>
                                        <li><a href="shop-left-sidebar.html"> Shop</a>
                                        </li>
                                        <li><a href="wishlist.html">Wishlist</a>
                                        </li>
                                        <li><a href="contact.html">Contact
                                                Us</a></li>
                                        <li><a href="contact.html">Career</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">
                                        Opening Hours
                                    </h4>
                                    <ul class="office-schedule  list-style">
                                        <li>
                                            <p>Monday</p>
                                            <p>09:00 - 18:00</p>
                                        </li>
                                        <li>
                                            <p>Tuesday</p>
                                            <p>10:00 - 18:00</p>
                                        </li>
                                        <li>
                                            <p>Wednesday</p>
                                            <p>11:00 - 18:00</p>
                                        </li>
                                        <li>
                                            <p>Thursday</p>
                                            <p>12:00 - 18:00</p>
                                        </li>
                                        <li>
                                            <p>Friday</p>
                                            <p>14:00 - 18:00</p>
                                        </li>
                                        <li>
                                            <p>Saturday,Sunday</p>
                                            <p>Closed</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">
                                        Instagram Photo
                                    </h4>
                                    <div class="instagram-img-wrap">
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-1.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-2.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-3.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-4.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-5.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-6.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-7.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-8.jpg')}}" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="{{('frontend/assets/img/instagram-9.jpg')}}" alt="Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12 order-lg-1 order-md-2 order-2">
                            <p class="copyright"><span class="las la-copyright"></span>2021 Caban. All Rights Reserved By <a href="javascript:if(confirm(%27https://hibootstrap.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://hibootstrap.com/%27"
                                    tppabs="https://hibootstrap.com/">HiBootstrap</a></p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 order-lg-2 order-md-1 order-1">
                            <ul class="footer-bottom-menu list-style">
                                <li><a href="privacy-policy.html">Privacy
                                        Policy</a></li>
                                <li><a href="terms-conditions.html">Terms
                                        &amp; Conditions</a></li>
                                <li><a href="contact.html">Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>


    <script data-cfasync="false" src="{{('frontend/assets/js/email-decode.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontend/assets/js/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper-min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-magnific-popup.js')}}"></script>
    <script src="{{asset('frontend/assets/js/fancybox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/odometre.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
