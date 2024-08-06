
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

    <title>statistics</title>
</head>

<body>
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
        <h3>Statistics</h3>
    </div>
    <div class="app-content">
        <div class="px-24">
            <div class="tab-slide wrapper-tab">
                <ul class="nav nav-tabs tab-1" role="tablist" >
                    <li class="item-slide-effect"></li>
                    <li class="nav-item active" role="presentation">   
                        <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#ranking">NFT Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#activity">Activity</button>
                    </li> 
                </ul>
            </div>
        </div>
        <div class="tab-content mt-24">
                <div class="tab-pane fade active show" id="ranking" role="tabpanel">
                   
                    <div class="px-16 mt-24">
                        <ul class="mt-24 list-view-v6 check-list">
                        
                            @php
                            $i = 1; // Initialize the counter
                        @endphp
                                                 @foreach ($nftall as $key=>$value)    
                                                 @php  
                                                 $user= Auth::user(); 
                                                 $vip=$value->vip;
                                                 $data = \App\Models\Package::where('vip', $vip)->first();
                                                 
                                                 $invest_id=$value->vip;
                                                 $incroi=\App\Models\Income::where('trade_id', $value->id)->where('remarks','Trade Income')->orderBy('created_at', 'desc')->first();
                                                 
                                                 @endphp                                           
                                                 <!--  -->
                                                <div class="card-nft-2 style-2">
                                                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#activity-{{$key}}"
                                                        aria-expanded="true" aria-controls="activity-{{$key}}">
                                                        <div class="content-left">
                                                            <div class="d-flex gap-16 align-items-center">
                                                            <img class="lazyload" src="{{$value->nft_image}}" alt="img-nft" style="height:80px;width:auto;border-radius:20%">
                                                                <div>
                                                                    <div class="button-1"><a href="{{$value->opensea_url}}" target="blank">{{$value->name}}</a></div>
                                                                    <span class="less button-3">-less</span>
                                                                    <span class="more button-3">+more</span>
                                                                </div>
                                                            </div>
                        
                                                        </div>
                                                        <div class="content-right">
                                                            <div class="d-flex gap-2 align-items-center">
                                                            @if($value->symbol == 'MATIC')
                                                                      <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Matic.png" alt="img-nft"
                                                                      style="height:20px;width:auto;">
                                                                      @elseif($value->symbol == 'USDT')
                                                                    <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft"
                                                                     style="height:20px;width:auto;">
                                                                     @elseif($value->symbol == 'ETH')
                                                                    <img class="lazyload" src="{{ asset('') }}images/ethereum-name/ethereum.png" alt="img-nft"
                                                                     style="height:20px;width:auto;">
                                                                    @else
                                                                    <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft"
                                                                    style="height:20px;width:auto;">
                                                                    @endif
                                                                <div class="button-2"><a href="{{$value->opensea_url}}" target="blank">{{$value->price}}</a></div>
                                                            </div>
                                                            <span class="button-2 text-dark-2">{{$value->order_no}}</span>
                                                        </div>
                                                    </div>
                                                    <div id="activity-{{$key}}" class="accordion-collapse collapse" aria-labelledby="activity-{{$key}}">
                                                        <div class="card-body">
                                                            <div class="box-item">
                                                                <div class="body-5">Income</div>
                                                                <div class="d-flex gap-2 align-items-center">
                                                            <img class="lazyload col-6" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft" style="height:20px;width:auto; postion:absolute">
                                                                <div class="button-2"><a href="{{$value->opensea_url}}" target="blank">{{$incroi->comm ?? 0}}</a></div>
                                                            </div> 
                                                            </div>
                                                            <div class="box-item">
                                                                <div class="body-5">Rebate</div>
                                                                <span class="button-3" style="font-size:15px;">{{$data->roi??0}}%</span>
                                                            </div>
                                                            <div class="box-item">
                                                                <div class="body-5">Creator</div>
                                                                <span class="button-3 text-primary"><a href="{{$value->opensea_url}}" target="blank">{{$value->creator}}</a></span>
                                                            </div>
                                                            <div class="box-item">
                                                                <div class="body-5">Date</div>
                                                                <span class="button-3 text-primary"><a href="{{$value->opensea_url}}" target="blank">{{$value->created_at}}</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                @endforeach
                        
                        
                        
                    </ul>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="activity" role="tabpanel">
                    
                    <div class="px-16 mt-24">
                        <ul class="mt-24 list-view-v9 check-list">
                            @foreach($datas as $key=>$data)
                            @php
                            $quantityInWei = $data['payment']['quantity'];
                            $quantityInEther = $quantityInWei / pow(10, 18);
                            @endphp
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item active box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-st-{{ $key }}" aria-expanded="true" aria-controls="accordion-st-{{ $key }}">
                                        <div class="avatar round avt-48">
                                            <img src="{{ $data['nft']['display_image_url'] }}" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">{{ $data['nft']['collection'] }}</span>
                                                <p class="body-1 mt-2">{{ $data['nft']['name'] }}</p>
                                                <span class="more text-primary mt-2 button-3">+more</span>
                                                <span class="less text-primary mt-2 button-3">-less</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <span class="button-2">{{ number_format($quantityInEther, 3) }} {{ $data['payment']['symbol'] }}</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">{{ $data['nft']['updated_at'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-st-{{ $key }}" class="accordion-collapse collapse" aria-labelledby="accordion-st-{{ $key }}">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Quantity</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <span class="button-3">{{ $data['quantity'] }}</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">Seller</div>
                                                <a href="https://opensea.io/{{ $data['seller'] }}" target="_blank" class="button-3 text-green">
                                                    {{ substr($data['seller'], 0, 4) . '...' . substr($data['seller'], -4) }}
                                                </a>
                                            </li>
                                            <li>
                                                <div class="body-5">Buyers</div>
                                                <a href="https://opensea.io/{{ $data['buyer'] }}" target="_blank" class="button-3">
                                                    {{ substr($data['buyer'], 0, 4) . '...' . substr($data['buyer'], -4) }}
                                                </a>
                                            </li>
                                            <li>
                                                <div class="body-5">Chain</div>
                                                <span class="button-3">{{ $data['chain'] }}</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </a>
                            </li>
                            @endforeach   
                        </ul>
                        
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
          <li class="active"><a href="{{route('user.statistics')}}">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM17.26 9.96L14.95 12.94C14.66 13.31 14.25 13.55 13.78 13.6C13.31 13.66 12.85 13.53 12.48 13.24L10.65 11.8C10.58 11.74 10.5 11.74 10.46 11.75C10.42 11.75 10.35 11.77 10.29 11.85L7.91 14.94C7.76 15.13 7.54 15.23 7.32 15.23C7.16 15.23 7 15.18 6.86 15.07C6.53 14.82 6.47 14.35 6.72 14.02L9.1 10.93C9.39 10.56 9.8 10.32 10.27 10.26C10.73 10.2 11.2 10.33 11.57 10.62L13.4 12.06C13.47 12.12 13.54 12.12 13.59 12.11C13.63 12.11 13.7 12.09 13.76 12.01L16.07 9.03C16.32 8.7 16.8 8.64 17.12 8.9C17.45 9.17 17.51 9.64 17.26 9.96Z" fill="#7F52FF"/>
              </svg>   
              <span class="text">statistics</span>                    
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
  
  <div class="offcanvas offcanvas-bottom" id="categories">
      <div class="offcanvas-body">
          <fieldset class="d-flex gap-12 pt-0 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-1" checked> 
              <label for="check-1" class="h5">All Categories</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-2"> 
              <label for="check-2" class="h5">New</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-3"> 
              <label for="check-3" class="h5">Art</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-4"> 
              <label for="check-4" class="h5">Collectibles</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-5"> 
              <label for="check-5" class="h5">Domain Names</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-6"> 
              <label for="check-6" class="h5">Music</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-7"> 
              <label for="check-7" class="h5">Photography</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-8"> 
              <label for="check-8" class="h5">Sports</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-9"> 
              <label for="check-9" class="h5">Trading Cards</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 pb-0">
              <input type="checkbox" class="tf-checkbox" name="check-categories" id="check-10"> 
              <label for="check-10" class="h5">Utility</label>
          </fieldset>
      </div>
  </div>

  <div class="offcanvas offcanvas-bottom" id="chain1">
      <div class="offcanvas-body">
          <fieldset class="d-flex gap-12 pt-0 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-chain" id="check-chain-1"> 
              <label for="check-chain-1" class="h5">All Chains</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-chain" id="check-chain-2" checked> 
              <label for="check-chain-2" class="h5 d-flex align-items-center gap-8">
                  <svg class="icon-eth" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.7501 7.58294L9.72507 5.81628C9.90007 5.74128 10.1001 5.74128 10.2668 5.81628L14.2418 7.58294C14.5918 7.74128 14.9167 7.31628 14.6751 7.01628L10.5084 1.92461C10.2251 1.57461 9.75841 1.57461 9.47508 1.92461L5.30841 7.01628C5.07508 7.31628 5.4001 7.74128 5.7501 7.58294Z" fill="#1A1528"/>
                      <path d="M5.74981 12.4171L9.73312 14.1837C9.90812 14.2587 10.1081 14.2587 10.2748 14.1837L14.2581 12.4171C14.6081 12.2587 14.9331 12.6837 14.6915 12.9837L10.5248 18.0754C10.2415 18.4254 9.7748 18.4254 9.49147 18.0754L5.3248 12.9837C5.0748 12.6837 5.39148 12.2587 5.74981 12.4171Z" fill="#1A1528"/>
                      <path d="M9.81648 7.90898L6.3748 9.62565C6.06647 9.77565 6.06647 10.2173 6.3748 10.3673L9.81648 12.084C9.93314 12.1423 10.0748 12.1423 10.1914 12.084L13.6331 10.3673C13.9414 10.2173 13.9414 9.77565 13.6331 9.62565L10.1914 7.90898C10.0664 7.85065 9.93314 7.85065 9.81648 7.90898Z" fill="#1A1528"/>
                  </svg>
                  Ethereum</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-chain" id="check-chain-3"> 
              <label for="check-chain-3" class="h5 d-flex align-items-center gap-8">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M4.26196 3.66242C4.36881 3.55984 4.50986 3.5 4.65518 3.5H18.2213C18.4692 3.5 18.5932 3.79919 18.4179 3.97443L15.738 6.65432C15.6355 6.7569 15.4944 6.81674 15.3448 6.81674H1.77868C1.53078 6.81674 1.40683 6.51755 1.58207 6.34231L4.26196 3.66242ZM4.83859 14.5059L3.52185 15.8226H15.1614L16.4781 14.5059H4.83859ZM17.4781 13.5059H4.65518C4.50559 13.5059 4.36454 13.5657 4.26196 13.6683L2.10764 15.8226L2.05484 15.8754L1.77868 16.1516L1.58207 16.3482C1.40683 16.5234 1.53078 16.8226 1.77868 16.8226H2.0565H2.44722H2.52185H15.3448C15.4944 16.8226 15.6355 16.7628 15.738 16.6602L17.8924 14.5059L17.9452 14.4531L18.2213 14.1769L18.4179 13.9803C18.5932 13.805 18.4692 13.5059 18.2213 13.5059H17.9435H17.5528H17.4781ZM15.3448 8.4707C15.4944 8.4707 15.6355 8.53054 15.738 8.63312L18.4179 11.313C18.5932 11.4883 18.4692 11.7874 18.2213 11.7874H4.65518C4.50559 11.7874 4.36454 11.7276 4.26196 11.625L1.58207 8.94513C1.40683 8.76989 1.53078 8.4707 1.77868 8.4707H15.3448Z" fill="url(#paint0_linear_90_6190)"/>
                      <defs>
                      <linearGradient id="paint0_linear_90_6190" x1="14.8596" y1="0.820497" x2="5.47079" y2="18.8039" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#00FFA3"/>
                      <stop offset="1" stop-color="#DC1FFF"/>
                      </linearGradient>
                      </defs>
                  </svg>
                  Solana</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-chain" id="check-chain-4"> 
              <label for="check-chain-4" class="h5 d-flex align-items-center gap-8">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.3655 12.7328V13.2859C10.3655 13.8674 10.6857 14.3859 11.1483 14.6511C11.1489 14.6514 11.1495 14.6518 11.1501 14.6521L13.0555 15.7599L13.0691 15.7678L13.0832 15.7749C13.5686 16.0176 14.1465 16.0324 14.6201 15.7618L14.6202 15.7619L14.6278 15.7573L16.492 14.6477L16.4921 14.6478L16.5013 14.642C17.0038 14.3279 17.2689 13.8119 17.2689 13.2859V11.0666C17.2689 10.4851 16.9488 9.96663 16.4862 9.70142C16.4856 9.70106 16.485 9.7007 16.4844 9.70034L14.579 8.59255L14.5654 8.58464L14.5513 8.57759C14.0659 8.33491 13.4879 8.32006 13.0143 8.59068L13.0143 8.59067L13.011 8.59263L10.5706 10.0125L10.5697 10.013L8.88395 10.989L8.88302 10.9895L6.45705 12.401C6.23716 12.5064 6.0222 12.4909 5.87716 12.4086C5.87677 12.4084 5.87639 12.4081 5.87601 12.4079L2.29156 10.328C2.08823 10.1983 2 10.0061 2 9.82376V5.65144C2 5.458 2.094 5.29204 2.25624 5.21092L2.27099 5.20355L2.28523 5.19522L5.90903 3.07397C6.12823 2.96908 6.34248 2.98431 6.4874 3.06607L10.0286 5.14652C10.2326 5.27628 10.3211 5.46877 10.3211 5.65144V6.8723L9.63447 7.26985V6.67232C9.63447 6.09252 9.31616 5.57538 8.8558 5.30948L6.95192 4.1583L6.93476 4.14792L6.91682 4.13895C6.43145 3.89626 5.85347 3.88141 5.37987 4.15204L5.37986 4.15203L5.37663 4.15391L3.46801 5.26357L3.4611 5.26759L3.45432 5.27182C2.95179 5.5859 2.68668 6.10193 2.68668 6.62794V8.84726C2.68668 9.42706 3.00498 9.9442 3.46534 10.2101L5.36923 11.3613L5.38639 11.3717L5.40433 11.3806C5.8897 11.6233 6.46768 11.6382 6.94128 11.3675L6.94134 11.3676L6.95046 11.3622L9.3841 9.90199L11.063 8.97417L11.0631 8.97434L11.075 8.96732L13.5441 7.51233C13.7635 7.40754 13.978 7.42308 14.1228 7.50522C14.1232 7.50546 14.1236 7.50569 14.124 7.50592L17.7084 9.5858C17.9118 9.71556 18 9.90771 18 10.0901V14.3068C18 14.5235 17.8772 14.7146 17.7193 14.8048L17.7164 14.8064L14.1361 16.8839C13.9162 16.9894 13.7011 16.9739 13.5561 16.8916C13.5557 16.8914 13.5553 16.8912 13.5549 16.8909L9.97041 14.8111C9.76708 14.6813 9.67885 14.4892 9.67885 14.3068V13.1303L10.3655 12.7328Z" stroke="#7F52FF"/>
                  </svg>    
                  Polygon</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 pb-0">
              <input type="checkbox" class="tf-checkbox" name="check-chain" id="check-chain-5"> 
              <label for="check-chain-5" class="h5 d-flex align-items-center gap-8">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75331 9.61828L16.0379 3.37867L10.2465 1L4.50098 14.8706L9.75331 9.61828ZM15.8667 15.2423L10.4271 9.8424L11.1368 9.13788L16.5058 14.4676C18.693 11.4458 18.4799 7.23225 15.8667 4.44255L16.5767 3.73778C19.5764 6.91955 19.7919 11.7597 17.2232 15.1798C17.0244 15.4445 16.8089 15.7007 16.5767 15.947L15.8667 15.2423ZM3.91829 16.261L9.97791 10.2463L16.0375 16.261L9.97791 18.7746L3.91829 16.261ZM3.42368 15.947C1.86311 14.2983 0.995517 12.1131 1.00002 9.84243L9.4383 1.44824L3.42368 15.947Z" fill="url(#paint0_linear_90_5973)"/>
                      <defs>
                      <linearGradient id="paint0_linear_90_5973" x1="19.0003" y1="0.999999" x2="1.00032" y2="19.0003" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#FF9000"/>
                      <stop offset="0.515625" stop-color="#FF3600"/>
                      <stop offset="1" stop-color="#780000"/>
                      </linearGradient>
                      </defs>
                  </svg>                        
                  Klaytn</label>
          </fieldset>
      </div>
  </div>

  <div class="offcanvas offcanvas-bottom" id="time">
      <div class="offcanvas-body">
          <fieldset class="d-flex gap-12 pt-0 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-1"> 
              <label for="check-time-1" class="h5">Last 24 Hours Volume</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-2" checked> 
              <label for="check-time-2" class="h5">Last 7 Days Volume</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-3"> 
              <label for="check-time-3" class="h5">Last 30 Days Volume</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-4"> 
              <label for="check-time-4" class="h5">All Time Volume</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-5"> 
              <label for="check-time-5" class="h5">7 Day Change</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-6"> 
              <label for="check-time-6" class="h5">Average Price</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 line">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-7"> 
              <label for="check-time-7" class="h5">Number of Owners</label>
          </fieldset>
          <fieldset class="d-flex gap-12 py-20 pb-0">
              <input type="checkbox" class="tf-checkbox" name="check-time" id="check-time-8"> 
              <label for="check-time-8" class="h5">Total Supply</label>
          </fieldset>
          
      </div>
  </div>

  <div class="offcanvas offcanvas-bottom" id="sale">
      <div class="offcanvas-body">
          <div class="grid-2 gap-16">
              <a href="#" class="tf-btn primary btn-sm">Sales</a>
              <a href="#" class="tf-btn outline-btn-primary btn-sm">Listings</a>
              <a href="#" class="tf-btn outline-btn-primary btn-sm">Bids</a>
              <a href="#" class="tf-btn primary btn-sm">Transfers</a>
          </div>
          <a href="#" data-bs-dismiss="offcanvas" class="mt-32 tf-btn primary btn-lg">Apply</a>
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