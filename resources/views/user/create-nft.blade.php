
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

    <title>Create New Item</title>
</head>

<body>
    
    <div class="header fixed-top">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn fs-12"><i class="icon-close2"></i></a>
        </div>
        <h3>Create New Item</h3> 
        <div class="right">
            <a href="index.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>        
            </a>
        </div>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <h4 class="text-dark-3">Image, Video, Audio, or 3D Model</h4>
            <p class="mt-12 body-3 text-dark-2">File types supported: JPG, PNG, GIF, SVG, MP4, WEBM, MP3, WAV, OGG, GLB, GLTF Max size: 100 MB</p>
            <div class="card-banner-2 mt-20">
                <img class="lazyload" data-src="images/banner/banner-nft-4.jpg" alt="img">
                <div class="box-top d-flex align-items-center justify-content-end">
                    <div class="box-icon w-40 box-heart">
                        <span class="icon icon-heart"></span>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <h4 class="text-dark-3">Name</h4>
                <input type="text" class="form-control mt-16" value="Beaconikla #284">
            </div>
            <div class="mt-24">
                <h4 class="text-dark-3">External link (Optional)</h4>
                <p class="mt-12 text-dark-2 body-3">ENFTI will include a link to this URL on this item detail page, so that users can click to learn more about it. You’re welcome to link to your own webpage with more details.</p>
                <input type="text" class="mt-16 form-control" value="https://opensea.io/collection/nekochimin">
            </div>
            <div class="mt-24">
                <h4 class="text-dark-3">Description (Optional)</h4>
                <p class="mt-12 text-dark-2 body-3">The description will be included on the item's detail page underneath its image. Markdown syntax is supported.</p>
                <textarea class="form-control mt-16">Beaconikla is a collection of random NFT (Non - Fungible Token) generated and resides on the Ethereum Blockchain. We focus on making NFTs that are unique and rare.</textarea>
            </div>
            <div class="mt-24 pb-24 mb-24 line-3">
                <h4 class="text-dark-3">Collection</h4>
                <p class="mt-12 text-dark-2 body-3">This is the collection where your item will appear.</p>
                <div class="mt-16 nice-select tf-select-v3" tabindex="0"><span class="current">Beacon</span>
                    <svg class="arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6 7.45898L11.1667 12.8923C10.525 13.534 9.47503 13.534 8.83336 12.8923L3.40002 7.45898" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <ul class="list">  
                        <li data-value="1" class="option selected">Beacon</li>   
                        <li data-value="2" class="option selected">Beacon</li>                                                        
                        <li data-value="3" class="option selected">Beacon</li>                                                        
                    </ul>
                </div>
            </div>
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                    <div class="card-header d-flex gap-12">
                        <div class="icon icon-document-text text-gradient-1 fs-40"></div>
                        <div class="flex-grow-1">
                            <h6 class="text-dark-3">Properties</h6>
                            <p class="mt-6 body-5 text-dark-2">Textual traits that show up as rectangles</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="delete-item pt-20 mt-20 line-t2">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">BACKGROUND</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Bannana Dark Violet MIxed">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">BODY</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Blue">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">CLOTHES</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Full T-Shirt">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">FACE</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Brown">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">HAT</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Cream Cap">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">HEADPHONE</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="White">
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4">HAIR</span>
                                <span class="icon-close2 text-dark fs-12 btn-del"></span>
                            </div>
                            <input type="text" class="mt-12 form-control" value="Violet">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex gap-12">
                    <div class="icon icon-star text-gradient-2 fs-40"></div>
                    <div class="flex-grow-1">
                        <h6 class="text-dark-3">Levels</h6>
                        <p class="mt-6 body-5 text-dark-2">Numerical traits that show as a progress bar</p>
                    </div>
                </div>
                <div class="mt-20 card-body">
                    <a href="#" class="btn-add bg-rgba-orange"><span class="icon icon-plus text-orange"></span></a>
                </div>
            </div>
            <div class="card mt-24">
                <div class="card-header d-flex gap-12">
                    <div class="icon icon-activity text-gradient-3 fs-40"></div>
                    <div class="flex-grow-1">
                        <h6 class="text-dark-3">Stats</h6>
                        <p class="mt-6 body-5 text-dark-2">Numerical traits that show as a progress bar</p>
                    </div>
                </div>
                <div class="mt-20 card-body">
                    <a href="#" class="btn-add bg-rgba-blue"><span class="icon icon-plus text-secondary-1"></span></a>
                </div>
            </div>
            <div class="card mt-24">
                <div class="d-flex justify-content-between gap-12">
                    <div class="icon icon-unlock text-gradient-4 fs-40"></div>
                    <div class="content flex-grow-1">
                        <div class="d-flex justify-content-between">
                            <label for="sw1" class="text-dark-3 flex-grow-1 h6">Unlockable Content</label>
                            <input type="checkbox" class="tf-switch-check" id="sw1"> 
                        </div>
                        <p class="mt-6 body-5 text-dark-2">Include unlockable content that can only be revealed by the owner of the item.</p>
                    </div>
                </div>
            </div>
            <div class="card mt-24">
                <div class="d-flex justify-content-between gap-12">
                    <div class="icon icon-info-circle text-gradient-5 fs-40"></div>
                    <div class="content flex-grow-1">
                        <div class="d-flex justify-content-between">
                            <label for="sw2" class="text-dark-3 flex-grow-1 h6">Explicit & Sensitive Content</label>
                            <input type="checkbox" class="tf-switch-check" id="sw2"> 
                        </div>
                        <p class="mt-6 body-5 text-dark-2">Set this item as explicit and sensitive content</p>
                    </div>
                </div>
            </div>
            <div class="mt-24">
                <h4 class="text-dark-3">Supply</h4>
                <p class="mt-12 text-dark-2 body-3">The number of items that can be minted. No gas cost to you!</p>
                <input type="text" class="mt-16 form-control" value="1">
            </div>
            <div class="mt-24">
                <h4 class="text-dark-3">Blockchain</h4>
                <div class="mt-16 nice-select tf-select-v3 icon" tabindex="0"><span class="current">Ethereum</span>
                    <svg class="icon icon-eth" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.74998 7.58294L9.72494 5.81628C9.89994 5.74128 10.1 5.74128 10.2666 5.81628L14.2416 7.58294C14.5916 7.74128 14.9166 7.31628 14.6749 7.01628L10.5083 1.92461C10.2249 1.57461 9.75829 1.57461 9.47495 1.92461L5.30829 7.01628C5.07495 7.31628 5.39998 7.74128 5.74998 7.58294Z" fill="#1A1528"/>
                        <path d="M5.75006 12.4171L9.73336 14.1837C9.90836 14.2587 10.1084 14.2587 10.2751 14.1837L14.2584 12.4171C14.6084 12.2587 14.9334 12.6837 14.6917 12.9837L10.525 18.0754C10.2417 18.4254 9.77505 18.4254 9.49171 18.0754L5.32505 12.9837C5.07505 12.6837 5.39172 12.2587 5.75006 12.4171Z" fill="#1A1528"/>
                        <path d="M9.81672 7.90898L6.37505 9.62565C6.06672 9.77565 6.06672 10.2173 6.37505 10.3673L9.81672 12.084C9.93339 12.1423 10.075 12.1423 10.1917 12.084L13.6333 10.3673C13.9417 10.2173 13.9417 9.77565 13.6333 9.62565L10.1917 7.90898C10.0667 7.85065 9.93339 7.85065 9.81672 7.90898Z" fill="#1A1528"/>
                    </svg>
                    <svg class="arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6 7.45898L11.1667 12.8923C10.525 13.534 9.47503 13.534 8.83336 12.8923L3.40002 7.45898" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                           
                    <ul class="list">  
                        <li data-value="last-month" class="option selected">Ethereum</li>                                                        
                        <li data-value="last-week" class="option">Polygon</li>
                        <li data-value="last-week" class="option">Klaytn</li>
                        <li data-value="last-week" class="option">Solana</li>
                    </ul>
                </div>
            </div>
            <div class="mt-24">
                <p class="mt-12 body-3 text-dark-2">
                    Freezing your metadata will allow you to permanently lock and store all of this item's content in decentralized file storage.
                    <br>
                    To freeze your metadata, you must create your item’s first.
                </p>
            </div>
        </div>
        
        
    </div>

    <div class="btn-fixed">
        <div class="grid-2 gap-15">
            <a href="index.html" class="tf-btn disabled-primary">CANCEL</a>
            <a href="nft-details-unlisting.html" class="tf-btn primary">CREATE</a>

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

</body>
</html>