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
        <h3>Change Email</h3>
        
    </div>
   
    <div class="app-content style-2">
    
        <div class="tf-container">  
        <div class="alert alert-success alert-dismissible mb-10" role="alert" id="successAlert" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M16.2806 9.21937C16.3504 9.28903 16.4057 9.37175 16.4434 9.46279C16.4812 9.55384 16.5006 9.65144 16.5006 9.75C16.5006 9.84856 16.4812 9.94616 16.4434 10.0372C16.4057 10.1283 16.3504 10.211 16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3718 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937ZM21.75 12C21.75 13.9284 21.1782 15.8134 20.1068 17.4168C19.0355 19.0202 17.5127 20.2699 15.7312 21.0078C13.9496 21.7458 11.9892 21.9389 10.0979 21.5627C8.20656 21.1865 6.46928 20.2579 5.10571 18.8943C3.74215 17.5307 2.81355 15.7934 2.43735 13.9021C2.06114 12.0108 2.25422 10.0504 2.99218 8.26884C3.73013 6.48726 4.97982 4.96451 6.58319 3.89317C8.18657 2.82183 10.0716 2.25 12 2.25C14.585 2.25273 17.0634 3.28084 18.8913 5.10872C20.7192 6.93661 21.7473 9.41498 21.75 12ZM20.25 12C20.25 10.3683 19.7661 8.77325 18.8596 7.41655C17.9531 6.05984 16.6646 5.00242 15.1571 4.37799C13.6497 3.75357 11.9909 3.59019 10.3905 3.90852C8.79017 4.22685 7.32016 5.01259 6.16637 6.16637C5.01259 7.32015 4.22685 8.79016 3.90853 10.3905C3.5902 11.9908 3.75358 13.6496 4.378 15.1571C5.00242 16.6646 6.05984 17.9531 7.41655 18.8596C8.77326 19.7661 10.3683 20.25 12 20.25C14.1873 20.2475 16.2843 19.3775 17.8309 17.8309C19.3775 16.2843 20.2475 14.1873 20.25 12Z"
                    fill="white" />
            </svg>
            <span>Success! Mail has been sent...</span>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="icon-close2"></i>
            </button> -->
        </div>
            <div class="mb-24 pb-24 line-3">
                <div class="card pb-20">
                    <form method="POST" action="{{ route('user.changeEmailAction') }}"
                        class="auth-form">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">User Name</span>
                                </div>
                                <input class="mt-12 form-control" type="text" id="inputusername" readonly=""
                                    value="{{ Auth::user()->username }}">
                                <i class="ri-user-line user"></i>
                            </div>

                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Email</span>
                                </div>
                                <input class="mt-12 form-control" type="email" id="inputemail" readonly
                                    value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Verification
                                        Code</span>
                                </div>
                                <input class="mt-12 form-control" type="text" id="inputPassword" name="first_code"
                                    placeholder="Enter verification code">
                                <span class="first-code-send code-btn text-primary"
                                    style="position: absolute; top: 46%; right: 26px; cursor: pointer;">Get Code</span>
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">New Mail</span>
                                </div>
                                <input class="mt-12 form-control" type="email" name="newEmail" id="emailId"
                                    placeholder="Enter your email">
                                <i class="ri-user-line user"></i>
                            </div>
                            <div class="delete-item mt-20 ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="body-4" style="font-size: 16px; font-weight: 500;">Verification
                                        Code</span>
                                </div>
                                <input class="mt-12 form-control" type="text" name="second_code"
                                    placeholder="Enter verification code">
                                <div class="sencond-code-send text-primary"
                                    style="position: absolute; top: 79.5%; right: 26px; cursor:pointer;">Get Code</div>
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
        $('.first-code-send').click(function (e) {
            var ths = $(this);

            showAlert();
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('user.send_code') }}",
                data: {
                    "emailId": "",
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
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

        $('.sencond-code-send').click(function (e) {
            var ths = $(this);
            var emailId = $('#emailId').val();

            if (!emailId) {
                iziToast.error({
                    message: 'Invalid Email!',
                    position: "topRight"
                });
                return false;
            }
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('user.send_code') }}",
                data: {
                    "emailId": emailId,
                    "_token": "{{ csrf_token() }}",
                },
                
                success: function (response) {
                    // alert(response); 
                    // Show the alert
                         
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


        function showAlert() {
        var alertElement = document.getElementById('successAlert');
        if (alertElement) {
            alertElement.style.display = 'block';
            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 3000); 
        }
    }   
    </script>
    @include('partials.notify')
