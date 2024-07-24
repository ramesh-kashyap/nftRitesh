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
<style>
.input-container {
    position: relative;
}

.code-btn {
    position: absolute;
    top: 67%;
    right: 10px;
    color: black;
    cursor: pointer;
    transform: translateY(-50%);
    z-index: 1;
}

@media (max-width: 767px) {
    .code-btn {
        top: 67%;
        right: 10px;
        margin-right: 0;
    }
}
</style>

<body>
    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <h3>@lang('Withdraw')</h3>
        <div class="right">
            <a href="index.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
    <form action="{{ route('user.Withdraw-Request') }}" method="POST">
                            {{ csrf_field() }}
        
        <div class="app-content style-2">
            <div class="tf-container">
                <div class="input-container mt-24">
                    <h6 class="text-dark-3">@lang('Select Currency')</h6>
</br>
                    <!-- <span class="body-3 text-dark-2 fw-5" style="float: right;">Balance: 652.497 USDT</span> -->
                    <input type="text" class="form-control" value="USDT">
                </div>
</br>
                <div class="input-container mt-24">
                    <h6 class="text-dark-3">@lang('Select Payment Mode')</h6>
                    <select id="cars" class="mt-16 form-control" type="text" name="PSys">
                        <option value="USDT.BEP20">USDT BEP20</option>
                        <option value="USDT.TRC20">USDT TRC20</option>
                    </select>
                </div>
</br>
                <div class="input-container mt-24">
                    <h6 class="text-dark-3">@lang('Withdrawal Address')</h6>
</br>
                    <!-- <span class="body-3 text-dark-2 fw-5" style="float: right;">Balance: 652.497 USDT</span> -->
                    <input type="text" name="walletAddress" class="form-control" value="{{Auth::user()->usdtBep20}}">
                </div>
</br>
<div class="input-container mt-24">
                    <h6 class="text-dark-3">@lang('Withdrawal Amount')</h6>
</br>
                    <!-- <span class="body-3 text-dark-2 fw-5" style="float: right;">Balance: 652.497 USDT</span> -->
                    <input  type="number" min="20" name="amount"
                    placeholder="Enter amount" class="form-control" value="">
                </div>
</br>



<?php 
                              date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30"z)
                              
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
<div class="input-container mt-24">
    <input type="hidden" name="" id="emailId" value="{{ Auth::user()->email }}">
    <h6 class="text-dark-3">{{ Auth::user()->email }}</h6>
    </br>
    <input type="text" class="form-control" name="code" value="" placeholder="Enter verification code">
    @if(date("Y-m-d H:i:s") > $new_date1) 
    <p class="text-dark-3 code-btn" onclick="()">Get Code</p> @endif 
</div>
</br>
<div class="input-container mt-24">
<input type="hidden" name="" id="emailId" value="{{ Auth::user()->email }}">
                    <h6 class="text-dark-3">@lang('Transaction password')</h6>
</br>
                    <!-- <span class="body-3 text-dark-2 fw-5" style="float: right;">Balance: 652.497 USDT</span> -->
                    <input type="text" class="form-control"  name="transaction_password" id="test-input" type="password" 
                    placeholder="Enter transaction password">
                </div>
</br>


            </div>
        </div>
        <div class="btn-fixed">
            <div class="grid-2">
                <button type="submit" class="tf-btn primary" style="width: 680px;">@lang('Withdrawal')</button>
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
</body>
</html>
