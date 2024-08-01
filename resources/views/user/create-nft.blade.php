<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Media Share</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link rel="stylesheet" href="../fonts/font-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/nouislider.min.css" />
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick-theme.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="../images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="../images/logo/168.png" />
    <style>
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
<body>
    <!-- Your social media buttons -->
    <button id="shareButton">Share to Social Media</button>

    <!-- Content to be captured -->
    <span id="contentToCapture" class="mt-24 gap-15" style="text-align:center;margin-top:40px;position: relative;background:transparent;width: 400px;margin: 0px auto;">
        <a href="" class="card-nft" style="text-align:center">
            <div class="box-img" style="min-width: 400px">
                <img class="lazyload" src="{{$nftd->nft_image}}" alt="img-nft" style="height: 250px; width: 250px; margin-right: 100px; margin-top: 50px;">
                                   
                    <img class="lazyload" src="{{asset('')}}images/logo/nestnft.png" alt="img-nft" style="height:30px;width:auto;left:0; position: absolute;">
                
                
                <h4 style="position:absolute; top: 10px; right:15px">{{$nftd->name}}</h4>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff; position:absolute; top: 50px; right:15px">
                    Ankit
                </p>
                <p style="text-align:left; position:absolute; top: 100px; right:25px">Rebate</p>
                <p style="font-size:30px; font-weight:800; text-align:justify; color:green; position:absolute; top: 130px; right:15px">
                83.1 %
                </p>
                <p style="text-align:left; position:absolute; top: 190px; right:15px">Income</p>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff;position:absolute; top: 210px; right:15px">
                48.4    
                </p>
                <!-- <p style="text-align:left; position:absolute; top: 250px; right:15px">Current Price</p>
                <p style="font-size:20px; font-weight:800; text-align:justify; color:#7f52ff;position:absolute; top: 270px; right:15px">
                {{$nftd->price}}
                </p> -->
                
                <span class="tag ethereum" style="left:38%; padding-top:3px; padding-bottom:3px">
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
                    <p style="font-size:15px;font-weight:800;color:#7f52ff">
                {{$nftd->price}}
                </p>
                </span>
                
            </div>
            <div class="content">
                <div class="button-1 name" >Order No: D563H67</div>
                <p class="mt-4 id-name"  style="font-weight:800;font-size:20px">Reffrel Code :11223344
                <img class="lazyload" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$url&format=png" alt="img-nft" style="height:60px; width:auto">
                </p>
            </div>
        </a>
    </span>

    <script>
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

                            // Trigger download
                            var link = document.createElement('a');
                            link.href = dataUrl;
                            link.download = 'content.png';
                            document.body.appendChild(link); // Append link to the body
                            link.click(); // Trigger download
                            document.body.removeChild(link); // Remove link from the body
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
