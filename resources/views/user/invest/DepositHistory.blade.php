
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

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="{{route('user.invest')}}">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">Deposit History</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- Statistics starts -->
  <section class="pt-0 section-lg-b-space">
    <div class="custom-container">
    

      <div class="tab-content w-100" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-rank" role="tabpanel" tabindex="0">
          <div class="submit-btn filter mt-3">
            <!-- <a class="theme-btn filter-btn btn" data-bs-toggle="offcanvas" data-bs-target="#rank-filter">
              <i class="ri-equalizer-line"></i>
            
            </a> -->
          </div>
          <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

<?php
 date_default_timezone_set('UTC');
  $cnt = 0; ?>
  @foreach($deposit_list as $value)
          <div class="accordion theme-accordion" id="accordionExample">
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <div class="" data-bs-toggle="collapse" data-bs-target="#p1">
                  <div class="nft-horizontal-box">
                    <div class="product-details">
                      <div class="product-image">
                        <img class="img-fluid" src="assets/images/product/s-1.jpg" alt="security" />
                      </div>
                      <div class="product-content">
                        <div>
                          <h4>{{ $value->amount }} {{generalDetail()->cur_text}}（TID: {{ $value->transaction_id }}）</h4>
                          <h6 class="">{{date("D, d M Y H:i:s ", strtotime($value->created_at))}}</h6>
                        </div>
                        <div class="counter">
                         
                          <h4 style="margin:30px;"> @if($value->status=="Pending")                                          
                                            <a  href="{{route('user.cancel-payment',['id'=>$value->orderId])}}"
                                                name="balance/oper_frm_btncancel" data-v-74600836="" 
                                                class="copy-btn" style="     background: #df3131;
                                                padding: 3px;
                                                color: #fff;
                                                text-decoration: none;
                                                border-radius: 7px; background: #df3131;padding-bottom:10px" >                                          
                                            Cancel</a> 
                                            @else
                                                            <span>Completed</span>                                       
                                                        @endif
                                        </div>
                                        
                                        </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
   
              @endforeach   
                                                                            
                                                                            <?php }?>    
             
            <div class="accordion-item">
              <!-- <div class="accordion-header" id="headingTwo">
                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p2"> -->

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

  <!-- offcanvas start -->
  <div class="offcanvas theme-offcanvas offcanvas-bottom" tabindex="-1" id="rank-filter">
    <div class="offcanvas-body">
      <form class="auth-form">
        <div class="dropdown mt-3">
          <h4>Categories</h4>
          <select class="form-control category-select form-select">
            <option selected>All Categories</option>
            <option value="1">New</option>
            <option value="2">Art</option>
            <option value="3">Collectibles</option>
            <option value="1">Domin Name</option>
            <option value="2">Music</option>
            <option value="3">Photography</option>
            <option value="1">Sports</option>
            <option value="2">Trading Cards</option>
            <option value="3">Utility</option>
          </select>
        </div>

        <div class="dropdown mt-3">
          <h4>Chain</h4>
          <select class="form-control category-select form-select">
            <option selected>All Chain</option>
            <option value="1">Ethereum</option>
            <option value="2">Solana</option>
            <option value="3">Polygon</option>
            <option value="1">Klaytn</option>
          </select>
        </div>
        <div class="submit-btn mt-3 mb-0">
          <a href="statisties.html" data-bs-dismiss="offcanvas" class="btn theme-btn mt-4">Apply</a>
        </div>
      </form>
    </div>
  </div>

  <div class="offcanvas theme-offcanvas offcanvas-bottom" tabindex="-1" id="activity-filter">
    <div class="offcanvas-body">
      <form class="auth-form">
        <div class="dropdown mt-3 mb-3">
          <h4>Sales</h4>
          <select class="form-control category-select form-select">
            <option selected>All Sales / Transfer</option>
            <option value="1">Sales</option>
            <option value="2">Listing</option>
            <option value="3">Bids</option>
            <option value="1">Transfers</option>
          </select>
        </div>

        <div class="dropdown mt-3 mb-3">
          <h4>Chain</h4>
          <select class="form-control category-select form-select">
            <option selected>All Chain</option>
            <option value="1">Ethereum</option>
            <option value="2">Solana</option>
            <option value="3">Polygon</option>
            <option value="1">Klaytn</option>
          </select>
        </div>

        <div class="submit-btn mt-3 mb-0">
          <a href="statisties.html" class="btn theme-btn mt-4">Apply</a>
        </div>
      </form>
    </div>
  </div>
  <!-- offcanvas end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <div class="navbar-menu">
    <ul>
      <li>
        <a href="landing.html">
          <div class="icon">
            <i class="ri-home-5-line unactive"></i>
            <i class="ri-home-5-fill active"></i>
          </div>
          <span>Home</span>
        </a>
      </li>
      <li class="active">
        <a href="{{route('user.statistics')}}">
          <div class="icon">
            <i class="ri-line-chart-line unactive"></i>
            <i class="ri-line-chart-fill active"></i>
          </div>
          <span class="active">Statistics</span>
        </a>
      </li>
      <li>
        <a href="create-nft.html" class="plus">
          <i class="ri-add-line plus-icon"></i>
        </a>
      </li>
      <li>
        <a href="search.html">
          <div class="icon">
            <i class="ri-search-line unactive"></i>
            <i class="ri-search-fill active"></i>
          </div>
          <span>Search</span>
        </a>
      </li>
      <li>
        <a href="{{route('user.profile1')}}">
          <div class="icon">
            <i class="ri-user-3-line unactive"></i>
            <i class="ri-user-3-fill active"></i>
          </div>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- bottom navbar end -->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>

</html>