<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <base href="{{ asset('') }}">

    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>Approve Currency</title>
</head>
<style>
    .green-button {
        background-color: #75fd0d;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .green-button h6 {
        margin: 0;
    }

</style>

<body class="counter-scroll">

    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <h3>Team</h3>

    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="text-center">

            </div>
            <div class="pb-24 mb-24 line">
                <h4 class="mt-24">Team</h4>

            </div>
            <div class="card-wallet-1 mt-28">
                <div class="card-header">
                    <span class="icon icon-clipboard-text text-dark"></span>
                    <h6 class="fw-7 flex-grow-1">@lang('Team Data Overview')</h6>
                    <p class="fw-7 flex-grow-1">@lang('Today')</p>

                </div>
                <div class="card-body">
                    <div class="grid-2">


                        <span class="button-2 fw-6"> @lang('New Members')</span>
                        <span class="button-2 fw-6"> @lang('New Earnings')</span>
                        <span class="text-dark-2 body-3">{{$todaysuser}}</span>
                        <span class="text-dark-2 body-3">{{number_format($todaysIncome,2)}}</span>

                    </div>

                </div>



            </div>


            </br>
            </br>
            <div class="card-wallet-1">
                <div class="card-header">
                    <span class="icon icon-frame text-dark "></span>
                    <h6 class="fw-7 flex-grow-1">@lang('Earnings Analysis')</h6>
                    <a href="{{ route('user.referral-team') }}" style="text-decoration: none;">
                        <button type="button"
                            style="background-color: green; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;">
                            <span>
                                <h6 class="fw-7 flex-grow-1" style="margin: 0;">@lang('View Team List')</h6>
                            </span>
                        </button>
                    </a>

                </div>
                <div class="card-body">
                    <!-- <h5 class="text-dark-2 body-3">@lang('AccumulatedTeam'):</h5> -->
                </div>
                <div class="mt-12 grid-2">
                    <span class="text-dark-2 body-3">@lang('AccumulatedTeam')</span>
                    <span class="button-2 fw-6">: {{$totalTeam}}</span>

                    <span class="text-dark-2 body-3">@lang('Total Earn')</span>
                    <span class="button-2 fw-6">: {{number_format($teamEarning,2)}}</span>

                    <span class="text-dark-2 body-3">@lang('Total Recharge')</span>
                    <span class="button-2 fw-6">: {{number_format($totalrecharge,2)}}</span>

                    <span class="text-dark-2 body-3">@lang('Total Withdrawals')</span>
                    <span class="button-2 fw-6">: {{number_format($totalwithdrawal,2)}}</span>


                </div>

            </div>
            </br></br>
            <h6 class="fw-7 flex-grow-1">@lang('Recent Three Generations Data')</h6>
            <div class="card-wallet-1 mt-28">
                <div class="card-header">
                    <span class="icon icon-clipboard-text text-dark"></span>
                    <h6 class="fw-7 flex-grow-1">@lang('Effective User Data')</h6>
                </div>
                <div class="card-body">
                    <div class="grid-2" style="    grid-template-columns: 1fr 1fr 1fr;">

                        <span class="button-2 fw-6">1Gen: @lang('ValidMembers')</span>
                        <span class="button-2 fw-6"> @lang('Commission')</span>

                        <span class="button-2 fw-6">   @lang('Total Earnings')</span>

                        <span class="text-dark-2 body-3">{{$active_gen_team1total}}/{{$gen_team1total}}</span>
                        <span class="text-dark-2 body-3">12%</span>



                        <span class="text-dark-2 body-3"> {{number_format($gen_teamIncome,2)}}</span>

                        <span class="button-2 fw-6" style="margin-top:40px;"> 2Gen:@lang('ValidMembers')</span>
                        <span class="button-2 fw-6" style="margin-top:40px;"> @lang('Commission')</span>

                        <span class="button-2 fw-6" style="margin-top:40px;">    @lang('Total Earnings')</span>

                        <span class="text-dark-2 body-3">{{$active_gen_team2total}}/{{$gen_team2total}}</span>
                        <span class="text-dark-2 body-3">4%</span>



                            <span class="text-dark-2 body-3">  {{number_format($gen_team2Income,2)}}</span>
                        <span class="button-2 fw-6" style="margin-top:40px;"> 3Gen:@lang('ValidMembers')</span>
                        <span class="button-2 fw-6" style="margin-top:40px;"> @lang('Commission')</span>

                        <span class="button-2 fw-6" style="margin-top:40px;">   @lang('Total Earnings')</span>

                        <span class="text-dark-2 body-3">{{$active_gen_team3total}}/{{$gen_team3total}}</span>
                        <span class="text-dark-2 body-3">2%</span>



                        <span class="text-dark-2 body-3">  {{number_format($gen_team3Income,2)}}</span>



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
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
