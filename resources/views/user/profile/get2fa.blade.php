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

    <title>Google 2FA</title>
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
        <h3>Google 2FA</h3>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                   
                        <div class="card-body">
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">User Name</span>
                                </div>
                                <input class="mt-12 form-control" type="text" id="inputusername" readonly="" value="{{ Auth::user()->username }}">
                                <i class="ri-user-line user"></i>
                            </div>

                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Email</span>
                                </div>
                                <input class="mt-12 form-control" type="email" id="inputemail" readonly value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                <i class="ri-user-line user"></i>
                             </div>

                           @if(Auth::user()->twofa==0) 
                           <h5 class="text-warning mt-4 mb-2 pt-2">2FA is currently disabled on your account.</h5>
                           <div class="submit-btn pt-1 pb-1">
                            <form method="POST" action="{{ route('user.enable2fa') }}" class="auth-form">
                             @csrf
                            <button type="submit" class="tf-btn theme-btn mt-10 success">Enable 2FA</button>
                            </form>
                           </div>

                            @else  
                            <h6 class="text-info mt-4 mb-2 pt-2">Scan for 2FA</h6>
                            <img src="{{ $qrCodeImageUrl }}" alt="QR Code">

                            <form method="POST" action="{{ route('user.disable2fa') }}" class="auth-form">
                                @csrf
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Verification Code</span>
                                </div>
                                <input class="mt-12 form-control" type="number" name="google2facode" placeholder="Enter your code">
                                <i class="ri-user-line user"></i>
                             </div>

                            <div class="submit-btn pt-1 pb-1">
                                <button type="submit" class="tf-btn theme-btn mt-10 danger">Disable 2FA</button>
                            </div>
                            </form>
                           @endif



                            
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   