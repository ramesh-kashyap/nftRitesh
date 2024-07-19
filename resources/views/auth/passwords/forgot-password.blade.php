
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
    <form action="{{route('forgot_submit')}}" method="POST" class="auth-form">
      {{ csrf_field() }}
      <div class="form-group mb-3">
        @php
        $sponsor = @$_GET['ref'];
        $name = \App\Models\User::where('username', $sponsor)->first();
        @endphp
        <label for="inputusername" class="form-label">Phone Number</label>
        <div class="form-input">
          <input id="mobile_code" class="form-control" type="tel" name="phone" placeholder="Enter your phone number">

          <i class="ri-user-line user"></i>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="inputusername" class="form-label">Email</label>
        <div class="form-input">
          <input class="form-control" type="email" id="emailId" name="email" placeholder="Enter your email">

          <i class="ri-user-line user"></i>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="inputPassword" class="form-label">Verification Code</label>
        <div class="form-input">
           
           <input class="form-control" type="text" name="code" placeholder="Code">
           <div class="code-btn" style="
    position: absolute;
    top: 30%;
    right: 10px;
    color: white;
">Get Code</div>


          <i class="ri-door-lock-line"></i>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="inputusername" class="form-label">Login password</label>
        <div class="form-input">
          <input class="form-control" type="password" name="password" placeholder="Enter your password">

          <i class="ri-user-line user"></i>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="inputusername" class="form-label">Confirm password</label>
        <div class="form-input">
          <input class="form-control" type="password" name="password_confirmation"  placeholder="Please confirm the login password">

          <i class="ri-user-line user"></i>
        </div>
      </div>


      <div class="submit-btn">
        <button type="submit"  class="btn theme-btn">Confirm</button>
      </div>

      
    </form>
    <!-- Sign Form end -->
  </div>
  <!-- forgot password end -->


  <!-- bootstrap js -->
  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="{{asset('')}}assets/js/script.js"></script>
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









@include('partials.notify')
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