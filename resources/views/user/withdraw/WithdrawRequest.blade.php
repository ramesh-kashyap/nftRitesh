
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
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>@lang('Withdraw')</title>
</head>

<style>
    .input-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-container input {
        width: 100%;
        padding-right: 90px; /* Add padding to the right to make space for the button */
    }

    .input-container .code-btn {
        position: absolute;
        right: 10px;
        cursor: pointer;
        background-color: #f0f0f0; /* Adjust the background color to match your design */
        padding: 8px 12px;
        border-radius: 4px;
    }
</style>
<style>
.balance-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap; /* Prevent wrapping */
}

.balance-text {
    white-space: nowrap; /* Ensure the balance text doesn't wrap */
}

@media (max-width: 768px) {
    .balance-container {
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
        justify-content: flex-start;
    }

    .balance-text {
        margin-top: 10px;
        width: 100%;
        text-align: left; /* Align to the left on mobile */
    }
}

</style>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
        <img src="images/logo/Nestnftdark.png" alt="logo" style="width:100px;height:auto">       
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h4>@lang('Withdraw')</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">@lang('Withdraw') </h4>
                </div>
                <div class="card-body">
                <form action="{{ route('user.Withdraw-Request') }}" method="POST">
                {{ csrf_field() }}
                        <fieldset class="mt-20 input-fill">
                            <label>@lang(' Currency')</label>
                            <input type="text" placeholder="Enter your name" value="USDT" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Select Payment Mode')</label>
                            <select id="cars" class="form-control" type="text" name="PSys">
                        <option value="USDT.BEP20">USDT BEP20</option>
                        <option value="USDT.TRC20">USDT TRC20</option>
                    </select>
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Withdrawal Address')</label>
                            <div class="box-view-hide">
                            <input type="text" name="walletAddress" class="form-control" value="{{Auth::user()->usdtBep20}}">
                              
                            </div>
                        </fieldset>
                       
                        <fieldset class="mt-20 input-fill">
    <div style="display: flex;
    justify-content: space-between;
">
        <label>@lang('Withdrawal Amount')</label>
        <span class="body-3 text-dark-2 fw-5 balance-text">
            Balance: {{ number_format(Auth::user()->available_balance(), 2) }} USDT
        </span>
    </div>

    
    <input type="number" min="20" name="amount" placeholder="Enter amount" class="form-control" value="">
</fieldset>



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
                var days = Math.floor(hours /24);
                // Convert total hours into days, then get the remainder for hours
                hours %= 24; // Hours remaining after converting to days
                minutes %= 60; // Minutes remaining after converting to hours
                seconds %= 60; // Seconds remaining after converting to minutes

                if (difference <= 0) {
                    // If the countdown is over, stop the timer
                    clearInterval(timer);
                    // Optionally reset the display to zero or hide the countdown
                    document.getElementById("PH_days").innerHTML ="00";

                    document.getElementById("PH_hours").innerHTML = "00";
                    document.getElementById("PH_minutes").innerHTML = "00";
                    document.getElementById("seconds").innerHTML = "00";
                } else {
                    // Update the webpage elements with the current hours, minutes, and seconds
                    document.getElementById("PH_days").innerHTML =days;
                    document.getElementById("PH_hours").innerHTML = hours.toString().padStart(2, '0');
                    document.getElementById("PH_minutes").innerHTML = minutes.toString().padStart(2, '0');
                    document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
                }
            }
                </script>

                @endif

                            <input type="hidden" name="" id="emailId" value="{{ Auth::user()->email }}">
                            <fieldset class="mt-20 input-fill">
                                <label>{{ Auth::user()->email }}</label>
                                <div class="input-container">
                                    <input type="text" class="form-control" name="code" value="" placeholder="Enter verification code">
                                    @if(date("Y-m-d H:i:s") > $new_date1) 
                                        <p class="text-dark-3 code-btn" onclick="()">Get Code</p>
                                    @endif
                                </div>
                            </fieldset>
                        <input type="hidden" name="" id="emailId" value="{{ Auth::user()->email }}">
                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Transaction password')</label>
                            <input type="text" class="form-control"  name="transaction_password" id="test-input" type="password" 
                    placeholder="Enter transaction password">
                        </fieldset>

                            </br></br>
                        <span class="body-3 text-dark-2 fw-5" style="float: right;"> {{ number_format(Auth::user()->available_balance(), 2) }} USDT </span>
                    <span class="body-3 text-dark-2 fw-5" style="float: left;">@lang('Available for Withdrawal'):</span>
                            </br>
                    <span class="body-3 text-dark-2 fw-5" style="float: right;">10USDT</span>
                    <span class="body-3 text-dark-2 fw-5" style="float: left;">@lang('Minimum withdrawal amount'):</span>
                            </br>
                    <span class="body-3 text-dark-2 fw-5" style="float: right;">72hrs Principle Withdraw after 5days</span>
                    <span class="body-3 text-dark-2 fw-5" style="float: left;">@lang('First Withdraw'):</span>
                            </br>
                            <span class="body-3 text-dark-2 fw-5" style="float: right;">5% </span>
                            <span class="body-3 text-dark-2 fw-5" style="float: left;">@lang('Transaction Fee'):</span></br>
                            <span class="body-3 text-dark-2 fw-5" style="float: right;">300 USDT valid for 3 days </span>
                            <span class="body-3 text-dark-2 fw-5" style="float: left;">@lang('Registartion Bonus'):</span>
                          

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
                            </br>

                            </br>
                            <div data-v-c654d101="" class="tipsTime">@lang('New user fund protection period, please check in')
                                    <div data-v-c654d101="" role="timer" class="van-count-down">
                            <span
                                            data-v-c654d101=""> <span id="PH_days"></span> D /<span id="PH_hours"></span> H/</span><span data-v-c654d101=""> <span id="PH_minutes"></span> 
                                            M/</span><span data-v-c654d101=""> <span id="seconds"></span> S/</span></div> 
                                </div>

                            @if(date("Y-m-d H:i:s") > $new_date1) 
                        <button class="mt-20 tf-btn primary van-button van-button--default van-button--normal com-btn on submit-btn" type="submit">Withdraw</button>
                        @else
                        <button class="mt-20 tf-btn primary van-button van-button--default van-button--disabled van-button--normal com-btn on submit-btn" type="button">Withdraw</button>
                        @endif 




                    </form>

                            </br>
   <h6>Attention</h6>
                            <p>● @lang('Each withdrawal usually takes up to 0-72 hours to reach your digital currency wallet').</p>
                            <p> ● @lang('After each withdrawal reaches your digital currency wallet, it takes 48 hours before a new withdrawal can be made').</p>
                            <p>  ● @lang('The format of the withdrawal password can only be any combination of 6 digits from 0 to 9, and no symbols or letters can be entered').</p>
                            <p>  ● @lang('After changing the login password, transaction password, wallet address, or email account, you must wait for 48 hours after the fund protection status is lifted before applying for a withdrawal').</p>
                  
                           


                </div>
            </div>
               
        </div>
    </div>
    
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

<script>
    $(function(){
        $('input[name="amount"]').on('change keyup',function () {
            let str = $(this).val();
            str = str.replace(',','.');
            $(this).val(str);
            let min =  $('#min_withdrawal').val();
            let max =  $('#max_withdrawal').val();

            let charge = $('#chargeAmt').val();
      
            let amount = parseFloat(str);
        
        
          
         
            if (amount>=min && amount<=max) 
            {
               
            $(".submit-btn").prop("disabled", false);
            $('.submit-btn').removeClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default  van-button--normal com-btn on');         
            }
            else
            {

            $(".submit-btn").prop("disabled", true);  
            $('.submit-btn').removeClass('van-button van-button--default van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            }
            
            if(amount<=10)
            {
                  $('#ActualAmount').html(amount-amount*50/100+" USDT");  
                  $('#chargefee').html("5 USDT");  
            }
            else
            {
             $('#ActualAmount').html(amount-amount*charge/100+" USDT");
                $('#chargefee').html(charge+" %");  
            }
          
            
        
            //console.log(summ_usd);
        });

        $('input[name="PSys"]').change(function () {
           
            let icon = $(this).data('icon');
            if (icon=="usdtTrc20") {
                $('#walletAddress').val('{{Auth::user()->usdtTrc20}}');
                
            }else{
                $('#walletAddress').val('{{Auth::user()->usdtBep20}}');
            }
            
        });

        $('.code-btn').click(function(e) {
var ths = $(this);
var emailId = $('#emailId').val();

if (!emailId) 
{
    iziToast.error({
            message: 'Invalid Email!',
            position: "topRight"
        });
        return false;
}
// alert(sponsor); 
$.ajax({
    type: "POST"
    , url: "{{ route('user.send_code') }}"
    , data: {
        "emailId": emailId
        , "_token": "{{ csrf_token() }}"
    , }
    , success: function(response) {
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
$(document).ready(function() {

$('#check').click(function(){

if($(this).hasClass('fa-eye-slash')){

$(this).removeClass('fa-eye-slash');

$(this).addClass('fa-eye');

$('#test-input').attr('type','text');

}else{

$(this).removeClass('fa-eye');

$(this).addClass('fa-eye-slash');  

$('#test-input').attr('type','password');
}
});

});
</script>

<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

<script>
    $(function(){
        $('input[name="amount"]').on('change keyup',function () {
            let str = $(this).val();
            str = str.replace(',','.');
            $(this).val(str);
            let min =  $('#min_withdrawal').val();
            let max =  $('#max_withdrawal').val();

            let charge = $('#chargeAmt').val();
      
            let amount = parseFloat(str);
        
        
          
         
            if (amount>=min && amount<=max) 
            {
               
            $(".submit-btn").prop("disabled", false);
            $('.submit-btn').removeClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default  van-button--normal com-btn on');         
            }
            else
            {

            $(".submit-btn").prop("disabled", true);  
            $('.submit-btn').removeClass('van-button van-button--default van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            }
            
            if(amount<=10)
            {
                  $('#ActualAmount').html(amount-amount*50/100+" USDT");  
                  $('#chargefee').html("5 USDT");  
            }
            else
            {
             $('#ActualAmount').html(amount-amount*charge/100+" USDT");
                $('#chargefee').html(charge+" %");  
            }
          
            
        
            //console.log(summ_usd);
        });

        $('input[name="PSys"]').change(function () {
           
            let icon = $(this).data('icon');
            if (icon=="usdtTrc20") {
                $('#walletAddress').val('{{Auth::user()->usdtTrc20}}');
                
            }else{
                $('#walletAddress').val('{{Auth::user()->usdtBep20}}');
            }
            
        });

        $('.code-btn').click(function(e) {
var ths = $(this);
var emailId = $('#emailId').val();

if (!emailId) 
{
    iziToast.error({
            message: 'Invalid Email!',
            position: "topRight"
        });
        return false;
}
// alert(sponsor); 
$.ajax({
    type: "POST"
    , url: "{{ route('user.send_code') }}"
    , data: {
        "emailId": emailId
        , "_token": "{{ csrf_token() }}"
    , }
    , success: function(response) {
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
$(document).ready(function() {

$('#check').click(function(){

if($(this).hasClass('fa-eye-slash')){

$(this).removeClass('fa-eye-slash');

$(this).addClass('fa-eye');

$('#test-input').attr('type','text');

}else{

$(this).removeClass('fa-eye');

$(this).addClass('fa-eye-slash');  

$('#test-input').attr('type','password');
}
});

});
</script>



<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

<script>
    $(function(){
        $('input[name="amount"]').on('change keyup',function () {
            let str = $(this).val();
            str = str.replace(',','.');
            $(this).val(str);
            let min =  $('#min_withdrawal').val();
            let max =  $('#max_withdrawal').val();

            let charge = $('#chargeAmt').val();
      
            let amount = parseFloat(str);
        
        
          
         
            if (amount>=min && amount<=max) 
            {
               
            $(".submit-btn").prop("disabled", false);
            $('.submit-btn').removeClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default  van-button--normal com-btn on');         
            }
            else
            {

            $(".submit-btn").prop("disabled", true);  
            $('.submit-btn').removeClass('van-button van-button--default van-button--normal com-btn on');         
            $('.submit-btn').addClass('van-button van-button--default van-button--disabled van-button--normal com-btn on');         
            }
            
            if(amount<=10)
            {
                  $('#ActualAmount').html(amount-amount*50/100+" USDT");  
                  $('#chargefee').html("5 USDT");  
            }
            else
            {
             $('#ActualAmount').html(amount-amount*charge/100+" USDT");
                $('#chargefee').html(charge+" %");  
            }
          
            
        
            //console.log(summ_usd);
        });

        $('input[name="PSys"]').change(function () {
           
            let icon = $(this).data('icon');
            if (icon=="usdtTrc20") {
                $('#walletAddress').val('{{Auth::user()->usdtTrc20}}');
                
            }else{
                $('#walletAddress').val('{{Auth::user()->usdtBep20}}');
            }
            
        });

        $('.code-btn').click(function(e) {
var ths = $(this);
var emailId = $('#emailId').val();

if (!emailId) 
{
    iziToast.error({
            message: 'Invalid Email!',
            position: "topRight"
        });
        return false;
}
// alert(sponsor); 
$.ajax({
    type: "POST"
    , url: "{{ route('user.send_code') }}"
    , data: {
        "emailId": emailId
        , "_token": "{{ csrf_token() }}"
    , }
    , success: function(response) {
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
$(document).ready(function() {

$('#check').click(function(){

if($(this).hasClass('fa-eye-slash')){

$(this).removeClass('fa-eye-slash');

$(this).addClass('fa-eye');

$('#test-input').attr('type','text');

}else{

$(this).removeClass('fa-eye');

$(this).addClass('fa-eye-slash');  

$('#test-input').attr('type','password');
}
});

});
</script>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    
    
</body>
</html>