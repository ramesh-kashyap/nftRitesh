<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="nfty" />
    <meta name="keywords" content="nfty" />
    <meta name="author" content="nfty" />
    <base href="{{ asset('') }}">

    <link rel="manifest" href="./manifest.json" />
    <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
    <title>nfty App</title>
    <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/logo/logo.png" />
    <meta name="theme-color" content="#205dee" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="nfty" />
    <meta name="msapplication-TileImage" content="assets/images/logo/logo.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css" />

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/remixicon.css" />

    <!-- pikaday css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/pikaday.css" />

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
</head>

<body>

  <!-- loader start-->
  <div class="loader-wrapper" id="loader">
    <div class="loader">
      <span>N</span>
      <span>F</span>
      <span>T</span>
      <span>Y</span>
    </div>
  </div>
  <!-- loader end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="{{route('user.asset')}}">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">@lang('Withdraw')</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

    <!-- make offer starts -->
    <section class="section-t-space section-lg-b-space">
        <div class="custom-container">

            <form action="{{ route('user.Withdraw-Request') }}" method="POST"
                class="auth-form offer-form">
                {{ csrf_field() }}


                <?php 
                                                    
                            $quantifiable_count = 0;
                            if ($balance<=10) 
                            {
                             
                                $min_withdrawal = 10;
                                $maximum_withdrawal = 10;
                                $chargeAmt = 50;
                            }  
                            
                            elseif ($balance>=30) 
                            {
                                $min_withdrawal = 30;
                                $maximum_withdrawal = 50000;
                                $chargeAmt = 5;
                            }
                            elseif ($balance>=500 && $userDirect>=5) 
                            {
                                $min_withdrawal = 30;
                                $maximum_withdrawal = 50000;
                                $chargeAmt = 5;
                            }
                            else {
                                $min_withdrawal = 30;
                                $maximum_withdrawal = 50000;
                                $chargeAmt = 5;
                            }

                            ?>

                @if(Auth::user()->active_status!="Pending" )

                    <?php 
                date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
                if(empty(Auth::user()->detail_changed_date))
                 {
                    $date1 = Auth::user()->adate;
                    $date1 = strtotime($date1);
                    $date1 = strtotime(" + 3 day", $date1);
                    $new_date1= date('Y-m-d H:i:s', $date1);    
                 }
                 else
                 {
                     $date1 = Auth::user()->detail_changed_date;
                    $date1 = strtotime($date1);
                    $date1 = strtotime(" + 2 day", $date1);
                    $new_date1= date('Y-m-d H:i:s', $date1);        
                 }
                //   echo $new_date1;
                ?>

                    <script>
                        var timer = setInterval(diff2, 1000);

                        function diff2() {
                            // Current date and time
                            var enddate = new Date();

                            // Start date from a PHP variable (ensure PHP code is executed on the server-side)
                            var start = new Date('<?=$new_date1?>');

                            // Calculate the time difference in milliseconds
                            var difference = start.getTime() - enddate.getTime();

                            // Convert the time difference from milliseconds to seconds, minutes, and hours
                            var seconds = Math.floor(difference / 1000);
                            var minutes = Math.floor(seconds / 60);
                            var hours = Math.floor(minutes / 60);
                            var days = Math.floor(hours / 24);
                            // Convert total hours into days, then get the remainder for hours
                            hours %= 24; // Hours remaining after converting to days
                            minutes %= 60; // Minutes remaining after converting to hours
                            seconds %= 60; // Seconds remaining after converting to minutes

                            if (difference <= 0) {
                                // If the countdown is over, stop the timer
                                clearInterval(timer);
                                // Optionally reset the display to zero or hide the countdown
                                document.getElementById("PH_days").innerHTML = "00";

                                document.getElementById("PH_hours").innerHTML = "00";
                                document.getElementById("PH_minutes").innerHTML = "00";
                                document.getElementById("seconds").innerHTML = "00";
                            } else {
                                // Update the webpage elements with the current hours, minutes, and seconds
                                document.getElementById("PH_days").innerHTML = days;
                                document.getElementById("PH_hours").innerHTML = hours.toString().padStart(2, '0');
                                document.getElementById("PH_minutes").innerHTML = minutes.toString().padStart(2, '0');
                                document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
                            }
                        }
                    </script>

                @endif

                <label class="form-label mt-0">@lang('Select Currency')</label>
                <div class="mb-3 mt-3">
                    <input type="text" value="USDT" class="form-control" id="datepicker" />
                </div>

                <div class="offer-label">



                    <label class="form-label mt-0">@lang('Select Payment Mode')</label>

                </div>
                <select class="form-select mt-0" type="text" name="PSys">
                    <option value="USDT.BEP20">USDT BEP20</option>
                    <option value="USDT.TRC20">USDT TRC20</option>
                </select>

                </br>
                <label class="form-label mt-0">@lang('Withdrawal Address')</label>
                <div class="mb-3 mt-3">
                    <input type="text" name="walletAddress" value="{{ Auth::user()->usdtBep20 }}"
                        class="form-control" id="datepicker" />
                </div>

                <div class="confirm-offer-details">
                    <label class="form-label mt-0">@lang('Withdrawal Amount')</label>
                    <div class="mb-3 mt-3">
                        <input type="number" min="20" name="amount" placeholder="Enter amount" class="form-control"
                            id="datepicker" />
                    </div>
                    <div class="message-body">
                        <ul>
                            <li>@lang('Available for Withdrawal'):
                                {{ number_format(Auth::user()->available_balance(), 2) }} USDT </li>
                            <li>@lang('Minimum withdrawal amount') :{{ $min_withdrawal }}</li>
                            <input type="hidden" id="chargeAmt" value="{{ $chargeAmt }}">
                            <input type="hidden" id="min_withdrawal" value="{{ $min_withdrawal }}">
                            <input type="hidden" id="max_withdrawal" value="{{ $maximum_withdrawal }}">
                            <li>@lang('Maximum withdrawal amount') : {{ $maximum_withdrawal }}</li>
                            <li>@lang('Transaction Fee'): {{ ($chargeAmt==50)?5:$chargeAmt }}% </li>
                            <li>@lang('Actual Amount Received') :0</li>
                            <p style="color:white;">@lang('New user fund protection period,') <span id="PH_days"></span>
                                Days <span id="PH_hours"></span> Hours</span><span data-v-c654d101=""> </p>
                        </ul>
                        <p style="color:white;">@lang(' please check in') <span id="PH_minutes"></span>
                            Minutes</span><span data-v-c654d101=""> <span id="seconds"></span> Seconds</span></p>
                    </div>
                </div>
                </br></br>
                <input type="hidden" name="" id="emailId" value="{{ Auth::user()->email }}">
                <label class="form-label mt-0">{{ Auth::user()->email }}</label>
                <div class="mb-3 mt-3">             
                    <div data-v-e1c9eb74="" class="count-down" style="display: none;">
                        <div data-v-e1c9eb74="" role="timer" class="van-count-down"><span data-v-e1c9eb74="">0<var
                                    data-v-e1c9eb74="">s</var></span></div>
                    </div>
                    <input name="code" type="text" placeholder="Enter verification code" class="form-control"
                        id="datepicker" />
                        <div class="code-btn" style="
    position: absolute;
    top: 72%;
    right: 10px;
    color: white;
    cursor: pointer;
    z-index: 1;
">Get Code</div>                
                                              
                </div>


                <label class="form-label mt-0">@lang('Transaction password')</label>
                <div class="mb-3 mt-3">
                    <input name="transaction_password" id="test-input" type="password"
                        placeholder="Enter transaction password" class="form-control" id="datepicker" />
                </div>


                <?php 
                              date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
                              
                             if(empty(Auth::user()->detail_changed_date))
                             {
                                $date1 = Auth::user()->adate;
                                $date1 = strtotime($date1);
                                $date1 = strtotime(" + 3 day", $date1);
                                $new_date1= date('Y-m-d H:i:s', $date1);    
                             }
                             else
                             {
                                 $date1 = Auth::user()->detail_changed_date;
                                $date1 = strtotime($date1);
                                $date1 = strtotime(" + 2 day", $date1);
                                $new_date1= date('Y-m-d H:i:s', $date1);        
                             }
                           

                            
                            ?>

                <br />
                <br />
                <h5 class="mt-0"></h5>
                @if(date("Y-m-d H:i:s") > $new_date1)
                    <div class="submit-btn">
                        <button type="submit" class="btn theme-btn">@lang('Withdrawal')</button>
                    </div>
                @else

                    <div class="submit-btn">
                        <button type="button" class="btn theme-btn">@lang('Withdrawal')</button>
                    </div>
                @endif
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

    <script>
        $(function () {
            $('input[name="amount"]').on('change keyup', function () {
                let str = $(this).val();
                str = str.replace(',', '.');
                $(this).val(str);
                let min = $('#min_withdrawal').val();
                let max = $('#max_withdrawal').val();

                let charge = $('#chargeAmt').val();

                let amount = parseFloat(str);




                if (amount >= min && amount <= max) {

                    $(".submit-btn").prop("disabled", false);
                    $('.submit-btn').removeClass(
                        'van-button van-button--default van-button--disabled van-button--normal com-btn on'
                        );
                    $('.submit-btn').addClass(
                        'van-button van-button--default  van-button--normal com-btn on');
                } else {

                    $(".submit-btn").prop("disabled", true);
                    $('.submit-btn').removeClass(
                        'van-button van-button--default van-button--normal com-btn on');
                    $('.submit-btn').addClass(
                        'van-button van-button--default van-button--disabled van-button--normal com-btn on'
                        );
                }

                if (amount <= 10) {
                    $('#ActualAmount').html(amount - amount * 50 / 100 + " USDT");
                    $('#chargefee').html("5 USDT");
                } else {
                    $('#ActualAmount').html(amount - amount * charge / 100 + " USDT");
                    $('#chargefee').html(charge + " %");
                }



                //console.log(summ_usd);
            });

            $('input[name="PSys"]').change(function () {

                let icon = $(this).data('icon');
                if (icon == "usdtTrc20") {
                    $('#walletAddress').val('{{ Auth::user()->usdtTrc20 }}');

                } else {
                    $('#walletAddress').val('{{ Auth::user()->usdtBep20 }}');
                }

            });

            $('.code-btn').click(function (e) {
                var ths = $(this);
                var emailId = $('#emailId').val();

                if (!emailId) {
                    iziToast.error({
                        message: 'Invalid Email!',
                        position: "topRight"
                    });
                    return false;
                }
                // alert(sponsor); 
                $.ajax({
                    type: "POST",
                    url: "{{ route('user.send_code') }}",
                    data: {
                        "emailId": emailId,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        // alert(response);      
                        if (response) {
                            // alert("hh");
                            iziToast.success({
                                message: 'Email send Successfully',
                                position: "topRight"
                            });
                        } else {
                            // alert("hi");
                            iziToast.error({
                                message: 'Error!',
                                position: "topRight"
                            });
                        }
                    }
                });
            });


        })
    </script>

    <script>
        $(document).ready(function () {

            $('#check').click(function () {

                if ($(this).hasClass('fa-eye-slash')) {

                    $(this).removeClass('fa-eye-slash');

                    $(this).addClass('fa-eye');

                    $('#test-input').attr('type', 'text');

                } else {

                    $(this).removeClass('fa-eye');

                    $(this).addClass('fa-eye-slash');

                    $('#test-input').attr('type', 'password');
                }
            });

        });
    </script>
    <!-- make offer end -->

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    @include('partials.notify')


    <!-- pikaday js -->
    <script src="assets/js/pikaday.js"></script>
    <script src="assets/js/custom-pikaday.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>

</html>
