
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

<body class="dark-background">

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
  <header>
    <div class="art-header-panel">
      <div class="panel">
        <a href="landing.html">
          <i class="ri-arrow-left-s-line"> </i>
        </a>
        <div class="header-name">
          <h3>Profile</h3>
        </div>
        <div class="header-option">
          <ul class="menu">
            <li class="share-menu">
              <a href="#social-media" data-bs-toggle="offcanvas" role="button"><i class="ri-share-line"> </i></a>
            </li>

            <li>
              <a href="setting.html"><i class="ri-settings-line"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- profile title start -->
  <section class="pt-2">
    <div class="custom-container">
      <div class="creator-details">
        <div class="creator-info">
          <img class="img-fluid img" src="assets/images/product/mon2.jpg" alt="1" />
          <h3>Strategory Account</h3>
        </div>

        <p>1648.98</p>

        <div class="nft-accordion">
          <div class="social mb-0">
            <ul class="media-icons gap">
              <li>
                <a href="https://www.facebook.com" target="_blank">
                  <i class="ri-facebook-fill"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com" target="_blank">
                  <i class="ri-instagram-fill"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com" target="_blank">
                  <i class="ri-twitter-fill"></i>
                </a>
              </li>

              <li>
                <a href="https://telegram.org/login" target="_blank">
                  <i class="ri-telegram-fill"></i>
                </a>
              </li>
              <li>
                <a href="https://discord.com/login" target="_blank">
                  <i class="ri-discord-fill"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- profile title end -->

  <!-- details block start -->
  <section class="section-t-space">
    <div class="custom-container">
      <div class="details mt-0">
        <ul>          
          <li>
          <a href="{{route('user.defi')}}">
            <h4>1</h4>
            <h6>Reserve</h6>
            </a>
          </li>         
          <li>
          <a href="{{route('user.reffrel-link')}}">
            <h4>1</h4>
            <h6>Reffrel Team</h6>
            </a>
          </li>
          <li>
          <a href="{{route('user.wallets')}}">
            <h4>1</h4>
            <h6>My Wallet</h6>
            </a>
          </li>
          <li>
          <a href="{{route('user.defi')}}">
            <h4>25</h4>
            <h6>Wallet</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- details block end -->

  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" tabindex="0">
          <div class="general-tab">
            <ul class="notification-listing">
              <li>
                <a href="{{route('user.ChangeMail')}}">
                <div class="notification-details">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/security.svg#security"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Change Email</h4>
                      <!-- <h6>20 Dec, 2022</h6> -->
                    </div>
                    <div class="timeing">
                    <i class="ri-arrow-right-s-line" style="color:#fff"> </i>
                    </div>
                  </div>
                </div>
                </a>
              </li>
              <li>
              <a href="{{route('user.ChangePass')}}">
                <div class="notification-details">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/wallet.svg#wallet"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Login Password</h4>
                      <!-- <h6>20 Dec, 2022</h6> -->
                    </div>
                    <div class="timeing">
                    <i class="ri-arrow-right-s-line" style="color:#fff"> </i>
                    </div>
                  </div>
                </div>
                </a>
              </li>
              <li>
              <a href="{{route('user.change-trx-password')}}">
                <div class="notification-details">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/security.svg#security"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Transaction Password</h4>
                      <!-- <h6>20 Dec, 2022</h6> -->
                    </div>
                    <div class="timeing">
                    <i class="ri-arrow-right-s-line" style="color:#fff"> </i>
                    </div>
                  </div>
                </div>
                </a>
              </li>
              <li>
              <a href="{{route('lang')}}">
                <div class="notification-details">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/security.svg#security"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Change Language</h4>
                      <!-- <h6>20 Dec, 2022</h6> -->
                    </div>
                    <div class="timeing">
                    <i class="ri-arrow-right-s-line" style="color:#fff"> </i>
                    </div>
                  </div>
                </div>
                </a>
              </li>
              <li>
                <a href="{{route('logout')}}">
                <div class="notification-details">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/security.svg#security"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Logout</h4>
                      <!-- <h6>20 Dec, 2022</h6> -->
                    </div>
                    <div class="timeing">
                    <i class="ri-arrow-right-s-line" style="color:#fff"> </i>
                    </div>
                  </div>
                </div>
                </a>
              </li>
              <li>
                <div class="notification-details" style="display:none">
                  <div class="notification-image">
                    <svg>
                      <use xlink:href="assets/images/svg/icons/wallet.svg#wallet"></use>
                    </svg>
                  </div>
                  <div class="notification-content">
                    <div>
                      <h4>Security Updates!</h4>
                      <h6>20 Dec, 2022</h6>
                    </div>
                    <div class="timeing">
                      <h6>20 : 10 PM</h6>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

  <!-- offcanvas start -->
  <div class="offcanvas theme-offcanvas share-offcanvas offcanvas-bottom px-4 pb-4 h-auto" tabindex="-1"
    id="social-media">
    <div class="offcanvas-header">
      <h3 class="text-white">Share</h3>
    </div>
    <div class="offcanvas-body">
      <ul class="social-media-list">
        <li>
          <a href="https://www.facebook.com" class="social-media" target="_blank">
            <div class="social-image">
              <img class="img-fluid icons" src="assets/images/svg/social/fb.svg" alt="facebook" />
            </div>
            <h5>Facebook</h5>
          </a>
        </li>

        <li>
          <a href="https://www.instagram.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/insta.svg" alt="instagram" />
              </div>
              <h5>Instagram</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://www.twitter.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/twitter.svg" alt="twitter" />
              </div>
              <h5>Twitter</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://www.whatsapp.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/whatsapp.svg" alt="whatsapp" />
              </div>
              <h5>Whatsapp</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://www.linkedin.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/linkedin.svg" alt="linkedin" />
              </div>
              <h5>Linkedin</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://www.messenger.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/messanger.svg" alt="messenger" />
              </div>
              <h5>Messenger</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://telegram.org/login" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/telegram.svg" alt="telegram" />
              </div>
              <h5>Telegram</h5>
            </div>
          </a>
        </li>

        <li>
          <a href="https://www.wechat.com" class="social-media" target="_blank">
            <div class="social-media">
              <div class="social-image">
                <img class="img-fluid icons" src="assets/images/svg/social/wechat.svg" alt="wechat" />
              </div>
              <h5>Wechat</h5>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- offcanvas end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  @include('layouts.upnl.footer')