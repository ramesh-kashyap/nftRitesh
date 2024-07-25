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
                        <!-- <p style="margin-top: 10px; text-align: center;">{{$walletAddress}}</p> -->
                    </div>
                    <div class="pb-24 mb-24 line">
                <p>@lang('Deposit Address')</p>
                <div class="mb-16 box-ip-field-val">

                    <img class="lazyload" data-src="images/banner/banner-nft-3.jpg" alt="img">
                    <input type="text" class="form-control" value="{{$walletAddress}}">
                    <div class="group-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"  style="font-size:24px; color:#fff" type="button" class="copy-btn" onclick="copyFunctionwallet()" >
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
                </div>
                </div>
            </div>
        </div>
    </form>
    <div class="btn-fixed">
        <a href="{{route('user.invest')}}" class="tf-btn primary" style="width:1000px;">CANCEL</a>
    </div>



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
