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
        .documents-title{
            font-size: 22px;
            text-decoration: underline;
            color: #01aa4d;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .contact-address p {
            font-size: 13px;
        }
    </style>
@endpush

@section('body')

    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Admission</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Admission</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->

    <!-- admission requirement Start -->
    <div class="rs-titmeline sec-spacer">
        <div class="container">
            <div class="abt-title mb-70 text-center">
                <h2>WELCOME TO OUR ADMISSION</h2>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Admission Eligibility</h3>
                        <p>Candidates seeking admission must apply in prescribed application Form which can be collected on payment of Tk. 1000.00 Candidates having 2nd division or at least GPA 2.50 in both SSC & HSC examinations, or their equivalents are eligible to apply for admission into Honours program in Law,English, Sociology and Business Administration. For B.Sc in (Computer Science & Engineering), B.Sc.( Electrical, Electronics and Telecommunication Engineering) and B.Sc (Civil Engineering) programs, candidate must have physics & Mathematics at their HSC level.For Bachelor of Pharmacy (B.Pharm.) program, candidates must have Biology & Chemistry at their HSC level.For LL.M (2 years), M.A English (2.5 Years), MSS Sociology (2 Years), MHRL, and MBA programs, the applicants must have at least Bachelor Degree with GPA-2.00 (minimum). For LL.M (2 Years), student must complete LL.B (Pass) Course.</p>
                        <span class="rs-date">Admission Eligibility</span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-file"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Required Documents</h3>
                        <ul>
                            <li class="documents-title">For Undergraduate/ Honors Program:</li>
                            <li><i class="fa fa-arrow-circle-right"></i> Original Transcript & Certificate of S.S.C. or Equivalent with 2 photocopies.</li>
                            <li><i class="fa fa-arrow-circle-right"></i> Original Transcript & Certificate of H.S.C. or Equivalent with 2 photocopies.</li>
                            <li><i class="fa fa-arrow-circle-right"></i> 7 Copies of Pass Port size Photograph .</li>

                            <li class="mt-2 documents-title">For Master’s / Graduate Program:</li>

                            <li><i class="fa fa-arrow-circle-right"></i> Original Transcript & Certificate of S.S.C. or Equivalent with 2 photocopies.</li>
                            <li><i class="fa fa-arrow-circle-right"></i> Original Transcript & Certificate of H.S.C. or Equivalent with 2 photocopies.</li>
                            <li><i class="fa fa-arrow-circle-right"></i> Original Transcript & Certificate of Undergraduate/ Honor’s Program with 2 photocopies.</li>
                            <li><i class="fa fa-arrow-circle-right"></i> 7 Copies of Pass Port size Photograph .</li>
                        </ul>
                        <span class="rs-date">Required Documents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- admission requirement End -->


    <!-- Tuition Fee Start -->
    <div id="rs-about" class="rs-about sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Tuition Fee</h2>
                <p style="max-width: 750px;margin: auto">For Undergraduate/ Honors Program / Master’s / Graduate Program
                    <br>
                    (** Tuition fee may be changed as per instruction of the authority.)
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="accordion" class="rs-accordion-style1">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Faculty of Law
                                </h3>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Sl. No.</th>
                                                <th>Name of Program</th>
                                                <th>Duration</th>
                                                <th>Credit</th>
                                                <th>Total Fees (BDT)</th>
                                                <th></th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>LL.B - Hons - First Shift</td>
                                                <td>4 years</td>
                                                <td>126</td>
                                                <td>550000 TK</td>
                                                <td class="text-center">
                                                    <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>LL.B - Hons - First Shift</td>
                                                <td>4 years</td>
                                                <td>126</td>
                                                <td>550000 TK</td>
                                                <td class="text-center">
                                                    <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Faculty of Business Studies
                                </h3>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name of Program</th>
                                            <th>Duration</th>
                                            <th>Credit</th>
                                            <th>Total Fees (BDT)</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>LL.B - Hons - First Shift</td>
                                            <td>4 years</td>
                                            <td>126</td>
                                            <td>550000 TK</td>
                                            <td class="text-center">
                                                <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>LL.B - Hons - First Shift</td>
                                            <td>4 years</td>
                                            <td>126</td>
                                            <td>550000 TK</td>
                                            <td class="text-center">
                                                <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header mb-0" id="headingThree">
                                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Faculty of Arts and Social Sciences
                                </h3>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name of Program</th>
                                            <th>Duration</th>
                                            <th>Credit</th>
                                            <th>Total Fees (BDT)</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>LL.B - Hons - First Shift</td>
                                            <td>4 years</td>
                                            <td>126</td>
                                            <td>550000 TK</td>
                                            <td class="text-center">
                                                <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>LL.B - Hons - First Shift</td>
                                            <td>4 years</td>
                                            <td>126</td>
                                            <td>550000 TK</td>
                                            <td class="text-center">
                                                <a href="" target="_blank" class="btn btn-success">Apply <i class="fa fa-rocket"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Application For Admission</h2>
                <p style="max-width: 750px;margin: auto">
                    A candidate seeking admission to a program must procure prescribed Application From from DIU office on payment of TK. 1000.00. Admission form available at admission information section:

                    On the basis of admission test result, a student will get full free scholarship.
                </p>
            </div>

            <div class="row contact-address-section">
                <div class="col-md-4 pl-0">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Permanent Campus</h3>
                        <p>Shatarkul, Badda, <br> Dhaka-1212. Bangladesh.</p>
                        <p>55040891-7</p>
                        <p><a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p><a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Banani Campus</h3>
                        <p>House # 4, Road # 1, Block - F, Banani, <br> Dhaka -1213, Bangladesh</p>
                        <p>01939851062-4</p>
                        <p><a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p><a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                        <span class="rs-date"></span>
                    </div>
                </div>
                <div class="col-md-4 pr-0">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Green Road Campus</h3>
                        <p>66 Green Road <br> Dhaka - 1205, Bangladesh</p>
                        <p>01611348344-8</p>
                        <p><a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p><a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                        <span class="rs-date"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
