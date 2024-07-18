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

  <!-- trending collation  section start -->
  <section class="section-t-space">
    <div class="custom-container" style="
    height: fit-content;
">
      <div class="title">
        <h4>Trending Collection</h4>
        <a >See All</a>
      </div>
      <div class="swiper myswiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="ratio_landscape swiper-wrapper" id="swiper-wrapper-dddfd1c6504b2426" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
          <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 84.6667px; margin-right: 12px;">
            <div class="collection-box">
              <a >
                <div class="collection-image bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon5.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                  <img class="bg-img" src="assets/images/product/mon4.jpg" alt="trend5" style="display: none;">
                </div>
                <div class="collection-details">
                  <div class="collection-profile">
                    <img src="assets/images/product/mon4.jpg" alt="pro1">
                  </div>
                  <div class="collection-name">
                    <h5>Art</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 84.6667px; margin-right: 12px;">
            <div class="collection-box">
              <a >
                <div class="collection-image bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon5.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                  <img class="bg-img" src="assets/images/product/mon5.jpg" alt="trend6" style="display: none;">
                </div>
                <div class="collection-details">
                  <div class="collection-profile">
                    <img src="assets/images/product/mon5.jpg" alt="pro3">
                  </div>
                  <div class="collection-name">
                    <h5>Music</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 84.6667px; margin-right: 12px;">
            <div class="collection-box">
              <a >
                <div class="collection-image bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon6.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                  <img class="bg-img" src="assets/images/product/mon6.jpg" alt="trend7" style="display: none;">
                </div>
                <div class="collection-details">
                  <div class="collection-profile">
                    <img src="assets/images/product/mon6.jpg" alt="pro4">
                  </div>
                  <div class="collection-name">
                    <h5>Sports</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 84.6667px; margin-right: 12px;">
            <div class="collection-box">
              <a >
                <div class="collection-image bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon6.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
                  <img class="bg-img" src="assets/images/product/mon6.jpg" alt="trend8" style="display: none;">
                </div>
                <div class="collection-details">
                  <div class="collection-profile">
                    <img src="assets/images/product/mon6.jpg" alt="pro5">
                  </div>
                  <div class="collection-name">
                    <h5>Art</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
  </section>
  <!-- trending collation section end -->

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
                  <h5>Art collection</h5>
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
                  <h5>Art collection</h5>
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
                  <h5>Art collection</h5>
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
                  <h5>Art collection</h5>
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

  <!-- Popular section start -->
  <section class="section-t-space section-b-space">
    <div class="custom-container">
      <div class="title">
        <h4>Popular</h4>
        <a>See All</a>
      </div>
      <div class="row g-4 ratio_square">
        <div class="col-6">
          <div class="nft-box nft-box-bg">
            <a class="bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon7.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
              <img class="bg-img product-box-img" src="assets/images/product/mon7.jpg" alt="popular1" style="display: none;">
            </a>
            <div class="product-box-detail">
              <h5>3D collection #081</h5>
              <h6>3D Art</h6>
              <div class="bottom-panel">
                <div class="counter">
                  <img src="assets/images/eth-diamond.png" alt="arrow">
                  <h6>0.956</h6>
                </div>
                <a class="likes" data-toggle-target="#myTogglingElement" data-toggle-class="blue">
                  <i class="ri-heart-3-line heart" id="myTogglingElement"></i>
                  <h6>20</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="nft-box nft-box-bg">
            <a class="bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon8.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
              <img class="bg-img product-box-img" src="assets/images/product/mon8.jpg" alt="popular2" style="display: none;">
            </a>
            <div class="product-box-detail">
              <h5>Glass World #23</h5>
              <h6>Glass World</h6>
              <div class="bottom-panel">
                <div class="counter">
                  <img src="assets/images/eth-diamond.png" alt="arrow">
                  <h6>0.956</h6>
                </div>
                <a class="likes" data-toggle-target="#myTogglingElement" data-toggle-class="blue">
                  <i class="ri-heart-3-line heart" id="myTogglingElement1"></i>
                  <h6>20</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="nft-box nft-box-bg">
            <a class="bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon9.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
              <img class="bg-img product-box-img" src="assets/images/product/mon9.jpg" alt="popular3" style="display: none;">
            </a>
            <div class="product-box-detail">
              <h5>Monkey Men</h5>
              <h6>3D Art</h6>
              <div class="bottom-panel">
                <div class="counter">
                  <img src="assets/images/eth-diamond.png" alt="arrow">
                  <h6>0.956</h6>
                </div>
                <a class="likes" data-toggle-target="#myTogglingElement" data-toggle-class="blue">
                  <i class="ri-heart-3-line heart" id="myTogglingElement2"></i>
                  <h6>20</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="nft-box nft-box-bg">
            <a class="bg-size" style="
background-image: url(http://localhost:8000/assets/images/product/mon10.jpg);
background-size:cover;
background-position: center;
background-repeat: no-repeat;
display: block;
">
              <img class="bg-img product-box-img" src="assets/images/product/mon10.jpg" alt="popular4" style="display: none;">
            </a>
            <div class="product-box-detail">
              <h5>Digital #547</h5>
              <h6>3D Art</h6>
              <div class="bottom-panel">
                <div class="counter">
                  <img src="assets/images/eth-diamond.png" alt="arrow">
                  <h6>0.956</h6>
                </div>
                <a class="likes" data-toggle-target="#myTogglingElement" data-toggle-class="blue">
                  <i class="ri-heart-3-line heart" id="myTogglingElement3"></i>
                  <h6>20</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Popular section end -->
   <!-- panel-space start -->
 <section class="panel-space"></section>
 <!-- panel-space end -->

  @include('layouts.upnl.footer')