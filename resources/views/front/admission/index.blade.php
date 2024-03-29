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

        .documents-title {
            font-size: 22px;
            text-decoration: underline;
            color: #01aa4d;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .contact-address p {
            font-size: 13px;
        }
    </style>
@endpush

@section('body')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Admission</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Admission</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->

    <!-- admission requirement Start -->
    <div class="rs-titmeline sec-spacer">
        <Admission-our-admission/>
    </div>
    <!-- admission requirement End -->


    <!-- Tuition Fee Start -->
    <div id="rs-about" class="rs-about sec-spacer">
        <Admission-tuition-fee/>
    </div>
    <!-- About Us End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>Application For Admission</h2>
                <p style="max-width: 750px;margin: auto">
                    A candidate seeking admission to a program must procure prescribed Application From from DIU office
                    on payment of TK. 1000.00. Admission form available at admission information section:

                    On the basis of admission test result, a student will get full free scholarship.
                </p>
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

            {{-- <Admission-address/> --}}
        </div>
    </div>
    <!-- Contact Section End -->

@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
