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
                    <h1 class="page-title">Alumni</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Alumni</span>
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
                <h2>WELCOME TO OUR ALUMNI</h2>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Business Alumni Association</h3>
                        <p>Dhaka International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Dhaka International University Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Dhaka International University came into being on 7th April 1995, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement. Business alumni Association is playing a vital role for the students of the Business Administration Department,Dhaka International University. Member of the alumni association creating job opportunities for the new students . This association organizizes annul general meeting, picnic etc for the members of the association .</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">Business Alumni Association</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>CSE Alumni Association</h3>
                        <p>Dhaka International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Dhaka International University Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Dhaka International University came into being on 7th April 1995, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement. Dhaka International University. Member of the alumni association creating job opportunities for the new students . This association organizizes annul general meeting, picnic etc for the members of the association .</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">CSE Alumni Association</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>EETE Alumni Association</h3>
                        <p>Dhaka International University (DIU) is recognized in independent government assessments as one of top graded universities in Bangladesh. The university has been founded by Dhaka International University Group with the approval of the Ministry of Education under the Private University Act of 1992 and its amendment in 1998 and Dhaka International University came into being on 7th April 1995, the University today combines impressive modern facilities and a dynamic approach to teaching and research with its proud heritage of service and achievement. Dhaka International University. Member of the alumni association creating job opportunities for the new students . This association organizizes annul general meeting, picnic etc for the members of the association .</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">EETE Alumni Association</span>
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
