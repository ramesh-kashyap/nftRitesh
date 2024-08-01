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
     <style>
     .box-img 
        img{
            border-radius: 20px;
        }
     </style>

    <title>NFTs Detail</title>

</head>

<body>
    <div class="mt-24 gap-15" style="text-align:center; margin-top:40px">
        <a href="" class="card-nft" style="text-align:center">
            <div class="box-img" style="min-width: 400px">
                <img class="lazyload" src="{{$nftd->nft_image}}" alt="img-nft" style="height: 250px; width: 250px; margin-right: 100px; margin-top: 50px;>
                <span class="tag react">                    
                <img class="lazyload" src="{{asset('')}}images/logo/nestnft.png" alt="img-nft" style="height:30px;width:auto;left:0; position: absolute;">
                </span>
                
                <h4 style="position:absolute; top: 10px; right:25px">{{$nftd->name}}</h4>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff; position:absolute; top: 50px; right:15px">
                    Ankit
                </p>
                <p style="text-align:left; position:absolute; top: 100px; right:25px">ROI</p>
                <p style="font-size:40px; font-weight:800; text-align:justify; color:red; position:absolute; top: 130px; right:15px">
                83.1 %
                </p>
                <p style="text-align:left; position:absolute; top: 190px; right:15px">Entry Price</p>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff;position:absolute; top: 210px; right:15px">
                    $ 210
                </p>
                <p style="text-align:left; position:absolute; top: 250px; right:15px">Current Price</p>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff;position:absolute; top: 270px; right:15px">
                {{$nftd->price}}
                </p>
                
                <span class="tag ethereum" style="left:38%">                    
                {{$nftd->symbol}}
                </span>
                
            </div>
            <div class="content">
                <div class="button-1 name" >Join and claim over $5000 </div>
                <p class="mt-4 id-name"  style="font-weight:800;font-size:20px">Reffrel Code :11223344
                <img class="lazyload" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$url&format=png" alt="img-nft" style="height:60px; width:auto">
                </p>
            </div>
        </a>
        
    </div>
    <a href="{{ route('user.sharenft') }}" class="btn btn-primary">Download Screenshot</a>

</body>

</html>