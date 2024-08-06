<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <link rel="stylesheet" href="css/jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/nestnft.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/nestnft.png" />

    <title>Change Email</title>
    <style>
        .btn-section .google-btn {
            padding: 12px 0;
            background-color: rgb(30 30 30);
            color: #fff;
            border-radius: 6px;
            border: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            gap: 10px;
            border-radius: 8px;
            margin-top: 15px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="header fixed-top">
    <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h3>Change Email</h3>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                    <form method="POST" action="{{ route('user.changeEmailAction') }}" class="auth-form">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">User Name</span>
                                </div>
                                <input class="mt-12 form-control" type="text" id="inputusername" readonly="" value="{{ Auth::user()->username }}">
                                <i class="ri-user-line user"></i>
                            </div>

                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Email</span>
                                </div>
                                <input class="mt-12 form-control" type="email" id="inputemail" readonly value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Verification Code</span>
                                </div>
                                <input class="mt-12 form-control" type="text" id="inputPassword" name="first_code" placeholder="Enter verification code">
                                <span class="first-code-send code-btn text-primary" style="position: absolute; top: 46%; right: 26px; cursor: pointer;">Get Code</span>
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">New Mail</span>
                                </div>
                                <input class="mt-12 form-control" type="email" name="newEmail" id="emailId" placeholder="Enter your email">
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Verification Code</span>
                                </div>
                                <input class="mt-12 form-control" type="text" name="second_code" placeholder="Enter verification code">
                                <div class="sencond-code-send text-primary" style="position: absolute; top: 79.5%; right: 26px; cursor:pointer;">Get Code</div>
                                <i class="ri-user-line user"></i>
                            </div>

                            <div class="submit-btn pt-1 pb-1">
                                <button type="submit" class="tf-btn theme-btn mt-10">Submit</button>
                            </div>
                        </div>
                    </form>
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
          @include('partials.notify')