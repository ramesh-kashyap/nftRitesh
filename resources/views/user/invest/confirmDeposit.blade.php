
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

  <!-- header starts -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="{{route('user.invest')}}">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">Confirm Deposit</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- confirm offer title starts -->
  <section class="section-lg-t-space">
    <div class="custom-container">
      <div class="offer-title">
        <img class="img-fluid metamask_fox" src="{{$qr_code}}" alt="metamask_fox" />
        <section class="section-t-space" style="overflow:hidden;">
                                            <div class="custom-container">
                                                <div class="details mt-0">
                                                    <ul style="overflow: hidden;">
                                                        <li>
                                                            <!-- <h4>1</h4> -->
                                                            <h6>{{$walletAddress}}
                                                            </h6>
                                                            <i class="fa fa-copy" style="width: 20px; color: white;" data-v-56930b78="" class="copy-btn" onclick="copyFunctionwallet()"></i>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
      </div>
    </div>
  </section>
  <!-- confirm offer title end -->

  <!-- confirm offer section starts -->



  <section class="section-t-space">
    <div class="custom-container">

    <form method="post" name="add" action="{{ route('user.confirmDeposit') }}"
	  data-v-8ad3dd38="" class="auth-form offer-form">
	  {{ csrf_field() }}

      <ul class="order-listing product-listing">
        <li>
          <div class="product-details">
            <div class="product-img">
              <img class="img-fluid" src="assets/images/product/trend6.png" alt="security" />
            </div>
            <div class="product-content">
              <div>
                <h4>@lang('Select Currency') </h4>
                <h4 class="product-item">{{$paymentMode}}</h4>
              </div>
              <div class="right-panal">
                <div class="counter">
                 
                  <h4>@lang('Amount')</h4>
                </div>
                <div class="timeing">
                  <h5>{{$amount}}</h5>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <div class="confirm-offer-details">
        
        <div class="message-body">
          <ul>
            <li>@lang('Transaction ID'):{{$transaction_id}}</li>
            <li>Send {{$paymentMode}} :{{$invoice_total_sum}}</li>
            <!-- <li>Item Type : 1</li>
            <li>Token : 0x731CA848567678fj465dh81</li>
            <li>startAmount : 1000000000</li> -->
          </ul>
        </div>
      </div>

      <div class="submit-btn d-flex w-100 mt-5">
        <a class="btn btn-inline gray-btn w-100 text-center" href="{{route('user.invest')}}">Cancel</a>
     
      </div>
    </div>
  </section>
  <!-- confirm offer section end -->

  <!-- Modal start -->
  <div class="modal fade confirm-modal" id="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="confirm-title">
            <img class="img-fluid confirm-offer" src="assets/images/svg/confirm-offer.svg" alt="confirm-offer" />
            <h2 class="font-color">Congratulation!</h2>
            <h4>You have mode an purchase for NFT you can check your purchase on the menu profile purchase made</h4>
          </div>

          <div class="submit-btn w-100 d-flex align-items-center justify-content-center">
            <a href="profile.html" class="btn theme-btn">Go to Purchase NFT</a>
            <a href="confirm-offer.html" class="btn gray-btn" data-bs-dismiss="modal">Cancel</a>
          </div>
        </div>
      </div>
</from>
    </div>
  </div>
  <!--Modal end -->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
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

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>

</html>