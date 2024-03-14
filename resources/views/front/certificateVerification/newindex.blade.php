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
                    <h1 class="page-title">Certificate Verificationss</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('homePage') }}">Home</a> / <span
                                style="color: #FFFFFF!important;">Certificate Verification</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </section>

    <form id="certificateForm" class="py-5">
        @csrf <!-- Add CSRF token for Laravel -->

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="roll">Roll</label>
                <select id="roll" class="form-control" name="roll" required>
                    <option value="" selected disabled hidden>Select roll</option>
                    @php
                        for ($row = 1; $row <= 600; $row++) {
                            echo "<option value='" . str_pad($row, 2, '0', STR_PAD_LEFT) . "'>" . str_pad($row, 2, '0', STR_PAD_LEFT) . '</option>';
                        }
                    @endphp
                </select>
                <small id="rollError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="session">Session</label>
                <select class="form-control" name="session" id="session" required>
                    <option value="" selected disabled hidden>Select session</option>
                    @php
                        function sessionCreate($year)
                        {
                            return $year . '-' . ($year + 1);
                        }
                        $currentYear = date('Y');
                        $startYear = 1993;
                        for ($year = $startYear; $year <= $currentYear; $year++) {
                            $session = sessionCreate($year);
                            echo "<option value=\"$session\">$session</option>";
                        }
                    @endphp
                </select>

            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="reg_code">Reg Code</label>
                <input id="regCode" name="reg_code" type="text" class="form-control"
                    placeholder="Enter reg code.Ex: xx-x-xx-xx-xxxxxx" required>
                <small id="regCodeError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="passingYear">Passing Year</label>
                <input id="passingYear" name="passingYear" type="text" class="form-control"
                    placeholder="Enter passing year.Ex:2021" required>
                <small id="passingYearError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <button type="button" class="btn btn-outline-info btn-block contact-button" id="find">Search</button>
            <span id="loadingSpinner" class="fa fa-spinner fa-pulse" style="display: none;"></span>
            <button id="clearButton" type="button" class="btn btn-outline-danger btn-block mt-2"
                style="display: none;">Clear</button>
        </div>

    </form>
    <div id="error" class="text-center" >
       
    </div>
   
    <div id="students" class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 py-4" style="margin-bottom: 30px" ></div>

   
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("#find").click(function() {
                let roll = document.getElementById('roll').value;
                let session = document.getElementById('session').value;
                let reg_code = document.getElementById('regCode').value;
                let passing_year = document.getElementById('passingYear').value;
                console.log(roll);
                if(!roll || !session || !reg_code|| !passing_year){
                    Swal.fire({
                            title: 'All field are required.',
                            timer: 3000,
                            icon: 'error',
                            position: 'top-right',
                            showConfirmButton: false
                        });
                }else{
                
               

                axios.post('https://api.diu.ac/transcript_verification', {
                        "roll": roll,
                        'session': session,
                        'reg_code': reg_code,
                        'passing_year': passing_year
                    }, {
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {

                        
                        Swal.fire({
                            title: 'Transcript Found.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });
                        var opt = '';
                        if (response.data) {
                            opt += '<table class="table" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">';
                            opt += '<tr>';
                            opt += '<th scope="col">Name</th>';
                            opt += '<td scope="col">' + response.data.data.name + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Roll</th>';
                            opt += '<td scope="col">' + response.data.data.roll + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Program</th>';
                            opt += '<td scope="col">' + response.data.data.program + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Batch</th>';
                            opt += '<td scope="col">' + response.data.data.batch + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Session</th>';
                            opt += '<td scope="col">' + response.data.data.session + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">CGPA/Class</th>';
                            opt += '<td scope="col">' + response.data.data.cgpa + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Passing Year</th>';
                            opt += '<td scope="col">' + response.data.data.passing_year + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Transcript</th>';
                            opt += '<td scope="col"><a href="' + response.data.data.transcript_link +
                                '" target="_blank">Download</a></td>';
                            opt += '</tr>';


                            opt += '</table>';
                        }else{
                            opt += '<h4>Transcript Not Found</h4>';

                        }

                        $("#students").html(opt);



                    })
                    .catch(error => {
                        console.log(error);                     

                        if (error.response.status == 404) {

                            $('#error').html('<h4 style="color: red">Transcript Not Found</h4>');

                    Swal.fire({
                            title: 'Transcript Not Found.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });

                } else if (error.response.status == 422) {
                    console.log(error.response);
                    Swal.fire({
                            title: 'Validation error.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });
                    
                } else {
                    console.log('certificate verification fail')
                }


                    });


                }
            });



        });
    </script>
@endpush
