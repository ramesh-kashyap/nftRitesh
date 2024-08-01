
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <base href="{{ asset('') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>@lang('Make Deposit')</title>
</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
        <img src="images/logo/Nestnftdark.png" alt="logo" style="width:100px;height:auto">       
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h4>Deposit</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Deposit </h4>
                </div>
                <div class="card-body">
                <form method="post" name="add" action="{{ route('user.confirmDeposit') }}">
                {{ csrf_field() }}
                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Enter Amount')</label>
                            <input type="text" placeholder="Enter your amount" name="Sum" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>@lang('Select Payment Mode')</label>
                            <select id="cars" class="form-control" type="text" name="PSys">
                        <option value="USDT.BEP20">USDT BEP20</option>
                        <option value="USDT.TRC20">USDT TRC20</option>
                    </select>
                        </fieldset>
                      
                      
                        <button class="mt-20 tf-btn primary">Deposit</button>
                    </form>



                </div>
            </div>
               
        </div>
    </div>
    
    

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    
    
</body>
</html>