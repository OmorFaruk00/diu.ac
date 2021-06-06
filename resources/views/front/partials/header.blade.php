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
                                <ul class="nav-menu text-center">

                                    <li @if(Request::is('/')) class="active" @endif><a href="{{ route('homePage') }}">Home</a></li>
                                    <li @if(Request::is('about-us')) class="active" @endif><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li @if(Request::is('notice-board')) class="active" @endif><a href="{{ route('notice-board') }}">Notice Board</a></li>


                                    <!--Department Menu Start-->
                                    <li class="menu-item-has-children"><a href="javaScript:void(0)">Department</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Business Administration')]) }}">Department of Business Administration</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Civil Engineering')]) }}">Department of Civil Engineering</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of CSE')]) }}">Department of CSE</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of EEE')]) }}">Department of EEE</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of English')]) }}">Department of English</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Law')]) }}">Department of Law</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Pharmacy')]) }}">Department of Pharmacy</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Sociology')]) }}">Department of Sociology</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Economics')]) }}">Department of Economics</a></li>
                                            <li><a href="{{ route('department-details',['slug'=>\Str::slug('Department of Political Science')]) }}">Department of Political Science</a></li>
                                        </ul>
                                    </li>
                                    <!--Department Menu End-->

                                    <li @if(Request::is('admission')) class="active" @endif><a href="{{ route('admission') }}">Admission</a></li>
                                    <li @if(Request::is('institute')) class="active" @endif><a href="{{ route('institute') }}">Institute</a></li>
                                    <li @if(Request::is('alumni')) class="active" @endif><a href="{{ route('alumni') }}">Alumni</a></li>
                                    <li @if(Request::is('cell')) class="active" @endif><a href="{{ route('cell') }}">Cell</a></li>
                                    <li @if(Request::is('contact-us')) class="active" @endif><a href="{{ route('contact-us') }}">Contact</a></li>

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

                            {{--<div class="right-bar-icon rs-offcanvas-link text-right">
                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i
                                        class="fa fa-search"></i></a>

                                <a id="nav-expander" class="nav-expander fixed"><i
                                        class="fa fa-bars fa-lg white"></i></a>
                            </div>--}}

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

