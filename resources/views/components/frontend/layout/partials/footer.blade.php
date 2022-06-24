<footer class="footer_area section_padding_100_0">
    <div class="container">
        <div class="row">
            {{-- Single Footer Area --}}
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Contact Us</h6>
                    </div>
                    <ul class="footer_content">
                        <li><span>Address:</span> Level-5, Rajuk Rajib Cosmo Shopping Complex, Uttara Sector 7, Dhaka - 1230, Bangladesh.</li>
                        <li><span>Phone:</span> +880 1712020900</li>
                        <li><span>Email:</span> support@amazing.com</li>
                    </ul>
                    <div class="footer_social_area mt-15">
                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            {{-- Single Footer Area --}}
            <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Information</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Free Coupon</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Delivary Info</a></li>
                    </ul>
                </div>
            </div>

            {{-- Single Footer Area --}}
            <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-2">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Account</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            {{-- Single Footer Area --}}
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-2">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Support</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                    </ul>
                </div>
            </div>

            {{-- Single Footer Area --}}
            <div class="col-12 col-md-7 col-lg-8 col-xl-3">
                <div class="single_footer_area mb-50">
                    <div class="footer_heading mb-4">
                        <h6>Join our mailing list</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="form-control mail"
                                placeholder="Your E-mail Addrees">
                            <button type="submit" class="submit"><i class="icofont-long-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Download our Mobile Apps</h6>
                    </div>
                    <div class="apps_download">
                        <a href="#"><img src="{{ asset('ui/frontend/assets/img/core-img/play-store.png') }}" alt="Play Store"></a>
                        <a href="#"><img src="{{ asset('ui/frontend/assets/img/core-img/app-store.png') }}" alt="Apple Store"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite -->
                <div class="col-12 col-md-6">
                    <div class="copywrite_text">
                        <p class="mb-md-0 text-center text-md-left">
                            &copy; <a href="{{route('home.index')}}" style="color: #7aac09;">Amazing</a>. All Rights Reserved. Developed
                            by
                            <a class="font-weight-semi-bold" href="#" style="color: #7aac09;">Dev_MSDF</a><br>
                            Distributed By <a href="#" target="_blank" style="color: #7aac09;">Mazhar Shahin Dalim Forhad</a>
                        </p>
                    </div>
                </div>
                {{-- Payment Method --}}
                <div class="col-12 col-md-6">
                    <div class="payment_method">
                        <img src="{{ asset('ui/frontend/assets/img/payment-method/paypal.png') }}" alt="">
                        <img src="{{ asset('ui/frontend/assets/img/payment-method/maestro.png') }}" alt="">
                        <img src="{{ asset('ui/frontend/assets/img/payment-method/western-union.png') }}" alt="">
                        <img src="{{ asset('ui/frontend/assets/img/payment-method/discover.png') }}" alt="">
                        <img src="{{ asset('ui/frontend/assets/img/payment-method/american-express.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>