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
                    <h1 class="page-title">Cell</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Institute</span>
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
                <h2>WELCOME TO OUR CELL</h2>
                <p style="max-width: 700px;margin: 0 auto;">Dhaka International University formally formed various
                    separate cell for development of DIU, Society as well as Bangladesh. Those cells are formed for work
                    on specific purpose. Those cells actually work with various alliance, Government, non-governmental
                    and international organizations work together.</p>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>SBAC</h3>
                        <p>Nobel Peace Prize Winner Prof. Muhammad Yunus want to remove proverty from the world. For
                            this reson, he launches a new business for heping for helping the poor which is known as
                            social busniess is a causedriven business. In a social business, the investors or owners can
                            gradually recoup the money invested, but cannot take any dividend beyond that point. The
                            purpose of the investment is purely to achieve one or more social objectives though the
                            operation of the company; no personal gain is desired by the investors. The company must
                            cover all cost, make aprofit, and at the same time achieve a social objective, such as,
                            healthcare for the poor, housing for the poor, financial services for the poor, nutrition
                            for malnourished children, providing safe drinking water, introducing renewable energy, etc.
                            The impact of the business on people or the enviroment, rather then amount of profit made in
                            a given period measures the success of a social business. sustainability of the company
                            indicates that it is running as a business.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">SBAC</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>IQAC</h3>
                        <p>In order to enhance and to get a continuous patronage of Quality Assurance (QA) culture at
                            different entities/departments of Dhaka International University (DIU), the Institutional
                            Quality Assurance Cell (IQAC) was constituted on 01 July 2015. The IQAC consists of seven
                            (07) entities namely Law, CSE (Computer Science & Engineering), English, EETE (Electrical,
                            Electronics, & Telecommunication Engineering), Business Administration, Pharmacy and
                            Sociology. It is obvious that IQAC is a mutual endeavour between Dhaka International
                            University and University Grants Commission (UGC), Bangladesh which is resolutely committed
                            to ensure the practice of continuously improving quality culture, demonstrate responsibility
                            and enhancement and thus, to satisfy the different stakeholders (Existing Students, Alumni,
                            Academic and Non-Academic Staffs, Employer, etc.). The quality assurance areas covered by
                            IQAC are based on governance, curriculum content design and review, student admission,
                            progress and achievements, physical facilities, teaching-learning and assessment, student
                            support services, staff and facilities, research and extension, as well as process
                            management and continuous improvement. Having set up IQAC, a lot of workshops, training on
                            different events and meetings are being conducted for improving the existing quality culture
                            at different entities of this university. It is mentionable that IQAC itself conducted four
                            (04) QAC (Quality Assurance Committee) meetings, 15 meetings which are related to IQAC fund,
                            as well as 22 academic and non-academic training/workshops based upon Block Allocation till
                            Nov. 2017. Moreover, to maintain an upgrading quality culture on teaching-learning methods
                            and curriculum design, SA (Self-Assessment) Committees of different entities also conducted
                            a lot of meetings with their faculty members. The External Peer Reviews (EPRs) of Law, CSE
                            and English departments were successfully accomplished on 31 May-02 June 2017. Likewise, the
                            EPRs of departments of Business Administration, Pharmacy, Sociology as well as EETE were
                            fruitfully completed on 16-18 May, 25-27 May as well as on 13-15 July, 2017 respectively.
                            Accordingly, all Reports of seven departments have already been submitted at QA (Quality
                            Assurance) Unit, UGC after furnishing necessary improvement plans.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">IQAC</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>TCRC</h3>
                        <p>Stop tobacco cultivation and grow food for creating a better living place for the next
                            generation,” with this vision Dhaka International University has established Tobacco Control
                            and Research Cell (TCRC) on March 2nd 2013. Bangladesh is a small and densely populated poor
                            country having about 153.2 million people, about 80 percent of whom are living in rural
                            areas. This country is a disaster-prone area having been stricken by drought and flood with
                            a range of health and environmental problems happening from dengue and cholera to arsenic
                            contamination of the water supply. It should come as no surprise, then, that tobacco control
                            has neither gained much attention nor been considered a priority. With so many competing
                            causes of disease and with nearly half of the population living below the poverty line and
                            consuming less than 2,122 calories per day (Bangladesh Bureau of Statistics 2012a), tobacco
                            has generally seemed too remote and insignificant issue to be on the country’s agenda of
                            concerns. Yet tobacco use is widespread and increasing rapidly and knowledge about the harm
                            it causes to health is very low. Though, other causes of death still dominate tobacco use
                            contributes a nontrivial amount to the overall burden of disease and death. And it has
                            become clear and significant that immediate negative effects on the welfare of poor
                            families, when scarce resources that could be used for food are spending on tobacco. Tobacco
                            cultivation can be basically termed as ‘Contract farming’, because in majority of the cases
                            the cultivation of tobacco is contracted with a large business organization or multinational
                            company.
                        </p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">TCRC</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>CECD (Centre for Excellence and Career development)</h3>
                        <p>Centre for Excellence and Career Development (CECD) of Dhaka International University is
                            working with the goal to develop students’ language proficiency, creative writing,
                            professional skills and career guidance. CECD language experts focus on conducting
                            student-centered, creative language teaching techniques, and individual guidance based on
                            classroom activities in developing students’ language proficiency. This centre also helps
                            the students enhance their personal qualities for the development of their career paths to
                            choose from aspiration. It incorporates the students in movie fest, language club,
                            workshops, seminars, and conferences regularly, where they can get the touch of national and
                            international professionals. The centre also encourages the learners to have the students’
                            creative writing by dint of publishing literary magazines, which would build students’
                            innovative qualities and make them unique throughout the competitive world.</p>
                        <a href="javaScript:void(0)" class="rs-read-more">Read more</a>
                        <span class="rs-date">CECD (Centre for Excellence and Career development)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- titmeline End -->

@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
