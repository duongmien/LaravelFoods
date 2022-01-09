@extends('layout')
@section('content')

<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="{{('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="br-shape-1">
        <img src="{{('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <h3 style="color: #ffffff">A new Moments of Friendship</h3>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{URL::to('home')}}" >Home </a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-wrap pt-100 pb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-12">
                    <div class="contact-form">
                        <form action="https://templates.hibootstrap.com/caban/default/php/form-process.php"
                            class="form-wrap" id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" placeholder="First Name*" id="fname"
                                            required data-error="Please Enter Your First Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" placeholder="First Name*" id="lname"
                                            required data-error="Please Enter Your Last Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email Address*" data-error="Please Enter Valid Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" name="phone_number" placeholder="Phone Number"
                                            id="phone_number" required
                                            data-error="Please Enter Your Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group v1">
                                        <label for="message">Your Message</label>
                                        <textarea name="message" id="message" placeholder="Your Messages.."
                                            cols="30" rows="10" required
                                            data-error="Please Enter Your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkbox style2">
                                        <input type="checkbox" id="test_1">
                                        <label for="test_1">I consent to having this website store my
                                            submitted information</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn style1 w-100 d-block op-95 mt-20">Send
                                        Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-wrap style3 bg-f contact-bg-2 ptb-100  contact-page">
        <div class="container pos-rel">
            <img src="{{('frontend/assets/img/agent-1.png')}}"
                tppabs="https://templates.hibootstrap.com/caban/default/assets/img/contact/agent-1.png"
                alt="Image" class="agent-img md-none">
            <div class="section-title style6 text-center mb-30">
                <span>
                    <img src="{{('frontend/assets/img/secion-shape-1.png')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/secion-shape-1.png"
                        alt="Image">
                    Contact Us
                    <img src="{{('frontend/assets/img/secion-shape-2.png')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/secion-shape-2.png"
                        alt="Image">
                </span>
                <h2 class="text-white">Not Sure What To Order? <br> Contact Us Now</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="contact-btn">
                        <a href="" class="btn style1">Make A Call<i
                                class="flaticon-right-arrow-2"></i></a>
                        <a href=""
                            tppabs="https://templates.hibootstrap.com/caban/default/contact.html"
                            class="btn style3">Contact Us<i class="flaticon-right-arrow-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-wrap style2 pb-100  contact-page2">
        <div class="map-bg bg-f"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Our Location</h4>
                            <p>48 Cao Thang, Thanh Binh, Hai Chau, Da Nang</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="flaticon-mail"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Our Email</h4>
                            <a href="javascript:if(confirm(%27https://templates.hibootstrap.com/cdn-cgi/l/email-protection  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/cdn-cgi/l/email-protection#026a676e6e6d42616360636c2c616d6f%27"
                                tppabs="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#026a676e6e6d42616360636c2c616d6f"><span
                                    class="__cf_email__"
                                    data-cfemail="2149444d4d4e61424043404f0f424e4c">laravelfood@gmail.com</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Contact Us</h4>
                            <a>0987456123</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="flaticon-wall-clock-1"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Opening Hour</h4>
                            <p>Mon - Sunday</p>
                            <p>8:00 am - 10:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-30 text-center">
                    <a target="_blank" href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+S%C6%B0+Ph%E1%BA%A1m+K%E1%BB%B9+thu%E1%BA%ADt+-+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+%C4%90%C3%A0+N%E1%BA%B5ng/@16.0782199,108.2135526,17.75z/data=!4m5!3m4!1s0x3142184792140755:0xd4058cb259787dac!8m2!3d16.0773428!4d108.2134243?hl=vi-VN" tppabs="https://templates.hibootstrap.com/caban/default/contact.html"
                        class="btn style1">Explore Map <i class="flaticon-right-arrow-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection