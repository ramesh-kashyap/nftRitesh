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
  <base href="http://localhost:8000/">

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
            <!-- <img class="img-fluid profile-pic" src="assets/images/product/45.png" alt="Profile" />
            <h2><span style="font-size:20px; font-weight:200">Referral code:  </span>U4U7U7</h2> -->
        <h3>Invitation Link</h3>
        <div class="wallet-id">
          <img class="img-fluid id-pic" src="assets/images/product/1.png" alt="id" />
          <h5>https://treasurenft.xyz/#/uc/register/?inviteCode=U4U7U7</h5>
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
        <ul class="wallet-list">
          <li class="wallet-items">
            <h2 style="color:#fff">0 USDT</h3>            
            <h6>Your Total Rewards</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0 USDT</h3> 
            <h6>1st place in 24 hours</h6>
          </li>
        </ul>
      </div>
    </div>
  </section>
    <!-- options starts -->
    <section class="section-t-space">
    <div class="custom-container">
      <div class="wallet-options">
        <ul class="wallet-list">
          <li class="wallet-items">
            <h2 style="color:#fff">{{number_format($gen_team3Income,2)}}</h3>            
            <h6>Total Registered Member</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Total Valid Member</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Member A</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Valid A</h6>
          </li>
        </ul>
      </div>
    </div>
  </section>
    <!-- options starts -->
    <section class="section-t-space">
    <div class="custom-container">
      <div class="wallet-options">
        <ul class="wallet-list">
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3>            
            <h6>Member B</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Valid B</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Member C</h6>
          </li>
          <li class="wallet-items">
            <h2 style="color:#fff">0</h3> 
            <h6>Valid C</h6>
          </li>
        </ul>
      </div>
    </div>
  </section>
  
  
  <!-- wallet start -->
  <section class="section-lg-t-space section-lg-b-space">
    <div class="custom-container">
      <div class="category-detail-tab">
        <ul class="nav nav-tabs tab-style2" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#token-tab-pane"
              type="button" role="tab">Invite your friends and earn together</button>
          </li>

        </ul>
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="token-tab-pane" role="tabpanel" tabindex="0">
          <ul class="token-box">
             <!-- collection section start -->
  <section class="section-t-space section-lg-b-space ratio_landscape" style="width:100%">
    <div class="custom-container">
      <div class="row ">       
          <a href="creator-details.html" class="collection-box">
            <div class="collection-image">
                <h5> </h5>               
            </div>
            <div class="collection-details">            
              <div class="collection-name text-center">
              <img src="assets/images/product/reffrel.png" alt="pro1" style="height:300px; width:auto" />                
              </div>
            </div>
            <section class="section-t-space" style="overflow:hidden;">
                <div class="custom-container">
                  <div class="details mt-0">
                    <ul style="overflow: hidden;">
                      <li>
                        <!-- <h4>1</h4> -->
                        <h6>https://treasurenft.xyz/#/uc/register/?inviteCode=U4U7U7</h6>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </section>

              
          </a>
      </div>      
    </div>
  </section>
  <!-- collection section end -->
          </ul>
        </div>
        <div class="tab-pane fade" id="nft-tab-pane" role="tabpanel" tabindex="0">
          <!-- empty Notification starts -->
  <section class="section-t-space p-0">
    <div class="custom-container">
      <ul class="nav nav-pills tab-style1" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            type="button" role="tab">General</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab">NFTs</button>
        </li>
      </ul>
      <div class="tab-content w-100" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
          <div class="empty-tab">
            <img class="img-fluid bell" src="assets/images/svg/bell.svg" alt="bell" />
            <h3>Empty</h3>
            <h4>You don’t have any notification at this time</h4>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
          <div class="empty-tab">
            <img class="img-fluid bell" src="assets/images/svg/bell.svg" alt="bell" />
            <h3>Empty</h3>
            <h4>You don’t have any notification at this time</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- empty Notification end -->
        </div>
        <div class="tab-pane fade" id="itc-tab-pane" role="tabpanel" tabindex="0">
          <!-- empty search starts -->
  <section class="search-section section-t-space">
    <div class="custom-container">
      <form class="auth-form search-head" target="_blank">
        <div class="form-group">
          <div class="form-input">
            <input type="text" class="form-control" id="inputusername" placeholder="Search" />
            <i class="ri-search-line"></i>
          </div>

          <a href="#search-filter" class="btn filter-button" data-bs-toggle="offcanvas" data-bs-target="#search-filter">
            <i class="ri-equalizer-line"></i>
          </a>
        </div>
      </form>
      <div class="search-content">
        <img class="img-fluid search-img" src="assets/images/svg/search.svg" alt="search" />
        <h3>Not Search</h3>
        <h4>The keyword you entered connect be found. please check again or search with another keyword.</h4>
      </div>
    </div>
  </section>
  <!-- empty Notification end --
          </div>
      </div>
    </div>
  </section>
  <!-- wallet end -->

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
      <li>
        <a href="statistics.html">
          <div class="icon">
            <i class="ri-line-chart-line unactive"></i>
            <i class="ri-line-chart-fill active"></i>
          </div>
          <span>Statistics</span>
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
        <a href="profile.html">
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

  <!-- toast js  -->
  <script src="assets/js/toast.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
  <script>
    function startTimer(duration, display) {
        let timer = duration, hours, minutes, seconds;
        setInterval(function () {
            hours = Math.floor(timer / 3600);
            minutes = Math.floor((timer % 3600) / 60);
            seconds = Math.floor(timer % 60);

            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = hours + ":" + minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
            }
        }, 1000);
    }

    window.onload = function () {
        const twoHours = 2 * 60 * 60; // 2 hours in seconds
        const display = document.querySelector('#timer');
        startTimer(twoHours, display);
    };
</script>
</body>

</html>