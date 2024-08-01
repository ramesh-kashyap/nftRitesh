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

        <blade keyframes|%20spin%20%7B%0D>100% {
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
                            <input type="hidden" name="seller" id="seller" value="">
                            <input type="hidden" name="buyer" id="buyer" value="">

                            @if($countdownTime <= 0)

                                <button type="submit" href="#success" class="tf-btn primary btn-icon"
                                    data-bs-toggle="modal" id="buyNowBtn"><span class="icon icon-wallet-money"></span>
                                    Buy Now</button>
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


                <div class="pb-24 mb-24 line">
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
                </div>
                <div class="pb-24 mb-24 line">
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
                </ul>
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
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#activity">Item
                                    Activity</button>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-28">
                    <div class="tab-pane fade active show" id="details" role="tabpanel">
                        <div class="card-nft-1">
                            @if($nftd)
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collection"
                                    aria-expanded="true" aria-controls="collection">
                                    <div class="content-left">
                                        <li class="d-flex gap-12 align-items-center">
                                            <div class="avatar avt-40">
                                                <img src="{{ $nftd->nft_image }}" alt="avt"
                                                    style="height:40px;width:40; border-radius:50px">
                                            </div>
                                            <div class="d-flex gap-8">
                                                <span class="body-3 text-dark-2">Created by</span>
                                                <span class="button-2 text-blue">
                                                    {{ $nftd->creator }}
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3733 7.16036L13.4667 6.10703C13.2933 5.90703 13.1533 5.5337 13.1533 5.26703V4.1337C13.1533 3.42703 12.5733 2.84703 11.8667 2.84703H10.7333C10.4733 2.84703 10.0933 2.70703 9.89334 2.5337L8.84 1.62703C8.38 1.2337 7.62667 1.2337 7.16 1.62703L6.11334 2.54036C5.91334 2.70703 5.53334 2.84703 5.27334 2.84703H4.12C3.41334 2.84703 2.83334 3.42703 2.83334 4.1337V5.2737C2.83334 5.5337 2.69334 5.90703 2.52667 6.10703L1.62667 7.16703C1.24 7.62703 1.24 8.3737 1.62667 8.8337L2.52667 9.8937C2.69334 10.0937 2.83334 10.467 2.83334 10.727V11.867C2.83334 12.5737 3.41334 13.1537 4.12 13.1537H5.27334C5.53334 13.1537 5.91334 13.2937 6.11334 13.467L7.16667 14.3737C7.62667 14.767 8.38 14.767 8.84667 14.3737L9.9 13.467C10.1 13.2937 10.4733 13.1537 10.74 13.1537H11.8733C12.58 13.1537 13.16 12.5737 13.16 11.867V10.7337C13.16 10.4737 13.3 10.0937 13.4733 9.8937L14.38 8.84036C14.7667 8.38036 14.7667 7.62036 14.3733 7.16036ZM10.7733 6.74036L7.55334 9.96036C7.46 10.0537 7.33334 10.107 7.2 10.107C7.06667 10.107 6.94 10.0537 6.84667 9.96036L5.23334 8.34703C5.04 8.1537 5.04 7.8337 5.23334 7.64036C5.42667 7.44703 5.74667 7.44703 5.94 7.64036L7.2 8.90036L10.0667 6.0337C10.26 5.84036 10.58 5.84036 10.7733 6.0337C10.9667 6.22703 10.9667 6.54703 10.7733 6.74036Z"
                                                            fill="#2664ED" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </li>
                                        <div class="button-1">{{ $nftd->name }}</div>
                                        <span class="less button-3">Order No:R5475H68</span>
                                        <!-- <span class="more button-3">+more</span> -->
                                    </div>
                                    <div class="d-flex align-items-center gap-12">
                                        <span class="body-3 text-dark-2">Current Price: </span>
                                        <div class="d-flex align-items-center gap-8">
                                            <div class="d-flex align-items-center gap-4">
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
                                                <span class="button-2">{{ $nftd->price }}</span>
                                            </div>
                                            <!-- <div class="button-2 text-dark-2" style="display:grid">($1169037.82USD)</div> -->
                                        </div>
                                    </div>

                                </div>
                                <div id="collection" class="accordion-collapse collapse show"
                                    aria-labelledby="collection">
                                    <div class="card-body">
                                        <div class="d-flex gap-12 align-items-center">
                                            <!-- <div class="avatar avt-40">
                                    <img src="" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    </div> -->

                                        </div>
                                        <div class="card-body row">
                                            <div class="box-item col-3">
                                                <div class="body-5 text-center">Rebate</div>
                                                <div class="body-5 text-center" style="font-size:15px;">81.1</div>
                                            </div>
                                            <div class="box-item col-3">
                                                <div class="body-5 text-center">Income</div>
                                                <div class="body-5 text-center" style="font-size:15px;color:#7f52ff; font-weight:800">2.4</div>
                                            </div>
                                            <div class="box-item col-3">
                                                <div class="body-5 text-center">ROI</div>
                                                <div class="body-5 text-center" style="font-size:15px;color:#7f52ff; font-weight:800">2.4</div>
                                            </div>
                                            <div class="box-item col-3">
                                                <div class="body-5 text-center">Date</div>
                                                <div class="body-5 text-center" style="font-size:15px;">{{ $nftd->created_at}}</div>
                                            </div>
                                        </div>

                                        <!-- <p class="mt-20 text-dark-2">An online community of makers, developers, and
                                            traders is
                                            pushing the art world into new territory. It all started with <span
                                                class="text-primary fw-6">Read More...</span></p> -->
                                        <ul class="d-flex gap-12 mt-20">
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round icon-web">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM17.931 9H15.167C15.0436 6.81124 14.4313 4.67797 13.375 2.757C14.5992 3.32905 15.6589 4.2014 16.4554 5.29291C17.252 6.38442 17.7596 7.65965 17.931 9ZM10.53 2.027C11.565 3.391 12.957 5.807 13.157 9H7.03C7.169 6.404 8.024 3.972 9.481 2.026C9.653 2.016 9.825 2 10 2C10.179 2 10.354 2.016 10.53 2.027ZM6.688 2.727C5.704 4.618 5.136 6.762 5.03 9H2.069C2.24177 7.64784 2.75663 6.3621 3.56489 5.26442C4.37315 4.16673 5.44808 3.29339 6.688 2.727ZM2.069 11H5.043C5.179 13.379 5.708 15.478 6.599 17.23C5.38119 16.6559 4.32773 15.7842 3.53596 14.6953C2.74419 13.6064 2.23966 12.3355 2.069 11ZM9.45 17.973C8.049 16.275 7.222 13.896 7.041 11H13.154C12.946 13.773 12.037 16.196 10.551 17.972C10.369 17.984 10.187 18 10 18C9.814 18 9.633 17.984 9.45 17.973ZM13.461 17.201C14.416 15.407 14.999 13.3 15.152 11H17.93C17.7612 12.3243 17.264 13.5853 16.4834 14.6684C15.7029 15.7514 14.6639 16.622 13.461 17.201Z"
                                                            fill="#1A1528" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round">
                                                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.8199 0.259766C13.6213 0.615453 13.4443 0.982785 13.2899 1.35977C11.7727 1.11982 10.2272 1.11982 8.70992 1.35977C8.55551 0.982785 8.37852 0.615453 8.17992 0.259766C6.75071 0.503967 5.36132 0.941303 4.04992 1.55977C1.70486 4.94405 0.641354 9.05272 1.04992 13.1498C2.57815 14.2986 4.29338 15.1748 6.11992 15.7398C6.53583 15.1904 6.90702 14.6085 7.22992 13.9998C6.63399 13.78 6.06121 13.502 5.51992 13.1698C5.66838 13.071 5.80881 12.9606 5.93992 12.8398C7.51838 13.6001 9.24789 13.9949 10.9999 13.9949C12.7519 13.9949 14.4815 13.6001 16.0599 12.8398C16.1999 12.9598 16.3399 13.0698 16.4799 13.1698C15.9357 13.4994 15.3635 13.7805 14.7699 14.0098C15.0794 14.6323 15.4407 15.2277 15.8499 15.7898C17.6742 15.2268 19.3864 14.3504 20.9099 13.1998C21.3283 9.10197 20.2639 4.98995 17.9099 1.60977C16.6132 0.978503 15.2376 0.524436 13.8199 0.259766ZM7.67992 10.8098C7.1795 10.7738 6.71246 10.5455 6.37684 10.1725C6.04122 9.79962 5.86311 9.31119 5.87992 8.80977C5.86058 8.30768 6.0378 7.81785 6.37393 7.44438C6.71005 7.0709 7.17858 6.84324 7.67992 6.80977C8.18126 6.84324 8.64978 7.0709 8.9859 7.44438C9.32203 7.81785 9.49926 8.30768 9.47992 8.80977C9.49926 9.31185 9.32203 9.80168 8.9859 10.1752C8.64978 10.5486 8.18126 10.7763 7.67992 10.8098ZM14.3199 10.8098C13.8195 10.7738 13.3525 10.5455 13.0168 10.1725C12.6812 9.79962 12.5031 9.31119 12.5199 8.80977C12.5006 8.30768 12.6778 7.81785 13.0139 7.44438C13.3501 7.0709 13.8186 6.84324 14.3199 6.80977C14.8222 6.84074 15.2922 7.06767 15.6289 7.44171C15.9655 7.81576 16.1418 8.30702 16.1199 8.80977C16.1418 9.31251 15.9655 9.80377 15.6289 10.1778C15.2922 10.5519 14.8222 10.7788 14.3199 10.8098Z"
                                                            fill="#5865F2" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round">
                                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.633 3.99753C17.646 4.17253 17.646 4.34653 17.646 4.52053C17.646 9.84553 13.593 15.9815 6.186 15.9815C3.904 15.9815 1.784 15.3205 0 14.1725C0.324 14.2095 0.636 14.2225 0.973 14.2225C2.78599 14.2269 4.54764 13.6207 5.974 12.5015C5.13342 12.4863 4.31858 12.209 3.64324 11.7083C2.9679 11.2075 2.46578 10.5084 2.207 9.70853C2.456 9.74553 2.706 9.77053 2.968 9.77053C3.329 9.77053 3.692 9.72053 4.029 9.63353C3.11676 9.44934 2.29647 8.95488 1.70762 8.23422C1.11876 7.51355 0.797693 6.61118 0.799 5.68053V5.63053C1.336 5.92953 1.959 6.11653 2.619 6.14153C2.06609 5.77412 1.61272 5.27555 1.29934 4.69032C0.985959 4.10509 0.822313 3.45139 0.823 2.78753C0.823 2.03953 1.022 1.35353 1.371 0.755532C2.38314 2.00055 3.6455 3.01909 5.07633 3.74519C6.50717 4.47129 8.07456 4.88875 9.677 4.97053C9.615 4.67053 9.577 4.35953 9.577 4.04753C9.57674 3.51849 9.68074 2.99459 9.88308 2.50577C10.0854 2.01695 10.3821 1.57281 10.7562 1.19872C11.1303 0.824633 11.5744 0.527942 12.0632 0.32561C12.5521 0.123277 13.076 0.0192689 13.605 0.0195317C14.765 0.0195317 15.812 0.505531 16.548 1.29153C17.4498 1.11715 18.3145 0.787954 19.104 0.318532C18.8034 1.24935 18.1738 2.03864 17.333 2.53853C18.1328 2.44731 18.9144 2.23698 19.652 1.91453C19.1011 2.71763 18.4185 3.42188 17.633 3.99753Z"
                                                            fill="#1D9BF0" />
                                                    </svg>
                                                </a></li>
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.9471 6.30447C17.937 5.54709 17.7952 4.79724 17.5281 4.08847C17.2964 3.49062 16.9426 2.94767 16.4892 2.4943C16.0359 2.04093 15.4929 1.68712 14.8951 1.45547C14.1954 1.19283 13.4562 1.05081 12.7091 1.03547C11.7471 0.992469 11.4421 0.980469 9.00007 0.980469C6.55807 0.980469 6.24507 0.980469 5.29007 1.03547C4.54323 1.05092 3.80442 1.19294 3.10507 1.45547C2.50713 1.68696 1.96409 2.04071 1.5107 2.4941C1.05732 2.94749 0.703559 3.49053 0.47207 4.08847C0.208901 4.7876 0.0671935 5.52658 0.0530703 6.27347C0.0100703 7.23647 -0.00292969 7.54147 -0.00292969 9.98347C-0.00292969 12.4255 -0.00292969 12.7375 0.0530703 13.6935C0.0680703 14.4415 0.20907 15.1795 0.47207 15.8805C0.703948 16.4782 1.05797 17.021 1.51151 17.4742C1.96505 17.9274 2.50813 18.281 3.10607 18.5125C3.8035 18.7857 4.54244 18.9378 5.29107 18.9625C6.25407 19.0055 6.55907 19.0185 9.00107 19.0185C11.4431 19.0185 11.7561 19.0185 12.7111 18.9625C13.4582 18.9478 14.1974 18.8061 14.8971 18.5435C15.4948 18.3116 16.0376 17.9576 16.4909 17.5043C16.9442 17.051 17.2982 16.5082 17.5301 15.9105C17.7931 15.2105 17.9341 14.4725 17.9491 13.7235C17.9921 12.7615 18.0051 12.4565 18.0051 10.0135C18.0031 7.57147 18.0031 7.26147 17.9471 6.30447ZM8.99407 14.6015C6.44007 14.6015 4.37107 12.5325 4.37107 9.97847C4.37107 7.42447 6.44007 5.35547 8.99407 5.35547C10.2202 5.35547 11.396 5.84253 12.263 6.70951C13.13 7.5765 13.6171 8.75237 13.6171 9.97847C13.6171 11.2046 13.13 12.3804 12.263 13.2474C11.396 14.1144 10.2202 14.6015 8.99407 14.6015ZM13.8011 6.26247C13.6595 6.2626 13.5192 6.23481 13.3884 6.18068C13.2575 6.12655 13.1386 6.04715 13.0385 5.94702C12.9384 5.8469 12.859 5.72801 12.8049 5.59716C12.7507 5.46631 12.7229 5.32607 12.7231 5.18447C12.7231 5.04297 12.7509 4.90286 12.8051 4.77213C12.8592 4.6414 12.9386 4.52262 13.0387 4.42256C13.1387 4.32251 13.2575 4.24314 13.3882 4.18899C13.519 4.13484 13.6591 4.10697 13.8006 4.10697C13.9421 4.10697 14.0822 4.13484 14.2129 4.18899C14.3436 4.24314 14.4624 4.32251 14.5625 4.42256C14.6625 4.52262 14.7419 4.6414 14.7961 4.77213C14.8502 4.90286 14.8781 5.04297 14.8781 5.18447C14.8781 5.78047 14.3961 6.26247 13.8011 6.26247Z"
                                                            fill="url(#paint0_radial_4906_189)" />
                                                        <path
                                                            d="M8.99421 12.9806C10.6527 12.9806 11.9972 11.6361 11.9972 9.97761C11.9972 8.3191 10.6527 6.97461 8.99421 6.97461C7.3357 6.97461 5.99121 8.3191 5.99121 9.97761C5.99121 11.6361 7.3357 12.9806 8.99421 12.9806Z"
                                                            fill="url(#paint1_radial_4906_189)" />
                                                        <defs>
                                                            <radialGradient id="paint0_radial_4906_189" cx="0" cy="0"
                                                                r="1" gradientUnits="userSpaceOnUse"
                                                                gradientTransform="translate(1.16253 18.6233) scale(22.8635 22.9016)">
                                                                <stop offset="0.09" stop-color="#FA8F21" />
                                                                <stop offset="0.78" stop-color="#D82D7E" />
                                                            </radialGradient>
                                                            <radialGradient id="paint1_radial_4906_189" cx="0" cy="0"
                                                                r="1" gradientUnits="userSpaceOnUse"
                                                                gradientTransform="translate(6.37991 12.849) scale(7.62539 7.62539)">
                                                                <stop offset="0.09" stop-color="#FA8F21" />
                                                                <stop offset="0.78" stop-color="#D82D7E" />
                                                            </radialGradient>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.6651 0.717797L0.935095 7.5548C-0.274905 8.0408 -0.267905 8.7158 0.713095 9.0168L5.26509 10.4368L15.7971 3.7918C16.2951 3.4888 16.7501 3.6518 16.3761 3.9838L7.8431 11.6848H7.84109L7.8431 11.6858L7.5291 16.3778C7.9891 16.3778 8.19209 16.1668 8.45009 15.9178L10.6611 13.7678L15.2601 17.1648C16.1081 17.6318 16.7171 17.3918 16.9281 16.3798L19.9471 2.1518C20.2561 0.912797 19.4741 0.351797 18.6651 0.717797Z"
                                                            fill="url(#paint0_linear_4906_2549)" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_4906_2549" x1="10.0083"
                                                                y1="0.607422" x2="10.0083" y2="17.2694"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#2AABEE" />
                                                                <stop offset="1" stop-color="#229ED9" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                            <li><a href="#" class="box-icon w-36 bg-icon-1 w-36 round icon-modify">
                                                    <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.28513 3.26927C2.29666 3.15448 2.28093 3.0386 2.23923 2.93104C2.19753 2.82348 2.13102 2.72728 2.04513 2.65027L0.275133 0.517266V0.197266H5.77313L10.0231 9.51727L13.7591 0.197266H19.0001V0.516265L17.4851 1.96727C17.4217 2.01665 17.3727 2.08211 17.3432 2.15685C17.3136 2.23159 17.3046 2.31288 17.3171 2.39227V13.0583C17.3044 13.1377 17.3133 13.219 17.3429 13.2938C17.3724 13.3686 17.4216 13.434 17.4851 13.4833L18.9641 14.9343V15.2533H11.5281V14.9343L13.0571 13.4473C13.2091 13.2973 13.2091 13.2523 13.2091 13.0233V4.40127L8.95013 15.2183H8.37513L3.41713 4.40127V11.6503C3.37613 11.9553 3.47713 12.2623 3.69213 12.4833L5.68413 14.9003V15.2193H0.0361328V14.9003L2.02813 12.4833C2.13293 12.3741 2.21075 12.2419 2.25537 12.0972C2.29999 11.9526 2.31018 11.7995 2.28513 11.6503V3.26927Z"
                                                            fill="#1A1528" />
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>

                        </div>
                    @else
                        <h4>No NFT Data Available !..</h4>
                        @endif
                    </div>
                        
                    <div class="tab-pane fade check-list" id="activity" role="tabpanel">
                        <!-- item 1 -->
                         @foreach ($nftall as $value)                        
                         
                        <div class="card-nft-2 style-2">
                            <div class="card-header" data-bs-toggle="collapse" data-bs-target="#activity-1"
                                aria-expanded="true" aria-controls="activity-1">
                                <div class="content-left">
                                    <div class="d-flex gap-16 align-items-center">
                                    <img class="lazyload" src="{{$value->nft_image}}" alt="img-nft" style="height:80px;width:auto;border-radius:20%">
                                        <div>
                                            <div class="button-1">Sale</div>
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
                                        <div class="button-2">{{$value->name}}</div>
                                    </div>
                                    <span class="button-2 text-dark-2">{{$value->created_at}}</span>
                                </div>
                            </div>
                            <div id="activity-1" class="accordion-collapse collapse show" aria-labelledby="activity-1">
                                <div class="card-body">
                                    <div class="box-item">
                                        <div class="body-5">USD Price</div>
                                        <span class="button-3">{{$value->price}}</span>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5">ROI</div>
                                        <span class="button-3">65</span>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5">Creator</div>
                                        <span class="button-3 text-primary">{{$value->creator}}</span>
                                    </div>
                                    <div class="box-item">
                                        <div class="body-5">Order No:</div>
                                        <span class="button-3 text-primary">F6783H47</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach                       
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
                    <a href="#" class="social-share-item" data-platform="copyLink">
                        <div class="box-icon w-40 copyLink">
                            <!-- SVG Icon -->
                        </div>
                        <span>Copy Link</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item" data-platform="whatsApp">
                        <div class="box-icon w-40 whatsApp">
                            <!-- SVG Icon -->
                        </div>
                        <span>WhatsApp</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item" data-platform="facebook">
                        <div class="box-icon w-40 facebook">
                            <!-- SVG Icon -->
                        </div>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item" data-platform="messenger">
                        <div class="box-icon w-40 messenger">
                            <!-- SVG Icon -->
                        </div>
                        <span>Messenger</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item" data-platform="twitter">
                        <div class="box-icon w-40 twitter-2">
                            <!-- SVG Icon -->
                        </div>
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-share-item" data-platform="instagram">
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



    </body>

</html>
@include('partials.notify')
