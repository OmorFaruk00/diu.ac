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

        .journal {
            margin-top: 40px;
            margin-bottom: 200px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;

        }

        .article {
            margin-bottom: 30px;
        }

        .article h4 {
            color: #2EAA4D !important;
            margin-bottom: 10px !important;
            text-align: justify
        }

        .article p {
            margin-bottom: 15px !important;
        }

        .btn-abs {
            color: #2EAA4D !important;
            border: 1px solid #2EAA4D;
            padding: 5px 10px;
            font-size: 18px;
            font-weight: 500;
            margin-top: 0px;
        }

        .btn-abs:hover {
            color: #fff !important;
            background: #2EAA4D;

        }
    </style>
@endpush

@section('body')
    <!-- Page Header Start here -->
    <section class="page-header section-notch">
        <div class="overlay">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Journals</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Journals</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </section>
    <section>
        <div class="container">
            <div class="journal p-5">
                <h2>Vol. 12 (2022)</h2>
                <p> <strong>Published:</strong> No-2, 2022</p>
                <h3>Articles</h3>

               @if($journals)
               @foreach ( $journals as $index=>$item)                 
              
                <div class="article">
                    <h4>{{ $item->title}}</h4>                    
                    <p>{{ $item->author}}</p>                    
                    <a href="{{route('journal_details',['id'=>$item->id])}}" class="btn-abs" target="_blank">Abstract</a>
                </div>
                @endforeach                
                @endif       


            </div>

        </div>
    </section>
@endsection
