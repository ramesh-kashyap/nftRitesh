
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
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>profile</title>
   <style>
    .card-nft{
      display: grid;
    }
   </style>

</head>


<body class="counter-scroll">
    
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
        <img src="images/logo/Nestnftdark.png" alt="logo" style="width:100px;height:auto">      
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->

    <div class="header fixed-top">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h3>Profile</h3>
        <div class="right">
            <a href="#share" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.39969 6.32015L15.8897 3.49015C19.6997 2.22015 21.7697 4.30015 20.5097 8.11015L17.6797 16.6002C15.7797 22.3102 12.6597 22.3102 10.7597 16.6002L9.91969 14.0802L7.39969 13.2402C1.68969 11.3402 1.68969 8.23015 7.39969 6.32015Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.1104 13.6505L13.6904 10.0605" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </a>
            <div class="dropdown dropdown-profile">
                <div class="dropdown-toggle" id="dropdownMenuLink"  data-bs-toggle="dropdown" aria-expanded="false">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.9965 12H16.0054" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9955 12H12.0045" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.99451 12H8.00349" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href="{{route('user.iamount')}}" class="dropdown-item d-flex gap-10 align-items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M9.16675 1.66602H7.50008C3.33341 1.66602 1.66675 3.33268 1.66675 7.49935V12.4993C1.66675 16.666 3.33341 18.3327 7.50008 18.3327H12.5001C16.6667 18.3327 18.3334 16.666 18.3334 12.4993V10.8327" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3666 2.51639L6.7999 9.08306C6.5499 9.33306 6.2999 9.82472 6.2499 10.1831L5.89157 12.6914C5.75823 13.5997 6.3999 14.2331 7.30823 14.1081L9.81657 13.7497C10.1666 13.6997 10.6582 13.4497 10.9166 13.1997L17.4832 6.63306C18.6166 5.49972 19.1499 4.18306 17.4832 2.51639C15.8166 0.849722 14.4999 1.38306 13.3666 2.51639Z" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.425 3.45898C12.9834 5.45065 14.5417 7.00898 16.5417 7.57565" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Edit  
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M16.2501 10.4173C16.2501 9.26732 17.1834 8.33398 18.3334 8.33398V7.50065C18.3334 4.16732 17.5001 3.33398 14.1667 3.33398H5.83341C2.50008 3.33398 1.66675 4.16732 1.66675 7.50065V7.91732C2.81675 7.91732 3.75008 8.85065 3.75008 10.0007C3.75008 11.1507 2.81675 12.084 1.66675 12.084V12.5007C1.66675 15.834 2.50008 16.6673 5.83341 16.6673H14.1667C17.5001 16.6673 18.3334 15.834 18.3334 12.5007C17.1834 12.5007 16.2501 11.5673 16.2501 10.4173Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 12.291L12.5 7.29102" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.4953 12.2917H12.5028" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.49534 7.70768H7.50283" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Creator Earnings  
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M6.66675 10H13.3334" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 13.3327V6.66602" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.50008 18.3327H12.5001C16.6667 18.3327 18.3334 16.666 18.3334 12.4993V7.49935C18.3334 3.33268 16.6667 1.66602 12.5001 1.66602H7.50008C3.33341 1.66602 1.66675 3.33268 1.66675 7.49935V12.4993C1.66675 16.666 3.33341 18.3327 7.50008 18.3327Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Add to Watchlist  
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M10 6.45898V10.834" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.5668 7.14938V12.8493C17.5668 13.7827 17.0667 14.6494 16.2584 15.1244L11.3084 17.9827C10.5001 18.4494 9.50006 18.4494 8.68339 17.9827L3.73339 15.1244C2.92505 14.6577 2.42505 13.791 2.42505 12.8493V7.14938C2.42505 6.21604 2.92505 5.34934 3.73339 4.87434L8.68339 2.01602C9.49172 1.54935 10.4917 1.54935 11.3084 2.01602L16.2584 4.87434C17.0667 5.34934 17.5668 6.20771 17.5668 7.14938Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 13.5V13.5833" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Report  
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="round-20 hidden">
                <img class="lazyload" data-src="{{ asset($datas['banner_image_url']) }}" alt="img" style="width:auto;height:500px">
            </div>
            <div class="mt--40 pb-24 mb-24 line">
                <div class="d-flex justify-content-center">
                    <div class="avatar avt-80 line-3 round">
                        <img src="{{ asset($datas['image_url']) }}" alt="img">
                    </div>
                </div>
                <h2 class="mt-16 d-flex justify-content-center align-items-center gap-6">{{ $datas['name'] }} 
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5599 10.7405L20.1999 9.16055C19.9399 8.86055 19.7299 8.30055 19.7299 7.90055V6.20055C19.7299 5.14055 18.8599 4.27055 17.7999 4.27055H16.0999C15.7099 4.27055 15.1399 4.06055 14.8399 3.80055L13.2599 2.44055C12.5699 1.85055 11.4399 1.85055 10.7399 2.44055L9.16988 3.81055C8.86988 4.06055 8.29988 4.27055 7.90988 4.27055H6.17988C5.11988 4.27055 4.24988 5.14055 4.24988 6.20055V7.91055C4.24988 8.30055 4.03988 8.86055 3.78988 9.16055L2.43988 10.7505C1.85988 11.4405 1.85988 12.5605 2.43988 13.2505L3.78988 14.8405C4.03988 15.1405 4.24988 15.7005 4.24988 16.0905V17.8005C4.24988 18.8605 5.11988 19.7305 6.17988 19.7305H7.90988C8.29988 19.7305 8.86988 19.9405 9.16988 20.2005L10.7499 21.5605C11.4399 22.1505 12.5699 22.1505 13.2699 21.5605L14.8499 20.2005C15.1499 19.9405 15.7099 19.7305 16.1099 19.7305H17.8099C18.8699 19.7305 19.7399 18.8605 19.7399 17.8005V16.1005C19.7399 15.7105 19.9499 15.1405 20.2099 14.8405L21.5699 13.2605C22.1499 12.5705 22.1499 11.4305 21.5599 10.7405ZM16.1599 10.1105L11.3299 14.9405C11.1899 15.0805 10.9999 15.1605 10.7999 15.1605C10.5999 15.1605 10.4099 15.0805 10.2699 14.9405L7.84988 12.5205C7.55988 12.2305 7.55988 11.7505 7.84988 11.4605C8.13988 11.1705 8.61988 11.1705 8.90988 11.4605L10.7999 13.3505L15.0999 9.05055C15.3899 8.76055 15.8699 8.76055 16.1599 9.05055C16.4499 9.34055 16.4499 9.82055 16.1599 10.1105Z" fill="#2664ED"/>
                    </svg>
                </h2>
                <p class="mt-16 text-dark-2">{{ $datas['description'] }}</p>
                
            </div>

            {{-- <div class="d-flex gap-12 tf-counter">
                <div class="counter-box">
                    <div class="count-number">                                  
                        <span class="number">{{ $stats['sales'] }}                                   
                    </div>
                    
                    <div class="title-count">Sales</div>                              
                </div>
                <div class="counter-box count-2">
                    <div class="d-flex align-items-center gap-5">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.7501 7.58294L9.72507 5.81628C9.90007 5.74128 10.1001 5.74128 10.2668 5.81628L14.2418 7.58294C14.5918 7.74128 14.9167 7.31628 14.6751 7.01628L10.5084 1.92461C10.2251 1.57461 9.75841 1.57461 9.47508 1.92461L5.30841 7.01628C5.07508 7.31628 5.4001 7.74128 5.7501 7.58294Z" fill="white"/>
                            <path d="M5.74981 12.4171L9.73312 14.1837C9.90812 14.2587 10.1081 14.2587 10.2748 14.1837L14.2581 12.4171C14.6081 12.2587 14.9331 12.6837 14.6915 12.9837L10.5248 18.0754C10.2415 18.4254 9.7748 18.4254 9.49147 18.0754L5.3248 12.9837C5.0748 12.6837 5.39148 12.2587 5.74981 12.4171Z" fill="white"/>
                            <path d="M9.81648 7.90898L6.3748 9.62565C6.06647 9.77565 6.06647 10.2173 6.3748 10.3673L9.81648 12.084C9.93314 12.1423 10.0748 12.1423 10.1914 12.084L13.6331 10.3673C13.9414 10.2173 13.9414 9.77565 13.6331 9.62565L10.1914 7.90898C10.0664 7.85065 9.93314 7.85065 9.81648 7.90898Z" fill="white"/>
                        </svg>
                            
                        <div class="count-number">                                  
                            <span class="number" data-speed="2000" data-to="6.4" data-dec="1" data-inviewport="yes">{{ $stats['floor_price'] }}                                   
                        </div>
                    </div>
                    
                    <div class="title-count">Floor Price</div>                              
                </div>
                <div class="counter-box count-3">
                    <div class="count-number">                                  
                        <span class="number" data-speed="2000" data-to="12" data-dec="1" data-inviewport="yes">{{ $stats['num_owners'] }}                                  
                    </div>
                    
                    <div class="title-count">Owners</div>                              
                </div>
                <div class="counter-box count-4">
                    <div class="d-flex align-items-center gap-5">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.7501 7.58294L9.72507 5.81628C9.90007 5.74128 10.1001 5.74128 10.2668 5.81628L14.2418 7.58294C14.5918 7.74128 14.9167 7.31628 14.6751 7.01628L10.5084 1.92461C10.2251 1.57461 9.75841 1.57461 9.47508 1.92461L5.30841 7.01628C5.07508 7.31628 5.4001 7.74128 5.7501 7.58294Z" fill="white"/>
                            <path d="M5.74981 12.4171L9.73312 14.1837C9.90812 14.2587 10.1081 14.2587 10.2748 14.1837L14.2581 12.4171C14.6081 12.2587 14.9331 12.6837 14.6915 12.9837L10.5248 18.0754C10.2415 18.4254 9.7748 18.4254 9.49147 18.0754L5.3248 12.9837C5.0748 12.6837 5.39148 12.2587 5.74981 12.4171Z" fill="white"/>
                            <path d="M9.81648 7.90898L6.3748 9.62565C6.06647 9.77565 6.06647 10.2173 6.3748 10.3673L9.81648 12.084C9.93314 12.1423 10.0748 12.1423 10.1914 12.084L13.6331 10.3673C13.9414 10.2173 13.9414 9.77565 13.6331 9.62565L10.1914 7.90898C10.0664 7.85065 9.93314 7.85065 9.81648 7.90898Z" fill="white"/>
                        </svg>
                            
                        <div class="count-number">                                  
                            <span class="number" data-speed="2000" data-to="280" data-inviewport="yes">{{ $stats['volume'] }}                                  
                        </div>
                    </div>
                    
                    <div class="title-count">Total Volume</div>                              
                </div>
            </div> --}}
          
            
            <div class="mt-24">
                <div class="wrap-slider-tab">
                    <div class="wrapper-tab-nft">
                        <ul class="nav nav-tabs tab-1" role="tablist" >
                            <li class="nav-item active" role="presentation">   
                                <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#collected">Collected</button>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                
                <div class="tab-content mt-28">
                    <div class="tab-pane fade active show" id="collected" role="tabpanel">
                       
                        
                        <div class="grid-2 mt-28 gap-15">
                            @foreach($collections as $value)

                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="{{ asset($value['display_image_url']) }}" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         20   
                                    </span>
                                    {{-- <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        {{ $value->price }} 
                                    </span> --}}
                                </div>
                                <div class="content">
                                    <div class="button-1 name">{{ $value['name'] }}</div>
                                    
                                </div>
                            </a>
                            @endforeach
                        </div>

                       
                    </div>
                    <div class="tab-pane fade" id="created" role="tabpanel">
                        <div class="d-flex gap-16">
                            <div class="nice-select" tabindex="0"><span class="current">All Events</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0"><span class="current">All Chains</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <ul class="mt-24 list-view-v9 check-list">
                            <li>
                                <a href="javascript:void(0);" class="item active box-accordion" >
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-1" aria-expanded="true" aria-controls="created-1">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-1.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #105</p>
                                                <span class="more text-primary mt-2 button-3">+more</span>
                                                <span class="less text-primary mt-2 button-3">-less</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.624</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">24 seconds ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="created-1" class="accordion-collapse collapse" aria-labelledby="created-1">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-2" aria-expanded="true" aria-controls="created-2">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-2.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #103</p>
                                                <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4978 5.65744C11.2493 5.51541 10.9297 5.51541 10.6456 5.65744L8.65711 6.82924L7.30777 7.57494L5.35476 8.74674C5.1062 8.88877 4.78662 8.88877 4.50255 8.74674L2.97565 7.8235C2.72709 7.68146 2.54954 7.39739 2.54954 7.07781V5.30235C2.54954 5.01828 2.69158 4.7342 2.97565 4.55666L4.50255 3.66893C4.75111 3.52689 5.07069 3.52689 5.35476 3.66893L6.88166 4.59217C7.13022 4.7342 7.30777 5.01828 7.30777 5.33786V6.50966L8.65711 5.72846V4.52115C8.65711 4.23708 8.51508 3.953 8.23101 3.77546L5.39027 2.10653C5.14171 1.96449 4.82213 1.96449 4.53805 2.10653L1.62631 3.81097C1.34223 3.953 1.2002 4.23708 1.2002 4.52115V7.85901C1.2002 8.14308 1.34223 8.42716 1.62631 8.6047L4.50255 10.2736C4.75111 10.4157 5.07069 10.4157 5.35476 10.2736L7.30777 9.13734L8.65711 8.35614L10.6101 7.21984C10.8587 7.07781 11.1783 7.07781 11.4623 7.21984L12.9892 8.10757C13.2378 8.24961 13.4153 8.53368 13.4153 8.85327V10.6287C13.4153 10.9128 13.2733 11.1969 12.9892 11.3744L11.4978 12.2621C11.2493 12.4042 10.9297 12.4042 10.6456 12.2621L9.11873 11.3744C8.87017 11.2324 8.69262 10.9483 8.69262 10.6287V9.49243L7.34328 10.2736V11.4454C7.34328 11.7295 7.48531 12.0136 7.76939 12.1911L10.6456 13.8601C10.8942 14.0021 11.2138 14.0021 11.4978 13.8601L14.3741 12.1911C14.6227 12.0491 14.8002 11.765 14.8002 11.4454V8.07206C14.8002 7.78799 14.6582 7.50392 14.3741 7.32637L11.4978 5.65744Z" fill="#8247E5"/>
                                                    </svg>
                                                    <span class="button-2">182.19</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">15 minutes ago</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div id="created-2" class="accordion-collapse collapse" aria-labelledby="created-2">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-3" aria-expanded="true" aria-controls="created-3">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-3.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #107</p>
                                                <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.982</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">22 minutes ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="created-3" class="accordion-collapse collapse" aria-labelledby="created-3">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>  
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-4" aria-expanded="true" aria-controls="created-4">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-4.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #102</p>
                                                <span class="d-block mt-2 text-dark-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.40976 2.93072C3.49525 2.84865 3.60808 2.80078 3.72434 2.80078H14.5773C14.7756 2.80078 14.8747 3.04013 14.7345 3.18033L12.5906 5.32424C12.5086 5.4063 12.3957 5.45417 12.2761 5.45417H1.42314C1.22482 5.45417 1.12566 5.21482 1.26585 5.07463L3.40976 2.93072ZM3.40976 10.9354C3.49183 10.8533 3.60466 10.8055 3.72434 10.8055H14.5773C14.7756 10.8055 14.8747 11.0448 14.7345 11.185L12.5906 13.3289C12.5086 13.411 12.3957 13.4589 12.2761 13.4589H1.42314C1.22482 13.4589 1.12566 13.2195 1.26585 13.0793L3.40976 10.9354ZM12.2761 6.77734C12.3957 6.77734 12.5086 6.82521 12.5906 6.90728L14.7345 9.05119C14.8747 9.19138 14.7756 9.43073 14.5773 9.43073H3.72434C3.60466 9.43073 3.49183 9.38286 3.40976 9.3008L1.26585 7.15689C1.12566 7.0167 1.22482 6.77734 1.42314 6.77734H12.2761Z" fill="url(#paint0_linear_149_12564)"/>
                                                        <defs>
                                                        <linearGradient id="paint0_linear_149_12564" x1="11.8879" y1="0.657179" x2="4.37682" y2="15.0439" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFA3"/>
                                                        <stop offset="1" stop-color="#DC1FFF"/>
                                                        </linearGradient>
                                                        </defs>
                                                    </svg>
                                                        
                                                    <span class="button-2">378.41</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">40 minutes ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="created-4" class="accordion-collapse collapse" aria-labelledby="created-4">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="icon-eth" class="d-flex gap-4 align-items-center">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-5" aria-expanded="true" aria-controls="created-5">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-5.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #112</p>
                                                <span class="d-block text-dark-2 button-3 mt-2">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.624</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">24 seconds ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="created-5" class="accordion-collapse collapse" aria-labelledby="created-5">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>  
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#created-6" aria-expanded="true" aria-controls="created-6">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-6.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #101</p>
                                                <span class="d-block text-dark-2 button-3 mt-2">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.556</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">2 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="created-6" class="accordion-collapse collapse" aria-labelledby="created-6">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="favorited" role="tabpanel">
                        <div class="search-box">
                            <span class="icon-left">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.6">
                                    <path d="M9.58317 17.4993C13.9554 17.4993 17.4998 13.9549 17.4998 9.58268C17.4998 5.21043 13.9554 1.66602 9.58317 1.66602C5.21092 1.66602 1.6665 5.21043 1.6665 9.58268C1.6665 13.9549 5.21092 17.4993 9.58317 17.4993Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.3332 18.3327L16.6665 16.666" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>                                    
                            </span>
                            <input type="text" class="search-field" placeholder="Search NFT, creator, collection, ...">
                            <span class="right-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.60851 13.8269H3.35791" stroke="#7F52FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.9507 5.75072H16.2013" stroke="#7F52FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.27207 5.70521C7.27207 4.6255 6.39027 3.75 5.30278 3.75C4.2153 3.75 3.3335 4.6255 3.3335 5.70521C3.3335 6.78492 4.2153 7.66042 5.30278 7.66042C6.39027 7.66042 7.27207 6.78492 7.27207 5.70521Z" stroke="#7F52FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6666 13.7951C16.6666 12.7153 15.7855 11.8398 14.698 11.8398C13.6098 11.8398 12.728 12.7153 12.728 13.7951C12.728 14.8748 13.6098 15.7503 14.698 15.7503C15.7855 15.7503 16.6666 14.8748 16.6666 13.7951Z" stroke="#7F52FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    
                            </span>
                        </div>
                        <div class="mt-24 swiper tf-sw sw-auto sw-lr" data-preview="auto" data-space="15" style="
                        height: fit-content;
                    ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="category-nft">
                                        <div class="box-img">
                                            <img src="images/nfts/nft-sm-1.jpg" alt="img">
                                        </div>
                                        <span>Art</span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="category-nft">
                                        <div class="box-img">
                                            <img src="images/nfts/nft-sm-2.jpg" alt="img">
                                        </div>
                                        <span>Music</span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="category-nft">
                                        <div class="box-img">
                                            <img src="images/nfts/nft-sm-3.jpg" alt="img">
                                        </div>
                                        <span>Utility</span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="category-nft">
                                        <div class="box-img">
                                            <img src="images/nfts/nft-sm-4.jpg" alt="img">
                                        </div>
                                        <span>Sports</span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="category-nft">
                                        <div class="box-img">
                                            <img src="images/nfts/nft-sm-5.jpg" alt="img">
                                        </div>
                                        <span>Carton</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-2 mt-28 gap-15">
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-9.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         20   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #92</div>
                                    <p class="mt-4 id-name">@Tamim Rahman 
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-10.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         48  
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #122</div>
                                    <p class="mt-4 id-name">@Hape Collection 
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-11.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         20   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #92</div>
                                    <p class="mt-4 id-name">@Tamim Rahman 
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-12.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         20   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #856</div>
                                    <p class="mt-4 id-name">@Anik_khan
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-13.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         62   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #105</div>
                                    <p class="mt-4 id-name">@Hape Collection
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-14.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         30   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Hape Man #372</div>
                                    <p class="mt-4 id-name">@Jackt Collection
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-15.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         36   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Green Jacket #96</div>
                                    <p class="mt-4 id-name">@Jackt Collection
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="card-nft">
                                <div class="box-img">
                                    <img class="lazyload" data-src="images/nfts/nft-16.jpg" alt="img-nft">
                                    <span class="tag react">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.31 10.4058C6.14 10.4658 5.86 10.4658 5.69 10.4058C4.24 9.91078 1 7.84578 1 4.34578C1 2.80078 2.245 1.55078 3.78 1.55078C4.69 1.55078 5.495 1.99078 6 2.67078C6.505 1.99078 7.315 1.55078 8.22 1.55078C9.755 1.55078 11 2.80078 11 4.34578C11 7.84578 7.76 9.91078 6.31 10.4058Z" stroke="#FB5556" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                         22   
                                    </span>
                                    <span class="tag ethereum">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.45006 4.55055L5.83504 3.49055C5.94004 3.44555 6.06005 3.44555 6.16005 3.49055L8.54506 4.55055C8.75506 4.64555 8.95004 4.39055 8.80504 4.21055L6.30504 1.15555C6.13504 0.945547 5.85505 0.945547 5.68505 1.15555L3.18505 4.21055C3.04505 4.39055 3.24006 4.64555 3.45006 4.55055Z" fill="white"/>
                                            <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="white"/>
                                            <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="white"/>
                                        </svg>
                                        10,145.93 
                                    </span>
                                </div>
                                <div class="content">
                                    <div class="button-1 name">Abstract Art #92</div>
                                    <p class="mt-4 id-name">@Tamim Rahman
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3731 7.16036L13.4664 6.10703C13.2931 5.90703 13.1531 5.5337 13.1531 5.26703V4.1337C13.1531 3.42703 12.5731 2.84703 11.8664 2.84703H10.7331C10.4731 2.84703 10.0931 2.70703 9.89309 2.5337L8.83976 1.62703C8.37976 1.2337 7.62643 1.2337 7.15976 1.62703L6.11309 2.54036C5.91309 2.70703 5.53309 2.84703 5.27309 2.84703H4.11976C3.41309 2.84703 2.83309 3.42703 2.83309 4.1337V5.2737C2.83309 5.5337 2.69309 5.90703 2.52643 6.10703L1.62643 7.16703C1.23976 7.62703 1.23976 8.3737 1.62643 8.8337L2.52643 9.8937C2.69309 10.0937 2.83309 10.467 2.83309 10.727V11.867C2.83309 12.5737 3.41309 13.1537 4.11976 13.1537H5.27309C5.53309 13.1537 5.91309 13.2937 6.11309 13.467L7.16643 14.3737C7.62643 14.767 8.37976 14.767 8.84643 14.3737L9.89976 13.467C10.0998 13.2937 10.4731 13.1537 10.7398 13.1537H11.8731C12.5798 13.1537 13.1598 12.5737 13.1598 11.867V10.7337C13.1598 10.4737 13.2998 10.0937 13.4731 9.8937L14.3798 8.84036C14.7664 8.38036 14.7664 7.62036 14.3731 7.16036ZM10.7731 6.74036L7.55309 9.96036C7.45976 10.0537 7.33309 10.107 7.19976 10.107C7.06643 10.107 6.93976 10.0537 6.84643 9.96036L5.23309 8.34703C5.03976 8.1537 5.03976 7.8337 5.23309 7.64036C5.42643 7.44703 5.74643 7.44703 5.93976 7.64036L7.19976 8.90036L10.0664 6.0337C10.2598 5.84036 10.5798 5.84036 10.7731 6.0337C10.9664 6.22703 10.9664 6.54703 10.7731 6.74036Z" fill="#2664ED"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="activity" role="tabpanel">
                        <div class="d-flex gap-16">
                            <div class="nice-select" tabindex="0"><span class="current">All Events</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0"><span class="current">All Chains</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <ul class="mt-24 list-view-v9 check-list">
                            <li>
                                <a href="javascript:void(0);" class="item active box-accordion" >
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-1" aria-expanded="true" aria-controls="act-1">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-1.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #105</p>
                                                <span class="more text-primary mt-2 button-3">+more</span>
                                                <span class="less text-primary mt-2 button-3">-less</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.624</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">24 seconds ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="act-1" class="accordion-collapse collapse" aria-labelledby="act-1">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-2" aria-expanded="true" aria-controls="act-2">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-2.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #103</p>
                                                <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4978 5.65744C11.2493 5.51541 10.9297 5.51541 10.6456 5.65744L8.65711 6.82924L7.30777 7.57494L5.35476 8.74674C5.1062 8.88877 4.78662 8.88877 4.50255 8.74674L2.97565 7.8235C2.72709 7.68146 2.54954 7.39739 2.54954 7.07781V5.30235C2.54954 5.01828 2.69158 4.7342 2.97565 4.55666L4.50255 3.66893C4.75111 3.52689 5.07069 3.52689 5.35476 3.66893L6.88166 4.59217C7.13022 4.7342 7.30777 5.01828 7.30777 5.33786V6.50966L8.65711 5.72846V4.52115C8.65711 4.23708 8.51508 3.953 8.23101 3.77546L5.39027 2.10653C5.14171 1.96449 4.82213 1.96449 4.53805 2.10653L1.62631 3.81097C1.34223 3.953 1.2002 4.23708 1.2002 4.52115V7.85901C1.2002 8.14308 1.34223 8.42716 1.62631 8.6047L4.50255 10.2736C4.75111 10.4157 5.07069 10.4157 5.35476 10.2736L7.30777 9.13734L8.65711 8.35614L10.6101 7.21984C10.8587 7.07781 11.1783 7.07781 11.4623 7.21984L12.9892 8.10757C13.2378 8.24961 13.4153 8.53368 13.4153 8.85327V10.6287C13.4153 10.9128 13.2733 11.1969 12.9892 11.3744L11.4978 12.2621C11.2493 12.4042 10.9297 12.4042 10.6456 12.2621L9.11873 11.3744C8.87017 11.2324 8.69262 10.9483 8.69262 10.6287V9.49243L7.34328 10.2736V11.4454C7.34328 11.7295 7.48531 12.0136 7.76939 12.1911L10.6456 13.8601C10.8942 14.0021 11.2138 14.0021 11.4978 13.8601L14.3741 12.1911C14.6227 12.0491 14.8002 11.765 14.8002 11.4454V8.07206C14.8002 7.78799 14.6582 7.50392 14.3741 7.32637L11.4978 5.65744Z" fill="#8247E5"/>
                                                    </svg>
                                                    <span class="button-2">182.19</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">15 minutes ago</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div id="act-2" class="accordion-collapse collapse" aria-labelledby="act-2">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-3" aria-expanded="true" aria-controls="act-3">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-3.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #107</p>
                                                <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.982</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">22 minutes ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="act-3" class="accordion-collapse collapse" aria-labelledby="act-3">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>  
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-4" aria-expanded="true" aria-controls="act-4">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-4.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #102</p>
                                                <span class="d-block mt-2 text-dark-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.40976 2.93072C3.49525 2.84865 3.60808 2.80078 3.72434 2.80078H14.5773C14.7756 2.80078 14.8747 3.04013 14.7345 3.18033L12.5906 5.32424C12.5086 5.4063 12.3957 5.45417 12.2761 5.45417H1.42314C1.22482 5.45417 1.12566 5.21482 1.26585 5.07463L3.40976 2.93072ZM3.40976 10.9354C3.49183 10.8533 3.60466 10.8055 3.72434 10.8055H14.5773C14.7756 10.8055 14.8747 11.0448 14.7345 11.185L12.5906 13.3289C12.5086 13.411 12.3957 13.4589 12.2761 13.4589H1.42314C1.22482 13.4589 1.12566 13.2195 1.26585 13.0793L3.40976 10.9354ZM12.2761 6.77734C12.3957 6.77734 12.5086 6.82521 12.5906 6.90728L14.7345 9.05119C14.8747 9.19138 14.7756 9.43073 14.5773 9.43073H3.72434C3.60466 9.43073 3.49183 9.38286 3.40976 9.3008L1.26585 7.15689C1.12566 7.0167 1.22482 6.77734 1.42314 6.77734H12.2761Z" fill="url(#paint0_linear_149_12564)"/>
                                                        <defs>
                                                        <linearGradient id="paint0_linear_149_12564" x1="11.8879" y1="0.657179" x2="4.37682" y2="15.0439" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#00FFA3"/>
                                                        <stop offset="1" stop-color="#DC1FFF"/>
                                                        </linearGradient>
                                                        </defs>
                                                    </svg>
                                                        
                                                    <span class="button-2">378.41</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">40 minutes ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="act-4" class="accordion-collapse collapse" aria-labelledby="act-4">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="icon-eth" class="d-flex gap-4 align-items-center">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-5" aria-expanded="true" aria-controls="act-5">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-5.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #112</p>
                                                <span class="d-block text-dark-2 button-3 mt-2">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.624</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">24 seconds ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="act-5" class="accordion-collapse collapse" aria-labelledby="act-5">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>  
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#act-6" aria-expanded="true" aria-controls="act-6">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-6.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">Billionaire Club</span>
                                                <p class="body-1 mt-2">Exclusive Ape #101</p>
                                                <span class="d-block text-dark-2 button-3 mt-2">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">0.556</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">2 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="act-6" class="accordion-collapse collapse" aria-labelledby="act-6">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                    <div class="tab-pane fade" id="offersMade" role="tabpanel">
                        <div class="d-flex gap-16">
                            <div class="nice-select" tabindex="0"><span class="current">All Events</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0"><span class="current">All Chains</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <ul class="mt-24 list-view-v6 check-list">
                            <li>
                                <a href="javascript:void(0);" class="item box-accordion active">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-1" aria-expanded="true" aria-controls="made-1">
                                        <h6>1</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-7.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">HPPR #1296</p>
                                                    <span class="more text-primary mt-2 button-3">+more</span>
                                                    <span class="less text-primary mt-2 button-3">-less</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">847.36</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">10 seconds Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-1" class="accordion-collapse collapse" aria-labelledby="made-1">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                         
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-2" aria-expanded="true" aria-controls="made-2">
                                        <h6>2</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-8.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">HPPR #2628</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">547.53</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">40 Minutes Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-2" class="accordion-collapse collapse" aria-labelledby="made-2">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>     
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-3" aria-expanded="true" aria-controls="made-3">
                                        <h6>3</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-9.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Hape NFT #753</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">659.42</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">3 Minutes Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-3" class="accordion-collapse collapse" aria-labelledby="made-3">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>   
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-4" aria-expanded="true" aria-controls="made-4">
                                        <h6>4</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-10.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">HPPR #1350</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">496.79</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">1 Hour Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-4" class="accordion-collapse collapse" aria-labelledby="made-4">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>     
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-5" aria-expanded="true" aria-controls="made-5">
                                        <h6>5</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-11.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">HPPR #459</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">508.40</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">2 Hour Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-5" class="accordion-collapse collapse" aria-labelledby="made-5">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>    
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#made-6" aria-expanded="true" aria-controls="made-6">
                                        <h6>6</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-12.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">HPPR #2240</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">15,341.53</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">4 Hour Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="made-6" class="accordion-collapse collapse" aria-labelledby="made-6">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>      
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="purchasedNFT" role="tabpanel">
                        <div class="d-flex gap-16">
                            <div class="nice-select" tabindex="0"><span class="current">All Events</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                </ul>
                            </div>
                            <div class="nice-select" tabindex="0"><span class="current">All Chains</span>
                                <ul class="list">  
                                    <li data-value class="option selected">All</li>                                                        
                                    <li data-value="villa" class="option">Villa</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <ul class="mt-24 list-view-v6 check-list">
                            <li>
                                <a href="javascript:void(0);" class="item active box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-1" aria-expanded="true" aria-controls="purchased-1">
                                        <h6>1</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-13.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Sarafuru #92</p>
                                                    <span class="more text-primary mt-2 button-3">+more</span>
                                                    <span class="less text-primary mt-2 button-3">-less</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">847.36</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">10 seconds Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-1" class="accordion-collapse collapse" aria-labelledby="purchased-1">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>  
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-2" aria-expanded="true" aria-controls="purchased-2">
                                        <h6>2</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-9.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Hape NFT #234</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">659.42</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">3 Minutes Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-2" class="accordion-collapse collapse" aria-labelledby="purchased-2">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                         
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-3" aria-expanded="true" aria-controls="purchased-3">
                                        <h6>3</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-14.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Azuki NFT #180</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">547.53</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">40 Minutes Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-3" class="accordion-collapse collapse" aria-labelledby="purchased-3">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                         
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-4" aria-expanded="true" aria-controls="purchased-4">
                                        <h6>4</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-15.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Iceberg NFT #12</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">496.79</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">1 Hour Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-4" class="accordion-collapse collapse" aria-labelledby="purchased-4">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>     
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-5" aria-expanded="true" aria-controls="purchased-5">
                                        <h6>5</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                        <div class="avatar round avt-48">
                                            <img src="images/avt/nft-logo-16.png" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <p class="button-1">AnakPunk #58</p>
                                                <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                        <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                        <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-2">508.40</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">2 Hour Ago</span>
                                            </div>
                                        </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-5" class="accordion-collapse collapse" aria-labelledby="purchased-5">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>     
                                </a>
                            </li>
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#purchased-6" aria-expanded="true" aria-controls="purchased-6">
                                        <h6>6</h6>
                                        <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                            <div class="avatar round avt-48">
                                                <img src="images/avt/nft-logo-17.png" alt="">                      
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <p class="button-1">Sarafuru #81</p>
                                                    <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                                </div>
                                                <div class="content-right text-end">
                                                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                        <svg class="icon-eth" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z" fill="#1A1528"/>
                                                            <path d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z" fill="#1A1528"/>
                                                            <path d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z" fill="#1A1528"/>
                                                        </svg>
                                                        <span class="button-2">15,341.53</span>  
                                                    </div>
                                                    <span class="mt-2 d-block body-4 text-dark-2">4 Hour Ago</span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="purchased-6" class="accordion-collapse collapse" aria-labelledby="purchased-6">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Floor Price</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <svg class="icon-eth" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.45006 4.54957L5.83504 3.48957C5.94004 3.44457 6.06005 3.44457 6.16005 3.48957L8.54506 4.54957C8.75506 4.64457 8.95004 4.38957 8.80504 4.20957L6.30504 1.15457C6.13504 0.94457 5.85505 0.94457 5.68505 1.15457L3.18505 4.20957C3.04505 4.38957 3.24006 4.64457 3.45006 4.54957Z" fill="#1A1528"/>
                                                        <path d="M3.44979 7.45025L5.83977 8.51025C5.94477 8.55525 6.06479 8.55525 6.16479 8.51025L8.55477 7.45025C8.76477 7.35525 8.95978 7.61025 8.81478 7.79025L6.31478 10.8452C6.14478 11.0552 5.86478 11.0552 5.69478 10.8452L3.19478 7.79025C3.04478 7.61025 3.23479 7.35525 3.44979 7.45025Z" fill="#1A1528"/>
                                                        <path d="M5.88979 4.745L3.82479 5.775C3.63979 5.865 3.63979 6.13 3.82479 6.22L5.88979 7.25C5.95979 7.285 6.04476 7.285 6.11476 7.25L8.17977 6.22C8.36477 6.13 8.36477 5.865 8.17977 5.775L6.11476 4.745C6.03976 4.71 5.95979 4.71 5.88979 4.745Z" fill="#1A1528"/>
                                                    </svg>
                                                    <span class="button-3">84.3</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">7 Day%</div>
                                                <span class="button-3 text-green">245,37 %</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Owners</div>
                                                <span class="button-3">6,378</span>  
                                            </li>
                                            <li>
                                                <div class="body-5">Assets</div>
                                                <span class="button-3">9,673</span>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li>
                <a href="{{route('user.dashboard')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>        
                </a>
            </li>
            <li><a href="{{route('user.statistics')}}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                    <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>                                       
                </a>
            </li>
            <li class="action-add-wallet"><a href="{{route('user.iamount')}}"><i class="icon-plus"></i></a></li>
            <li><a href="{{route('user.myWallet')}}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                        <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z"
                            stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z"
                            stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z"
                            stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z"
                            stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
                 
                      
                  </a>
              </li>
              <li><a href="{{route('user.more')}}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                    <path d="M12.1596 10.87C12.0596 10.86 11.9396 10.86 11.8296 10.87C9.44957 10.79 7.55957 8.84 7.55957 6.44C7.55957 3.99 9.53957 2 11.9996 2C14.4496 2 16.4396 3.99 16.4396 6.44C16.4296 8.84 14.5396 10.79 12.1596 10.87Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.15973 14.56C4.73973 16.18 4.73973 18.82 7.15973 20.43C9.90973 22.27 14.4197 22.27 17.1697 20.43C19.5897 18.81 19.5897 16.17 17.1697 14.56C14.4297 12.73 9.91973 12.73 7.15973 14.56Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                  </a>
              </li>
        </ul>
         
    </div>
    
    <div class="offcanvas offcanvas-bottom" id="share">
        <div class="offcanvas-body">
            <h2 class="text-center">Share</h2>
            <ul class="mt-28 box-share-social">
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 copyLink">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.92348 17.8736C6.77571 17.8736 5.02759 16.1255 5.02759 13.9778V4.58203H3.42348C2.03287 4.58203 0.902588 5.71214 0.902588 7.10275V19.4778C0.902588 20.8684 2.03287 21.9986 3.42348 21.9986H14.8817C16.2723 21.9986 17.4026 20.8684 17.4026 19.4778V17.8736H8.92348Z" fill="#7D7E93"/>
                                <path d="M21.069 2.52089C21.069 1.12843 19.9405 0 18.5482 0H8.92323C7.53078 0 6.40234 1.12843 6.40234 2.52089V13.9791C6.40234 15.3716 7.53078 16.5 8.92323 16.5H18.5482C19.9405 16.5 21.069 15.3716 21.069 13.9791V2.52089Z" fill="#9B9CA8"/>
                            </svg>                                
                        </div>
                        <span>Copy Link</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 whatsApp">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.333252 24.6667L2.04064 18.4559C0.718815 16.1716 0.190987 13.517 0.538986 10.9037C0.886985 8.29037 2.09137 5.86434 3.96542 4.00171C5.83946 2.13908 8.27848 0.94391 10.9043 0.601491C13.5302 0.259071 16.1962 0.788534 18.489 2.10779C20.7818 3.42705 22.5733 5.4624 23.5858 7.89829C24.5983 10.3342 24.7752 13.0345 24.0891 15.5807C23.403 18.1269 21.8922 20.3766 19.7909 21.9811C17.6897 23.5856 15.1153 24.4552 12.4671 24.4552H12.4628C10.454 24.4536 8.47738 23.9525 6.71255 22.9973L0.333252 24.6667ZM7.00765 20.8328L7.37273 21.0485C9.47875 22.2894 11.9687 22.7187 14.3713 22.2552C16.7739 21.7917 18.9225 20.4676 20.4104 18.5334C21.8982 16.5992 22.6221 14.1891 22.4451 11.7594C22.2681 9.32968 21.2024 7.04884 19.4497 5.3486C17.697 3.64835 15.379 2.64667 12.9343 2.53314C10.4897 2.41961 8.08801 3.20211 6.18392 4.73254C4.27983 6.26296 3.00542 8.43512 2.6019 10.8379C2.19837 13.2407 2.69373 15.7073 3.99422 17.771L4.23283 18.147L3.22105 21.8215L7.00596 20.8328H7.00765ZM15.5943 18.231C15.1996 18.2331 14.807 18.1736 14.4308 18.0547C13.8486 17.8749 13.2764 17.6645 12.7166 17.4244C10.6585 16.4154 8.90499 14.8825 7.63411 12.9812L7.58437 12.9081C6.87342 12.0208 6.44478 10.9425 6.35336 9.81115C6.34252 9.35943 6.42502 8.91031 6.59572 8.49162C6.76643 8.07294 7.02172 7.69363 7.34575 7.3772L7.40477 7.31341C7.50492 7.19893 7.62795 7.1065 7.76602 7.04204C7.90409 6.97759 8.05415 6.94252 8.20661 6.93909C8.39969 6.93909 8.60374 6.93909 8.78249 6.95H8.87776C9.06326 6.95 9.26055 6.98944 9.45954 7.46281C9.54385 7.655 9.65599 7.93701 9.77994 8.23663V8.24503C10.0388 8.87282 10.3322 9.5837 10.3828 9.68526C10.4309 9.76357 10.4584 9.85265 10.4628 9.94432C10.4672 10.036 10.4484 10.1273 10.4081 10.2098L10.3668 10.2937C10.3015 10.4454 10.2143 10.5868 10.1079 10.7134C10.0573 10.7721 10.0051 10.8351 9.95278 10.8989C9.8516 11.0223 9.74705 11.1507 9.65683 11.2346C9.51181 11.379 9.3474 11.5426 9.52446 11.8456C9.97553 12.6155 10.5393 13.3142 11.1973 13.9187C11.853 14.5057 12.6039 14.9779 13.4181 15.3152C13.5025 15.3513 13.5665 15.379 13.6154 15.4034C13.7155 15.4603 13.8275 15.4934 13.9426 15.4999C14.0057 15.4979 14.0676 15.4817 14.1237 15.4527C14.1797 15.4236 14.2285 15.3824 14.2664 15.332C14.4046 15.1742 15.0092 14.4709 15.2183 14.157C15.2518 14.0913 15.3022 14.0357 15.3645 13.9959C15.4267 13.9561 15.4985 13.9335 15.5724 13.9304C15.6836 13.938 15.7928 13.9641 15.8953 14.0076C16.166 14.1067 17.6061 14.81 17.9492 14.9812L18.1179 15.0651C18.2757 15.118 18.4171 15.2105 18.5285 15.3337C18.6116 15.8161 18.5507 16.3123 18.3531 16.7605C18.1325 17.1254 17.8382 17.4407 17.4886 17.6864C17.1391 17.932 16.7421 18.1026 16.3228 18.1873C16.0815 18.2207 15.838 18.2361 15.5943 18.2335V18.231Z" fill="#FDFDFD"/>
                            </svg>
                        </div>
                        <span>WhatsApp</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 facebook">
                            <svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.8082 9.3008L13.0827 14.1871H9.26942V25H4.15528V14.1871H0V9.3008H4.15528V6.57666C4.15528 2.34076 6.59731 0 10.337 0C12.1269 0 14 0.330154 14 0.330154V4.49009H11.9352C9.90228 4.49009 9.26942 5.79423 9.26942 7.13132V9.3008H13.8082Z" fill="white"/>
                            </svg>                               
                        </div>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 messenger">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.88083 24.304V20.0348C3.53383 19.0384 2.43689 17.7425 1.67661 16.2494C0.916327 14.7563 0.513525 13.1069 0.5 11.4315C0.5 5.30232 5.825 0.333984 12.3942 0.333984C18.9633 0.333984 24.2875 5.30315 24.2875 11.4315C24.2875 17.5598 18.9625 22.529 12.3933 22.529C11.2024 22.5301 10.0171 22.3638 8.8725 22.0348L4.88083 24.304ZM4.70919 15.1831L11.1259 8.3914L14.2017 11.5381L19.975 8.3914L13.5967 15.1822L10.5467 11.9797L4.70919 15.1831Z" fill="white"/>
                            </svg> 
                        </div>
                        <span>Messenger</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 twitter-2">
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.53924 17.5C4.13225 17.5 1.88852 16.7841 0 15.5488C1.60342 15.6549 4.43309 15.4008 6.19314 13.6841C3.54544 13.5598 2.35139 11.4833 2.19564 10.5958C2.42061 10.6846 3.49353 10.7911 4.09921 10.5426C1.0535 9.76166 0.586256 7.0284 0.690087 6.19422C1.26116 6.60243 2.23025 6.74442 2.61096 6.70892C-0.227089 4.63235 0.793918 1.50862 1.29577 0.834179C3.33246 3.71964 6.38482 5.34022 10.161 5.43036C10.0898 5.11103 10.0522 4.77858 10.0522 4.43712C10.0522 1.98657 11.9891 0 14.3785 0C15.6269 0 16.7518 0.542313 17.5414 1.40977C18.3757 1.20986 19.6312 0.741899 20.245 0.337221C19.9356 1.47312 18.9724 2.4207 18.3898 2.77191C18.3851 2.75991 18.3946 2.78385 18.3898 2.77191C18.9016 2.69274 20.2863 2.42061 20.8333 2.04107C20.5628 2.67921 19.5417 3.74023 18.7037 4.33423C18.8596 11.3659 13.5986 17.5 6.53924 17.5Z" fill="white"/>
                            </svg>  
                        </div>
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 instagram">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0001 21.8327C8.08439 21.8327 7.6993 21.82 6.53302 21.7675C5.63444 21.7484 4.74548 21.5782 3.9034 21.2639C3.18033 20.9921 2.52547 20.5655 1.98472 20.0139C1.43339 19.4727 1.00703 18.8176 0.735498 18.0943C0.421276 17.2523 0.251038 16.3633 0.231917 15.4647C0.179443 14.3001 0.166748 13.9142 0.166748 10.9993C0.166748 8.10397 0.179443 7.71465 0.231917 6.53229C0.250056 5.63368 0.420031 4.7446 0.734652 3.90267C1.0074 3.17988 1.43425 2.52516 1.98556 1.98398C2.52636 1.43263 3.18123 1.00626 3.90425 0.734766C4.74626 0.420326 5.63526 0.25008 6.53387 0.231185C7.6993 0.178711 8.08524 0.166016 11.0001 0.166016C13.9149 0.166016 14.3009 0.178711 15.4646 0.231185C16.364 0.250246 17.2538 0.420482 18.0968 0.734766C18.8191 1.00655 19.4734 1.4329 20.0138 1.98398C20.5651 2.52516 20.9919 3.17988 21.2647 3.90267C21.5771 4.74525 21.7472 5.6339 21.7682 6.53229C21.8207 7.69857 21.8334 8.08789 21.8334 10.9993C21.8334 13.9108 21.8207 14.3001 21.7691 15.4664C21.748 16.3645 21.5778 17.2529 21.2655 18.0952C20.9868 18.8147 20.5611 19.4682 20.0157 20.0139C19.4702 20.5596 18.817 20.9857 18.0976 21.2648C17.2549 21.5789 16.3654 21.7492 15.4663 21.7684C14.3009 21.8208 13.9149 21.8327 11.0001 21.8327ZM10.0293 2.11263C8.01584 2.11263 7.63413 2.12786 6.62358 2.17357C5.93645 2.18145 5.25584 2.30801 4.6118 2.54766C4.14116 2.72145 3.71545 2.99851 3.36597 3.35846C3.00601 3.70795 2.72895 4.13366 2.55516 4.6043C2.31618 5.2482 2.18992 5.92846 2.18192 6.61523C2.13029 7.75189 2.11929 8.09381 2.11929 10.9917C2.11929 13.8896 2.13029 14.2333 2.18192 15.3691C2.18992 16.0558 2.31618 16.7361 2.55516 17.38C2.72901 17.8504 3.00607 18.2758 3.36597 18.625C3.71545 18.985 4.14116 19.262 4.6118 19.4358C5.25621 19.674 5.93662 19.8002 6.62358 19.809C7.77378 19.8615 8.1174 19.8725 11.0009 19.8725C13.8845 19.8725 14.2272 19.8615 15.3783 19.809C16.065 19.801 16.7453 19.6748 17.3892 19.4358C17.8562 19.2555 18.2803 18.9795 18.6343 18.6256C18.9883 18.2717 19.2645 17.8477 19.445 17.3809C19.684 16.7369 19.8102 16.0567 19.8182 15.3699C19.8707 14.2197 19.8817 13.8761 19.8817 10.9943C19.8817 8.11243 19.8707 7.76881 19.8182 6.61862C19.8102 5.93185 19.684 5.25158 19.445 4.60768C19.271 4.13716 18.9939 3.7115 18.6342 3.36185C18.2849 3.00184 17.8591 2.72502 17.3884 2.55189C16.7445 2.31291 16.0642 2.18665 15.3774 2.17865C14.2408 2.12702 13.8988 2.11602 11.0001 2.11602H10.0293V2.11263ZM11.0001 16.5616C9.89977 16.5616 8.82417 16.2353 7.90931 15.624C6.99445 15.0127 6.28141 14.1438 5.86038 13.1272C5.43935 12.1106 5.32923 10.992 5.54395 9.91289C5.75867 8.83373 6.28859 7.84248 7.06668 7.06451C7.84478 6.28653 8.83611 5.75676 9.9153 5.54221C10.9945 5.32765 12.1131 5.43794 13.1296 5.85912C14.1461 6.28031 15.0149 6.99348 15.626 7.90843C16.2372 8.82339 16.5633 9.89904 16.5632 10.9993C16.5611 12.4741 15.9744 13.8878 14.9315 14.9305C13.8886 15.9732 12.4748 16.5598 11.0001 16.5616ZM11.0001 7.38796C10.2861 7.38829 9.58823 7.60031 8.99472 7.99721C8.40121 8.3941 7.9387 8.95806 7.66566 9.61778C7.39262 10.2775 7.32131 11.0034 7.46075 11.7036C7.60018 12.4039 7.9441 13.047 8.44903 13.5518C8.95396 14.0567 9.59722 14.4004 10.2975 14.5397C10.9978 14.679 11.7236 14.6075 12.3833 14.3343C13.0429 14.0611 13.6068 13.5985 14.0035 13.0049C14.4003 12.4113 14.6122 11.7133 14.6123 10.9993C14.6112 10.0418 14.2302 9.12386 13.553 8.44695C12.8757 7.77003 11.9576 7.38947 11.0001 7.3888V7.38796ZM16.7832 6.51367C16.526 6.5135 16.2746 6.43703 16.0609 6.29393C15.8471 6.15084 15.6806 5.94754 15.5825 5.70979C15.4843 5.47203 15.4589 5.2105 15.5094 4.95829C15.5599 4.70608 15.6841 4.47452 15.8663 4.29294C16.0485 4.11135 16.2805 3.98789 16.5328 3.93818C16.7852 3.88847 17.0467 3.91475 17.2841 4.01368C17.5215 4.11262 17.7243 4.27977 17.8667 4.49398C18.0091 4.70819 18.0847 4.95983 18.0841 5.21706C18.0829 5.56133 17.9454 5.89112 17.7016 6.13416C17.4577 6.3772 17.1275 6.51367 16.7832 6.51367Z" fill="white"/>
                            </svg> 
                        </div>
                        <span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 skype">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85429 0.164062C8.06746 0.164062 9.20522 0.467942 10.1863 0.999238C10.5145 0.967493 10.8472 0.951249 11.1838 0.951249C16.8354 0.951249 21.417 5.53282 21.417 11.1845C21.417 11.6893 21.3804 12.1856 21.3098 12.6708C21.8777 13.6167 22.2042 14.724 22.2042 15.9075C22.2042 19.3855 19.3848 22.2049 15.9068 22.2049C14.7233 22.2049 13.616 21.8784 12.6701 21.3106C12.1848 21.3812 11.6886 21.4177 11.1838 21.4177C5.53209 21.4177 0.950517 16.8361 0.950517 11.1845C0.950517 10.6547 0.990775 10.1343 1.0684 9.62624C0.492954 8.69635 0.16333 7.61512 0.16333 6.46144C0.16333 2.98349 3.15898 0.164062 6.85429 0.164062ZM14.5651 7.51106C15.1197 6.4615 12.9015 5.67432 11.2379 5.67432C9.57434 5.67432 7.35619 6.72389 7.35619 8.56062C7.35619 10.3974 8.7425 11.0533 10.1289 11.7093C10.4061 11.8405 10.7181 11.9553 11.03 12.0701C11.9658 12.4145 12.9015 12.7589 12.9015 13.546C12.9015 14.5956 11.7925 14.858 10.6834 14.858C10.2865 14.858 9.82922 14.6698 9.37639 14.4834C8.56389 14.1491 7.7657 13.8206 7.35621 14.5956C6.80168 15.6452 8.44801 16.6947 10.6834 16.6947C13.1788 16.6947 15.1197 15.6452 15.1197 13.546C15.1197 11.5786 12.9276 10.7637 11.5111 10.2371C11.4162 10.2018 11.3249 10.1679 11.2379 10.135C9.85161 9.61018 9.57434 9.0854 9.57434 8.56062C9.57434 8.03584 10.1289 7.51106 11.2379 7.51106C11.6076 7.51106 12.0163 7.67045 12.425 7.82985C13.2424 8.14863 14.0598 8.46742 14.5651 7.51106Z" fill="white"/>
                            </svg>  
                        </div>
                        <span>Skype</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item">
                        <div class="box-icon w-40 massage">
                            <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6562 21.0937C19.6461 21.0937 25.3125 16.3718 25.3125 10.5469C25.3125 4.722 19.6461 0 12.6562 0C5.6664 0 0 4.722 0 10.5469C0 14.239 2.27656 17.488 5.72372 19.3722C5.60832 20.31 5.26144 21.5616 4.21875 22.5C6.19048 22.1451 7.7641 21.4319 8.93962 20.6317C10.1148 20.9321 11.3629 21.0937 12.6562 21.0937Z" fill="white"/>
                            </svg>
                        </div>
                        <span>Massage</span>
                    </a>
                </li>
            </ul> 
            <a href="#" class="mt-32 text-uppercase tf-btn disabled-primary" data-bs-dismiss="offcanvas">CANCEL</a>           
        </div>
    </div>

    <!-- filter -->
    <div class="offcanvas offcanvas-end full" id="filter">
        <div class="header fixed-top">
            <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon fs-12"><i class="icon-close2"></i></a>
            </div>
            <h3>Filter Options</h3>
        </div>
        <div class="overflow-auto app-content style-2">
            <div class="tf-container">
                <div class="wrap-slider-tab">
                    <div class="wrapper-tab-nft style-2">
                        <ul class="nav nav-tabs tab-1" role="tablist" >
                            <li class="nav-item active" role="presentation">   
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#status">Status</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#price">Price</button>
                            </li> 
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#quantity">Quantity</button>
                            </li> 
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chains">Chains</button>
                            </li> 
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#category">Category</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#currency">Currency</button>
                            </li> 
                        </ul>
                    </div>
                    <div class="tab-content mt-24">
                        <div class="tab-pane fade active show" id="status" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#status-accordion" aria-expanded="true" aria-controls="status-accordion">
                                    <h6 class="flex-grow-1">Status</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="status-accordion" class="accordion-collapse collapse show" aria-labelledby="status-accordion">
                                    <div class="card-body">
                                        <fieldset class="d-flex align-items-center gap-12">
                                            <input type="checkbox" class="tf-checkbox" id="check-status-1">
                                            <label for="check-status-1" class="button-2 text-dark-3">Buy Now</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-status-2" checked>
                                            <label for="check-status-2" class="button-2 text-dark-3">New</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-status-3" checked>
                                            <label for="check-status-3" class="button-2 text-dark-3">Has Offers</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-status-4">
                                            <label for="check-status-4" class="button-2 text-dark-3">On Auction</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-status-5">
                                            <label for="check-status-5" class="button-2 text-dark-3">Buy with Card</label>
                                        </fieldset>
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="price" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#price-accordion" aria-expanded="true" aria-controls="price-accordion">
                                    <h6 class="flex-grow-1">Price</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="price-accordion" class="accordion-collapse collapse show" aria-labelledby="price-accordion">
                                    <div class="card-body">
                                        <div class="nice-select tf-select-v3 icon" tabindex="0"><span class="current">ETH</span>
                                            <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.74998 7.58294L9.72494 5.81628C9.89994 5.74128 10.1 5.74128 10.2666 5.81628L14.2416 7.58294C14.5916 7.74128 14.9166 7.31628 14.6749 7.01628L10.5083 1.92461C10.2249 1.57461 9.75829 1.57461 9.47495 1.92461L5.30829 7.01628C5.07495 7.31628 5.39998 7.74128 5.74998 7.58294Z" fill="#1A1528"/>
                                                <path d="M5.75006 12.4171L9.73336 14.1837C9.90836 14.2587 10.1084 14.2587 10.2751 14.1837L14.2584 12.4171C14.6084 12.2587 14.9334 12.6837 14.6917 12.9837L10.525 18.0754C10.2417 18.4254 9.77505 18.4254 9.49171 18.0754L5.32505 12.9837C5.07505 12.6837 5.39172 12.2587 5.75006 12.4171Z" fill="#1A1528"/>
                                                <path d="M9.81672 7.90898L6.37505 9.62565C6.06672 9.77565 6.06672 10.2173 6.37505 10.3673L9.81672 12.084C9.93339 12.1423 10.075 12.1423 10.1917 12.084L13.6333 10.3673C13.9417 10.2173 13.9417 9.77565 13.6333 9.62565L10.1917 7.90898C10.0667 7.85065 9.93339 7.85065 9.81672 7.90898Z" fill="#1A1528"/>
                                            </svg>
                                            <svg class="arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6 7.45898L11.1667 12.8923C10.525 13.534 9.47503 13.534 8.83336 12.8923L3.40002 7.45898" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                                   
                                            <ul class="list">  
                                                <li data-value="last-month" class="option selected">ETH</li>                                                        
                                                <li data-value="last-week" class="option">Polygon</li>
                                                <li data-value="last-week" class="option">Klaytn</li>
                                                <li data-value="last-week" class="option">Solana</li>
                                                <li data-value="last-week" class="option">USDT</li>
                                                <li data-value="last-week" class="option">USDC</li>
                                            </ul>
                                        </div>
                                        <div class="mt-20 d-flex align-items-center gap-14">
                                            <input type="text" class="form-control" value="0.09">
                                            <span class="body-1">To</span>
                                            <input type="text" class="form-control" value="1.00">

                                        </div>
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="quantity" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#quantity-accordion" aria-expanded="true" aria-controls="quantity-accordion">
                                    <h6 class="flex-grow-1">Quantity</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="quantity-accordion" class="accordion-collapse collapse show" aria-labelledby="quantity-accordion">
                                    <div class="card-body">
                                        <fieldset class="d-flex align-items-center gap-12">
                                            <input type="radio" name="radio2" class="tf-radio" id="check-qty1" checked>  
                                            <label for="check-qty1" class="button-2 text-dark-3">All Items</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="radio" name="radio2" class="tf-radio" id="check-qty2">  
                                            <label for="check-qty2" class="button-2 text-dark-3">Single Items</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="radio" name="radio2" class="tf-radio" id="check-qty3">  
                                            <label for="check-qty3" class="button-2 text-dark-3">Bundles</label>
                                        </fieldset>
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chains" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#chain-accordion" aria-expanded="true" aria-controls="chain-accordion">
                                    <h6 class="flex-grow-1">Chains</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="chain-accordion" class="accordion-collapse collapse show" aria-labelledby="chain-accordion">
                                    <div class="card-body">
                                        <fieldset class="d-flex align-items-center gap-12">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-1">
                                            <label for="check-chain-1" class="d-flex align-items-center gap-8">
                                                <svg class="icon-eth" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.17509 6.82484L8.75256 5.23484C8.91006 5.16734 9.09008 5.16734 9.24008 5.23484L12.8176 6.82484C13.1326 6.96734 13.4251 6.58484 13.2076 6.31484L9.45756 1.73234C9.20256 1.41734 8.78257 1.41734 8.52757 1.73234L4.77757 6.31484C4.56757 6.58484 4.86009 6.96734 5.17509 6.82484Z" fill="#1A1528"/>
                                                    <path d="M5.17493 11.1754L8.7599 12.7654C8.9174 12.8329 9.09742 12.8329 9.24742 12.7654L12.8324 11.1754C13.1474 11.0329 13.4399 11.4154 13.2224 11.6854L9.47241 16.2679C9.21741 16.5829 8.79742 16.5829 8.54242 16.2679L4.79242 11.6854C4.56742 11.4154 4.85243 11.0329 5.17493 11.1754Z" fill="#1A1528"/>
                                                    <path d="M8.83493 7.1175L5.73742 8.6625C5.45992 8.7975 5.45992 9.195 5.73742 9.33L8.83493 10.875C8.93993 10.9275 9.06739 10.9275 9.17239 10.875L12.2699 9.33C12.5474 9.195 12.5474 8.7975 12.2699 8.6625L9.17239 7.1175C9.05989 7.065 8.93993 7.065 8.83493 7.1175Z" fill="#1A1528"/>
                                                </svg>
                                                <span class="button-2 text-dark-3">Ethereum</span>
                                            </label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-2">
                                            <label for="check-chain-2" class="d-flex align-items-center gap-8">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.935 6.36462C12.6553 6.20483 12.2958 6.20483 11.9762 6.36462L9.73913 7.6829L8.22112 8.5218L6.02399 9.84008C5.74435 9.99987 5.38482 9.99987 5.06524 9.84008L3.34749 8.80144C3.06785 8.64165 2.86811 8.32206 2.86811 7.96253V5.96514C2.86811 5.64556 3.0279 5.32598 3.34749 5.12624L5.06524 4.12755C5.34488 3.96775 5.70441 3.96775 6.02399 4.12755L7.74174 5.16619C8.02138 5.32598 8.22112 5.64556 8.22112 6.00509V7.32337L9.73913 6.44452V5.08629C9.73913 4.76671 9.57934 4.44713 9.25976 4.24739L6.06394 2.36984C5.7843 2.21005 5.42477 2.21005 5.10519 2.36984L1.82947 4.28734C1.50989 4.44713 1.3501 4.76671 1.3501 5.08629V8.84138C1.3501 9.16097 1.50989 9.48055 1.82947 9.68029L5.06524 11.5578C5.34488 11.7176 5.70441 11.7176 6.02399 11.5578L8.22112 10.2795L9.73913 9.40065L11.9363 8.12232C12.2159 7.96253 12.5754 7.96253 12.895 8.12232L14.6128 9.12102C14.8924 9.28081 15.0921 9.60039 15.0921 9.95992V11.9573C15.0921 12.2769 14.9323 12.5965 14.6128 12.7962L12.935 13.7949C12.6553 13.9547 12.2958 13.9547 11.9762 13.7949L10.2585 12.7962C9.97882 12.6364 9.77908 12.3168 9.77908 11.9573V10.679L8.26106 11.5578V12.8761C8.26106 13.1957 8.42086 13.5153 8.74044 13.715L11.9762 15.5926C12.2558 15.7524 12.6154 15.7524 12.935 15.5926L16.1707 13.715C16.4504 13.5552 16.6501 13.2356 16.6501 12.8761V9.08107C16.6501 8.76149 16.4903 8.44191 16.1707 8.24217L12.935 6.36462Z" fill="#8247E5"/>
                                                </svg>
                                                <span class="button-2 text-dark-3">Polygon</span>   
                                            </label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-3" checked>
                                            <label for="check-chain-3" class="d-flex align-items-center gap-8">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.77788 8.65685L14.434 3.04119L9.22175 0.900391L4.05078 13.3839L8.77788 8.65685ZM14.9189 14.3527L9.38428 8.85855L14.9189 3.3644C17.8276 6.44964 17.8276 11.2675 14.9189 14.3527ZM3.52637 14.6353L8.98002 9.2221L14.4337 14.6353L8.98002 16.8976L3.52637 14.6353ZM3.08122 14.3527C1.6767 12.8688 0.895868 10.9022 0.899918 8.85858L8.49438 1.30381L3.08122 14.3527Z" fill="url(#paint0_linear_81_3936)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_81_3936" x1="17.1002" y1="0.90039" x2="0.900191" y2="17.1007" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FF9000"/>
                                                    <stop offset="0.515625" stop-color="#FF3600"/>
                                                    <stop offset="1" stop-color="#780000"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg>
                                                <span class="button-2 text-dark-3">Klaytn</span>   
                                            </label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-4" checked>
                                            <label for="check-chain-4" class="d-flex align-items-center gap-8">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83586 3.29657C3.93203 3.20424 4.05897 3.15039 4.18976 3.15039H16.3993C16.6224 3.15039 16.734 3.41966 16.5762 3.57738L14.1643 5.98928C14.072 6.0816 13.9451 6.13545 13.8104 6.13545H1.60091C1.3778 6.13545 1.26625 5.86618 1.42396 5.70847L3.83586 3.29657ZM3.83586 12.3018C3.92818 12.2095 4.05513 12.1557 4.18976 12.1557H16.3993C16.6224 12.1557 16.734 12.4249 16.5762 12.5827L14.1643 14.9946C14.072 15.0869 13.9451 15.1407 13.8104 15.1407H1.60091C1.3778 15.1407 1.26625 14.8715 1.42396 14.7137L3.83586 12.3018ZM13.8104 7.62402C13.9451 7.62402 14.072 7.67788 14.1643 7.7702L16.5762 10.1821C16.734 10.3398 16.6224 10.6091 16.3993 10.6091H4.18976C4.05513 10.6091 3.92818 10.5552 3.83586 10.4629L1.42396 8.05101C1.26625 7.89329 1.3778 7.62402 1.60091 7.62402H13.8104Z" fill="url(#paint0_linear_81_3946)"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_81_3946" x1="13.3738" y1="0.738838" x2="4.9238" y2="16.9239" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#00FFA3"/>
                                                    <stop offset="1" stop-color="#DC1FFF"/>
                                                    </linearGradient>
                                                    </defs>
                                                </svg> 
                                                <span class="button-2 text-dark-3">Solana</span>   
                                            </label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-5" checked>
                                            <label for="check-chain-5" class="d-flex align-items-center gap-8">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.86597 2.31922L0.912047 8.52394C0.900806 8.54702 0.897244 8.57309 0.901881 8.59833C0.906519 8.62358 0.919112 8.64668 0.93782 8.66426L8.91566 16.309C8.93832 16.3307 8.9685 16.3428 8.9999 16.3428C9.0313 16.3428 9.06148 16.3307 9.08414 16.309L17.062 8.66474C17.0807 8.64716 17.0933 8.62406 17.0979 8.59881C17.1026 8.57356 17.099 8.54749 17.0878 8.52442L14.1338 2.31969C14.1243 2.29885 14.109 2.2812 14.0897 2.26885C14.0704 2.25649 14.0479 2.24995 14.025 2.25001H3.97575C3.95272 2.24972 3.93011 2.2561 3.91063 2.26838C3.89115 2.28066 3.87564 2.29832 3.86597 2.31922Z" fill="#50AF95"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0246 9.16091C9.96731 9.1652 9.67139 9.18286 9.0113 9.18286C8.48629 9.18286 8.11353 9.16711 7.98275 9.16091C5.95381 9.07165 4.43938 8.71846 4.43938 8.29559C4.43938 7.87271 5.95381 7.51999 7.98275 7.42931V8.80915C8.11544 8.81869 8.49536 8.84112 9.02037 8.84112C9.65039 8.84112 9.96588 8.81487 10.0227 8.80962V7.43027C12.0473 7.52047 13.5584 7.87366 13.5584 8.29559C13.5584 8.71751 12.0478 9.0707 10.0227 9.16043L10.0246 9.16091ZM10.0246 7.28756V6.05282H12.8501V4.16992H5.15722V6.05282H7.98228V7.28708C5.68605 7.39256 3.95923 7.84741 3.95923 8.39247C3.95923 8.93754 5.68605 9.39191 7.98228 9.49787V13.4546H10.0241V9.49644C12.3151 9.39096 14.039 8.93658 14.039 8.392C14.039 7.84741 12.3165 7.39304 10.0241 7.28708L10.0246 7.28756Z" fill="white"/>
                                                </svg>
                                                <span class="button-2 text-dark-3">USDT</span>   
                                            </label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-chain-6">
                                            <label for="check-chain-6" class="d-flex align-items-center gap-8">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_81_3966)">
                                                    <path d="M8.9999 17.1004C13.4887 17.1004 17.0999 13.4892 17.0999 9.00039C17.0999 4.51161 13.4887 0.900391 8.9999 0.900391C4.51113 0.900391 0.899902 4.51161 0.899902 9.00039C0.899902 13.4892 4.51113 17.1004 8.9999 17.1004Z" fill="#2775CA"/>
                                                    <path d="M11.2276 10.2826C11.2276 9.10135 10.5188 8.69635 9.1013 8.52763C8.0888 8.3926 7.8863 8.12263 7.8863 7.65008C7.8863 7.17752 8.22383 6.87385 8.8988 6.87385C9.5063 6.87385 9.84383 7.07635 10.0126 7.5826C10.0463 7.68385 10.1476 7.75133 10.2488 7.75133H10.7888C10.9238 7.75133 11.0251 7.65008 11.0251 7.51513V7.48135C10.89 6.73883 10.2825 6.1651 9.5063 6.09763V5.28763C9.5063 5.15261 9.40505 5.05136 9.23633 5.01758H8.73008C8.59505 5.01758 8.4938 5.11883 8.46002 5.28763V6.06386C7.44752 6.19888 6.80633 6.87385 6.80633 7.71763C6.80633 8.83138 7.4813 9.27008 8.8988 9.43888C9.84383 9.6076 10.1476 9.8101 10.1476 10.3501C10.1476 10.8902 9.67502 11.2614 9.03383 11.2614C8.15627 11.2614 7.85252 10.8901 7.75127 10.3838C7.71758 10.2489 7.61633 10.1813 7.51508 10.1813H6.94127C6.80633 10.1813 6.70508 10.2826 6.70508 10.4176V10.4514C6.84002 11.2951 7.38005 11.9026 8.4938 12.0714V12.8814C8.4938 13.0163 8.59505 13.1176 8.76377 13.1514H9.27002C9.40505 13.1514 9.5063 13.0501 9.54008 12.8814V12.0714C10.5526 11.9026 11.2276 11.1938 11.2276 10.2826Z" fill="white"/>
                                                    <path d="M7.27843 13.8264C4.64593 12.8814 3.2959 9.9452 4.27471 7.34639C4.78096 5.92889 5.89471 4.84892 7.27843 4.34267C7.41346 4.2752 7.48093 4.17395 7.48093 4.00514V3.53267C7.48093 3.39764 7.41346 3.29639 7.27843 3.2627C7.24465 3.2627 7.17718 3.2627 7.1434 3.29639C3.93718 4.30889 2.18215 7.7177 3.19465 10.9239C3.80215 12.8139 5.25343 14.2652 7.1434 14.8727C7.27843 14.9401 7.41346 14.8727 7.44715 14.7376C7.48093 14.7039 7.48093 14.6702 7.48093 14.6027V14.1301C7.48093 14.0289 7.37968 13.8939 7.27843 13.8264ZM10.856 3.29639C10.7209 3.22892 10.5859 3.29639 10.5522 3.43142C10.5184 3.4652 10.5184 3.49889 10.5184 3.56645V4.03892C10.5184 4.17395 10.6197 4.30889 10.7209 4.37645C13.3534 5.32139 14.7035 8.25764 13.7247 10.8564C13.2184 12.2739 12.1047 13.3539 10.7209 13.8602C10.5859 13.9276 10.5184 14.0289 10.5184 14.1977V14.6702C10.5184 14.8052 10.5859 14.9064 10.7209 14.9401C10.7547 14.9401 10.8222 14.9401 10.856 14.9064C14.0622 13.8939 15.8172 10.4851 14.8047 7.27892C14.1972 5.35517 12.7122 3.90389 10.856 3.29639Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_81_3966">
                                                    <rect width="18" height="18" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg> 
                                                <span class="button-2 text-dark-3">USDC</span>   
                                            </label>
                                        </fieldset>
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="category" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#category-accordion" aria-expanded="true" aria-controls="category-accordion">
                                    <h6 class="flex-grow-1">Category</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="category-accordion" class="accordion-collapse collapse show" aria-labelledby="category-accordion">
                                    <div class="card-body">
                                        <fieldset class="d-flex align-items-center gap-12">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-1" checked>
                                            <label for="check-category-1" class="button-2 text-dark-3">Art</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-2" checked>
                                            <label for="check-category-2" class="button-2 text-dark-3">Collectibles</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-3">
                                            <label for="check-category-3" class="button-2 text-dark-3">Domain Names</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-4">
                                            <label for="check-category-4" class="button-2 text-dark-3">Music</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-5">
                                            <label for="check-category-5" class="button-2 text-dark-3">Photography</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-6" checked>
                                            <label for="check-category-6" class="button-2 text-dark-3">Sports</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-7">
                                            <label for="check-category-7" class="button-2 text-dark-3">Trading Cards</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-8" checked>
                                            <label for="check-category-8" class="button-2 text-dark-3">Utility</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-category-9">
                                            <label for="check-category-9" class="button-2 text-dark-3">Virtual Worlds</label>
                                        </fieldset>
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                        <div class="tab-pane fade" id="currency" role="tabpanel">
                            <div class="card-nft-1">
                                <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#currency-accordion" aria-expanded="true" aria-controls="currency-accordion">
                                    <h6 class="flex-grow-1">Currency</h6>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </div>
                                <div id="currency-accordion" class="accordion-collapse collapse show" aria-labelledby="currency-accordion">
                                    <div class="card-body">
                                        <fieldset class="d-flex align-items-center gap-12">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-1" checked>
                                            <label for="check-currency-1" class="button-2 text-dark-3">ETH</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-2" checked>
                                            <label for="check-currency-2" class="button-2 text-dark-3">WETH</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-3" checked>
                                            <label for="check-currency-3" class="button-2 text-dark-3">APE</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-4">
                                            <label for="check-currency-4" class="button-2 text-dark-3">ASH</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-5">
                                            <label for="check-currency-5" class="button-2 text-dark-3">BAT</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-6" checked>
                                            <label for="check-currency-6" class="button-2 text-dark-3">CUBE</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-7">
                                            <label for="check-currency-7" class="button-2 text-dark-3">DAI</label>
                                        </fieldset>
                                        <fieldset class="d-flex align-items-center gap-12 mt-20">
                                            <input type="checkbox" class="tf-checkbox" id="check-currency-8">
                                            <label for="check-currency-8" class="button-2 text-dark-3">GALA</label>
                                        </fieldset>
                                        
                                    </div>
                                </div>
                                     
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> 
        <div class="btn-fixed style-2">
            <div class="grid-2 gap-15">
                <a href="javascript:void(0);" class="tf-btn disabled-primary btn-reset">RESET</a>
                <a href="search-result-collection.html" class="tf-btn primary">APPLY</a>
            </div>
        </div>     
    </div>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/countto.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>