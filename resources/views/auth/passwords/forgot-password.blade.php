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
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>Forgot Password</title>
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

        <h3>Forgot Password</h3>

    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                    <form method="POST" action="{{route('forgot_submit')}}" class="auth-form">
                        {{ csrf_field() }}
                        @php
                        $sponsor = @$_GET['ref'];
                        $name = \App\Models\User::where('username', $sponsor)->first();
                        @endphp
                        <div class="card-body">
                                
                            <div class="delete-item mt-20">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="
                                font-size: 16px;
                                font-weight: 500;">Email</span>

                                </div>
                                <input class="mt-12 form-control" type="email" id="emailId" name="email" placeholder="Enter your email">
                            </div>
                            <div class="delete-item mt-20 ">
                              <div class="d-flex justify-content-between align-items-center">
                                  <span class="body-4" style="
  font-size: 16px;
  font-weight: 500;">Verification Code</span>

                              </div>
                              <input class="mt-12 form-control" type="text" name="code" placeholder="Code">
                              <span class="code-btn text-primary" style="
    position: absolute;
    top: 16%;
    right: 25px;
   cursor:pointer;
">Get Code</span>
                              <i class="ri-user-line user"></i>
                          </div>
                          <div class="delete-item mt-20 ">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="body-4" style="
font-size: 16px;
font-weight: 500;">Login password</span>

                            </div>
                            <input class="mt-12 form-control" type="password" name="password" placeholder="Enter your password">
                            <i class="ri-user-line user"></i>
                        </div>
                        <div class="delete-item mt-20 ">
                          <div class="d-flex justify-content-between align-items-center">
                              <span class="body-4" style="
font-size: 16px;
font-weight: 500;">Confirm password</span>

                          </div>
                          <input class="mt-12 form-control" type="password" name="password_confirmation"  placeholder="Please confirm the login password">
                          <i class="ri-user-line user"></i>
                      </div>

                            <div class="submit-btn pt-1 pb-1">
                                <button type="submit" class="tf-btn theme-btn mt-10">Confirm</button>
                            </div>
                          
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
@include('partials.notify')

<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>


<script>

        $('.code-btn').click(function(e) {
            var ths = $(this);
            var emailId = $('#emailId').val();
       
          
            // alert(sponsor); 
            $.ajax({
                type: "POST"
                , url: "{{ route('send_forgot') }}"
                , data: {
                    "emailId":emailId,
                     "_token": "{{ csrf_token() }}"
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

    <script>
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('passwordInput');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}


document.addEventListener('DOMContentLoaded', function() {
    var input = document.querySelector("#mobile_code");
    window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
});
</script>
