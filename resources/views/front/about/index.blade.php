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

        .page-title {
            color: #FFFFFF;
        }

        .page-title ul li a span {
            color: #000000;
        }

        .governing-img {

        }

        .governing-img img {
            /*position: relative;*/
            display: block;
            width: 150px;
            height: 150px;
            /*overflow: hidden;*/
            margin: auto;
            clip-path: polygon(98.66025% 45%, 99.39693% 46.5798%, 99.84808% 48.26352%, 100% 50%, 99.84808% 51.73648%, 99.39693% 53.4202%, 98.66025% 55%, 78.66025% 89.64102%, 77.66044% 91.06889%, 76.42788% 92.30146%, 75% 93.30127%, 73.4202% 94.03794%, 71.73648% 94.48909%, 70% 94.64102%, 30% 94.64102%, 28.26352% 94.48909%, 26.5798% 94.03794%, 25% 93.30127%, 23.57212% 92.30146%, 22.33956% 91.06889%, 21.33975% 89.64102%, 1.33975% 55%, .60307% 53.4202%, .15192% 51.73648%, 0 50%, .15192% 48.26352%, .60307% 46.5798%, 1.33975% 45%, 21.33975% 10.35898%, 22.33956% 8.93111%, 23.57212% 7.69854%, 25% 6.69873%, 26.5798% 5.96206%, 28.26352% 5.51091%, 30% 5.35898%, 70% 5.35898%, 71.73648% 5.51091%, 73.4202% 5.96206%, 75% 6.69873%, 76.42788% 7.69854%, 77.66044% 8.93111%, 78.66025% 10.35898%);
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
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">About Us</span>
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
                    <img src="{{ asset('/') }}front/images/about/campus.jpg" alt="DIU introduction"/>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>Introduction</h2>
                    </div>
                    <div class="about-desc">
                        <p>Dhaka International University (DIU) is one of the leading, familiar and note-worthy private
                            universities in Bangladesh which was established on 7th April 1995. It is a non-profitable
                            institution having strict academic discipline. This university was founded by Late Alhaj
                            Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law,
                            University of Dhaka, Bangladesh.</p>

                        <p>It is recognized that Dhaka International University is such a private university, which was
                            founded by a person who was a renowned humanist and academician.He established this
                            university with high hopes and aspirations to disseminate knowledge and thus to extend the
                            horizon of knowledge. That is why, the motto of DIU is the universal adage, "Knowledge is
                            Power". DIU generates this power of Knowledge in an individual through teaching-learning,
                            training, research and guidance by using modern, pragmatic and well-designed curriculum and
                            syllabus.</p>
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
                        <p>Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M. Mafizul Islam
                            Patwari. He was a Professor of the Department of Law, University of Dhaka, Bangladesh. It
                            may be observed that Dhaka International University is perhaps the only private university
                            which was established by a person who was basically an academician. </p>
                        <p>He established this university with high hopes and aspirations to disseminate knowledge and
                            thus to extend the horizon of knowledge. That is why, the slogan of DIU is the universal
                            adage, “Knowledge is Power.” DIU wants to generate this power among individuals through
                            teaching, training and guidance by using age worthy, pragmatic and well-designed curricula
                            and syllabi.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12 mobile-mb-30 text-center">
                            <img src="{{ asset('/') }}front/images/about/founder.jpg"
                                 alt="Dr. A. B. M. Mafizul Islam Patwari"/>
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
                    <img src="{{ asset('/') }}front/images/about/mission.jpg" alt="DIU Mission"/>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-title">
                        <h2>OUR MISSION</h2>
                    </div>
                    <div class="about-desc">
                        <p>The mission of DIU is to produce capable leaders in the respective field of study who can
                            meet the challenges of present dynamic world. It wants to create multidisciplinary
                            knowledge, communication and interpersonal skills at the highest level of excellence among
                            the students which will make them honest, sincere and dedicated in their thoughts and deeds.
                        </p>
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
                        <p>The vision of DIU is to contribute to the nation by producing age-worthy, pragmatic and
                            eligible graduates through continual innovation in education and research.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mobile-mb-50">
                    <img src="{{ asset('/') }}front/images/about/vision.jpg" alt="DIU vision"/>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision End -->

    <!-- OUR EXPERIENCED STAFFS Start -->
    <div id="rs-team" class="rs-team sec-spacer">

        <About-experience-staffs :persons='{!! json_encode($keyResourcePersons) !!}'/>

    </div>
    <!-- OUR EXPERIENCED STAFFS End -->


    <!-- Timeline Start -->
    <div class="sec-spacer">
        <About-aditional-features/>
    </div>

    <!-- Timeline End -->


    <!-- Courses Start -->
    <div id="rs-courses-2" class="rs-courses-2 sec-spacer sec-color">

        <About-governing-bodies/>

    </div>
    <!-- Courses End -->

@endsection


@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
