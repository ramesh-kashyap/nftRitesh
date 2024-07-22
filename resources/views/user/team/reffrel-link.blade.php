
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
      <div class="details mt-0">
        <ul>
          <li>
            <h4>0</h4>
            <h6>New Members</h6>
          </li>
         
          <li>
            <h4>0.00</h4>
            <h6>New Earning</h6>
          </li>
        </ul>
      </div>
    </div>
  </section>
    <!-- options starts -->
    <section class="section-t-space">
    <div class="custom-container">
      <div class="details mt-0">
        <ul>
          <li>
            <h4>1</h4>
            <h6>Total Earn</h6>
          </li>
          <li>
            <h4>1</h4>
            <h6>Total Reacharge</h6>
          </li>
          <li>
            <h4>1</h4>
            <h6>Total Withdraw</h6>
          </li>
         
        </ul>
      </div>
    </div>
  </section>
    <!-- options starts -->
    <section class="section-t-space">
     
            <div class="wallet-options">
               <div style="margin-bottom:5px;color:#fff"> <h3>Gen 1</h3></div>
                <ul class="wallet-list">
              
                    <li class="wallet-items">
                        <h2 style="color:#fff"></h3>
                            <h6>ValidMembers</h6>
                    </li>
                 
                    <li class="wallet-items">
                        <h2 style="color:#fff">5%</h3>
                            <h6>Commision</h6>
                    </li>
                    <li class="wallet-items">
                        <h2 style="color:#fff">0.00</h3>
                            <h6>Total Eearning</h6>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-t-space">
     
     <div class="wallet-options">
        <div style="margin-bottom:5px;color:#fff"> <h3>Gen 1</h3></div>
         <ul class="wallet-list">
       
             <li class="wallet-items">
                 <h2 style="color:#fff">0/0</h3>
                     <h6>ValidMembers</h6>
             </li>
          
             <li class="wallet-items">
                 <h2 style="color:#fff">5%</h3>
                     <h6>Commision</h6>
             </li>
             <li class="wallet-items">
                 <h2 style="color:#fff">0.00</h3>
                     <h6>Total Eearning</h6>
             </li>
         </ul>
     </div>
 </div>
</section>
<section class="section-t-space">
     
     <div class="wallet-options">
        <div style="margin-bottom:5px;color:#fff"> <h3>Gen 1</h3></div>
         <ul class="wallet-list">
       
             <li class="wallet-items">
                 <h2 style="color:#fff">0/0</h3>
                     <h6>ValidMembers</h6>
             </li>
          
             <li class="wallet-items">
                 <h2 style="color:#fff">5%</h3>
                     <h6>Commision</h6>
             </li>
             <li class="wallet-items">
                 <h2 style="color:#fff">0.00</h3>
                     <h6>Total Eearning</h6>
             </li>
         </ul>
     </div>
 </div>
</section>



    <!-- wallet start -->
  <!-- wallet start -->
<section class="section-lg-t-space section-lg-b-space">
    <div class="custom-container">
        <div class="category-detail-tab">
            <ul class="nav nav-tabs tab-style2" id="myTab" role="tablist">
                @for ($l = 1; $l <= $max_length; $l++)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link level-button" data-level="{{ $l }}" id="nft-tab" type="button" role="tab">
                            <span style="color: {{ $selected_level == $l ? 'green' : '#fff' }}">
                                @lang('Member') {{ $l }}
                            </span>
                        </button>
                    </li>
                @endfor
            </ul>
        </div>

        <section class="section-t-space" id="data-container">
            @foreach ($direct_team as $level => $team)
                <div class="data-section custom-container" data-level="{{ $level }}" style="display: none;">
                    @foreach ($team as $value)
                        <ul class="order-listing product-listing">
                            <li>
                                <div class="product-details">
                                    <div class="product-content">
                                        <div>
                                            <h4 class="product-item">@lang('Deposit')</h4>
                                            <h4 class="product-item">@lang('Username')</h4>
                                            <h4 class="product-item">@lang('Status')</h4>
                                        </div>
                                        <div class="right-panal">
                                            <div class="counter"></div>
                                            <div class="timeing">
                                                <h5>{{ $value->investment->sum('amount') ?: 0 }} USDT</h5>
                                            </div>
                                            <div class="timeing">
                                                <h5>{{ $value->username }}</h5>
                                            </div>
                                            <div class="timeing">
                                                <h5>{{ $value->active_status }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            @endforeach
        </section>
    </div>
</section>



 

                                        


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
                                                <img src="assets/images/product/reffrel.png" alt="pro1"
                                                    style="height:300px; width:auto" />
                                            </div>
                                        </div>
                                        <section class="section-t-space" style="overflow:hidden;">
                                            <div class="custom-container">
                                                <div class="details mt-0">
                                                    <ul style="overflow: hidden;">
                                                        <li>
                                                            <!-- <h4>1</h4> -->
                                                            <h6>https://treasurenft.xyz/#/uc/register/?inviteCode=U4U7U7
                                                            </h6>
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
                <div class="tab-pane fade" id="amem-tab-pane" role="tabpanel" tabindex="0">
                    <!-- empty Notification starts -->
                    <section class="section-t-space p-0">
                        <div class="custom-container">
                            <!-- <ul class="nav nav-pills tab-style1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab">AMember</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab">Rebate</button>
                                </li>
                            </ul> -->
                            <div class="tab-content w-100" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
                                        <h3>A Member</h3>
                                        <h4>You don’t have any notification at this time</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
                                        <h3>Empty</h3>
                                        <h4>You don’t have any notification at this time</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- empty Notification end -->
                </div>  
                <div class="tab-pane fade" id="bmem-tab-pane" role="tabpanel" tabindex="0">
                    <!-- empty Notification starts -->
                    <section class="section-t-space p-0">
                        <div class="custom-container">
                            <!-- <ul class="nav nav-pills tab-style1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab">BMember</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab">Rebate</button>
                                </li>
                            </ul> -->
                            <div class="tab-content w-100" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
                                        <h3>B Member</h3>
                                        <h4>You don’t have any notification at this time</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
                                        <h3>Empty</h3>
                                        <h4>You don’t have any notification at this time</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- empty Notification end -->
                </div>                                                        
                <div class="tab-pane fade" id="cmem-tab-pane" role="tabpanel" tabindex="0">
                    <!-- empty Notification starts -->
                    <section class="section-t-space p-0">
                        <div class="custom-container">
                            <!-- <ul class="nav nav-pills tab-style1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab">CMember</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab">Rebate</button>
                                </li>
                            </ul> -->
                            <div class="tab-content w-100" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
                                        <h3>C Member</h3>
                                        <h4>You don’t have any notification at this time</h4>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" tabindex="0">
                                    <div class="empty-tab">
                                        
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
                                        <input type="text" class="form-control" id="inputusername"
                                            placeholder="Search" />
                                        <i class="ri-search-line"></i>
                                    </div>

                                    <a href="#search-filter" class="btn filter-button" data-bs-toggle="offcanvas"
                                        data-bs-target="#search-filter">
                                        <i class="ri-equalizer-line"></i>
                                    </a>
                                </div>
                            </form>
                            <div class="search-content">
                                <img class="img-fluid search-img" src="assets/images/svg/search.svg" alt="search" />
                                <h3>Not Search</h3>
                                <h4>The keyword you entered connect be found. please check again or search with another
                                    keyword.</h4>
                            </div>
                        </div>
                    </section>
                    <!-- empty Notification end -- -->
          </div>
      </div>
    </div>
  </section>
  <!-- wallet end-->

                    <!-- panel-space start -->
                    <section class="panel-space"></section>

                    <script>
                        function startTimer(duration, display) {
                            let timer = duration,
                                hours, minutes, seconds;
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
                    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const levelButtons = document.querySelectorAll('.level-button');
        const defaultLevel = '{{ $selected_level }}'; // Set the default level from the Blade template

        // Show the data for the default level on page load
        showLevelData(defaultLevel);

        levelButtons.forEach(button => {
            button.addEventListener('click', function () {
                const selectedLevel = this.getAttribute('data-level');
                showLevelData(selectedLevel);
            });
        });

        function showLevelData(level) {
            // Hide all data sections
            document.querySelectorAll('.data-section').forEach(div => {
                div.style.display = 'none';
            });

            // Show the data for the selected level
            document.querySelectorAll(`.data-section[data-level="${level}"]`).forEach(div => {
                div.style.display = 'block';
            });

            // Update the active button style
            levelButtons.forEach(button => {
                if (button.getAttribute('data-level') == level) {
                    button.classList.add('active');
                    button.querySelector('span').style.color = 'green';
                } else {
                    button.classList.remove('active');
                    button.querySelector('span').style.color = '#fff';
                }
            });
        }
    });
</script>
                    <!-- panel-space end -->
                    @include('layouts.upnl.footer')
                    