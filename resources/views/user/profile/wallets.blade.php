
<html lang="en" dir="ltr">

<head>
    <style>
        a:hover {
            text-decoration: none;
            list-style: none;
        }
    </style>


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

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.html">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">My Wallet</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- setting section start -->
  <span id="copyResult"></span>
  <section class="section-lg-t-space">
    <div class="custom-container">
      <div class="wallet-profile">
        <img class="img-fluid profile-pic" src="assets/images/product/45.png" alt="Profile" />
        <h2>AndrewNFT</h2>
        <h3>$450,459.63</h3>
        <div class="wallet-id">
          <img class="img-fluid id-pic" src="assets/images/product/1.png" alt="id" />
          <h5>TCD4YZHdg88f9ccsKaaY78d92T7ciHkFDa</h5>
          <button type="button" class="btn" id="liveToastBtn">
            <i class="ri-file-copy-line"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- copy alart start -->
  <div class="copy-alert toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert">
      <div class="toast-body">Copied!</div>
    </div>
  </div>
  <!-- copy alart end -->
   

  <!-- options starts -->
  <section class="section-t-space">
    <div class="custom-container">
      <div class="wallet-options">
        <ul class="wallet-list" style="overflow: none;">
          <li class="wallet-items">
            <h1 style="color:#fff">12.15</h1>
            <h6>Earning</h6>
          </li>
          <li class="wallet-items">
            <h1 style="color:#fff">0</h1>
            <h6>Withdrawn</h6>
          </li>
          <li class="wallet-items">
            <h1 style="color:#fff">112.15</h1>
            <h6>Undrawn</h6>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- options end -->
 
  <section class="section-t-space">
    <div class="custom-container">
      <!-- <h3 class="text-white mb-3">Category</h3> -->
      <ul class="category-slide wide" style="overflow:hidden;">
        <div class="col-4" style="text-align: center;  ">
        <li>
          <a href="art.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/product/download.png                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          " alt="create" />
            <h5>Deposit</h5>
          </a>
        </li>
      </div>
      <div class="col-4" style="text-align: center;">
        <li>
          <a href="nft-list.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/product/download.png" alt="buy" />
            <h5>Withdraw</h5>
          </a>
        </li>
        </div>
        <div class="col-4" style="text-align: center;">
        <li>
          <a href="explore.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/discount-shape.svg" alt="Offer" />
            <h5>Setting</h5>
          </a>
        </li>
        </div>
      </ul>
    </div>
  </section>
  <!-- category section end -->
  <ul class="nav nav-pills tab-style1 mt-3" id="pills-tab" role="tablist">
  <!-- <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-rank-tab" data-bs-toggle="pill" data-bs-target="#pills-rank"
      type="button" role="tab">Deposit in Fiat Currency</button>
  </li> -->
 
</ul>
  <!-- wallet start -->
  <div class="submit-btn filter mt-3">
    <a class="btn theme-btn filter-btn" data-bs-toggle="offcanvas" data-bs-target="#activity-filter">
      <i class="ri-equalizer-line"></i>
      <h5>History</h5>
    </a>
  </div>
  <div class="accordion theme-accordion" id="accordionExample1">
    <div class="accordion-item">
      <div class="accordion-header" id="headingne">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#one">
          <div class="nft-horizontal-box">
            <div class="product-details">
              <span>1</span>
              <div class="product-image">
                <img class="img-fluid" src="assets/images/product/s-1.jpg" alt="security" />
              </div>
              <div class="product-content">
                <div>
                  <h3>Activity Rewards</h3>
                  <h6>2024/07/15 14:31:05</h6>
                </div>
                <div class="counter">
                  <h6 class="success-color">+23.00%</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
    <div class="accordion-item">
      <div class="accordion-header" id="headingtwo">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#two">
          <div class="nft-horizontal-box">
            <div class="product-details">
              <span>2</span>
              <div class="product-image">
                <img class="img-fluid" src="assets/images/product/s-2.jpg" alt="security" />
              </div>
              <div class="product-content">
                <div>
                  <h3>Activity Rewards</h3>
                  <h6>2024/07/15 14:31:05</h6>
                </div>
                <div class="counter">
                  <h6 class="text-danger">-32.00%</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" id="headingthree">
        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#three">
          <div class="nft-horizontal-box">
            <div class="product-details">
              <span>3</span>
              <div class="product-image">
                <img class="img-fluid" src="assets/images/product/s-3.jpg" alt="security" />
              </div>
              <div class="product-content">
                <div>
                  <h3>Activity Rewards</h3>
                  <h6>2024/07/15 14:31:05</h6>
                </div>
                <div class="counter">
                  <h6 class="success-color">+23.00%</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- wallet end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  @include('layouts.upnl.footer')

  