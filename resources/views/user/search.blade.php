
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="nfty" />
  <meta name="keywords" content="nfty" />
  <meta name="author" content="nfty" />
  <link rel="manifest" href="./manifest.json" />
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
  <title>nfty App</title>
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
  <base href="{{ asset('') }}">

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
  <!-- swiper css -->
  <link rel="stylesheet" href="assets/css/vendors/swiper-bundle.min.css" />

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
        <i class="ri-arrow-left-s-line"></i>
        <h3 class="middle-title">Search</h3>
      </div>
    </div>
  </header>
  <!--header end   -->

  <!-- options section starts -->
  <section class="search-section section-t-space">
    <div class="custom-container">
      <form class="auth-form search-head" target="_blank">
        <div class="form-group">
          <div class="form-input">
            <input type="text" class="form-control" id="inputusername" placeholder="Search" />
            <i class="ri-search-line search-icon"></i>
          </div>

          <a href="#search-filter" class="btn filter-button" data-bs-toggle="offcanvas" data-bs-target="#search-filter">
            <i class="ri-equalizer-line"></i>
          </a>
        </div>
      </form>
    </div>
  </section>
  <!-- options section end -->

  <!-- Collection start -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h4>3D Art Collection</h4>
      </div>

      <div class="row g-4">
        <div class="col-6">
          <div class="collection-box ratio_landscape">
            <a href="art.html">
              <div class="collection-image">
                <img class="bg-img" src="assets/images/product/trend7.png" alt="trend7" />
              </div>
              <div class="collection-details">
                <div class="collection-profile ms-2">
                  <img src="assets/images/icons/pro8.png" alt="pro8" />
                </div>

                <div class="collection-name mt-0 ps-3">
                  <h5 class="text-start">3D Art Paint</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="collection-box ratio_landscape">
            <a href="art.html">
              <div class="collection-image">
                <img class="bg-img" src="assets/images/1.gif" alt="trend9" />
              </div>
              <div class="collection-details">
                <div class="collection-profile ms-2">
                  <img src="assets/images/icons/pro9.png" alt="pro9" />
                </div>

                <div class="collection-name mt-0 ps-3">
                  <h5 class="text-start">Glassi Art</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="collection-box ratio_landscape">
            <a href="art.html">
              <div class="collection-image">
                <img class="bg-img" src="assets/images/product/trend10.png" alt="trend10" />
              </div>
              <div class="collection-details">
                <div class="collection-profile ms-2">
                  <img src="assets/images/icons/pro10.png" alt="pro10" />
                </div>
                <div class="collection-name mt-0 ps-3">
                  <h5 class="text-start">Face Skull</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="collection-box ratio_landscape">
            <a href="art.html">
              <div class="collection-image">
                <img class="bg-img" src="assets/images/product/trend11.png" alt="trend11" />
              </div>
              <div class="collection-details">
                <div class="collection-profile ms-2">
                  <img src="assets/images/icons/pro11.png" alt="pro11" />
                </div>
                <div class="collection-name mt-0 ps-3">
                  <h5 class="text-start">Dynamic</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Collection start -->

  <!-- search section starts -->
  <section class="section-t-space section-b-space">
    <div class="custom-container" style="height: -webkit-fill-available;">
      <div class="title">
        <h4>Items</h4>
        <a href="nft-list.html">See All</a>
      </div>

      <div class="swiper slider-2 ratio_square">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="nft-box">
              <a href="nft-list.html">
                <img class="bg-img product-box-img" src="assets/images/product/1.png" alt="popular1" />
              </a>
              <div class="product-box-detail">
                <h5>Collection#81</h5>
                <div class="bottom-panel">
                  <div class="counter">
                    <img src="assets/images/eth-diamond.png" alt="arrow" />
                    <h6>0.956</h6>
                  </div>
                  <a href="wishlist.html" class="likes">
                    <i class="ri-heart-3-line"></i>
                    <h6>20</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="nft-box">
              <a href="nft-list.html">
                <img class="bg-img product-box-img" src="assets/images/product/2.png" alt="popular2" />
              </a>
              <div class="product-box-detail">
                <h5>Glass World</h5>
                <div class="bottom-panel">
                  <div class="counter">
                    <img src="assets/images/eth-diamond.png" alt="arrow" />
                    <h6>0.956</h6>
                  </div>
                  <a href="wishlist.html" class="likes">
                    <i class="ri-heart-3-line"></i>
                    <h6>20</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="nft-box">
              <a href="nft-list.html">
                <img class="bg-img product-box-img" src="assets/images/product/popular3.jpg" alt="popular3" />
              </a>
              <div class="product-box-detail">
                <h5>Monkey Men</h5>
                <div class="bottom-panel">
                  <div class="counter">
                    <img src="assets/images/eth-diamond.png" alt="arrow" />
                    <h6>0.956</h6>
                  </div>
                  <a href="wishlist.html" class="likes">
                    <i class="ri-heart-3-line"></i>
                    <h6>20</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="nft-box">
              <a href="nft-list.html">
                <img class="bg-img product-box-img" src="assets/images/product/popular6.png" alt="popular6" />
              </a>
              <div class="product-box-detail">
                <h5>Durbin#54</h5>
                <div class="bottom-panel">
                  <div class="counter">
                    <img src="assets/images/eth-diamond.png" alt="arrow" />
                    <h6>0.956</h6>
                  </div>
                  <a href="wishlist.html" class="likes">
                    <i class="ri-heart-3-line"></i>
                    <h6>20</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- search section starts -->

  <!-- search filter offcanvas -->
  <div class="offcanvas theme-offcanvas search-offcanvas offcanvas-bottom" tabindex="-1" id="search-filter">
    <div class="offcanvas-body">
      <div class="accordion theme-accordion search-accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <div class="accordion-header" id="headingOne">
            <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#p1">
              <div class="head-title">
                <h4>Status</h4>
              </div>
            </div>
          </div>

          <div id="p1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="buy" />
                <label class="form-check-label" for="buy">Buy Now</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="auction" checked />
                <label class="form-check-label" for="auction">On Auction</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="new" />
                <label class="form-check-label" for="new">New</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="offers" checked />
                <label class="form-check-label" for="offers">Has Offers</label>
              </div>

              <div class="form-check pb-3">
                <input class="form-check-input" type="checkbox" value="" id="buy-card" checked />
                <label class="form-check-label" for="buy-card">Buy with Card</label>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" id="headingTwo">
            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p2">
              <div class="head-title">
                <h4>Price</h4>
              </div>
            </div>
          </div>
          <div id="p2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form class="auth-form offer-form">
                <select class="form-select mt-0">
                  <option selected>Select Currency</option>
                  <option value="1">Ethereum</option>
                  <option value="2">Metamask</option>
                  <option value="3">Fortmatic</option>
                  <option value="4">Authereum</option>
                  <option value="5">Venly</option>
                </select>
              </form>
              <div class="search-during">
                <div class="auth-form offer-form search-form">
                  <input type="number" class="form-control" id="amount1" />
                </div>
                <h4>To</h4>
                <div class="auth-form offer-form search-form">
                  <input type="number" class="form-control" id="amount2" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" id="headingThree">
            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p3">
              <div class="head-title">
                <h4>Quantity</h4>
              </div>
            </div>
          </div>
          <div id="p3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body">
                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" value="" id="all" />
                  <label class="form-check-label" for="all">All Items</label>
                </div>

                <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox" value="" id="single" checked />
                  <label class="form-check-label" for="single">Single Items</label>
                </div>

                <div class="form-check pb-3">
                  <input class="form-check-input" type="checkbox" value="" id="bundles" />
                  <label class="form-check-label" for="bundles">Bundles</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" id="headingFour">
            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p4">
              <div class="head-title">
                <h4>Chain</h4>
              </div>
            </div>
          </div>
          <div id="p4" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="ethereum" />
                <label class="form-check-label" for="ethereum">Ethereum</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="polygon" checked />
                <label class="form-check-label" for="polygon">Polygon</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="klaytn" />
                <label class="form-check-label" for="klaytn">Klaytn</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="solana" />
                <label class="form-check-label" for="solana">Solana</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="usdt" checked />
                <label class="form-check-label" for="usdt">USDT</label>
              </div>

              <div class="form-check pb-3">
                <input class="form-check-input" type="checkbox" value="" id="usdc" />
                <label class="form-check-label" for="usdc">USDC</label>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-header" id="headingFive">
            <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p5">
              <div class="head-title">
                <h4>Category</h4>
              </div>
            </div>
          </div>
          <div id="p5" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="art" />
                <label class="form-check-label" for="art">Art</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="collectible" checked />
                <label class="form-check-label" for="collectible">Collectible</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="domain" />
                <label class="form-check-label" for="domain">Domain Name</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="name" />
                <label class="form-check-label" for="name">Name</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="photography" checked />
                <label class="form-check-label" for="photography">Photography</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="sports" />
                <label class="form-check-label" for="sports">Sports</label>
              </div>

              <div class="form-check mb-1">
                <input class="form-check-input" type="checkbox" value="" id="card" checked />
                <label class="form-check-label" for="card">Trading Cards</label>
              </div>

              <div class="form-check pb-3">
                <input class="form-check-input" type="checkbox" value="" id="utility" />
                <label class="form-check-label" for="utility">Utility</label>
              </div>
            </div>
          </div>
        </div>
        <div class="submit-btn d-flex w-100 mt-3">
          <a href="search.html" class="gray-btn btn btn-inline w-100" data-bs-dismiss="modal">Reset</a>
          <a href="search.html" class="theme-btn btn btn-inline w-100">Apply</a>
        </div>
      </div>
    </div>
  </div>
  <!-- search filter offcanvas -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  @include('layouts.upnl.footer')