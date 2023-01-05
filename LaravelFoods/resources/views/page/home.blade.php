@extends('layout')
@section('content')
<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
if ($message) {
    echo '<script>alert("' . $message . '");</script> ';
    Session::put('message', null);
}
?>
<section class="hero-wrap style1 bg-cod-grey">
    <img src="{{('frontend/assets/img/hero-shape-1.png')}}" alt="Image" class="hero-shape-1">
    <img src="{{('frontend/assets/img/hero-shape-2.png')}}" alt="Image" class="hero-shape-2">
    <img src="{{('frontend/assets/img/hero-shape-31.png')}}" alt="Image" class="hero-shape-3 md-none">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1>We Provide Express Home Delivery</h1>
                    <p>In shakes item of 2021 we are offering 20% flat discount. Don't miss out!!</p>
                    <div class="hero-btn">
                        <a href="shop" class="btn style1"><i class="las la-shopping-bag"></i>Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img-wrap">
                    <img src="{{('frontend/assets/img/hero-img-1.png')}}" alt="Image">
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
                    <img src="{{('frontend/assets/img/about-shape-1.png')}}" alt="Image" class="abouut-shape-1 md-none">
                    <img src="{{('frontend/assets/img/about-shape-2.png')}}" alt="Image" class="abouut-shape-2 md-none">
                    <img src="{{('frontend/assets/img/about-shape-3.png')}}" alt="Image" class="abouut-shape-3 md-none">
                    <div class="about-bg-1 bg-f"></div>
                    <div class="about-bg-2 bg-f"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="content-title style2 mb-15">
                        <span>
                            <img src="{{('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
                            Our Story
                            <img src="{{('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
                        </span>
                        <h2>We Provide Locally Crafted Food Service </h2>
                    </div>
                    <p>In our restaurant with people who are important to you, conversations that bring you closer to each other and those who enjoy our dishes. Traditional dishes with local products of highest quality. including succulent Veal Chops
                        Sicilian, spicy Lobster Fra Diazole, tender Chicken Contadina.</p>
                    <img src="{{('frontend/assets/img/author-sign.png')}}" alt="Image">
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
                <img src="{{('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
                Our Services
                <img src="{{('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
            </span>
            <h2>What We Offer</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-card-wrap">
                    <div class="service-card style1">
                        <div class="service-img">
                            <img src="{{('frontend/assets/img/breakfast.png')}}" alt="Image">
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
                            <img src="{{('frontend/assets/img/lunch.png')}}" alt="Image">
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
                            <img src="{{('frontend/assets/img/dinner.png')}}" alt="Image">
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
                            <img src="{{('frontend/assets/img/custom.png')}}" alt="Image">
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
        <img src="{{('frontend/assets/img/shape-1.png')}}" class="feature-top-shape-1 md-none">
        <img src="{{('frontend/assets/img/shape-2.png')}}" class="feature-top-shape-2 md-none">
        <div class="overlay op-9 bg-black"></div>
    </div>
    <div class="overlay op-6 bg-white"></div>
    <div class="section-title style6 text-center mb-40">
        <span>
            <img src="{{('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
            Our Feature Items
            <img src="{{('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
        </span>
        <h2 class="text-white">Popular Items Of Our Restaurant</h2>
    </div>
    <div class="container pos-rel">
        <div class="row justify-content-center">
            @foreach($product as $key => $pro)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="feature-card style1">
                    <a href="{{URL::to('/product-detail/'.$pro->product_id)}}">

                        <div class="feature-img">
                            <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}" alt="Image">
                        </div>
                    </a>
                    <div class="feature-info">
                        <a href="{{URL::to('/product-detail/'.$pro->product_id)}}">

                            <h3 class="feature-title"><a href="{{URL::to('/product-detail/'.$pro->product_id)}}">{{$pro->product_name}}</a>
                            </h3>
                            <div class="feature-meta">
                                <p class="feature-price"><?php echo $pro->product_price / 1000 ?>.000 VND<span><?php echo $pro->product_price / 1000 + 30 ?>.000 VND</span></p>

                            </div>
                        </a>
                        <form>
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" class="cart_product_id_{{$pro->product_id}}" value="{{$pro->product_id}}">
                            <input type="hidden" class="cart_product_name_{{$pro->product_id}}" value="{{$pro->product_name}}">
                            <input type="hidden" class="cart_product_image_{{$pro->product_id}}" value="{{$pro->product_image}}">
                            <input type="hidden" class="cart_product_price_{{$pro->product_id}}" value="{{$pro->product_price}}">
                            <input type="hidden" class="cart_product_qty_{{$pro->product_id}}" value="1">
                            <button type="button" class="btn style2 add-to-card" data-id_product="{{$pro->product_id}}">
                                <span><i class="flaticon-bag"></i>Add To Cart</span>
                            </button>
                        </form>
                        <!-- <a class="btn style2" href="show-cart"><i
                class="flaticon-shopping-bag-1"></i>Add To Cart</a>
            -->
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="contact-wrap style1 bg-f contact-bg-1 pt-100 pb-70 pos-rel">
    <div class="overlay bg-black op-85"></div>
    <img src="{{('frontend/assets/img/shape-1.png')}}" alt="Iamge" class="contact-shape-1 lg-none">
    <img src="{{('frontend/assets/img/shape-2.png')}}" alt="Iamge" class="contact-shape-2 lg-none">
    <div class="section-title style6 text-center mb-40">
        <span class="text-sunshade">
            <img src="{{('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
            Contact Us
            <img src="{{('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
        </span>
        <h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
    </div>
    <div class="container pos-rel">
        <div class="row">
            <div class="col-xl-12">
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
                        <a href="mainto:hello@laravelfood.com"><span class="__cf_email__">laravelfood@gmail.com</span></a>
                        <img src="{{('frontend/assets/img/contact-img-1.png')}}" alt="Image">
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
            <img src="{{('frontend/assets/img/secion-shape-1.png')}}" alt="Image">
            Testimonials
            <img src="{{('frontend/assets/img/secion-shape-2.png')}}" alt="Image">
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
                                    <img src="{{('frontend/assets/img/client-1.jpg')}}" alt="Image">
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
                                    <img src="{{('frontend/assets/img/client-2.jpg')}}" alt="Image">
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
                                    <img src="{{('frontend/assets/img/client-3.jpg')}}" alt="Image">
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
                                    <img src="{{('frontend/assets/img/client-4.jpg')}}" alt="Image">
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
@endsection