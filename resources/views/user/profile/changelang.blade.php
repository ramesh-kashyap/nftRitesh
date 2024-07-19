
<html lang="en" dir="ltr">

<head>
    <style>
        a:hover {
            text-decoration: none;
            list-style: none;
        }
    </style>


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="nfty" />
  <meta name="keywords" content="nfty" />
  <meta name="author" content="nfty" />
  <base href="{{ asset('') }}">

  <link rel="manifest" href="./manifest.json" />
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
        <a href="#">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">Languages</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- language-section start -->
  <section class="section-t-space section-b-space">
    <div class="custom-container">
      <ul class="language">
        @foreach ($language as $bhasa)
        <li>
          <div class="d-flex align-items-center">
            <div class="form-check">
            <label class="form-check-label" for="fixed{{ $bhasa->code }}">{{ $bhasa->name }}</label>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed{{ $bhasa->code }}" 
            {{ session('lang') == $bhasa->code ? 'checked' : '' }}/>
            </div>
          </div>
        </li>
        @endforeach
        <li>
          <div class="d-flex align-items-center">
            <div class="form-check">
              <label class="form-check-label" for="fixed2">English (UK)</label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="fixed2" />
            </div>
          </div>
        </li>

      </ul>
    </div>
  </section>
  <!-- language-section end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->
  @include('layouts.upnl.footer')