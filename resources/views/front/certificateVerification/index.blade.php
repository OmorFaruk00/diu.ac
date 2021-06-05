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
                    <h1 class="page-title">Certificate Verification</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Certificate Verification</span>
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
                <h2>WELCOME TO OUR Certificate Verification</h2>
            </div>
        </div>

        <form action="">
            <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                <div class="form-group">
                    <label for="roll">Roll</label>
                    <input type="number" class="form-control" placeholder="Enter roll" required>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                <div class="form-group">
                    <label for="session">Session</label>
                    <input type="text" class="form-control" placeholder="Enter session">
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                <div class="form-group">
                    <label for="session">Reg Code</label>
                    <input type="text" class="form-control" placeholder="Enter reg code">
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                <div class="form-group">
                    <label for="passingYear">Passing Year</label>
                    <select name="passingYear" id="passingYear" class="form-control">
                        <option value="1">1</option>
                        <option value="1">2</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                <button type="submit" class="btn btn-info">Search</button>
            </div>
        </form>



    </div>
    <!-- titmeline End -->

@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
