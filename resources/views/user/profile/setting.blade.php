
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/nestnft.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/nestnft.png" />

    <title>setting</title>
</head>

<body>
    
    <div class="header fixed-top">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h3>Setting</h3>
    </div>
    <div class="app-content style-1">
        <div class="tf-container">
            <ul class="list-view-v2 mb-28 pb-28 line">
                <li><a href="{{ route('user.get2fa') }}" class="item">
                    <span class="icon icon-shield-tick"></span>
                    <span class="body-1 content">Google 2FA</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>                                
                </a></li>

                @if (empty(Auth::user()->email))
                <li><a href="{{ route('user.bindMail') }}" class="item" >
                    <span class="icon icon-shield-tick"></span>
                    <span class="body-1 content">Bind Mail</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                @else
                <li><a href="{{ route('user.ChangeMail') }}" class="item" >
                    <span class="icon icon-shield-tick"></span>
                    <span class="body-1 content">Change Mail</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                @endif
                <li><a href="{{ route('user.ChangePass') }}" class="item">
                    <span class="icon icon-key-square"></span>
                    <span class="body-1 content">Login Password</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g> 
                    </svg>
                </a></li>

                <li><a href="{{ route('user.walletaddress') }}" class="item">
                    <span class="icon icon-key-square"></span>
                    <span class="body-1 content">Wallet Address</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="{{ route('user.change-trx-password') }}" class="item">
                    <span class="icon icon-key-square"></span>
                    <span class="body-1 content">Transaction Password</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="#language" class="item" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                    <span class="icon icon-language-square"></span>
                    <span class="body-1 content">Language</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="#" class="item">
                    <span class="icon icon-eye"></span>
                    <label for="switchCheckDefault" class="body-1 content">Dark Mode</label>
                    <input type="checkbox" class="tf-switch-check toggle-theme" id="switchCheckDefault"> 
                </a></li>
                <li><a href="#inviteFriends" class="item" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                    <span class="icon icon-people"></span>
                    <span class="body-1 content">Invite Friends</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="#" class="item">
                    <span class="icon icon-info-circle"></span>
                    <span class="body-1 content">Help Center</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="#" class="item">
                    <span class="icon icon-star"></span>
                    <span class="body-1 content">Rate us</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
            </ul>
            <h4>About</h4>
            <ul class="list-view-v2 mt-20">
                <li><a href="#" class="item">
                    <span class="icon icon-shield-tick"></span>
                    <span class="body-1 content">Privacy & Policy</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>                                
                </a></li>
                <li><a href="#" class="item">
                    <span class="icon icon-key-square"></span>
                    <span class="body-1 content">Terms of Services</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
                <li><a href="#" class="item">
                    <span class="icon icon-info-circle-2"></span>
                    <span class="body-1 content">About us</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M7.42505 16.6004L12.8584 11.1671C13.5 10.5254 13.5 9.47539 12.8584 8.83372L7.42505 3.40039" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a></li>
            </ul>
        </div>
    </div>

    <!-- e wallet -->
    <div class="offcanvas offcanvas-end full" id="eWallet">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i class="icon-arrow-right"></i></a>
            </div>
            <h3>E-Wallet</h3>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <ul class="list-view-v3">
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-1.png" alt="img-wallet">
                        </div>
                        <label for="sw1" class="content">Metamask</label>
                        <input type="checkbox" class="tf-switch-check" id="sw1" checked>                                 
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-2.png" alt="img-wallet">
                        </div>
                        <label for="sw2" class="content">Coinbase Wallet</label>
                        <input type="checkbox" class="tf-switch-check" id="sw2">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-3.png" alt="img-wallet">
                        </div>
                        <label for="sw3" class="content">WalletConnect</label>
                        <input type="checkbox" class="tf-switch-check" id="sw3">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-4.png" alt="img-wallet">
                        </div>
                        <label for="sw4" class="content">Trust Wallet</label>
                        <input type="checkbox" class="tf-switch-check" id="sw4">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-5.png" alt="img-wallet">
                        </div>
                        <label for="sw5" class="content">Fortmatic</label>
                        <input type="checkbox" class="tf-switch-check" id="sw5">
                        
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-6.png" alt="img-wallet">
                        </div>
                        <label for="sw6" class="content">Phantom</label>
                        <input type="checkbox" class="tf-switch-check" id="sw6">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-7.png" alt="img-wallet">
                        </div>
                        <label for="sw7" class="content">Glow</label>
                        <input type="checkbox" class="tf-switch-check" id="sw7">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-8.png" alt="img-wallet">
                        </div>
                        <label for="sw8" class="content">Solflare</label>
                        <input type="checkbox" class="tf-switch-check" id="sw8">
                    </a></li>
                    <li class="item"><a href="#">
                        <div class="box-icon w-32">
                            <img class="lazyload" data-src="images/wallet/wallet-9.png" alt="img-wallet">
                        </div>
                        <label for="sw9" class="content">Bitski</label>
                        <input type="checkbox" class="tf-switch-check" id="sw9">
                    </a></li>
                </ul>
                
            </div>
        </div>       
    </div>


    <!-- notification -->
    <div class="offcanvas offcanvas-end full" id="notification">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i class="icon-arrow-right"></i></a>
            </div>
            <h3>Notification</h3>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <ul class="list-view-v4">
                    <li><a href="#" class="item">
                        <label for="sw-noti1" class="content body-1">General Notification</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti1" checked>                                 
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti2" class="content body-1">Sound</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti2" checked>
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti3" class="content body-1">Vibrate</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti3">
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti4" class="content body-1">Notify me when there is a sale</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti4" checked>
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti5" class="content body-1">Notify me when there is an offer</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti5" checked>
                        
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti6" class="content body-1">Notify me when there is an activity</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti6">
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti7" class="content body-1">App Updates</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti7" checked>
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti8" class="content body-1">New Services Available</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti8">
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-noti9" class="content body-1">New Tips Available</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-noti9">
                    </a></li>
                </ul>
                
            </div>
        </div>       
    </div>
    
    <!-- security -->
    <div class="offcanvas offcanvas-end full" id="security">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i class="icon-arrow-right"></i></a>
            </div>
            <h3>Security</h3>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <ul class="list-view-v4">
                    <li><a href="#" class="item">
                        <label for="sw-security1" class="content body-1">Remember me</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-security1" checked>                                 
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-security2" class="content body-1">Biometric ID</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-security2" checked>
                    </a></li>
                    <li><a href="#" class="item">
                        <label for="sw-security3" class="content body-1">Face ID</label>
                        <input type="checkbox" class="tf-switch-check" id="sw-security3">
                    </a></li>
                    <li><a href="#" class="item">
                        <span class="content body-1">Google Authenticator</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.6" d="M8.90991 19.9201L15.4299 13.4001C16.1999 12.6301 16.1999 11.3701 15.4299 10.6001L8.90991 4.08008" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>    
                    </a></li>
                </ul>
                
            </div>
        </div>       
    </div>
    <!--language  -->
    <div class="offcanvas offcanvas-end full" id="language">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i class="icon-arrow-right"></i></a>
            </div>
            <h3>Language</h3>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <h4>Suggested</h4>
                <ul class="mt-32 mb-24 pb-24 line">
                    <li class="d-flex align-items-center justify-content-between mb-28">
                        <label for="lg1" class="body-1 flex-grow-1">English (US)</label>
                        <input type="radio" name="radio1" class="tf-radio" id="lg1" checked>  
                    </li>
                    <li class="d-flex align-items-center justify-content-between">
                        <label for="lg2" class="body-1 flex-grow-1">English (UK)</label>
                        <input type="radio" name="radio1" class="tf-radio" id="lg2">  
                    </li>
                </ul>
                <h4>Languages</h4>
                <ul class="mt-28">
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg3" class="body-1 flex-grow-1">Mandarin</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg3">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg4" class="body-1 flex-grow-1">Hindi</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg4">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg5" class="body-1 flex-grow-1">Spanish</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg5">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg6" class="body-1 flex-grow-1">French</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg6">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg7" class="body-1 flex-grow-1">Arabic</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg7">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg8" class="body-1 flex-grow-1">Bengali</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg8">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg9" class="body-1 flex-grow-1">English (UK)</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg9">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-32">
                        <label for="lg10" class="body-1 flex-grow-1">Russian</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg10">  
                    </li>
                    <li class="d-flex align-items-center justify-content-between">
                        <label for="lg11" class="body-1 flex-grow-1">Indonesia</label>
                        <input type="radio" name="radio2" class="tf-radio" id="lg11">  
                    </li>
                </ul>
            </div>
        </div>       
    </div>
    <!--Invite Friends  -->
    <div class="offcanvas offcanvas-end full" id="inviteFriends">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i class="icon-arrow-right"></i></a>
            </div>
            <h3>Invite Friends</h3>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <ul class="list-view-v5">
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt1.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Marvin McKinney</div>
                            <p class="phone">(219) 555-0114</p>
                        </div>
                        <a href="#" class="btn-invite">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt2.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Wade Warren</div>
                            <p class="phone">(225) 555-0118</p>
                        </div>
                        <a href="#" class="btn-invite active">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt3.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Theresa Webb</div>
                            <p class="phone">(684) 555-0102</p>
                        </div>
                        <a href="#" class="btn-invite">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt4.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Brooklyn Simmons</div>
                            <p class="phone">(229) 555-0109</p>
                        </div>
                        <a href="#" class="btn-invite">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt5.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Devon Lane</div>
                            <p class="phone">(907) 555-0101</p>
                        </div>
                        <a href="#" class="btn-invite active">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt6.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Dianne Russell</div>
                            <p class="phone">(303) 555-0105</p>
                        </div>
                        <a href="#" class="btn-invite active">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt7.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Albert Flores</div>
                            <p class="phone">(252) 555-0126</p>
                        </div>
                        <a href="#" class="btn-invite">Invited</a>
                    </li>
                    <li class="item">
                        <div class="avatar avt-50 round">
                            <img src="images/avt/avt8.png" alt="avt">
                        </div>
                        <div class="content">
                            <div class="title">Esther Howard</div>
                            <p class="phone">(702) 555-0122</p>
                        </div>
                        <a href="#" class="btn-invite active">Invited</a>
                    </li>
                </ul>
            </div>
        </div>       
    </div>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>