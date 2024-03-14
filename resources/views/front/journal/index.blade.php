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

        .journal {
            margin-top: 40px;
            margin-bottom: 200px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;

        }

        
    
    </style>
@endpush

@section('body')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Journals</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Journals</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </section>
    <div class="container">
        <div class="journal p-5">       
        <div class="sec-title-2 mb-70 text-center">
            <h2>WELCOME TO OUR Journals</h2>
            <p style="text-align: justify">DIU is profoundly esteemed for it's own reputation which is
                built upon credibility, practical knowhow and a feasible archive of books, bulletins and journals.
                DIU has published a few original books written by its teachers and faculties. Whereas bulletins help
                students to keep upto date regarding their class and exam routines, schedule and other important
                notices. Both faculties and students of extraordinary merit are allowed to write their own
                journals.</p>
        </div>
        <h2>Our Journals</h2>
        <ul>
        <li>
            <i class="fa fa-arrow-circle-right mr-2"></i>
            <a href="{{url('/journals/volume/12')}}" target="_blank"> Volume 12 No 2 2022</a>
        </li>
        </ul>
    </div>

   
@endsection
