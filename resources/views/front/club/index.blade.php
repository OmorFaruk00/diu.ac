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
    </style>
@endpush

@section('body')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Club</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Club</span>
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
                <h2>WELCOME TO OUR CLUB</h2>
                <p style="max-width: 750px;margin: auto;">Dhaka International University has formally formed different separate clubs for development of student . The following clubs are run successfully by the students and teachers.</p>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-sun-o"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Debating Club</h3>
                        <p>Dhaka International University has formed Dhaka international University debating society for
                            the devlopment of the students .DIUDS has glorious background .DIUDS has achived first
                            position in several times at the national debate competition .</p>
                        <span class="rs-date">Debating Club</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-sun-o"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Cultural Club</h3>
                        <p>Dhaka International University has formd DIU cultural club. Cultural club ogranizes cultural competiton for the students. Cultural club also organizes seminer and workshops related to cultural affairs for the students. Cultural club team members participate in different national and internationl cultural competition.</p>
                        <span class="rs-date">Cultural Club</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-sun-o"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Sports Club</h3>
                        <p>Dhaka International University sports clb organizes different sports competetion for the students every year. Sports club team members participate in different national and internationl Sports competition.</p>
                        <span class="rs-date">Sports Club</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- titmeline End -->

@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
