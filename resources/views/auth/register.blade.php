<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <link rel="stylesheet" href="css/jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>Create an Account</title>
    <style>
        .btn-section .google-btn {
            padding: 12px 0;
            background-color: rgb(30 30 30);
            color: #fff;
            border-radius: 6px;
            border: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            gap: 10px;
            border-radius: 8px;
            margin-top: 15px;
            width: 100%;
        }

    </style>

</head>

<body>

    <div class="header fixed-top">

        <h3>Create an Account</h3>

    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                    <form method="POST" action="{{ route('registers') }}" class="auth-form">
                        {{ csrf_field() }}
                        @php
                            $sponsor = @$_GET['ref'];
                            $name = \App\Models\User::where('username', $sponsor)->first();
                        @endphp
                        <div class="card-body">
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Select Country</span>
                                </div>
                                @php
                                    $datas = \App\Models\Country::all();
                                @endphp
                                <select id="countryCode" class="form-control" name="countryCode">
                                    @foreach($datas as $data)
                                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="phoneCodeSpan" style="position: absolute; top: 158px; left: 33px; border-right: solid; font-weight: 700; padding-right: 2px;">+93</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="font-size: 16px; font-weight: 500;">Phone Number</span>
                            </div>
                            <input class="mt-12 form-control" name="phone" type="number" placeholder="Enter Your Number" id="phone" style="padding: 14px 16px 14px 60px;">
                            <i class="ri-user-line user"></i>
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="font-size: 16px; font-weight: 500;">Invitation Code</span>
                            </div>
                            <input class="mt-12 form-control check_sponsor_exist" name="sponsor" type="text" value="{{ $sponsor }}" placeholder="Enter your Sponsor" enterkeyhint="done" autocomplete="off" data-response="sponsor_res">
                            <span id="sponsor_res">{{ $name ? $name->name : '' }}</span>
                        </div>
                        <div class="delete-item mt-20 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="font-size: 16px; font-weight: 500;">Password</span>
                            </div>
                            <input class="mt-12 form-control" id="test-input" name="password" type="password" placeholder="Enter your password">
                            <i class="ri-user-line user"></i>
                        </div>
                        <div class="delete-item mt-20 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="font-size: 16px; font-weight: 500;">Confirm Password</span>
                            </div>
                            <input class="mt-12 form-control" name="password_confirmation" type="password" placeholder="Confirm your password">
                            <i class="ri-user-line user"></i>
                        </div>
                        <div class="submit-btn pt-1 pb-1">
                            <button type="submit" class="tf-btn theme-btn mt-10">Continue</button>
                        </div>
                        <h5 class="signup mt-10">
                            <span class="text-mut">Already have an account ?</span>
                            <a href="{{ route('login') }}" class="text-primary">Sign in now</a>
                        </h5>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/countto.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/jqueryui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.check_sponsor_exist').keyup(function (e) {
                var ths = $(this);
                var res_area = $(ths).attr('data-response');
                var sponsor = $(this).val();
    
                $.ajax({
                    type: "POST",
                    url: "{{ route('getUserName') }}",
                    data: {
                        "user_id": sponsor,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        if (response != 1) {
                            $(".submit-btn button").prop("disabled", false);
                            $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800');
                        } else {
                            $(".submit-btn button").prop("disabled", true);
                            $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red');
                        }
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#countryCode').change(function() {
                var countryName = $(this).val();
                $.ajax({
                    url: "{{ route('get.phone.code') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        countryName: countryName
                    },
                    success: function(response) {
                        if (response.phoneCode) {
                            $('#phoneCodeSpan').text('+' + response.phoneCode);
                        }
                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            });
        });
    </script>
    

</body>

</html>
@include('partials.notify')
