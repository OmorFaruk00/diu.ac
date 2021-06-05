@extends('front.master')

@push('style')
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
                    <h1 class="page-title">Publications</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Publications</span>
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
                <h2>WELCOME TO OUR publications</h2>
                <p style="max-width: 750px;margin: auto">DIU is profoundly esteemed for it's own reputation which is built upon credibility, practical knowhow and a feasible archive of books, bulletins and journals. DIU has published a few original books written by its teachers and faculties. Whereas bulletins help students to keep upto date regarding their class and exam routines, schedule and other important notices. Both faculties and students of extraordinary merit are allowed to write their own journals.</p>
            </div>

            <div>
                <h2>Our Journals</h2>

                <ul>
                    <li><i class="fa fa-arrow-circle-right"></i> <a href="javaScript:void(0)" target="_blank">DIU Journal of Law and Human Rights</a></li>
                    <li><i class="fa fa-arrow-circle-right"></i> <a href="javaScript:void(0)" target="_blank">DIU Journal of Law and Human Rights</a></li>
                    <li><i class="fa fa-arrow-circle-right"></i> <a href="javaScript:void(0)" target="_blank">DIU Journal of Law and Human Rights</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- titmeline End -->

@endsection

@push('script')

@endpush
