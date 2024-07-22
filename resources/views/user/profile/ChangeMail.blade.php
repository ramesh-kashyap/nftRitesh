
<html lang="en" dir="ltr">

<head>
    <style>
        a:hover {
            text-decoration: none;
            list-style: none;
        }
    </style>



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
        <a href="landing.html">
          <i class="ri-arrow-left-s-line"></i>
        </a>
        <h3 class="middle-title">Input Style</h3>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- form-input start -->
  <section class="section-t-space section-lg-b-space">
    <div class="custom-container">
      <form method="post" action="{{ route('user.changeEmailAction') }}" class="auth-form create-form">
      {{ csrf_field()}}
        <div class="form-group mb-3">
          <label for="inputusername" class="form-label">User Name</label>
          <div class="form-input">
            <input type="text" class="form-control" id="inputusername"type="text" readonly="" value="{{Auth::user()->username}}" />
            <i class="ri-user-line user"></i>
          </div>
        </div>

        <div class="form-group mb-3">
          <label for="inputusername" class="form-label">Email</label>
          <div class="form-input">
            <input type="email" class="form-control" id="inputemail" type="email" readonly value="{{Auth::user()->email}}"  placeholder="Enter your email"/>
            <i class="ri-user-line user"></i>
          </div>
        </div>

        <div class="form-group mb-3">
          <label for="inputPassword" class="form-label">Varification Code</label>
          <div class="form-input">
            <input type="password" class="form-control" id="inputPassword"  name="first_code" type="text" placeholder="Enter verification code"/>
            <div class="first-code-send" style="
    position: absolute;
    top: 30%;
    right: 10px;
    color: white;
      cursor: pointer;
">Get Code</div>
            <div class="count-down" style="display: none;"></div>
            <i class="ri-door-lock-line"></i>
          </div>
        </div>

        <div class="form-group mb-3">
          <label for="inputPassword" class="form-label">New Mail</label>
          <div class="form-input">
            <input type="password" class="form-control"  type="email" name="newEmail" value="" id="emailId"  placeholder="Enter your email"/>
            <i class="ri-door-lock-line"></i>
          </div>
        </div>
        <div class="form-group mb-3">
          <label for="inputPassword" class="form-label">Varification Code</label>
          <div class="form-input">
            <input type="password" class="form-control" name="second_code" type="text" placeholder="Enter verification code"/>
            <div class=" sencond-code-send" style="
    position: absolute;
    top: 30%;
    right: 10px;
    color: white;
    cursor: pointer;
">Get Code</div>
            <div class="count-down" style="display: none;"></div>
            <i class="ri-door-lock-line"></i>
          </div>
        </div>

        <div class="submit-btn mb-0">
          <button type="submit" class="btn theme-btn">Submit</button>
        </div>
      </form>
    </div>
  </section>
  <!-- form-input end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->
  <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>


<script>

        $('.first-code-send').click(function(e) {
            var ths = $(this);
 
          
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('user.send_code') }}"
                , data: {
                    "emailId": ""
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    // alert(response);      
                    if (response) {
                        // alert("hh");
                        iziToast.success({
                        message: 'Email send Successfully',
                        position: "topRight"
                    });
                    } else {
                        // alert("hi");
                        iziToast.error({
                        message: 'Error!',
                        position: "topRight"
                    });
                    }
                }
            });
        });

        $('.sencond-code-send').click(function(e) {
            var ths = $(this);
            var emailId = $('#emailId').val();
       
            if (!emailId) 
            {
                iziToast.error({
                        message: 'Invalid Email!',
                        position: "topRight"
                    });
                    return false;
            }
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('user.send_code') }}"
                , data: {
                    "emailId": emailId
                    , "_token": "{{ csrf_token() }}"
                , }
                , success: function(response) {
                    // alert(response);      
                    if (response) {
                        // alert("hh");
                        iziToast.success({
                        message: 'Email send Successfully',
                        position: "topRight"
                    });
                    } else {
                        // alert("hi");
                        iziToast.error({
                        message: 'Error!',
                        position: "topRight"
                    });
                    }
                }
            });
        });

            </script>
            
  @include('layouts.upnl.footer')