@extends('front.master')

@push('style')
    <!-- timeline css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/css/timeline.css">
    <style>
        .page-header {
            background-image: url({{ url('front/images/bg/page-header-bg.jpg') }});
            background-size: cover;
            background-position: center;
            margin: 0px;
            padding: 0px;
            border: none;
        }

        .section-notch:before {
            content: "";
            position: absolute;
            {{--background: url({{ url('front/images/bg/section_notch_top.png') }});--}}
                            background-repeat: repeat-x;
            display: block;
            top: 0;
            width: 100%;
            height: 7px;
            z-index: 2;
        }

        .page-header .overlay {
            padding: 25px 0px;
            background-color: rgba(146, 176, 110, .8);
            text-align: center;
        }

        .notice-section {
            background-image: url({{ url('front/images/bg/dot-grid.png') }});
            background-attachment: fixed;
            background-position: center top;
        }

        #rs-footer .footer-contact-desc
        {
            margin-top: 135px !important;
        }
    </style>
@endpush

@section('body')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Contact</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->

    <!-- titmeline Start -->
    <div class="rs-titmeline sec-spacer">
        <div class="container">
            <div class="abt-title mb-70 text-center">
                <h2>OUR CAMPUS</h2>
            </div>
            <Contact-address-info/>                          
               
        </div>
    </div>
    
    {{-- <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>OUR CAMPUS</h2>
                
            </div>
            <div class="row contact-address-section">
                <div class="col-md-6 pl-0 mx-auto">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Permanent Campus</h3>
                        <p>Satarkul, Badda, <br> Dhaka-1212. Bangladesh.</p>
                        <p>55040891-7</p>
                        <p><a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p><a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                    </div>
                </div>              
            </div>
           
        </div>
    </div> --}}

    <!-- titmeline End -->

    <!-- map Start -->
    <div class="contact-page-section sec-spacer">
        <iframe src="https://www.google.com/maps/d/embed?mid=zpd50ugWdJd0.knmLtiVuBsXE"
                width="100%"
                height="500"></iframe>
    </div>
    <!-- map End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="contact-comment-section">
                <h3>Have Some Question ?</h3>

                <Contact-contact-form/>

            </div>
        </div>
    </div>
    <!-- Contact Section End -->




@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
