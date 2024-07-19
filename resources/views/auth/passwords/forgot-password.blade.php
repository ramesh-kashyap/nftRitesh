
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
  <link rel="icon" href="{{asset('')}}assets/images/logo/logo.png" type="image/x-icon" />
  <title>nfty App</title>
  <link rel="icon" href="{{asset('')}}assets/images/logo/logo.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="{{asset('')}}assets/images/logo/logo.png" />
  <meta name="theme-color" content="#205dee" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="nfty" />
  <meta name="msapplication-TileImage" content="{{asset('')}}assets/images/logo/logo.png" />
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
  <link rel="stylesheet" id="rtl-link" type="text/css" href="{{asset('')}}assets/css/vendors/bootstrap.css" />
  <!-- remixicon css -->
  <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/vendors/remixicon.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="{{asset('')}}assets/css/style.css" />
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
  <header>
    <div class="custom-container">
      <div class="auth-title">
        <h1>Forgot Password</h1>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- forgot password start-->
  <div class="custom-container">
    <form class="auth-form" target="_blank">
      <div class="form-group">
        <label for="inputusername" class="form-label">Email</label>
        <div class="form-input">
          <input type="email" class="form-control" id="inputusername" placeholder="Enter Your Email" />
          <i class="ri-mail-line"></i>
        </div>
      </div>

      <div class="submit-btn">
        <a href="otp.html" class="btn theme-btn">Send OTP</a>
      </div>
    </form>
  </div>
  <!-- forgot password end -->


  <!-- bootstrap js -->
  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="{{asset('')}}assets/js/script.js"></script>
</body>

</html>