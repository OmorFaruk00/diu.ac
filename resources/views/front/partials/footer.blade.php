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
                        <p>Dhaka International University, rated among the top private universities of Bangladesh, </p>

                        <p class="margin-remove">is an
                            institution that promotes eastern culture and values, and meaningfully blends eastern and
                            western thoughts and innovation.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <Footer-useful-link/>
                </div>

                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="{{ route('homePage') }}"><i class="fa fa-angle-right"
                                                                                aria-hidden="true"></i>Home</a>
                        </li>
                        <li><a href="{{ route('about-us') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a>
                        </li>
                        <li><a href="{{ route('notice-board') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Notice</a>
                        </li>
                        <li><a href="{{ route('notice-board') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a>
                        </li>
                        <li><a href="{{ route('homePage') }}"><i class="fa fa-angle-right"
                                                                 aria-hidden="true"></i>Blog</a></li>
                        <li><a href="https://blog.diu.ac" target="_blank"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Blog
                                Details</a>
                        </li>
                        <li><a href="{{ route('admission') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Admission</a>
                        </li>
                        <li><a href="{{ route('institute') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Institute</a>
                        </li>
                        <li><a href="{{ route('alumni') }}"><i class="fa fa-angle-right"
                                                               aria-hidden="true"></i>Alumni</a>
                        </li>
                        <li><a href="{{ route('cell') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Cell</a>
                        </li>
                        <li><a href="{{ route('contact-us') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                        </li>
                        <li><a href="{{ route('certificate-verification') }}"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i>Certificate</a>
                        </li>
                        <li><a href="{{ route('club') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Club</a>
                        </li>
                        <li><a href="{{ route('publications') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Publications</a>
                        </li>

                        <li><a href="{{ route('privacy-policy') }}"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12">
                    <Footer-news-letter/>
                </div>

            </div>

            <Footer-social-media/>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                {{--                <p class="text-center ">© {{ \Carbon\Carbon::now()->format('Y') }} | <a href="{{ route('homePage') }}">DIU</a>. All Rights Reserved.</p>--}}
                <p class="text-center ">
                    © {{ \Carbon\Carbon::now()->format('Y') }} <a href="{{ route('homePage') }}">DIU</a>. All rights
                    Reserved. | Developed & Powered by:
                    <a href="https://it.diu.ac" target="_blank">IT-Team, DIU</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
