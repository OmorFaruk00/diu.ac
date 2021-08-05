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
                    <h1 class="page-title">Books And Library</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Books And Library</span>
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
            <div class="sec-title-2 mb-50 text-center">
                <h2 class="text-capitalize">WELCOME TO OUR Books And Library</h2>
            </div>
            <div class="rs-timeline mb-100">

                <div class="rs-timeline-block">

                    <div class="rs-timeline-content">
                        <p>Due to the explosion of knowledge in both traditional and digital forms, DIU Library has
                            developed a system that is capable of serving the best of its users. DIU Library is working
                            closely with faculties to integrate resources and also to ensure that our collections meet
                            with needs of our teaching and research programs.</p>
                        <h3>Library Website <br>Team Library</h3>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- titmeline End -->

@endsection


@push('script')

@endpush
