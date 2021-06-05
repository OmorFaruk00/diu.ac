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
                    <h1 class="page-title">Institute</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Institute</span>
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
                <h2>WELCOME TO OUR INSTITUTE</h2>
                <p style="max-width: 700px;margin: 0 auto;">Beside Dhaka International University (DIU), the management authority of DIU runs several Institutes
                    for students to get a degree in the professional life.</p>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Technical & Vocational Education Institute</h3>
                        <p>This institute has been established in 1998 . This institute is now operating its academic
                            activities at 66 Green Road (5th floor). Students are studying in Diploma in Computer
                            technology, Diploma in electrical, Diploma in Civil under BTEB.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Technical & Vocational Education Institute</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-mortar-board"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Dr.M.I. Patwari Technical & Vocational Education Institute</h3>
                        <p>This institute has been established in 1998 . This institute is now operating its academic
                            activities at Choudhurani, Pirgacha - Rangpur. Students are studying in HSC (BM) under
                            BTEB.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Dr.M.I. Patwari Technical & Vocational Education Institute</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-snowflake-o"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Dr.Z.I. Chowdhury Agricultural Research & Training Institute</h3>
                        <p>This institute has been established in 1998 . This institute is now operating its academic
                            activities at Falgacha,Moniram, Shundarganj-Gaibandha. Students are studying in Diploma in
                            Agriculture under BTEB.
                        </p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Dr.Z.I. Chowdhury Agricultural Research & Training Institute</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-superpowers"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Dr.M.I. Patwari Private Engineering Institute</h3>
                        <p>This institute has been established in 1998 . This institute is now operating its academic
                            activities at at Falgacha,Moniram, Shundarganj-Gaibandha. Students are studying in Diploma
                            in Computer technology, Diploma in electrical, Diploma in Civil and Diploma in Textile under
                            BTEB.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Dr.M.I. Patwari Private Engineering Institute</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-car"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Sundarganj Driving Training Institute</h3>
                        <p>This institute has been established in 2019 . This institute is now operating its activities
                            at at Falgacha,Moniram, Shundarganj-Gaibandha.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Sundarganj Driving Training Institute</span>
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
