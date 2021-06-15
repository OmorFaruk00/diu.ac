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
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-title">
                        <h2>INTRODUCTION</h2>
                    </div>
                    <div class="about-desc">
                        <p>The Department of Computer Science and Engineering (CSE) at Dhaka International University
                            (also known as DIU) is a place where brightest minds from all over the country and abroad
                            assembles for a greater future. We have a strong alumni association to exchange academic and
                            professional knowledge and experience among the existing and former students of DIU in the
                            field of CSE. Our alumni serve in the top ranking universities as teachers and researchers
                            and in the top companies all around the world as software engineers and IT specialists. We
                            organize various co-curricular and extra-curriculum activities. Such as Programming contest,
                            Workshop, job Fair, The Debating Club, Seminar, Intra-Department Football/Cricket
                            Tournament, Indoor Games, etc. Our students are well equipped to take the challenge to stand
                            out as the leaders of tomorrow. We welcome all in our community who are willing to take the
                            challenge and who are trying to be the best in their future. Welcome to CSEDIU.</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="sec-title">
                        <h2>MISSION</h2>
                    </div>
                    <div class="about-desc">
                        <p>The mission of department of computer Science and Engineering (CSE) is to teach and prepare
                            educated, skilled, & ethically sound computer scientists and engineers for leadership and
                            professional careers and for advanced studies.</p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="sec-title">
                        <h2>VISION</h2>
                    </div>
                    <div class="about-desc">
                        <p>To produce competent professionals who shall be leaders in technology, industry and research
                            at the national and international level.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- About Us Start -->
    <div id="rs-about-2" class="rs-about-2 sec-spacer back-image department-head-section">
        <div class="container">
            <div class="row rs-vertical-middle">

                <div class="col-lg-7 col-md-12">
                    <div class="sec-title">
                        <h2>Department Head</h2>
                    </div>
                    <p class="mobile-mb-50">
                        Computer Science and Engineering (CSE) department started its journey in 1996 at the very
                        beginning of the establishment of the university. Now, the CSE Department is the largest
                        department of Dhaka International University. In total 26 full-time faculty members are serving
                        about 1600 students in B. Sc and M. Sc levels. The faculty members of the CSE department are
                        highly qualified, energetic, young and friendly with the students and university authority is
                        also trying their best to increase the existing facility of the students.
                        Students are engaged in various academic, co-curricular and extra-curricular activities. Our
                        students also participate in regional contests of the ACM International Collegiate Programming
                        Contest regularly.
                        Our graduates are successfully working in reputed companies and organizations likes Dhaka Stock
                        Exchange Limited, Data Soft, IP vision, Gramophone, Air-tel, Bangla-Link, TeleTalk, Robi, ICT
                        division, etc. They are also working in Banks, Garments sector and NGOs, etc. Some of our
                        graduates are also working as faculty members in the home and abroad. Our graduates are also
                        pursuing higher studies in different universities in the UK, Germany, Japan, Sweden, Norway, and
                        many other countries.
                        Recently, B.Sc. in CSE program at DIU has been accredited as a professional degree program by
                        the Board of Accreditation for Engineering and Technical Education (BAETE) of the Institution of
                        Engineers, Bangladesh (IEB). Our CSE graduates can become a member of IEB.
                    </p>

                    <div class="row about-signature">
                        <div class="col-md-12">
                            <h4>Dr. A.T.M. Mahbubur Rahman Sarker</h4>
                            <span>Dean (Faculty Of Science & Eng.) & Chairman</span> <br>
                            <span><a href="mailto:rahman.cse@diu-bd.net">rahman.cse@diu-bd.net</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="about-img rs-image-effect-shine">
                        <img src="https://api.diu.ac/images/profile_photo_file_141.jpg" alt="img02">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Objectives Start -->
    <div id="rs-about" class="rs-about sec-spacer about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-title">
                        <h2>Objectives</h2>
                    </div>
                    <div class="about-desc">
                        <ul>
                            <li><i class="fa fa-arrow-circle-o-right"></i> Knowledge of Engineering Sciences</li>
                            <p class="mb-2">Apply knowledge of mathematics, science, engineering fundamentals and an
                                engineering specialization to the conceptualization of engineering models</p>

                            <li><i class="fa fa-arrow-circle-o-right"></i> Knowledge of Engineering Sciences</li>
                            <p>Apply knowledge of mathematics, science, engineering fundamentals and an engineering
                                specialization to the conceptualization of engineering models</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
