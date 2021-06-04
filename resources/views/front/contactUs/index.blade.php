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
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Contact</span>
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
                <h2>OUR CAMPUS</h2>
            </div>
            <div class="rs-timeline">
                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Permanent Campus</h3>
                        <p>Address: Shatarkul, Badda, Dhaka-1212. Bangladesh.</p>
                        <p>Mobile: 55040891-7</p>
                        <p>E-mail: <a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p>Website: <a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                        <span class="rs-date"></span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Banani Campus</h3>
                        <p>Address: House # 4, Road # 1, Block - F, Banani, Dhaka -1213, Bangladesh</p>
                        <p>Mobile: 01939851062-4</p>
                        <p>E-mail: <a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p>Website: <a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                        <span class="rs-date"></span>
                    </div>
                </div>

                <div class="rs-timeline-block">
                    <div class="rs-timeline-icon">
                        <i class="fa fa-institution"></i>
                    </div>

                    <div class="rs-timeline-content">
                        <h3>Green Road Campus</h3>
                        <p>Address: 66 Green Road Dhaka - 1205, Bangladesh</p>
                        <p>Mobile: 01611348344-8</p>
                        <p>E-mail: <a href="mailto:admission@diu.net.bd">admission@diu.net.bd</a></p>
                        <p>Website: <a href="https://admission.diu.ac/register" target="_blank">https://admission.diu.ac/register</a></p>
                        <span class="rs-date"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- titmeline End -->

    <!-- map Start -->
    <div class="contact-page-section sec-spacer">
        <iframe src="https://www.google.com/maps/d/embed?mid=zpd50ugWdJd0.knmLtiVuBsXE" width="100%"
                height="500"></iframe>
    </div>
    <!-- map End -->


    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="contact-comment-section">
                <h3>Have Some Question ?</h3>
                <form id="contact-form" method="post" action="javaScript:void(0)">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input name="fname" id="fname" placeholder="first name" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input name="lname" id="lname" placeholder="last number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input name="email" id="email"  placeholder="email" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Subject *</label>
                                    <input name="subject" id="subject" placeholder="subject" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Message *</label>
                                    <textarea cols="40" rows="4" placeholder="message" id="message" name="message" class="textarea form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button class="btn btn-secondary">Send <i class="fa fa-rocket"></i></button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->




@endsection

@push('script')
    <!-- timeline js -->
    <script src="{{ asset('/') }}front/js/timeline.js"></script>
@endpush
