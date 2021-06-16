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


    <!-- Timeline Start -->
    <div class="sec-spacer">
        <div class="container-fluid">
            <div class="sec-title mb-30 text-center">
                <h2>Facilities</h2>
            </div>

            <Department-aditional-features/>

        </div>
    </div>
    <!-- Timeline End -->

    <!-- Gallery Start -->
    <div class="rs-gallery-4 rs-gallery sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>GALLERY</h2>
                <p>Our students engage themselves in various interesting extra curricular activities all through the
                    year.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/1.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, aut?</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/1.jpg"
                               title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, aut?">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/2.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>There are many variations of Lorem Ipsum available</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/2.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/3.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>There are many variations of Lorem Ipsum available</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/3.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/4.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>There are many variations of Lorem Ipsum available</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/4.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/5.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/5.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/6.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/6.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/5.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>There are many variations of Lorem Ipsum available</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/5.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('/') }}front/images/gallery/1.jpg" alt="Gallery Image"/>
                        <div class="gallery-desc">
                            <p>There are many variations of Lorem Ipsum available</p>
                            <a class="image-popup" href="{{ asset('/') }}front/images/gallery/1.jpg"
                               title="Photo Title Here">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- admission requirement Start -->
    <div class="rs-titmeline sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>Syllabus</h2>
                <p>A proper syllabus is maintained for the best outcome of academic experience in our university.</p>
            </div>

            <Department-syllabus/>

        </div>
    </div>
    <!-- admission requirement End -->


    <!-- OUR EXPERIENCED STAFFS Start -->
    <div id="rs-team" class="rs-team sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>Faculty Members</h2>
            </div>

            <Department-faculty-members/>

        </div>
    </div>
    <!-- OUR EXPERIENCED STAFFS End -->


@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
