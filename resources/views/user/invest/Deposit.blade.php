<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <base href="{{ asset('') }}">

    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <link rel="stylesheet" href="css/jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>Deposit</title>
</head>
<style>
    .btn-fixed {
        position: fixed;
        bottom: 20px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        background-color: white; /* Optional: Add a background color to make it more visible */
        padding: 10px 0; /* Add padding to give it some space */
    }

    .grid-2 {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .tf-btn.primary {
        padding: 10px 20px;
        background-color: #8052ff;
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

    .app-content.style-2 {
        padding-bottom: 100px; /* Ensure there's enough space at the bottom for the fixed button */
    }

    .form-control {
        max-width: 100%;
    }

    .input-container {
        max-width: 675px;
        width: 100%;
        margin: 0 auto;
    }

    @media (max-width: 767px) {
        .input-container {
            width: 100%;
        }

        .btn-fixed .tf-btn.primary {
            width: calc(100% - 30px); /* Full width minus the gap */
        }
    }
</style>

<body>
    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <h3>@lang('Make Deposit')</h3>
        <div class="right">
            <a href="index.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
    <form method="post" name="add" action="{{ route('user.confirmDeposit') }}">
        {{ csrf_field() }}
        <div class="app-content style-2">
            <div class="tf-container">
                <div class="input-container mt-24">
                    <h4 class="text-dark-3">@lang('Enter Amount')</h4>
                    <span class="body-3 text-dark-2 fw-5" style="float: right;">Balance: 652.497 USDT</span>
                    <input class="mt-16 form-control" type="number" name="Sum" value="10">
                </div>
                <div class="input-container mt-24">
                    <h4 class="text-dark-3">@lang('Select Payment Mode')</h4>
                    <select id="cars" class="mt-16 form-control" type="text" name="PSys">
                        <option value="USDT.BEP20">USDT BEP20</option>
                        <option value="USDT.TRC20">USDT TRC20</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="btn-fixed">
            <div class="grid-2">
                <button type="submit" class="tf-btn primary" style="width: 680px;">Submit</button>
            </div>
        </div>
    </form>

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
