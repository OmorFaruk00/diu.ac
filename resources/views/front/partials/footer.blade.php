<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer" style="background-image: url({{ url('front/images/bg/counter-bg.jpg')}}">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            House # 4, Road # 1, Block - F, <br>
                            Banani, Dhaka-1213, Bangladesh.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            <a class="contact-desc" href="tel:01611348344">+88 01611348344</a><br>
                            <a class="contact-desc" href="tel:01939851061">+88 01939851061</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            <a class="contact-desc" href="mail:inf@diu-bd.net">inf@diu-bd.net</a> <br>
                            <a class="contact-desc" href="mail:info@diu.net.bd">info@diu.net.bd</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="{{ asset('/') }}diu_white.png" alt="Footer Logo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum dicta dolorum ea fugit
                            iste maxime modi sint voluptas voluptate.</p>
                        <p class="margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">Useful Links</h5>
                    <ul class="sitemap-widget useful-link">
                        <li class="active">
                            <a href="http://www.ugc-universities.gov.bd/university-detail/73" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>UGC Website</a>
                        </li>

                        <li class="active">
                            <a href="https://jobs.diu.ac/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Career</a>
                        </li>

                        <li class="active">
                            <a href="https://students.diu.ac/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Students Portal</a>
                        </li>

                        <li class="active">
                            <a href="https://admission.diu.ac/register" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Admission Website</a>
                        </li>

                        <li class="active">
                            <a href="http://international.diu.ac" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>International Website</a>
                        </li>

                        <li class="active">
                            <a href="https://blog.diu.ac" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a>
                        </li>

                        <li class="active">
                            <a href="http://mail.diu-bd.net/webmail" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Webmail</a>
                        </li>

                        <li class="active">
                            <a href="https://ibank.eximbankbd.com/eximIBank/eximIBank/login/loginForm?error=1" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Payment</a>
                        </li>

                        <li class="active">
                            <a href="https://hotjobs.com.bd/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>Find Jobs</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
                        </li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Events
                                Details</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Details</a>
                        </li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a>
                        </li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers
                                Details</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Error 404</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">NEWSLETTER</h5>
                    <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                    <form class="news-form">
                        <input type="text" class="form-input" placeholder="Enter Your Email">
                        <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="https://www.facebook.com/diu.net.bd" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/diudhaka" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                    <li><a href="https://twitter.com/diubd" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/school/dhaka-international-university" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="https://www.instagram.com/diu.net.bd" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.pinterest.com/DIUdhaka" target="_blank"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© {{ \Carbon\Carbon::now()->format('Y') }} | <a href="#">DIU</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
