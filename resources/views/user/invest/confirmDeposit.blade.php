<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <base href="{{ asset('') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/jqueryui.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>Make an offer</title>

    <style>
        img {
            width: 100%;
            height: auto;
            max-width: 400px;
            display: block;
            margin: 0 auto;
        }
        .app-content.style-2 {
            padding-bottom: 100px;
        }
        .btn-fixed {
            position: fixed;
            bottom: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            background-color: white;
            padding: 10px 0;
        }
        .container {
            padding: 20px;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .tf-btn.primary {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .tf-btn.primary:hover {
            background-color: #0056b3;
        }
        @media (max-width: 767px) {
            img {
                width: 80%;
                margin-left: 10%;
            }
            p {
                text-align: center;
                margin-left: 0;
            }
        }
    </style>

</head>
<body>
    
    <div class="header fixed-top">
        <div class="left">
          <a href="{{route('user.invest')}}" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h3>Confirm Deposit</h3>
    </div>
    <form method="post" action="{{ route('user.fundActivation') }}" name="balance/oper_frm" data-v-56930b78="" class="container">
        {{ csrf_field() }}
        <div class="app-content style-2">
            <div class="tf-container">
                <div class="top mb-24">
                    <h6 style="margin-top: 10px;">Select Currency</h6>
                    <div class="mt-20">
                        <input type="text" class="form-control" value="{{$paymentMode}}">
                    </div>
                    <div class="top mb-24">
                        <h6 style="margin-top: 10px;">Amount</h6>
                        <div class="mt-20">
                            <input type="text" class="form-control" value="{{$amount}}">
                        </div>
                        <div class="top mb-24">
                            <h6 style="margin-top: 10px;"> Order ID</h6>
                            <div class="mt-20">
                                <input type="text" class="form-control" value="{{$orderId}}">
                            </div>
                            <div class="top mb-24">
                                <h6 style="margin-top: 10px;">Transaction ID</h6>
                                <div class="mt-20">
                                    <input type="text" class="form-control" value="{{$transaction_id}}">
                                </div>
                                <div class="top mb-24">
                                    <h6 style="margin-top: 10px;">Send USDT_BSC</h6>
                                    <div class="mt-20">
                                        <input type="text" class="form-control" value="{{$invoice_total_sum}}">
                                    </div>
                                </div>
                                <input name="paymentMode" value="{{$paymentMode}}" type="hidden">
                                <input name="amount" value="{{$amount}}" type="hidden">
                                <input name="orderId" value="{{$orderId}}" id="orderId" type="hidden">
                                <input name="transaction_id" value="{{$transaction_id}}" type="hidden">
                            </div>
                        </div>
                    </div>
                    <div data-v-56930b78="" title="{{$walletAddress}}">
                        <canvas width="50" height="50" style="display: none;"></canvas>
                        <img alt="Scan me!" src="{{$qr_code}}" style="display: block;">
                        <p style="margin-top: 10px; text-align: center;">{{$walletAddress}}</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="btn-fixed">
        <a href="{{route('user.invest')}}" class="tf-btn primary" style="width:1000px;">CANCEL</a>
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

</body>
</html>
