
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
        <h1>Sign In</h1>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- Sign section start -->
  <div class="custom-container">
    <form method="POST" action="{{ route('loginp') }}" class="auth-form">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="inputusername" class="form-label">User Name</label>
        <div class="form-input mb-4">
          <input type="text" class="form-control" id="inputusername" name="username" placeholder="Enter User Name" />
          <i class="ri-user-line user"></i>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="form-label">Password</label>
        <div class="form-input">
          <input type="" class="form-control" name="password" id="inputPassword" placeholder="Enter Your Password" />
          <i class="ri-door-lock-line"></i>
        </div>
      </div>

      <div class="forgot">
        <a href="forgot-password.html">Forgot password?</a>
      </div>

      <div class="submit-btn">
        <button type="submit" class="btn theme-btn">Sign In</button>
            </div>
      <div class="division">
        <span>OR</span>
      </div>

      <div class="btn-section">
        <a href="https://www.apple.com/in/" class="google-btn"><img class="img-fluid google"
            src="{{asset('')}}assets/images/icons/apple.png" alt="google" /> Continue with Apple</a>

        <a href="https://www.google.co.in/" class="google-btn"><img class="img-fluid google"
            src="{{asset('')}}assets/images/icons/google.png" alt="google" /> Continue with Google</a>
      </div>

      <h5 class="signup">Haven't registered?<a href="{{ route('register') }}"> Sign up now</a></h5>
    </form>
  </div>
  <!-- Sign section end-->

  <!-- bootstrap js -->
  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="{{asset('')}}assets/js/script.js"></script>
</body>

</html>