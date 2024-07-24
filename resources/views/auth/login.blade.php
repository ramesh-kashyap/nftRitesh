
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

    <title>Sign In</title>
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
        
        <h3>Sign In</h3> 
        
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                  <form method="POST" action="{{ route('loginp') }}" class="auth-form">
                        {{ csrf_field() }} 
                    
                        <div class="card-body">
                        <div class="delete-item mt-20 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="
    font-size: 16px;
    font-weight: 500;">User Name</span>
                                
                            </div>
                            <input type="text" class="mt-12 form-control" id="inputusername" name="username" placeholder="Enter User Name">
                            <i class="ri-user-line user"></i>
                        </div>
                        <div class="delete-item mt-20">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="
                                font-size: 16px;
                                font-weight: 500;">Password</span>
                                
                            </div>
                            <input type="text" class="mt-12 form-control" name="password" id="inputPassword" placeholder="Enter Your Password">
                        </div>

                        <div class="forgot">
                          <a href="forgot-password.html" >Forgot password?</a>
                        </div>
                  
                        <div class="submit-btn pt-1 pb-1">
                          <button type="submit" class="tf-btn theme-btn">Sign In</button>
                              </div>
                        <div class="division text-center mt-10 mb-10">
                          <span class="text-info text-md-start text-center">OR</span>
                        </div>
                  
                        <div class="btn-section">
                          <a href="https://www.apple.com/in/" class="google-btn"><img class="img-fluid google"
                              src="{{asset('')}}images/logo/apple.png" alt="google" style="width: 22px" /><span class="text-primar"> Continue with Apple </span></a>
                  
                          <a href="https://www.google.co.in/" class="google-btn"><img class="img-fluid google"
                              src="{{asset('')}}images/logo/google.png" alt="google" style="width: 22px" /> <span class="text-primar">Continue with Google </span></a>
                        </div>
                  
                        <h5 class="signup mt-10"><span class="text-mut">Haven't registered?</span><a href="{{ route('register') }}" class="text-primary"> Sign up now</a></h5>
                      </form>
                        
                    </div>
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

</body>
</html>