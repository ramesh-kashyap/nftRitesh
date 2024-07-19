<html lang="en" dir="ltr"><head><style>
	a:hover {
    text-decoration: none;
    list-style: none;
}
</style>
			



  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="nfty">
  <meta name="keywords" content="nfty">
  <meta name="author" content="nfty">
  <base href="{{ asset('') }}">

  <link rel="manifest" href="./manifest.json">
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <title>nfty App</title>
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/images/logo/logo.png">
  <meta name="theme-color" content="#205dee">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="nfty">
  <meta name="msapplication-TileImage" content="assets/images/logo/logo.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="assets/css/vendors/swiper-bundle.min.css">

  <!-- remixicon css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/remixicon.css">

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css">
</head>

<body>

  <!-- loader start-->
  <div class="loader-wrapper hidden" id="loader">
    <div class="loader animate">
      <span>N</span>
      <span>F</span>
      <span>T</span>
      <span>Y</span>
    </div>
  </div>
  <!-- loader end -->

  <!-- side bar start -->
  <div class="offcanvas sidebar-offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
    <div class="offcanvas-header">
      <img class="img-fluid img" src="assets/images/icons/pro11.png" alt="pro11">
      <h3>Hello, Nekochimin</h3>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="sidebar-content">
        <ul class="link-section">
          <li>
            <div class="pages">
              <h3>RTL</h3>
              <div class="switch-btn">
                <input id="dir-switch" type="checkbox">
              </div>
            </div>
          </li>

          <li>
            <div class="pages">
              <h3>Notification</h3>
              <div class="switch-btn">
                <input type="checkbox">
              </div>
            </div>
          </li>

          <li>
            <a href="page-listing.html" class="pages">
              <h3>Pages List</h3>
              <i class="ri-arrow-drop-right-line"></i>
            </a>
          </li>

          <li>
            <a href="setting.html" class="pages">
              <h3>Setting</h3>
              <i class="ri-arrow-drop-right-line"></i>
            </a>
          </li>

          <li>
            <a href="#" class="pages">
              <h3>Privacy Policy</h3>
              <i class="ri-arrow-drop-right-line"></i>
            </a>
          </li>

          <li>
            <a href="signin.html" class="pages">
              <h3>Logout</h3>
              <i class="ri-arrow-drop-right-line"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- side bar end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="head-content">
        <button class="sidebar-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="ri-menu-line"></i>
        </button>
        <img class="img-fluid logo" src="assets/images/logo/nfty-logo.png" alt="nfty-logo">
        <a href="notification.html">
          <i class="ri-notification-2-line"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->


  <!-- Explore section start -->
  <section class="section-t-space">
    <div class="custom-container">
      <div class="title">
        <h4>Explore</h4>
        <a>See All</a>
      </div>

      <div class="swiper myswiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" style="
    height: -webkit-fill-available;
">
        <div class="ratio_square swiper-wrapper" id="swiper-wrapper-ed72c239f152fadf" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 84.6667px; margin-right: 12px;">
            <a class="nft-box text-center mb-0">
              <div class="product-box-img bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon1.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                <img class="bg-img" src="assets/images/product/mon1.jpg" alt="trend1" style="display: none;">
              </div>
              <h5 class="pt-2">3D Art NFT</h5>
            </a>
          </div>
          <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 84.6667px; margin-right: 12px;">
            <a class="nft-box text-center mb-0">
              <div class="product-box-img bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon2.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                <img class="bg-img" src="assets/images/product/mon2.jpg" alt="trend2" style="display: none;">
              </div>
              <h5 class="pt-2">Paji Gujju</h5>
            </a>
          </div>
          <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 84.6667px; margin-right: 12px;">
            <a class="nft-box text-center mb-0">
              <div class="product-box-img bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon3.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                <img class="bg-img" src="assets/images/product/mon3.jpg" alt="trend3" style="display: none;">
              </div>
              <h5 class="pt-2">Sleepy Buddha</h5>
            </a>
          </div>
          <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 84.6667px; margin-right: 12px;">
            <a class="nft-box text-center mb-0">
              <div class="product-box-img bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon4.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                <img class="bg-img" src="assets/images/product/mon4.jpg" alt="trend4" style="display: none;">
              </div>
              <h5 class="pt-2">3D Art NFT</h5>
            </a>
          </div>
        </div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
  </section>
  <!-- Explore section end -->

  <!--category  section starts -->
  <section class="section-t-space">
    <div class="custom-container">
      <div class="title">
        <h4>Category</h4>
      </div>

      <ul class="category-slide">
        <li>
          <a href="art.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/brush.svg" alt="art" />
            <h5>Art</h5>
          </a>
        </li>
        <li>
          <a href="nft-list.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/music.svg" alt="music" />
            <h5>Music</h5>
          </a>
        </li>
        <li>
          <a href="explore.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/cup.svg" alt="sport" />
            <h5>Sport</h5>
          </a>
        </li>
        <li>
          <a href="collection.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/fire.svg" alt="fire" />
            <h5>Trend</h5>
          </a>
        </li>
        <li>
          <a href="index.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/brush.svg" alt="art" />
            <h5>Art</h5>
          </a>
        </li>
        <li>
          <a href="index.html" class="category-boxes">
            <img class="img-fluid cat-img" src="assets/images/svg/music.svg" alt="music" />
            <h5>Music</h5>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- category section end -->

  <!-- popular seller section start -->
  <section class="section-t-space">
    <div class="custom-container">
      <div class="title">
        <h4>Popular Seller</h4>
        <a>See All</a>
      </div>

      <div class="popular-seller">
        <div class="row g-4">
          <div class="col-6">
            <div class="seller">
              <a>
                <img class="img-fluid" src="assets/images/product/mon6.jpg" alt="pro4">
                <div class="seller-detail">
                  <h5>Total Team</h5>
                  <h6>12 ETH</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="seller">
              <a>
                <img class="img-fluid" src="assets/images/product/mon1.jpg" alt="pro5">
                <div class="seller-detail">
                  <h5>Total Recharge</h5>
                  <h6>12 ETH</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="seller">
              <a>
                <img class="img-fluid" src="assets/images/product/mon2.jpg" alt="pro6">
                <div class="seller-detail">
                  <h5>Total Withdraw</h5>
                  <h6>12 ETH</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="seller">
              <a>
                <img class="img-fluid" src="assets/images/product/mon3.jpg" alt="pro7">
                <div class="seller-detail">
                  <h5>Total Income</h5>
                  <h6>12 ETH</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--popular seller section end -->
 

   <!-- Statistics starts -->
   <section class="pt-0 section-lg-b-space">
    <div class="custom-container">
      <ul class="nav nav-pills tab-style1 mt-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-rank-tab" data-bs-toggle="pill" data-bs-target="#pills-rank"
            type="button" role="tab">Rankings</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-activity"
            type="button" role="tab">Activity</button>
        </li>
      </ul>

      <div class="tab-content w-100" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-rank" role="tabpanel" tabindex="0">
          <div class="submit-btn filter mt-3">
            <a class="theme-btn filter-btn btn" data-bs-toggle="offcanvas" data-bs-target="#rank-filter">
              <i class="ri-equalizer-line"></i>
              <h5>Filter</h5>
            </a>
          </div>

          <div class="accordion theme-accordion" id="accordionExample">
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p1">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>1</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-1.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>The Metaplace</h4>
                          <h6 class="success-color">+23.00%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>272.93</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="p1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+8.26%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingTwo">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p2">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>2</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-2.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>3D Art</h4>
                          <h6 class="text-danger">-32.01%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-3.76%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingThree">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p3">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>3</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-3.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>MMA9 #0120</h4>
                          <h6 class="text-danger">-10.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-30.16%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingFour">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p4">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>4</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-4.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Lexicoma</h4>
                          <h6 class="success-color">+23.00%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+5.32%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingFive">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p5">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>5</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-5.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Cartoon Art</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p5" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+12.16%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingSix">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p6">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>6</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-6.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Wsezug</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p6" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+6.44%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingSeven">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p7">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>7</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-7.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Glossica</h4>
                          <h6 class="success-color">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p7" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-5.97%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingEight">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p8">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>8</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-8.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>3D Character</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="p8" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+15.26%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-activity" role="tabpanel" tabindex="0">
          <div class="submit-btn filter mt-3">
            <a class="btn theme-btn filter-btn" data-bs-toggle="offcanvas" data-bs-target="#activity-filter">
              <i class="ri-equalizer-line"></i>
              <h5>Filter</h5>
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
                          <h4>The Metaplace</h4>
                          <h6 class="success-color">+23.00%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>272.93</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="one" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+8.26%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
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
                          <h4>3D Art</h4>
                          <h6 class="text-danger">-32.01%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="two" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-3.76%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
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
                          <h4>MMA9 #0120</h4>
                          <h6 class="text-danger">-10.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="three" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-30.16%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingfour">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#four">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>4</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-4.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Lexicoma</h4>
                          <h6 class="success-color">+23.00%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="four" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+5.32%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingfive">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#five">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>5</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-5.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Cartoon Art</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="five" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+12.16%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingsix">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#six">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>6</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-6.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Wsezug</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="six" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+6.44%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingseven">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seven">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>7</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-7.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>Glossica</h4>
                          <h6 class="success-color">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="seven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="danger-color">-5.97%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" id="headingeight">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#eight">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <span>8</span>
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-8.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>3D Character</h4>
                          <h6 class="text-danger">-32.98%</h6>
                        </div>
                        <div class="counter">
                          <img class="img-fluid arrow" src="assets/images/eth-diamond.png" alt="arrow" />
                          <h4>0.2723</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="eight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul class="nft-horizontal-content">
                    <li>
                      <h5>24h%</h5>
                      <h6 class="success-color">+15.26%</h6>
                    </li>
                    <li>
                      <h5>Floor Price</h5>
                      <h6>0.109</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>6,134</h6>
                    </li>
                    <li>
                      <h5>Owners</h5>
                      <h6>13,652</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statistics end -->



  @include('layouts.upnl.footer')