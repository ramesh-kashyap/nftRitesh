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
        <a href="nft-details.html">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">@lang('Make Deposit')</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- make offer starts -->
  <section class="section-t-space section-lg-b-space">
    <div class="custom-container">
      
	  <form method="post" name="add" action="{{ route('user.confirmDeposit') }}"
	  data-v-8ad3dd38="" class="auth-form offer-form">
	  {{ csrf_field() }}
	  <label class="form-label mt-0">@lang('Amount')</label>
	  <div class="mb-3 mt-3">
          <input class="form-control" placeholder="" type="number" name="Sum" value="10">
        </div>
        <div class="offer-label">

         

          <label class="form-label mt-0">@lang('Select Payment Mode')</label>
         
        </div>
        <select class="form-select mt-0" type="text" name="PSys">
          <option value="USDT.BEP20">USDT BEP20</option>
          <option value="USDT.TRC20">USDT TRC20</option>
        </select>
        
       
        <br/>
        <br/>
        <h5 class="mt-0"></h5>
        <div class="submit-btn">
          <button type="submit" class="btn theme-btn"> Deposit</button>
        </div>
      </form>
    </div>
  </section>
  <!-- make offer end -->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- pikaday js -->
  <script src="assets/js/pikaday.js"></script>
  <script src="assets/js/custom-pikaday.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>

</html>
