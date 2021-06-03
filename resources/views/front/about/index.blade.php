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
            background-color: rgba(146,176,110,.8);
            text-align: center;
        }
        .page-title{
            color: #FFFFFF;
        }
        .page-title ul li a span{
            color: #000000;
        }
    </style>
@endpush


@section('body')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">About Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span style="color: #FFFFFF!important;">About US</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->

    <!-- Introduction Start -->
    <div class="rs-history sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    <a href="#">
                        <img src="{{ asset('/') }}front/images/about/history.jpg" alt="History Image"/>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>Introduction</h2>
                    </div>
                    <div class="about-desc">
                        <p>Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline. This university was founded by Late Alhaj Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law, University of Dhaka, Bangladesh.</p>

                        <p>It is recognized that Dhaka International University is such a private university, which was founded by a person who was a renowned humanist and academician.He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the motto of DIU is the universal adage, "Knowledge is Power". DIU generates this power of Knowledge in an individual through teaching-learning, training, research and guidance by using modern, pragmatic and well-designed curriculum and syllabus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->

    <!-- DIU And Its Founder Start -->
    <div class="rs-mission sec-color sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mobile-mb-50">
                    <div class="abt-title">
                        <h2>DIU And Its Founder</h2>
                    </div>
                    <div class="about-desc">
                        <p>Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M. Mafizul Islam Patwari. He was a Professor of the Department of Law, University of Dhaka, Bangladesh. It may be observed that Dhaka International University is perhaps the only private university which was established by a person who was basically an academician. </p>
                        <p>He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the slogan of DIU is the universal adage, “Knowledge is Power.” DIU wants to generate this power among individuals through teaching, training and guidance by using age worthy, pragmatic and well-designed curricula and syllabi.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 mobile-mb-30">
                            <a href="#">
                                <img src="{{ asset('/') }}front/images/about/mission1.jpg" alt="Mission Image"/>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#">
                                <img src="{{ asset('/') }}front/images/about/mission2.jpg" alt="Mission Image"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DIU And Its Founder End -->

    <!-- MISSION Start -->
    <div class="rs-history sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    <a href="#">
                        <img src="{{ asset('/') }}front/images/about/history.jpg" alt="History Image"/>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>OUR MISSION</h2>
                    </div>
                    <div class="about-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum.</p>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, that they cannot fore see the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MISSION End -->

    <!-- Vision Start -->
    <div class="rs-vision sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h1>Our Vision</h1>
                    </div>
                    <div class="vision-desc">
                        <p>The vision of DIU is to contribute to the nation by producing age-worthy, pragmatic and eligible graduates through continual innovation in education and research.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mobile-mb-50">
                    <div class="vision-img rs-animation-hover">
                        <img src="{{ asset('/') }}front/images/about/vision.jpg" alt="img02"/>
                        <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->


    <!-- OUR EXPERIENCED STAFFS Start -->
    <div id="rs-team" class="rs-team sec-spacer">
        <div class="container">
            <div class="sec-title-2 mb-50 text-center">
                <h2>OUR EXPERIENCED STAFFS</h2>
                <p>Considering desire as primary motivation for the generation of narratives is a useful concept.</p>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/1.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">ABD Rashid Khan</h3>
                            <span class="subtitle">Vice Chancellor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single-2.html">ABD Rashid Khan</a></h3>
                                <span class="team-title">Vice Chancellor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/2.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Luyes Figery</h3>
                            <span class="subtitle">A. Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                <span class="team-title">A. Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/3.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Mr. Mahabub Alam</h3>
                            <span class="subtitle">Assistant Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single-2.html">Mr. Mahabub Alam</a></h3>
                                <span class="team-title">Assistant Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/1.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">ABD Rashid Khan</h3>
                            <span class="subtitle">Vice Chancellor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single-2.html">ABD Rashid Khan</a></h3>
                                <span class="team-title">Vice Chancellor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/2.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Luyes Figery</h3>
                            <span class="subtitle">A. Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                <span class="team-title">A. Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('/') }}front/images/team/3.jpg" alt="team Image" />
                        <div class="normal-text">
                            <h3 class="team-name">Mr. Mahabub Alam</h3>
                            <span class="subtitle">Assistant Professor</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <div class="overly-border"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h3 class="team-name"><a href="teachers-single-2.html">Mr. Mahabub Alam</a></h3>
                                <span class="team-title">Assistant Professor</span>
                                <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR EXPERIENCED STAFFS End -->


    <!-- Timeline Start -->
    <div class="sec-spacer">
        <div class="container-fluid">
            <div class="sec-title mb-30 text-center">
                <h2>DIU Additional Features</h2>
                <p>These additional features make us unique and set us apart from other organizations.</p>
            </div>
            <div class="rs-timeline-2">
                <ol>
                    <li>
                        <div>
                            <time>Hostel</time> DIU offers well-decorated hostel with modern facilities.At present there are seven boys hostel (Nikunja, Khilkhet and Satarkul, Badda) and two girls hostels (Green Road & Satarkul).
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Labs</time> DIU has 8 Pharmacy labs, 10 Computer labs, 12 EETE labs & 10 Civil Labs. All labs are designed by the experts from DU and BUET, and equipped with modern appliances
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>English Proficiency</time> In order to improve English proficiency of the students, DIU has set up a language institute with expert tutors and modern language labs.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Library</time> DIU library is equipped with up-to-date books and reading materials. More than fifty (50) thousand books are available at DIU libraby. E-library has already been started.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Canteen & Common Rooms</time> DIU has its own catering service and each building has big common & leisure rooms.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Class Rooms</time> All class rooms of DIU are spacious, well-decorated, and equipped with multimedia projector.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Wi-Fi and Internet</time> All DIU compuses are under Wi-Fi facilities. Internet facilities are available for all students.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Transport</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>Medium of Instruction</time> English is the medium of instruction for all programs at DIU.
                        </div>
                    </li>
                    <li></li>
                </ol>
                <div class="arrows">
                    <button class="arrow arrow__prev disabled" disabled></button>
                    <button class="arrow arrow__next"></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline End -->

@endsection


@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
