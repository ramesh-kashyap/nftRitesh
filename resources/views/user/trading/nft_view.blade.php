<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="../fonts/font-icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/nouislider.min.css" />
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick-theme.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" /> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="../images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="../images/logo/168.png" />
    
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>


    <title>NFTs Detail</title>
    <style>
        .card-nft {
            display: grid !important;
        }

        .alert {
            transition: opacity 0.5s ease-out;
        }

        .pyramid-loader {
            position: relative;
            width: 300px;
            height: 300px;
            display: block;
            transform-style: preserve-3d;
            transform: rotateX(-20deg);
        }

        .wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            animation: spin 4s linear infinite;
        }

        @keyframes spin {
       100% {
         transform: rotateY(360deg);
        }
       }

        .pyramid-loader .wrapper .side {
            width: 70px;
            height: 70px;
            background: radial-gradient(#2F2585 10%, #F028FD 70%, #2BDEAC 120%);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            transform-origin: center top;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        .pyramid-loader .wrapper .side1 {
            transform: rotateZ(-30deg) rotateY(90deg);
            background: conic-gradient(#2BDEAC, #F028FD, #D8CCE6, #2F2585);
        }

        .pyramid-loader .wrapper .side2 {
            transform: rotateZ(30deg) rotateY(90deg);
            background: conic-gradient(#2F2585, #D8CCE6, #F028FD, #2BDEAC);
        }

        .pyramid-loader .wrapper .side3 {
            transform: rotateX(30deg);
            background: conic-gradient(#2F2585, #D8CCE6, #F028FD, #2BDEAC);
        }

        .pyramid-loader .wrapper .side4 {
            transform: rotateX(-30deg);
            background: conic-gradient(#2BDEAC, #F028FD, #D8CCE6, #2F2585);
        }

        .pyramid-loader .wrapper .shadow {
            width: 60px;
            height: 60px;
            background: #8B5AD5;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            transform: rotateX(90deg) translateZ(-40px);
            filter: blur(12px);
        }
        .box-img img {
            border-radius: 20px;
        }
        #contentToCapture {
            background-color: #ffffff; /* Ensure white background for the content */
            display: block; /* Ensure the content is displayed */
            width: 100vw; /* Full viewport width */
            position: relative;
        }
    </style>
</head>

<div class="counter-scroll">

    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <div class="right">
            <a href="#share" data-bs-toggle="offcanvas" data-bs-target="#share" aria-controls="offcanvasBottom">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.39969 6.32015L15.8897 3.49015C19.6997 2.22015 21.7697 4.30015 20.5097 8.11015L17.6797 16.6002C15.7797 22.3102 12.6597 22.3102 10.7597 16.6002L9.91969 14.0802L7.39969 13.2402C1.68969 11.3402 1.68969 8.23015 7.39969 6.32015Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.1104 13.6505L13.6904 10.0605" stroke="#1A1528" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <a href="index.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>

    <div class="app-content style-2">
        <div class="tf-container">



            <div class="px-24 card-layout style-2 mt-20">
                <div class="swiper-container" style="overflow:hidden; max-height: 250px;">
                    <div class="swiper-wrapper">
                        @foreach($nfts as $nft)
                            <div class="swiper-slide">
                                <div class="card-banner-2">
                                    <img src="{{ $nft['nft']['display_image_url'] ?? '' }}"
                                        alt="{{ $nft['nft']['name'] ?? '' }}"
                                        width="200" style="height:150px;object-fit:contain">
                                    <div class="box-top d-flex align-items-center justify-content-end">
                                        <div class="box-icon w-40 box-heart">
                                            <span class="icon icon-heart"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20">
                                    <h2 class="text-center">
                                        {{ $nft['nft']['name'] ?? '' }}
                                    </h2>
                                    <div class="d-flex justify-content-center align-items-center gap-4">
                                        <span
                                            class="button-2 text-blue">{{ $nft['nft']['collection'] ?? 'NFT Image' }}</span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.3733 7.16036L13.4667 6.10703C13.2933 5.90703 13.1533 5.5337 13.1533 5.26703V4.1337C13.1533 3.42703 12.5733 2.84703 11.8667 2.84703H10.7333C10.4733 2.84703 10.0933 2.70703 9.89334 2.5337L8.84 1.62703C8.38 1.2337 7.62667 1.2337 7.16 1.62703L6.11334 2.54036C5.91334 2.70703 5.53334 2.84703 5.27334 2.84703H4.12C3.41334 2.84703 2.83334 3.42703 2.83334 4.1337V5.2737C2.83334 5.5337 2.69334 5.90703 2.52667 6.10703L1.62667 7.16703C1.24 7.62703 1.24 8.3737 1.62667 8.8337L2.52667 9.8937C2.69334 10.0937 2.83334 10.467 2.83334 10.727V11.867C2.83334 12.5737 3.41334 13.1537 4.12 13.1537H5.27334C5.53334 13.1537 5.91334 13.2937 6.11334 13.467L7.16667 14.3737C7.62667 14.767 8.38 14.767 8.84667 14.3737L9.9 13.467C10.1 13.2937 10.4733 13.1537 10.74 13.1537H11.8733C12.58 13.1537 13.16 12.5737 13.16 11.867V10.7337C13.16 10.4737 13.3 10.0937 13.4733 9.8937L14.38 8.84036C14.7667 8.38036 14.7667 7.62036 14.3733 7.16036ZM10.7733 6.74036L7.55334 9.96036C7.46 10.0537 7.33334 10.107 7.2 10.107C7.06667 10.107 6.94 10.0537 6.84667 9.96036L5.23334 8.34703C5.04 8.1537 5.04 7.8337 5.23334 7.64036C5.42667 7.44703 5.74667 7.44703 5.94 7.64036L7.2 8.90036L10.0667 6.0337C10.26 5.84036 10.58 5.84036 10.7733 6.0337C10.9667 6.22703 10.9667 6.54703 10.7733 6.74036Z"
                                                fill="#2664ED" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!----->
                <div class="modal fade modalCenter" id="success" tabindex="-1" role="dialog"
                    aria-labelledby="imageModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <center>
                                <div class="pyramid-loader" id="loader" style="display:none">
                                    <h3 class="text-primary" id="loaderText">Buying NFT for you, Please Wait...</h3>
                                    <div class="wrapper">
                                        <span class="side side1"></span>
                                        <span class="side side2"></span>
                                        <span class="side side3"></span>
                                        <span class="side side4"></span>
                                        <span class="shadow"></span>
                                    </div>
                                </div>
                                <div id="contentDiv" style="display:block">
                                    <div class="mb-40 text-center">
                                        <img src="" id="popupImage" alt="NFT Image"
                                            style="height:150px;width:auto; border-radius:20px">
                                    </div>
                                    <div class="mb-32 text-center">
                                        <h4 class="text-dark-3" id="nftName">
                                            <!-- <input id="hiddenNftName" value="" readonly style="text-align:center"> -->
                                        </h4>
                                    </div>
                                    <form id="sellForm" action="{{ route('user.sellnft') }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="Approved">
                                        <button id="sellButton" type="submit" class="tf-btn primary"
                                            style="cursor: pointer;">Sell Now</button>
                                    </form>
                                    <button id="closeButton" class="tf-btn primary"
                                        style="display:none; cursor: pointer;" data-bs-dismiss="modal">Close</button>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>


                <div class="" style="padding-bottom :30px;">
                    <div class=" gap-15">

                        <!-- <a href="" id="sellButton" class="tf-btn disabled-primary btn-icon"><span
                            class="icon icon-ticket-star"></span> Sell Now</a> -->
                        <form id="buyForm" action="{{ route('user.submitnft') }}" method="POST">
                            @csrf
                            <input type="hidden" name="nft_id" id="hiddenNftId">
                            <input type="hidden" name="nft_name" value="" id="hiddenNftName">
                            <input type="hidden" name="nft_price" value="" id="nftPrice">
                            <input type="hidden" name="nft_symbol" value="" id="nftSymbol">
                            <input type="hidden" name="status" value="Pending">
                            <input type="hidden" name="nft_image" id="imageName" value="">

                            <input type="hidden" name="creator" id="creator" value="">
                            <input type="hidden" name="opensea_url" id="opensea_url" value="">
                            <input type="hidden" name="seller" id="seller" value="">
                            <input type="hidden" name="buyer" id="buyer" value="">

                            @if($countdownTime <= 0)

                                <button type="submit" href="#success" class="tf-btn primary btn-icon"
                                    data-bs-toggle="modal" id="buyNowBtn"><span class="icon icon-wallet-money"></span>
                                    Place a bid</button>
                            @endif
                        </form>
                    </div>
                </div>

                @if($countdownTime > 0)
                    <div class="pb-24 mb-24 line">
                        <p class="body-3 text-dark-2 fw-800">You Can Buy Next NFT After-</p>
                        <div class="mt-16 box-countdown-2">
                            <div class="js-countdown" data-timer="{{ $countdownTime }}"
                                data-labels="Day, Hour, Mins, Secs"></div>
                        </div>
                    </div>
                @endif


                <!-- <div class="pb-24 mb-24 line">
                    <div class="d-flex gap-14 tf-counter">
                        <div class="counter-box favourites count-style-2">
                            <span class="icon icon-heart"></span>
                            <div class="count-number">
                                <span class="number" data-speed="2000" data-to="98" data-inviewport="yes">98</span>
                            </div>

                            <div class="title-count">Favourites</div>
                        </div>
                        <div class="counter-box edition count-style-2">
                            <span class="icon icon-category-2"></span>
                            <div class="count-number">
                                <span class="number" data-speed="2000" data-to="98" data-inviewport="yes">98</span>
                            </div>

                            <div class="title-count">Editions</div>
                        </div>
                        <div class="counter-box owner count-style-2">
                            <span class="icon icon-people"></span>
                            <div class="count-number">
                                <span class="number" data-speed="2000" data-to="98" data-inviewport="yes">98</span>
                            </div>

                            <div class="title-count">Owners</div>
                        </div>
                        <div class="counter-box visitor count-style-2">
                            <span class="icon icon-eye"></span>
                            <div class="count-number">
                                <span class="number" data-speed="1000" data-dec="3" data-to="2.820"
                                    data-inviewport="yes">2,820</span>
                            </div>

                            <div class="title-count">Visitors</div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="pb-24 mb-24 line">
                    <div class="d-flex align-items-center gap-12">
                        <span class="body-3 text-dark-2">Current Price: </span>
                        <div class="d-flex align-items-center gap-8">
                            <div class="d-flex align-items-center gap-4">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                        fill="#1A1528" />
                                    <path
                                        d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                        fill="#1A1528" />
                                    <path
                                        d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                        fill="#1A1528" />
                                </svg>
                                <span class="button-2">102.36ETH</span>
                            </div>
                            <div class="button-2 text-dark-2">($1169037.82USD)</div>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="d-flex gap-12 align-items-center">
                        <div class="avatar avt-40">
                            <img src="../images/avt/avt4.png" alt="avt">
                        </div>
                        <div class="d-flex gap-8">
                            <span class="body-3 text-dark-2">Created by</span>
                            <span class="button-2 text-blue">
                                Hape_NFT
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.3733 7.16036L13.4667 6.10703C13.2933 5.90703 13.1533 5.5337 13.1533 5.26703V4.1337C13.1533 3.42703 12.5733 2.84703 11.8667 2.84703H10.7333C10.4733 2.84703 10.0933 2.70703 9.89334 2.5337L8.84 1.62703C8.38 1.2337 7.62667 1.2337 7.16 1.62703L6.11334 2.54036C5.91334 2.70703 5.53334 2.84703 5.27334 2.84703H4.12C3.41334 2.84703 2.83334 3.42703 2.83334 4.1337V5.2737C2.83334 5.5337 2.69334 5.90703 2.52667 6.10703L1.62667 7.16703C1.24 7.62703 1.24 8.3737 1.62667 8.8337L2.52667 9.8937C2.69334 10.0937 2.83334 10.467 2.83334 10.727V11.867C2.83334 12.5737 3.41334 13.1537 4.12 13.1537H5.27334C5.53334 13.1537 5.91334 13.2937 6.11334 13.467L7.16667 14.3737C7.62667 14.767 8.38 14.767 8.84667 14.3737L9.9 13.467C10.1 13.2937 10.4733 13.1537 10.74 13.1537H11.8733C12.58 13.1537 13.16 12.5737 13.16 11.867V10.7337C13.16 10.4737 13.3 10.0937 13.4733 9.8937L14.38 8.84036C14.7667 8.38036 14.7667 7.62036 14.3733 7.16036ZM10.7733 6.74036L7.55334 9.96036C7.46 10.0537 7.33334 10.107 7.2 10.107C7.06667 10.107 6.94 10.0537 6.84667 9.96036L5.23334 8.34703C5.04 8.1537 5.04 7.8337 5.23334 7.64036C5.42667 7.44703 5.74667 7.44703 5.94 7.64036L7.2 8.90036L10.0667 6.0337C10.26 5.84036 10.58 5.84036 10.7733 6.0337C10.9667 6.22703 10.9667 6.54703 10.7733 6.74036Z"
                                        fill="#2664ED" />
                                </svg>
                            </span>
                        </div>
                    </li>
                    <li class="d-flex gap-12 align-items-center mt-16">
                        <div class="avatar avt-40">
                            <img src="../images/avt/avt9.png" alt="avt">
                        </div>
                        <div class="d-flex gap-8">
                            <span class="body-3 text-dark-2">Owned by</span>
                            <span class="button-2 text-blue">Tim_David</span>
                        </div>
                    </li>
                </ul> -->
            </div>



            <div class="mt-28 px-24">
                <div class="wrap-slider-tab">
                    <div class="wrapper-tab-nft style-2">
                        <ul class="nav nav-tabs tab-1" role="tablist">
                            <li class="nav-item active" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#details">Details</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#offers">Offers</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#listings">Listings</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#activity">NFT
                                    Activity</button>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#listings">Listings</button>
                            </li> -->

                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-28">
                    <div class="tab-pane fade active show" id="details" role="tabpanel">
                    <div class="card-nft-2 style-2">
                    @if($nftd)
                    @if($roi)
                    @if($rincome)
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#activity-1"
                                aria-expanded="true" aria-controls="activity-1">
                                <div class="content-left">
                                    <div class="d-flex gap-16 align-items-center">
                                    <img class="lazyload" src="{{ $nftd->nft_image }}" alt="img-nft" style="height:80px;width:auto;border-radius:20%">
                                        <div>
                                            <div class="button-1"><a href="{{$nftd->opensea_url}}">{{ $nftd->name }}</a> </div>
                                            <span class="less button-3">-less</span>
                                            <span class="more button-3">+more</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="content-right">
                                    <div class="d-flex gap-2 align-items-center">
                                    @if($nftd->symbol == 'MATIC')
                                              <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Matic.png" alt="img-nft"
                                              style="height:20px;width:auto;">
                                              @elseif($nftd->symbol == 'USDT')
                                            <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft"
                                             style="height:20px;width:auto;">
                                             @elseif($nftd->symbol == 'ETH')
                                            <img class="lazyload" src="{{ asset('') }}images/ethereum-name/ethereum.png" alt="img-nft"
                                             style="height:20px;width:auto;">
                                            @else
                                            <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft"
                                            style="height:20px;width:auto;">
                                            @endif
                                        <div class="button-2"><a href="{{$nftd->opensea_url}}" target="blank">{{$nftd->price}}</a></div>
                                    </div>
                                    <span class="button-2 text-dark-2">{{$nftd->order_no}}</span>
                                </div>
                                
                                @if($nftd->status=='Pending')
                                <form id="sellForm" action="{{ route('user.sellnft') }}"
                                        method="POST" >
                                        @csrf
                                        <input type="hidden" name="status" value="Approved">
                                        <button id="sellButton" type="submit" class="tf-btn primary"
                                            style="cursor: pointer;">Sell Now</button>
                                    </form>
                                    @endif
                            </div>
                            <div id="activity-1" class="accordion-collapse collapse show" aria-labelledby="activity-1">
                                <div class="card-body">
                                    <div class="box-item row">
                                        <div class="body-5">Income</div>
                                        <div class="content-right">
                                    <div class="d-flex gap-2 align-items-center">
                                    <img class="lazyload col-6" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft" style="height:20px;width:auto; postion:absolute">
                                        <div class="button-2"><a href="{{$nftd->opensea_url}}" target="blank">{{$roi->comm}}</a></div>
                                    </div>                                    
                                </div>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5" style="font-size:15px;">Rebate</div>
                                        <span class="button-3">{{$rincome->roi}}</span>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5">Creator</div>
                                        <span class="button-3 text-primary"><a href="{{$nftd->opensea_url}}" target="blank">{{$nftd->creator}}</a></span>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5">Date</div>
                                        <span class="button-3 text-primary"><a href="{{$nftd->opensea_url}}" target="blank">{{$nftd->created_at}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endif
                    @else
                    
                        <h4>No NFT Data Available !..</h4>
                        @endif
                    </div>
                        
                    <div class="tab-pane fade check-list" id="activity" role="tabpanel">
                        <!-- item 1 -->
                        @php
    $i = 1; // Initialize the counter
@endphp
                         @foreach ($nftall as $key=>$value)    
                         @php
                         $user= Auth::user();
                         $vip=$value->vip;
                         $data=\App\Models\Package::where('vip',$vip)->first();
                         
                         $invest_id=$value->vip;
                         $incroi=\App\Models\Income::where('invest_id',$invest_id)->where('user_id', $user->id)->first();
                         
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
                                              @elseif($nftd->symbol == 'USDT')
                                            <img class="lazyload" src="{{ asset('') }}images/ethereum-name/Usdt.jpg" alt="img-nft"
                                             style="height:20px;width:auto;">
                                             @elseif($nftd->symbol == 'ETH')
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
                            <div id="activity-{{$key}}" class="accordion-collapse collapse show" aria-labelledby="activity-{{$key}}">
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
                                        <span class="button-3" style="font-size:15px;">{{$data->roi}}</span>
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
                        <div class="pagination">
        {{ $nftall->links() }}
    </div>                      
                    </div>
                   
                </div>
            </div>

        </div>
    </div>



    <div class="offcanvas offcanvas-bottom" id="share">
        <div class="offcanvas-body">
            <h2 class="text-center">Share</h2>
            <ul class="mt-28 box-share-social">
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="copyLink">
                        <div class="box-icon w-40 copyLink">
                            <!-- SVG Icon -->
                        </div>
                        <span>Copy Link</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="whatsApp">
                        <div class="box-icon w-40 whatsApp">
                            <!-- SVG Icon -->
                        </div>
                        <span>WhatsApp</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="facebook">
                        <div class="box-icon w-40 facebook">
                            <!-- SVG Icon -->
                        </div>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="messenger">
                        <div class="box-icon w-40 messenger">
                            <!-- SVG Icon -->
                        </div>
                        <span>Messenger</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="twitter">
                        <div class="box-icon w-40 twitter-2">
                            <!-- SVG Icon -->
                        </div>
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.createNft')}}" class="social-share-item" data-platform="instagram">
                        <div class="box-icon w-40 instagram">
                            <!-- SVG Icon -->
                        </div>
                        <span>Instagram</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/lazysize.min.js"></script>
    <script type="text/javascript" src="../js/countto.js"></script>
    <script type="text/javascript" src="../js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../js/carousel.js"></script>
    <script type="text/javascript" src="../js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="../js/apexcharts.js"></script>
    <script type="text/javascript" src="../js/chart-init.js"></script>
    <script type="text/javascript" src="../js/count-down.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <!-- Include jQuery library if not already included -->
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function hideAlertAfterDelay(selector, delay) {
                const alert = document.querySelector(selector);
                if (alert) {
                    setTimeout(() => {
                        alert.style.opacity = 0;
                        setTimeout(() => {
                            alert.style.display = 'none';
                        }, 500); // Allow time for opacity transition
                    }, delay);
                }
            }

            // Hide success alert after 2 seconds
            hideAlertAfterDelay('#successAlert', 2000);

            // Hide error alert after 3 seconds
            hideAlertAfterDelay('#errorAlert', 3000);
        });

    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 2500, // 1.5 seconds delay
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
                spaceBetween: 10,
            });
        });

    </script>
    <script>
        let nfts = @json($nfts);
        let currentIndex = 0;

        function showImage(index) {
            let selectedNft = nfts[index];
            document.getElementById('popupImage').src = selectedNft.nft.display_image_url;
            console.log(selectedNft.nft.display_image_url);
            document.getElementById('imageName').value = selectedNft.nft.display_image_url;
            document.getElementById('nftPrice').value = selectedNft.payment.quantity;
            document.getElementById('nftSymbol').value = selectedNft.payment.symbol;

            document.getElementById('creator').value = selectedNft.nft.collection;
            document.getElementById('buyer').value = selectedNft.buyer;
            document.getElementById('seller').value = selectedNft.seller;
            document.getElementById('opensea_url').value = selectedNft.nft.opensea_url;

            document.getElementById('hiddenNftId').value = selectedNft.nft.identifier; // Set hidden input value
            document.getElementById('hiddenNftName').value = selectedNft.nft.name;
            document.getElementById('imageModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
        }

        function getRandomIndex() {
            return Math.floor(Math.random() * nfts.length);
        }

        document.getElementById('buyNowBtn').addEventListener('click', function () {
            let randomIndex = getRandomIndex();
            showImage(randomIndex);

        });

        // Optional: Add functionality to automatically close the modal after 5 seconds
        // function autoCloseModal() {
        //     setTimeout(closeModal, 5000);
        // }

        // document.getElementById('imageModal').addEventListener('click', autoCloseModal);

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const purchaseInfoSection = document.getElementById('purchaseInfoSection');
            const countdownElement = document.querySelector('.js-countdown');

            if (purchaseInfoSection && countdownElement) {
                const countdownTime = parseInt(countdownElement.getAttribute('data-timer'), 10);

                // Show the section if countdown time is greater than 0
                if (countdownTime > 0) {
                    purchaseInfoSection.style.display = 'block';

                    const targetDate = new Date().getTime() + countdownTime *
                    1000; // Convert seconds to milliseconds

                    function updateCountdown() {
                        const now = new Date().getTime();
                        const distance = targetDate - now;

                        if (distance <= 0) {
                            // Timer has finished
                            purchaseInfoSection.style.display = 'none';
                            clearInterval(countdownInterval);
                        } else {
                            // Calculate time remaining
                            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Update the countdown display
                            countdownElement.innerHTML = `
                            <div>${days} ${countdownElement.getAttribute('data-labels').split(',')[0]}</div>
                            <div>${hours} ${countdownElement.getAttribute('data-labels').split(',')[1]}</div>
                            <div>${minutes} ${countdownElement.getAttribute('data-labels').split(',')[2]}</div>
                            <div>${seconds} ${countdownElement.getAttribute('data-labels').split(',')[3]}</div>
                        `;
                        }
                    }

                    // Update countdown every second
                    const countdownInterval = setInterval(updateCountdown, 1000);

                    // Initial call to display countdown immediately
                    updateCountdown();
                }
            }
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#success').on('show.bs.modal', function (e) {
                // Show loader and hide content div
                document.getElementById('loader').style.display = 'block';
                document.getElementById('contentDiv').style.display = 'none';

                // After 10 seconds, hide loader and show content div
                setTimeout(function () {
                    document.getElementById('loader').style.display = 'none';
                    document.getElementById('contentDiv').style.display = 'block';
                }, 10000); // 10 seconds = 10000 milliseconds
            });

            $('#sellForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the form from submitting normally
                // Show loader and hide content div
                document.getElementById('loaderText').innerText = 'Selling NFT for you, Please Wait...';
                document.getElementById('loader').style.display = 'block';
                document.getElementById('contentDiv').style.display = 'none';

                // Submit the form via AJAX
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Handle the successful response
                        setTimeout(function () {
                            document.getElementById('loaderText').innerText =
                                'Selling NFT for you, Please Wait...';
                        }, 5000); // 5 seconds = 5000 milliseconds

                        setTimeout(function () {
                            document.getElementById('loader').style.display =
                            'none';
                            document.getElementById('contentDiv').style.display =
                                'block';
                            document.getElementById('sellButton').style.display =
                                'none';
                            document.getElementById('closeButton').style.display =
                                'block';
                            // Show success message
                            document.getElementById('nftName').innerHTML =
                                '<h1 class="text-success">Success!</h1><i class="fa fa-check text-success"></i>';
                        }, 10000); // 10 seconds = 10000 milliseconds
                    },
                    error: function (response) {
                        // Handle the error response
                        alert('An error occurred. Please try again.');
                        document.getElementById('loader').style.display = 'none';
                        document.getElementById('contentDiv').style.display = 'block';
                    }
                });
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#buyForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission

                // Get form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        // Handle success
                        $('#responseMessage').html('<div class="alert alert-success">' +
                            response.success + '</div>');
                        // Optionally, hide or reset the form
                        $('#buyForm').trigger('reset');
                    },
                    error: function (xhr) {
                        // Handle error
                        var errors = xhr.responseJSON.errors;
                        var errorHtml = '<div class="alert alert-danger">';
                        $.each(errors, function (key, value) {
                            errorHtml += '<p>' + value + '</p>';
                        });
                        errorHtml += '</div>';
                        $('#responseMessage').html(errorHtml);
                    }
                });
            });
        });

    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        document.getElementById('shareButton').addEventListener('click', function() {
            var content = document.getElementById('contentToCapture');

            // Ensure images are loaded
            var images = content.getElementsByTagName('img');
            var totalImages = images.length;
            var imagesLoaded = 0;

            function checkImagesLoaded() {
                if (imagesLoaded === totalImages || totalImages === 0) {
                    captureContent();
                }
            }

            if (totalImages > 0) {
                Array.from(images).forEach(img => {
                    img.onload = img.onerror = function() {
                        imagesLoaded++;
                        checkImagesLoaded();
                    };
                    // Trigger image loading if not already loaded
                    if (img.complete) {
                        imagesLoaded++;
                        checkImagesLoaded();
                    }
                });
            } else {
                captureContent(); // No images to load
            }

            function captureContent() {
                content.style.visibility = 'visible';
                setTimeout(function() {
                    domtoimage.toPng(content, {
                        bgcolor: '#ffffff', // Set background color to white
                        width: content.offsetWidth, // Set width to content's offset width
                        height: content.offsetHeight, // Set height to content's offset height
                        style: {
                            margin: 0,
                            padding: 0
                        }
                    })
                    .then(function (dataUrl) {
                        // Upload image to server
                        $.ajax({
                            url: '{{ route('upload.image') }}',
                            type: 'POST',
                            data: { image: dataUrl },
                            success: function(response) {
                                if (response.success) {
                                    var imageUrl = response.url; // Get the URL of the uploaded image
                                    var whatsappUrl = `https://wa.me/?text=${encodeURIComponent('Check out this image: ' + imageUrl)}`;

                                    // Open the WhatsApp sharing link
                                    window.open(whatsappUrl, '_blank');
                                } else {
                                    console.error('Error uploading image:', response.message);
                                }
                            },
                            error: function(error) {
                                console.error('Error uploading image:', error);
                            }
                        });
                    })
                    .catch(function (error) {
                        console.error('Error capturing content:', error);
                    });
                }, 3000); // Increased delay to ensure all content is loaded
            }
        });
    </script>



    </body>

</html>
@include('partials.notify')