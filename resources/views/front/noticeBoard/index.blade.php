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
                    <h1 class="page-title">Notice Board</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Notice Board</span>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->

    <!-- Latest notice && event Start -->
    <div id="rs-latest-news-style7" class="rs-latest-news-style7 notice-section py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <h2 class="uppercase title pb-50 md-pb-30">Our Latest Notice</h2>
                    <div class="rs-latest-list">

                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>

                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>

                        <div class="event-item-new d-block mb-10">
                            <div class="event-des text-right">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-sm justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="uppercase title pb-50 md-pb-30">Our Latest Events</h2>
                    <div class="rs-latest-list">

                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>

                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>
                        <div class="event-item-new mb-10">
                            <div class="event-date">
                                <div class="vertical-align">
                                    <span class="day">05 / Sep</span>
                                </div>
                            </div>
                            <div class="event-des">
                                <h4 class="title">
                                    <a href="#">Eshkool Gala Day For Kids</a>
                                </h4>
                            </div>
                        </div>

                        <div class="event-item-new d-block mb-10">
                            <div class="event-des text-right">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Latest notice && event end-->

@endsection


@push('script')

@endpush
