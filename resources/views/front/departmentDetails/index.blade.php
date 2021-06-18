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

        .department-head-section {
            background-image: url({{ url('front/images/bg/dot-grid.png') }});
            background-attachment: fixed;
            background-position: center top;
        }

        .back-image {
            /*background-size: 100%;*/
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
                    <h1 class="page-title text-capitalize">{{ \Str::replace('-', ' ', $slug ?? '') }}</h1>
                    <ul>
                        <li>
                            <a class="active " href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;text-transform: capitalize">{{ \Str::replace('-', ' ', $slug ?? '') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </section>
    <!-- page header -->
    <!-- Page Header End here -->


    <!-- Introduction Start -->
    <div id="rs-about" class="rs-about sec-spacer about-us">
        <div class="container">

            <Department-basic/>

        </div>
    </div>
    <!-- Introduction End -->


    <!-- About Us Start -->
    <div id="rs-about-2" class="rs-about-2 sec-spacer back-image department-head-section">
        <div class="container">
            <Department-chairman/>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Objectives Start -->
    <div id="rs-about" class="rs-about sec-spacer about-us">
        <Department-objectives/>
    </div>
    <!-- Objectives End -->


    <!-- FACILITIES Start -->
    <div class="sec-spacer">
        <Department-aditional-features :facilities='{!! json_encode($facilities) !!}'/>
    </div>
    <!-- FACILITIES End -->

    <!-- Gallery Start -->
    <div class="rs-gallery-4 rs-gallery sec-spacer">

        <Department-gallery/>

    </div>
    <!-- Gallery End -->

    <!-- admission requirement Start -->
    <div class="rs-titmeline sec-spacer">

        <Department-syllabus/>

    </div>
    <!-- admission requirement End -->


    <!-- OUR EXPERIENCED STAFFS Start -->
    <div id="rs-team" class="rs-team sec-spacer">
        <Department-faculty-members :faculties='{!! json_encode($facultyMembers) !!}'/>
    </div>
    <!-- OUR EXPERIENCED STAFFS End -->


@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
