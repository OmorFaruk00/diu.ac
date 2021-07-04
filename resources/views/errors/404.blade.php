@extends('front.errors')

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
        .sec-title-2 p {
            font-size: 28px;
        }

        .sec-title-2 a {
            margin-top: 18px;
            padding: 5px 15px;
        }
    </style>
@endpush

@section('body')

    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">404</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">404</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section>

    <!-- titmeline Start -->
    <div class="rs-titmeline sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>Error-404</h2>
                <p>THE PAGE YOU ARE LOOKING FOR IS NOT FOUND! PLEASE CHECK THE URL AGAIN...</p>

                <a href="{{ route('homePage') }}" class="btn btn-secondary contact-button">Back To Home</a>
            </div>

        </div>
    </div>
    <!-- titmeline End -->
@endsection
