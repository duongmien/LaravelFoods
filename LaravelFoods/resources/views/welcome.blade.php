<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/swiper-min.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/odometre.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('../public/frontend/assets/css/responsive.css')}}">
    <title>Laravel Food</title>
    <link rel="icon" type="png" href="{{('../public/frontend/assets/img/favicon.png')}}">

</head>

<body>
    <div class="preloader js-preloader">
        <img src="{{('../public/frontend/assets/img/preloader.gif')}}" alt="Image">
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
                            <a href="index.html" class="logo"><img src="{{('../public/frontend/assets/img/logo-white.png')}}" alt="Image"></a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-7">
                            <div class="main-menu-wrap">
                                <div class="menu-close xl-none">
                                    <a href="javascript:void(0)"><i class="las la-times"></i></a>
                                </div>
                                <div id="menu">
                                    <ul class="main-menu list-style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="./shop.html">Shop</a></li>
                                        <li><a href="#">Contact</a></li>
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
                                    <a href="#" class="btn style1">Sign in</a>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="hero-wrap style1 bg-cod-grey">
            <img src="{{('../public/frontend/assets/img/hero-shape-1.png')}}" alt="Image" class="hero-shape-1">
            <img src="{{('../public/frontend/assets/img/hero-shape-2.png')}}" alt="Image" class="hero-shape-2">
            <img src="{{('../public/frontend/assets/img/hero-shape-31.png')}}" alt="Image" class="hero-shape-3 md-none">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <h1>We Provide Express Home Delivery</h1>
                            <p>In shakes item of 2021 we are offering 20% flat discount. Don't miss out!!</p>
                            <div class="hero-btn">
                                <a href="#" class="btn style1"><i class="las la-shopping-bag"></i>Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img-wrap">
                            <img src="assets/img/hero-img-1.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-wrap style1 ptb-100">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <img src="{{('../public/frontend/assets/img/about-shape-1.png')}}" alt="Image" class="abouut-shape-1 md-none">
                            <img src="{{('../public/frontend/assets/img/about-shape-2.png')}}" alt="Image" class="abouut-shape-2 md-none">
                            <img src="{{('../public/frontend/assets/img/about-shape-3.png')}}" alt="Image" class="abouut-shape-3 md-none">
                            <div class="about-bg-1 bg-f"></div>
                            <div class="about-bg-2 bg-f"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="content-title style2 mb-15">
                                <span>
                                    <img src="{{('../public/frontend/assets/img/secion-shape-1.png')}}" alt="Image">
                                    Our Story
                                    <img src="{{('../public/frontend/assets/img/secion-shape-2.png')}}" alt="Image">
                                </span>
                                <h2>We Provide Locally Crafted Food Service </h2>
                            </div>
                            <p>In our restaurant with people who are important to you, conversations that bring you closer to each other and those who enjoy our dishes. Traditional dishes with local products of highest quality. including succulent Veal Chops
                                Sicilian, spicy Lobster Fra Diazole, tender Chicken Contadina.</p>
                            <img src="{{('../public/frontend/assets/img/author-sign.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-wrap bg-f service-bg-1 pt-100 pb-75">
            <div class="overlay op-7 bg-white"></div>
            <div class="container">
                <div class="section-title style1 text-center mb-110">
                    <span>
                        <img src="{{('../public/frontend/assets/img/secion-shape-1.png')}}" alt="Image">
                        Our Services
                        <img src="{{('../public/frontend/assets/img/secion-shape-2.png')}}" alt="Image">
                    </span>
                    <h2>What We Offer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-card-wrap">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="{{('../public/frontend/assets/img/breakfast.png')}}" alt="Image">
                                </div>
                                <div class="service-info">
                                    <h3 class="service-title"><a href="service-details.html">Breakfast</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, tetur piscing elit. Suspendisse smod congue bibendum.
                                    </p>
                                </div>
                            </div>
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="{{('../public/frontend/assets/img/lunch.png')}}" alt="Image">
                                </div>
                                <div class="service-info">
                                    <h3 class="service-title"><a href="service-details.html">Lunch</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, tetur piscing elit. Suspendisse smod congue bibendum.
                                    </p>
                                </div>
                            </div>
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="{{('../public/frontend/assets/img/dinner.png')}}" alt="Image">
                                </div>
                                <div class="service-info">
                                    <h3 class="service-title"><a href="service-details.html">Dinner</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, tetur piscing elit. Suspendisse smod congue bibendum.
                                    </p>
                                </div>
                            </div>
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="{{('../public/frontend/assets/img/custom.png')}}" alt="Image">
                                </div>
                                <div class="service-info">
                                    <h3 class="service-title"><a href="service-details.html">Custom</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, tetur piscing elit. Suspendisse smod congue bibendum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-wrap style1 pt-100 pb-70 bg-1 pos-rel">
            <div class="feature-top-shape bg-f">
                <img src="assets/img/shape-1.png" class="feature-top-shape-1 md-none">
                <img src="assets/img/shape-2.png" class="feature-top-shape-2 md-none">
                <div class="overlay op-9 bg-black"></div>
            </div>
            <div class="overlay op-6 bg-white"></div>
            <div class="section-title style6 text-center mb-40">
                <span>
                    <img src="assets/img/secion-shape-1.png"
                                               alt="Image">
                    Our Feature Items
                    <img src="assets/img/secion-shape-2.png"
                                               alt="Image">
                </span>
                <h2 class="text-white">Popular Items Of Our Restaurant</h2>
            </div>
            <div class="container pos-rel">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-1.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Chicken
                                        In Teriyaki</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">22.35$ <span>30.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.9</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 30%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-2.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Hotdog
                                        With Sausage</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">30.35$ <span>40.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.2</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 20%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-3.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Breakfast
                                        With Sweet</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">52.35$ <span>60.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.5</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 25%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-4.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Grilled
                                        Chicken Stick</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">25.35$ <span>30.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.8</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 30%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-5.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Chicken
                                        Barista platter</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">32.35$ <span>45.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.9</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 40%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="feature-card style1">
                            <div class="feature-img">
                                <img src="assets/img/feature-item-6.jpg" alt="Image">
                            </div>
                            <div class="feature-info">
                                <h3 class="feature-title"><a href="shop-details.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">French
                                        Fries Pack</a></h3>
                                <div class="feature-meta">
                                    <p class="feature-price">15.35$ <span>20.50$</span></p>
                                    <div class="ratings">
                                        <i class="flaticon-star-1"></i>
                                        <span>4.4</span>
                                    </div>
                                </div>
                                <a class="btn style2" href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html"><i
                                        class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                <div class="discount-tag">
                                    <img src="assets/img/circle-1.png" alt="Image">
                                    <p> <span>Save</span> 15%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-wrap style1 bg-f contact-bg-1 pt-100 pb-70 pos-rel">
            <div class="overlay bg-black op-85"></div>
            <img src="assets/img/shape-1.png" alt="Iamge" class="contact-shape-1 lg-none">
            <img src="assets/img/shape-2.png" alt="Iamge" class="contact-shape-2 lg-none">
            <div class="section-title style6 text-center mb-40">
                <span class="text-sunshade">
                    <img src="assets/img/secion-shape-1.png" alt="Image">
                    Contact Us
                    <img src="assets/img/secion-shape-2.png"  alt="Image">
                </span>
                <h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
            </div>
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="contact-box-wrap">
                            <div class="contact-box-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="contact-box">
                                <h5>Make A Call</h5>
                                <a href="tel:880123654223">880-123-654</a>
                            </div>
                            <div class="contact-box">
                                <h5>Mail Us</h5>
                                <a href="mainto:hello@caban.com"><span class="__cf_email__">laravelfood@gmail.com</span></a>
                                <img src="assets/img/contact-img-1.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-wrap bg-f testimonial-bg-1 pt-100 pb-100 pos-rel">
            <div class="overlay bg-white op-7"></div>
            <div class="section-title style1 text-center mb-40">
                <span>
                    <img src="assets/img/secion-shape-1.png"alt="Image">
                    Testimonials
                    <img src="assets/img/secion-shape-2.png"alt="Image">
                </span>
                <h2>Our Happy Customers</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-slider-one swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item style1">
                                        <div class="client-img">
                                            <img src="assets/img/client-1.jpg" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h4>Lisa Ann</h4>
                                            <span>CEO, IUBAT</span>
                                        </div>
                                        <div class="client-quote">
                                            <p>The food is really very tasty – the wagyu sushi on the dinner menu is especially delicious and not to be missed for a long time!</p>
                                        </div>
                                        <div class="client-rating-wrap">
                                            <ul class="ratings list-style">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <div class="quote-icon">
                                                <i class="flaticon-right-quote-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item style1">
                                        <div class="client-img">
                                            <img src="assets/img/client-2.jpg" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h4>Angelina Miller</h4>
                                            <span>Food Bloger</span>
                                        </div>
                                        <div class="client-quote">
                                            <p>The food is really very tasty – the wagyu sushi on the dinner menu is especially delicious and not to be missed for a long time!</p>
                                        </div>
                                        <div class="client-rating-wrap">
                                            <ul class="ratings list-style">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <div class="quote-icon">
                                                <i class="flaticon-right-quote-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item style1">
                                        <div class="client-img">
                                            <img src="assets/img/client-3.jpg" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h4>Tony Stark</h4>
                                            <span>Traveler</span>
                                        </div>
                                        <div class="client-quote">
                                            <p>The food is really very tasty – the wagyu sushi on the dinner menu is especially delicious and not to be missed for a long time!</p>
                                        </div>
                                        <div class="client-rating-wrap">
                                            <ul class="ratings list-style">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <div class="quote-icon">
                                                <i class="flaticon-right-quote-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item style1">
                                        <div class="client-img">
                                            <img src="assets/img/client-4.jpg" alt="Image">
                                        </div>
                                        <div class="client-info">
                                            <h4>Henry Orton</h4>
                                            <span>Content Creator & Blogger</span>
                                        </div>
                                        <div class="client-quote">
                                            <p>The food is really very tasty – the wagyu sushi on the dinner menu is especially delicious and not to be missed for a long time!</p>
                                        </div>
                                        <div class="client-rating-wrap">
                                            <ul class="ratings list-style">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <div class="quote-icon">
                                                <i class="flaticon-right-quote-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-one-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-wrap bg-f newsletter-bg-1 ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="section-title style1 text-center mb-40">
                            <h2>Newsletter Subscribe</h2>
                            <p>Drop us your mail address. We love to hear from you and are happy to answer any questions immediately.</p>
                        </div>
                        <form action="#" class="newsletter-form">
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email Address">
                                <button type="submit"><i class="flaticon-direct"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-wrap">
            <div class="footer-top bg-f footer-bg-1 pt-100 pb-70">
                <div class="overlay op-9 bg-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-widget-wrap">
                                <div class="footer-widget">
                                    <a href="index.html" class="footer-logo">
                                        <img src="assets/img/logo-white.png" alt="Image">
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
                                            <img src="assets/img/instagram-1.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-2.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-3.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-4.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-5.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-6.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-7.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-8.jpg" alt="Image">
                                        </a>
                                        <a href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/" target="_blank" class="insta-box">
                                            <img src="assets/img/instagram-9.jpg" alt="Image">
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


    <script data-cfasync="false" src="assets/js/email-decode.min.js"></script>
    <script src="{{asset('../public/frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/aos.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/swiper-min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/jquery-magnific-popup.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/fancybox.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/odometre.min.js')}}"></script>
    <script src="{{asset('../public/frontend/assets/js/main.js')}}"></script>

</body>

</html>