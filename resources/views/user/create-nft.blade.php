
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="nfty" />
  <meta name="keywords" content="nfty" />
  <meta name="author" content="nfty" />
  <link rel="manifest" href="./manifest.json" />
  <base href="{{ asset('') }}">

  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
  <title>nfty App</title>
  <link rel="icon" href="assets/images/logo/logo.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="assets/images/logo/logo.png" />
  <meta name="theme-color" content="#205dee" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="nfty" />
  <meta name="msapplication-TileImage" content="assets/images/logo/logo.png" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css" />
  <!-- remixicon css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/remixicon.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
</head>

<body>

  <!-- loader start-->
  <div class="loader-wrapper" id="loader">
    <div class="loader">
      <span>N</span>
      <span>F</span>
      <span>T</span>
      <span>Y</span>
    </div>
  </div>
  <!-- loader end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.html">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">Create NFT</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- create nft section starts -->
  <section class="section-t-space">
    <div class="custom-container">
      <form class="auth-form offer-form create-form">
        <div class="upload-label">
          <label class="form-label mt-0 mb-0">Upload file</label>
          <span class="upload-file d-block">Image, Video, Audio, or 3D Model</span>
          <div class="upload-image">
            <input type="file" class="form-control" />
            <div class="upload-icon">
              <i class="ri-image-fill"></i>
              <h6>Upload</h6>
            </div>
          </div>

          <div class="form-group section-t-space">
            <label for="inputusername" class="form-label">Name</label>
            <div class="form-input">
              <input type="text" class="form-control wo-icon" id="inputusername" placeholder="Enter Item Name" />
            </div>
          </div>

          <div class="form-group section-t-space">
            <label for="inputdescription" class="form-label">Description</label>
            <span class="upload-file">(optional)</span>
            <div class="form-input">
              <textarea class="form-control wo-icon" id="inputdescription" rows="3"
                placeholder="Enter description"></textarea>
            </div>
          </div>
        </div>

        <div class="create-content">
          <div>
            <h4>Unlock Content</h4>
            <h5>Include unlock content that can only be revealed by the owner of the item.</h5>
          </div>
          <div class="switch-btn">
            <input type="checkbox" />
          </div>
        </div>

        <div class="create-content">
          <div>
            <h4>Sensitive Content</h4>
            <h5>set this item sensitive content.</h5>
          </div>
          <div class="switch-btn">
            <input type="checkbox" />
          </div>
        </div>

        <div class="create-content">
          <div>
            <h4>Put on sale</h4>
            <h5>Receive bid on this item.</h5>
          </div>
          <div class="switch-btn">
            <input type="checkbox" />
          </div>
        </div>

        <div class="offer-label section-t-space">
          <label class="form-label">Choose item Category</label>
        </div>
        <select class="form-select mt-0">
          <option value="1">Art</option>
          <option value="2">Virtual World</option>
          <option value="3">Purchases</option>
          <option value="4">NFT Gifts</option>
          <option value="5">Collectibles</option>
          <option value="6">Trending Cards</option>
        </select>

        <div class="offer-label section-t-space">
          <label class="form-label">Blockchain</label>
        </div>
        <select class="form-select mt-0">
          <option value="1">Ethereum</option>
          <option value="2">Metamask</option>
          <option value="3">Fortmatic</option>
          <option value="4">Authereum</option>
          <option value="5">Venly</option>
        </select>
        <div class="submit-btn d-flex w-100 mt-5 mb-3">
          <a href="landing.html" class="btn gray-btn btn-inline w-100 text-center">Cancel</a>
          <a href="nft-timeduration.html" class="btn theme-btn btn-inline w-100 text-center">Create</a>
        </div>
    </div>
    </form>
    </div>
  </section>
  <!-- create nft section end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->
