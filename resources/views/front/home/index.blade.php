@extends('front.master')

@push('style')
    <style>
        .notice-section {
            background-image: linear-gradient(#FFFFFF, #01AA4D);
        }

        .about-section {
            background: #ddd;
        }

        .card {
            background: transparent !important;
        }

        .back-image {
            /*background-size: 100%;*/
            background-attachment: fixed;
            background-position: center top;
        }
    </style>
@endpush


@section('body')

    <!-- Slider Area Start -->
    <div id="rs-slider" class="slider-overlay-2">
        <div id="home-slider">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{ asset('/') }}front/images/slider/1.jpg" alt="Slide1"/>
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <h1 class="slider-title" data-animation-in="fadeInLeft"
                                    data-animation-out="animate-out">
                                    WELCOME TO DIU</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br
                                        class="hidden-sm-dow">Dolor id in, perferendis
                                    provident quidem voluptate.</p>
                                <a href="https://admission.diu.ac/register" target="_blank" class="sl-get-started-btn"
                                   data-animation-in="lightSpeedIn"
                                   data-animation-out="animate-out">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <img src="{{ asset('/') }}front/images/slider/2.jpg" alt="Slide2"/>
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">
                                    Lorem ipsum dolor sit amet.</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, voluptates.<br
                                        class="hidden-sm-dow"> NQuasi, voluptates.</p>
                                <a href="https://admission.diu.ac/register" target="_blank" class="sl-get-started-btn"
                                   data-animation-in="fadeInUp"
                                   data-animation-out="animate-out">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item">
                <img src="{{ asset('/') }}front/images/slider/3.jpg" alt="Slide3"/>
                <div class="slide-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container text-center">
                                <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">
                                    Lorem ipsum dolor sit.</h1>
                                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquid, animi
                                    nisi sit vero?</p>

                                <a href="https://admission.diu.ac/register" target="_blank" class="sl-get-started-btn"
                                   data-animation-in="fadeInUp"
                                   data-animation-out="animate-out">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Services Start -->
    <div class="rs-services rs-services-style1">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <Home-service-card icon="fa fa-american-sign-language-interpreting" title="Trending Courses"
                                       details="Lorem ipsum dolor sit amet Sed nec molestie justo"/>
                </div>

                <div class="col-lg-3 col-md-6">
                    <Home-service-card icon="fa fa-book" title="Books & Liberary"
                                       details="Lorem ipsum dolor sit amet Sed nec molestie justo"/>
                </div>

                <div class="col-lg-3 col-md-6">
                    <Home-service-card icon="fa fa-user" title="Certified Teachers"
                                       details="Lorem ipsum dolor sit amet Sed nec molestie justo"/>
                </div>

                <div class="col-lg-3 col-md-6">
                    <Home-service-card icon="fa fa-graduation-cap" title="Certification"
                                       details="Lorem ipsum dolor sit amet Sed nec molestie justo"/>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- About Us Start -->
    <div id="rs-about" class="rs-about sec-spacer about-us">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>ABOUT US</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img rs-animation-hover">
                        <img src="{{ asset('/') }}front/images/about/campus.jpg" alt="DIU campus"/>
                        <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=Yt5K96ump9w"
                           title="Video Icon">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-desc">
                        <h3>WELCOME TO DIU</h3>
                        <p>Dhaka International University (DIU) is one of the leading, familiar and note-worthy private
                            universities in Bangladesh which was established on 7th April 1995. It is a non-profitable
                            institution having strict academic discipline. This university was founded by Late Alhaj
                            Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law,
                            University of Dhaka, Bangladesh. It is recognized that Dhaka International University is
                            such a private university, which was founded by a person who was a renowned humanist and
                            academician. <a href="{{ route('about-us') }}" target="_blank">See more..</a></p>

                    </div>
                    <div id="accordion" class="rs-accordion-style1">
                        <div class="card">
                            <div class="card-header" id="ourMission">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseOurMission"
                                    aria-expanded="true" aria-controls="collapseOurMission">
                                    Our Mission
                                </h3>
                            </div>
                            <div id="collapseOurMission" class="collapse" aria-labelledby="ourMission"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    The mission of DIU is to produce capable leaders in the respective field of study
                                    who can meet the challenges of present dynamic world. It wants to create
                                    multidisciplinary knowledge, communication and interpersonal skills at the highest
                                    level of excellence among the students which will make them honest, sincere and
                                    dedicated in their thoughts and deeds.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="ourVision">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseOurVission"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Our Vision
                                </h3>
                            </div>
                            <div id="collapseOurVission" class="collapse" aria-labelledby="ourVision"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    The vision of DIU is to contribute to the nation by producing age-worthy, pragmatic
                                    and eligible graduates through continual innovation in education and research.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header mb-0" id="itsFounder">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    DIU And Its Founder
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="itsFounder"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M.
                                    Mafizul Islam Patwari. He was a Professor of the Department of Law, University of
                                    Dhaka, Bangladesh. It may be observed that Dhaka International University is perhaps
                                    the only private university which was established by a person who was basically an
                                    academician. He established this university with high hopes and aspirations to
                                    disseminate knowledge and thus to extend the horizon of knowledge. That is why, the
                                    slogan of DIU is the universal adage, “Knowledge is Power.” DIU wants to generate
                                    this power among individuals through teaching, training and guidance by using age
                                    worthy, pragmatic and well-designed curricula and syllabi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Latest notice && event Start -->
    <div id="rs-latest-news-style7" class="rs-latest-news-style7 notice-section">
        <div class="container">
            <div class="row">

                <Home-notice-event/>

            </div>
        </div>
    </div>
    <!-- Latest notice && event end-->

    <!-- CAMPUS / OTHER FACILITIES Start -->
    <div id="rs-about" class="rs-about sec-spacer about-section mt-5 back-image"
         style="background-image: url({{ url('front/images/bg/dot-grid.png')}}">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Campus / Other Facilities</h2>
            </div>
            <div class="row">

                <div class="col-lg-6 col-md-12">

                    <div class="about-desc">
                        <h3>WELCOME OUR CAMPUS</h3>
                    </div>

                    <div class="about-desc">
                        <img src="{{ asset('/') }}front/images/campus.jpg" alt="diu-campus">
                    </div>

                    <div id="campusAccordion" class="rs-accordion-style1">
                        <div class="card">
                            <div class="card-header" id="PermanentCampus">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapsePermanentCampus"
                                    aria-expanded="true" aria-controls="collapsePermanentCampus">
                                    Permanent Campus
                                </h3>
                            </div>
                            <div id="collapsePermanentCampus" class="collapse" aria-labelledby="PermanentCampus"
                                 data-parent="#campusAccordion">
                                <div class="card-body">
                                    DIU has established its permanent campus at Satarkul-Badda, Dhaka- Bangladesh. It is
                                    located at one of the center places of Dhaka. Total land area is 1.18 acre. There
                                    are two buildings. One is three (3) storied building and another is four(4) storied.
                                    Modern facilities are available at permanent campus. The entrance road of the
                                    permanent campus is decorated with green trees, which looks so to attractive and
                                    mind blowing. DIU authority will construct a Long Tennis coat, Basket ball ground,
                                    Indoor games ground as well as a big ground for playing Football and Cricket very
                                    soon. Classes of Department of English, Department of Sociology, Department of
                                    Pharmacy, Department of law & Department of Civil has already been started at
                                    permanent campus. Total building area is about 75000 square feet. The architectural
                                    view of the two buildings will touch the heart and it will help for remembering the
                                    design of moghul architectural style. Different departments and offices will shift
                                    there very soon as per government guide line.
                                    <br>

                                    Please Contact for any information: Shatarkul, Badda, Dhaka.Bangladesh. <br>

                                    Cell Number: 01939851060-1 <br>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="BananiCampus">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseBananiCampus"
                                    aria-expanded="false" aria-controls="collapseBananiCampus">
                                    Banani Campus
                                </h3>
                            </div>
                            <div id="collapseBananiCampus" class="collapse" aria-labelledby="BananiCampus"
                                 data-parent="#campusAccordion">
                                <div class="card-body">
                                    DIU Banani Campus is located at one of the center places of Dhaka. The building is
                                    owned by DIU. There are two buildings. One is five(5) storied and another is four(4)
                                    storied. Classes of different programs belong to faculty of Business Studies and
                                    Faculty of Law are held at Banani Campus. Offices of the honorable chairman and
                                    vice-chairman,honorable vice chancellor and Treasurer, Registrar and Additional
                                    Registrar & Controller of examinations are situated at Banani campus. There is a big
                                    cafeteria at Banani Campus. The campus area is monitored through CC camera. WiFi and
                                    other modern facilities are available. There are a library, prayer room, female
                                    common room and Indoor games room as well as a computer laboratory for students.
                                    More than twenty five thousand (25000) Books, journals, e-library and other
                                    facilities are exist at the library.

                                    <br>

                                    House # 4, Road # 1 Block – F, Banani (Near at Banani chairman Bari Bus Stand)
                                    Dhaka-1213 Bangladesh. <br>

                                    Cell Number: 01939851060-4
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header mb-0" id="GreenRoadCampus">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseGreenRoadCampus"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Green Road Campus
                                </h3>
                            </div>
                            <div id="collapseGreenRoadCampus" class="collapse" aria-labelledby="GreenRoadCampus"
                                 data-parent="#campusAccordion">
                                <div class="card-body">
                                    DIU Green Road Campus is located at the heart of the city, Green Road-Pantha Path.
                                    The location of the Campus is so nice because it is very near at Farmgate and
                                    Bashundhra City. It is a twelfth storied building. Classes of different programs
                                    like Department of CSE, Department of EETE, and Department of English, Department of
                                    Sociology, Department of Business administration and Department of Law are held at
                                    this campus. A big library, prayer room, a big cafeteria, female common room and
                                    indoor games room are available at this campus. More than twenty thousand books,
                                    journals, E-library and other facilities are exist at the library. The campus area
                                    is monitored through CC camera. WiFi and other modern facilities are available.
                                    <br>
                                    66 Green Road, Pantha Path Dhaka-1213, Bangladesh.
                                    <br>
                                    Cell Number: 01611348344-8
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-desc">
                        <h3>Other Facilities</h3>
                    </div>
                    <div id="facilitiesAccordion" class="rs-accordion-style1">

                        <div class="card">
                            <div class="card-header" id="AcademicSession">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseAcademicSession"
                                    aria-expanded="true" aria-controls="collapseAcademicSession">
                                    Academic Session
                                </h3>
                            </div>
                            <div id="collapseAcademicSession" class="collapse" aria-labelledby="AcademicSession"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    The Academic year is mainly divided into three semesters. Each semester consists of
                                    18 weeks including examinations. Dhaka International University (DIU) has its own
                                    Holiday list.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="healthService">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseHealthService"
                                    aria-expanded="false" aria-controls="collapseHealthService">
                                    Health Service
                                </h3>
                            </div>
                            <div id="collapseHealthService" class="collapse" aria-labelledby="healthService"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    Dhaka international University has health services department . Doctors are
                                    available in all campuses . They consult the students with their health related
                                    problems.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="Accommodation">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseAccommodation"
                                    aria-expanded="false" aria-controls="collapseAccommodation">
                                    Accommodation
                                </h3>
                            </div>
                            <div id="collapseAccommodation" class="collapse" aria-labelledby="Accommodation"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    DIU officers well-decorated hotels with modern facilities. At present there are six
                                    boys hostel and one girls' hostel.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="studentsWelfare">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseStudentsWelfare"
                                    aria-expanded="false" aria-controls="collapseStudentsWelfare">
                                    Student’s Welfare
                                </h3>
                            </div>
                            <div id="collapseStudentsWelfare" class="collapse" aria-labelledby="studentsWelfare"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    Dhaka international University is committed to serve the students. As per private
                                    university act - 2010, DIU authority has appointed student welfare adviser. Student
                                    welfare adviser conselts with the students regarding their problems and solv the
                                    problems.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="careerCounseling">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseCareerCounseling"
                                    aria-expanded="false" aria-controls="collapseCareerCounseling">
                                    Career Counseling
                                </h3>
                            </div>
                            <div id="collapseCareerCounseling" class="collapse" aria-labelledby="careerCounseling"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    DIU has its career counseling department. An institute has been set up. The name of
                                    the institued is Center for Excellence and Career Development. CECD organizes career
                                    related seminer, workshop and job fair for the students.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="onCourseCounseling">
                                <h3 class="acdn-title collapsed" data-toggle="collapse"
                                    data-target="#collapseOnCourseCounseling"
                                    aria-expanded="false" aria-controls="collapseOnCourseCounseling">
                                    On-Course Counseling
                                </h3>
                            </div>
                            <div id="collapseOnCourseCounseling" class="collapse" aria-labelledby="onCourseCounseling"
                                 data-parent="#facilitiesAccordion">
                                <div class="card-body">
                                    Every teachers of Dhaka international University has allocated their time in their
                                    daily class routin for on cours counciling for students. Students get benefite form
                                    ther on-cours counseling. It is compulsary for all teachers to allocate time for the
                                    students.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- CAMPUS / OTHER FACILITIES Us End -->

    <!-- Programs Start -->
    <div id="rs-products" class="rs-products sec-spacer sec-color">
        <Home-our-program :programs="{{ $programs }}"/>
    </div>
    <!-- Programs end -->

    <!-- Our Campus Life Start -->
    <div id="rs-team" class="rs-team sec-color sec-spacer back-image"
         style="background-image: url({{ url('front/images/bg/dot-grid.png')}}">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Our Campus Life</h2>
            </div>

            <Home-our-campus-life/>

        </div>
    </div>
    <!-- Our Campus Life End -->

    <!-- Counter Up Section Start-->
    <div class="rs-counter pt-45 pb-70 back-image universitiy-achievement mt-3"
         style="background-image: url({{ url('front/images/bg/DIU_Dhaka_International_University_OUT_banner.jpg')}}">
        <div class="container">
            <div class="sec-title white-text mb-30 text-center">
                <h2>Statistics Present Our Strength</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="rs-counter-list">
                        <h2 class="counter-number plus">60</h2>
                        <h4 class="counter-desc">Current Foreign Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rs-counter-list">
                        <h2 class="counter-number plus">40</h2>
                        <h4 class="counter-desc">Current Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rs-counter-list">
                        <h2 class="counter-number plus">900</h2>
                        <h4 class="counter-desc">Full time teachers and employees</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="rs-counter-list">
                        <h2 class="counter-number plus">3675</h2>
                        <h4 class="counter-desc">Number of alumnis</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Up Section End -->

    <!-- Partner Start -->
    <div id="rs-partner" class="rs-partner pt-70 pb-70 back-image"
         style="background-image: url({{ url('front/images/bg/dot-grid.png')}}">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Our Partners</h2>
            </div>

            <Home-our-partner/>

        </div>
    </div>
    <!-- Partner End -->
@endsection
