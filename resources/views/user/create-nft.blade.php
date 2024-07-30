
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
    <link rel="stylesheet" href="css/apexcharts.css">
    <link rel="stylesheet" href="css/jqueryui.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />
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
  background: radial-gradient( #2F2585 10%, #F028FD 70%, #2BDEAC 120%); 
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
  background: conic-gradient( #2BDEAC, #F028FD, #D8CCE6, #2F2585);
}

.pyramid-loader .wrapper .side2 {
  transform: rotateZ(30deg) rotateY(90deg);
  background: conic-gradient( #2F2585, #D8CCE6, #F028FD, #2BDEAC);
}

.pyramid-loader .wrapper .side3 {
  transform: rotateX(30deg);
  background: conic-gradient( #2F2585, #D8CCE6, #F028FD, #2BDEAC);
}

.pyramid-loader .wrapper .side4 {
  transform: rotateX(-30deg);
  background: conic-gradient( #2BDEAC, #F028FD, #D8CCE6, #2F2585);
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

    <title>Create New Item</title>
</head>

<body>
    
    <div class="header fixed-top">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <h3>Create New Item</h3> 
        <div class="right">
            <a href="{{route('user.dashboard')}}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>        
            </a>
        </div>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="swiper-container" style="overflow:hidden; max-height: 250px;">
                <div class="swiper-wrapper">
                    @foreach($nfts as $nft)
                        <div class="swiper-slide">
                            <div class="card-banner-2">
                                <img src="{{ $nft['nft']['display_image_url'] ?? ''}}" alt="{{ $nft['nft']['name'] ?? '' }}" width="200"
                                    style="height:150px;object-fit:contain">
                                <div class="box-top d-flex align-items-center justify-content-end">
                                    <div class="box-icon w-40 box-heart">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20">
                                <h2 class="text-center">{{ $nft['nft']['name'] ?? '' }}</h2>
                                <div class="d-flex justify-content-center align-items-center gap-4">
                                    <span class="button-2 text-blue">{{ $nft['nft']['collection'] ?? 'NFT Image' }}</span>
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
            <div class="mt-20">
                <button type="button" class="mt-16 tf-btn btn-md primary" data-bs-target="#modalLong" data-bs-toggle="modal">Buy NFT</button>
            </div>
            
            <div class="modal fade" id="modalLong">
                <div class="modal-dialog" role="document">
                    <div class="modal-content p-16">
                        <center>
                         <div class="pyramid-loader" id="loader" style="display:block">
                                <h4 class="text-primary">Buying Nft for you, Please Wait...</h4>    
                            <div class="wrapper">
                                <span class="side side1"></span>
                                <span class="side side2"></span>
                                <span class="side side3"></span>
                                <span class="side side4"></span>
                                <span class="shadow"></span>
                            </div>
                         </div>
                        </center>

                    <div id="contentDiv" style="display:none">
                        <div class="modal-header justify-content-center">
                            <h4 class="modal-title fw-6">YOUR NFT</h4>    
                        </div>
                        <div class="modal-body">
                            <div class="mb-40 text-center">
                                <img src="" id="popupImage" alt="NFT Image" style="height:150px;width:auto; border-radius:20px">
                            </div>
                        </div>
                        <div class="d-flex gap-16 mt-20">
                            <button type="button" class="tf-btn primary">Sell NFT</button>
                        </div>
                    </div>    
                    </div>
                </div>
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
    <script type="text/javascript" src="js/jqueryui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
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
    document.addEventListener('DOMContentLoaded', function() {
        $('#modalLong').on('show.bs.modal', function (e) {
            // Show loader and hide content div
            document.getElementById('loader').style.display = 'block';
            document.getElementById('contentDiv').style.display = 'none';
    
            // After 10 seconds, hide loader and show content div
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('contentDiv').style.display = 'block';
            }, 5000); // 10 seconds = 10000 milliseconds
        });
    });
</script>

</body>
</html>