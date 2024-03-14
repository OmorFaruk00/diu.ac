<!-- Header Top Start -->
<div class="rs-header-top">
    <div class="container">

        {{--for desktop view--}}
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="header-contact">
                    <div id="info-details" class="widget-text">
                        <i class="fa fa-envelope-open-o"></i>
                        <div class="info-text">
                            <a href="mailto:admission@diu.net.bd">
                                <span>Mail Us</span>
                                admission@diu.net.bd
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 top-header-logo">
                <div class="logo-area text-center">
                    <a href="{{ route('homePage') }}"><img style="height: 45px" src="{{ asset('/') }}logo.png"
                                                           alt="DIU"></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="header-contact pull-right">
                    <div id="phone-details" class="widget-text">
                        {{--                        <i class="glyph-icon flaticon-phone-call"></i>--}}
                        <i class="fa fa-phone"></i>
                        <div class="info-text">
                            <a href="tel:8809612111348">
                                <span>Call Us</span>
                                +88 09677777348
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--for mobile view--}}
        <div class="row">

            <div class="col-3 offset-2">
                <div class="logo-area mobile-logo">
                    <a href="{{ route('homePage') }}">
                        <img style="height: 45px" src="{{ asset('/') }}logo.png" alt="DIU">
                    </a>
                </div>
            </div>

            <div class="col-5">
                <div class="header-contact mobile-top-header-menu">
                    <div class="widget-text">
                        <div class="info-text">
                            <a href="mailto:admission@diu.net.bd">
                                admission@diu.net.bd
                            </a> <br>

                            <a href="tel:8809612111348">
                                +880 9612111348
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Header Top End -->
