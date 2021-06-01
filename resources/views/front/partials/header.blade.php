<!--Full width header Start-->
<div class="full-width-header">

    @include('front.partials.toolbar')

    <!--Header Start-->
    <header id="rs-header" class="rs-header">

        @include('front.partials.topHeader')

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">

                                    <li @if(Request::is('/')) class="active" @endif ><a href="{{ route('homePage') }}">Home</a></li>
                                    <li><a href="{{ route('homePage') }}">About Us</a></li>
                                    <li><a href="{{ route('homePage') }}">Notice Board</a></li>


                                    <!--Department Menu Start-->
                                    <li class="menu-item-has-children"><a href="javaScript:void(0)">Department</a>
                                        <ul class="sub-menu">
                                            <li><a href="javaScript:void(0)">Department of Business Administration</a></li>
                                            <li><a href="javaScript:void(0)">Department of Civil Engineering</a></li>
                                            <li><a href="javaScript:void(0)">Department of CSE</a></li>
                                            <li><a href="javaScript:void(0)">Department of EEE</a></li>
                                            <li><a href="javaScript:void(0)">Department of English</a></li>
                                            <li><a href="javaScript:void(0)">Department of Law</a></li>
                                            <li><a href="javaScript:void(0)">Department of Pharmacy</a></li>
                                            <li><a href="javaScript:void(0)">Department of Sociology</a></li>
                                            <li><a href="javaScript:void(0)">Department of Economics</a></li>
                                            <li><a href="javaScript:void(0)">Department of Political Science</a></li>
                                        </ul>
                                    </li>
                                    <!--Department Menu End-->

                                    <li><a href="{{ route('homePage') }}">Admission</a></li>
                                    <li><a href="{{ route('homePage') }}">Institute</a></li>
                                    <li><a href="{{ route('homePage') }}">Alumni</a></li>
                                    <li><a href="{{ route('homePage') }}">Cell</a></li>
                                    <li><a href="{{ route('homePage') }}">Contact</a></li>

                                    <!-- Drop Down Pages Start -->
                                    {{--<li class="rs-mega-menu mega-rs"><a href="#">Mega</a>
                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="about.html">About One</a></li>
                                                            <li><a href="about2.html">About Two</a></li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="teachers.html">Teachers</a></li>
                                                            <li><a href="teachers-without-filter.html">Teachers Without
                                                                    Filter</a></li>
                                                            <li><a href="teachers-single.html">Teachers Single</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="gallery.html">Gallery One</a></li>
                                                            <li><a href="gallery2.html">Gallery Two</a></li>
                                                            <li><a href="gallery3.html">Gallery Three</a></li>
                                                            <li><a href="error-404.html">Error 404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-details.html">Shop Details</a></li>

                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>--}}
                                    <!--Drop Down Pages End -->

                                </ul>
                            </nav>
                            <div class="right-bar-icon rs-offcanvas-link text-right">
                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i
                                        class="fa fa-search"></i></a>

                                <a id="nav-expander" class="nav-expander fixed"><i
                                        class="fa fa-bars fa-lg white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
<!--Full width header End-->

