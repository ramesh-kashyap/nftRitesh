
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <base href="{{ asset('') }}">
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

    <title>Create New Item</title>
</head>

<body>
    
    <div class="header fixed-top">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <!-- <h3>Create New Item</h3> -->
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
            <h4 class="text-dark-3">Invite Friends</h4>
           
            <div class="mt-20">
                <label class="boxuploadfile">
                    <div class="btn-upload">
                    <img src="{{$qrImage}}" alt="logo" class="logo-light">

                    </div>
                </label>
            </div>
            <div class="pb-24 mb-24 line">
                <h6>@lang('Invitation code')</h6>
                <div class="mb-16 box-ip-field-val">

                    <img class="lazyload" data-src="images/banner/banner-nft-3.jpg" alt="img">
                    <input type="text" class="form-control" value="{{Auth::user()->username}}">
                    <div class="group-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"  style="font-size:24px; color:#fff" type="button" onclick="copyLink()" >
                            <g opacity="0.6">
                            <path d="M14.1666 11.1673V13.6673C14.1666 17.0007 12.8333 18.334 9.49996 18.334H6.33329C2.99996 18.334 1.66663 17.0007 1.66663 13.6673V10.5007C1.66663 7.16732 2.99996 5.83398 6.33329 5.83398H8.83329" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1663 11.1673H11.4997C9.49967 11.1673 8.83301 10.5007 8.83301 8.50065V5.83398L14.1663 11.1673Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.66638 1.66602H12.9997" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.83337 4.16602C5.83337 2.78268 6.95004 1.66602 8.33337 1.66602H10.5167" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.3337 6.66602V11.8243C18.3337 13.116 17.2837 14.166 15.9921 14.166" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.3334 6.66602H15.8334C13.9584 6.66602 13.3334 6.04102 13.3334 4.16602V1.66602L18.3334 6.66602Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                       
                               
                    </div>
                </div>
            <div class="mt-24">
                <h4 class="text-dark-3">@lang('Invitation link')</h4>
              
                <input type="text" class="mt-16 form-control" value="{{ asset('') }}register?ref={{ Auth::user()->username }}" style="    width: 100%;" name="link" readonly id="clipboardright">
            </div>

            <div class="mt-24">
              
              
                <input type="text" class="mt-16 form-control" value="@lang('Copy invitation link')" style="width: 100%;background: #8052ff;color: white; text-align: center;">
            </div>
          
        </div>
        
        
    </div>

    <div class="btn-fixed">
        <div class="grid-2 gap-15">
            <!-- <a href="index.html" class="tf-btn disabled-primary">CANCEL</a> -->
            <!-- <a href="nft-details-unlisting.html" class="tf-btn primary">CREATE</a> -->

        </div>
    </div>

    <script>
    function copyLink() {
        var copyText = document.getElementById("clipboardright");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        document.execCommand("copy");
        alert("Copied the link: " + copyText.value);
    }
</script>
    

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/countto.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/jqueryui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>