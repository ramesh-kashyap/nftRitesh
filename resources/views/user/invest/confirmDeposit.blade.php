
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

    <title>input</title>
</head>
<style>

.responsive-img {
    width: 100%;
    max-width: 200px;
    margin: 0 auto;
}

@media (min-width: 768px) {
    .responsive-img {
        margin-left: 360px;
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
        <h4>Confirm Deposit</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Confirm Deposit </h4>
                </div>
                <div class="card-body">
                <form method="post" action="{{ route('user.fundActivation') }}" name="balance/oper_frm" data-v-56930b78="" class="container">
                {{ csrf_field() }}
                        <fieldset class="mt-20 input-fill">
                            <label>Select Currency</label>
                            <input type="text" class="form-control" value="{{$paymentMode}}">                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Amount</label>
                            <input type="text" class="form-control" value="{{$amount}}">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Order ID</label>
                            <div class="box-view-hide">
                            <input type="text" class="form-control" value="{{$orderId}}">
                              
                            </div>
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Transaction ID</label>
                            <input type="text" class="form-control" value="{{$transaction_id}}">                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Send USDT_BSC</label>
                            <input type="text" class="form-control" value="{{$invoice_total_sum}}">
                            </fieldset>

                            <input name="paymentMode" value="{{$paymentMode}}" type="hidden">
                                <input name="amount" value="{{$amount}}" type="hidden">
                                <input name="orderId" value="{{$orderId}}" id="orderId" type="hidden">
                                <input name="transaction_id" value="{{$transaction_id}}" type="hidden">
                      

</br>
<fieldset class="mt-20 input-upload" style="display: flex; justify-content: center; align-items: center;">
    <span class="icon icon-upload2"></span>
    <img alt="Scan me!" src="{{$qr_code}}" class="responsive-img">
</fieldset>





</br>
<fieldset class="mt-20 input-fill">
    <div class="box-view-hide" style="position: relative;">
        <input id="walletAddressInput" type="text" class="form-control" value="{{$walletAddress}}" style="padding-right: 30px;">
        <svg onclick="copyFunctionwallet()" class="copy-btn" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); font-size: 24px; color: #fff; cursor: pointer;" title="Copy wallet address">
            <g opacity="0.6">
                <path d="M14.1666 11.1673V13.6673C14.1666 17.0007 12.8333 18.334 9.49996 18.334H6.33329C2.99996 18.334 1.66663 17.0007 1.66663 13.6673V10.5007C1.66663 7.16732 2.99996 5.83398 6.33329 5.83398H8.83329" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.1663 11.1673H11.4997C9.49967 11.1673 8.83301 10.5007 8.83301 8.50065V5.83398L14.1663 11.1673Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.66638 1.66602H12.9997" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.83337 4.16602C5.83337 2.78268 6.95004 1.66602 8.33337 1.66602H10.5167" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3337 6.66602V11.8243C18.3337 13.116 17.2837 14.166 15.9921 14.166" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3334 6.66602H15.8334C13.9584 6.66602 13.3334 6.04102 13.3334 4.16602V1.66602L18.3334 6.66602Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>
    </div>
</fieldset>


          
<a href="{{route('user.invest')}}" class="mt-20 tf-btn primary">Cancel</a>
                    </form>



                </div>
            </div>
               
        </div>
    </div>
    
    

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
        
        
        
        function storeTransaction() {
            
                var orderId = $('#orderId').val();
        
        $.ajax({
                    type: "post",
                    url: "https://qstaig.com/user/checkPaymentStatus",
                    data: {"orderId":orderId,"_token": "{{ csrf_token() }}"},
                    success: function (response) 
                    {
                     console.log(response);  
                     
                     if(response==1)
                     {
                      
                      iziToast.success({
            			message: 'Deposit Successfully',
            			position: "topRight"
            		});
             
                      window.setTimeout(function() {
                        window.location.href = 'https://qstaig.com/user/dashboard';
                    }, 3000);
        
                     }
                    }
                    });
          
        }
        
        // Set the interval to 5 minutes (300,000 milliseconds)
        const interval = 2000;
        
        // Call the function immediately and then at the specified interval
        storeTransaction(); // Call the function immediately
        setInterval(storeTransaction, interval);
        
        </script>
        <script>
        function copyFunctionwallet() {
    
            console.time('time1');
           var temp = $("<input>");
              $("body").append(temp);
            temp.val($('#wallet_address1').text()).select();
            document.execCommand("copy");
            temp.remove();
             console.timeEnd('time1');
                
             iziToast.success({
            message: 'Copied',
            position: "topRight"
           });


            //navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            //   alert("copied: "+copyText.value)
            }
        
        </script>

<script>
function copyFunctionwallet() {
    var walletAddressInput = document.getElementById("walletAddressInput");
    walletAddressInput.select();
    walletAddressInput.setSelectionRange(0, 99999); // For mobile devices

    navigator.clipboard.writeText(walletAddressInput.value).then(function() {
        // Display success message
        alert(" " + walletAddressInput.value);
    }, function(err) {
        // Handle error
        alert("Failed to copy wallet address: ", err);
    });
}
</script>
    
</body>
</html>