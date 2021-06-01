<!-- Canvas Menu start -->
<nav class="right_menu_togle">
    <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
    <div class="canvas-logo text-center">
        <a href="{{ route('homePage') }}"><img src="{{ asset('/') }}diu_white.png" alt="DIU"></a>
    </div>
    <ul class="sidebarnav_menu list-unstyled main-menu">
        <li><a href="{{ route('homePage') }}">Home<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">About Us<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">Notice Board<span class="icon"></span></a></li>

        <!--Department Menu Start-->
        <li class="menu-item-has-children"><a href="javaScript:void(0)">Department</a>
            <ul class="list-unstyled">
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Business Administration<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Civil Engineering<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of CSE<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of EEE<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of English<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Law<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Pharmacy<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Sociology<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Economics<span class="icon"></span></a></li>
                <li class="sub-nav active"><a href="{{ route('homePage') }}">Department of Political Science<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Department Menu End-->

        <!--blog Menu End-->
        <li><a href="{{ route('homePage') }}">Admission<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">Institute<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">Alumni<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">Cell<span class="icon"></span></a></li>
        <li><a href="{{ route('homePage') }}">Contact<span class="icon"></span></a></li>
    </ul>
    <div class="search-wrap">
        <label class="screen-reader-text">Search for:</label>
        <input type="search" placeholder="Search..." name="s" class="search-input" value="">
        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
    </div>
</nav>
<!-- Canvas Menu end -->
