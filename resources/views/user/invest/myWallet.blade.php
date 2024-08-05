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
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>more</title>
</head>
<style>


/* Example custom styles */
.btn-success {
    background-color: #28a745; /* Green color */
    color: white;
}

.btn-danger {
    background-color: #dc3545; /* Red color */
    color: white;
}

    
</style>
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
    

     <!--wallet  -->
     <div>
        <div class="header fixed-top">
            <div class="left">
              <a href="{{ route('user.dashboard') }}" ><i class="icon-close2"></i></a>
            </div>
            <h3>My Wallet</h3>
            <div class="right">
                <a href="javascript:void(0);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.9965 12H16.0054" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9955 12H12.0045" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.99451 12H8.00349" stroke="#1A1528" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>    
                </a>
            </div>
        </div>
        <div class="overflow-auto app-content style-1">
            <div class="tf-container">
                <div class="pb-24 line d-flex flex-column align-items-center box-wallet">
                    <div class="avatar round avt-110">
                        <img class="lazyload" data-src="images/avt/avt10.png" alt="img">
                    </div>
                    <div class="mt-20 box-content text-center">
                        <h4>Username-{{ Auth::user()->username }}</h4>
                        <span class="button-2 mt-12 d-block ">{{ number_format(Auth::user()->available_balance(), 2) }} USDT</span>
                    </div>
                    
                </div>
                <ul class="py-20 px-16 box-service line">
                    <li><a href="{{route('user.Withdraw')}}" class="item">
                        <div class="box-icon w-48 round"><span class="icon icon-import"></span></div>
                        <span class="fw-6 text-dark">Withdrawal</span>
                    </a></li>
                    <li><a href="{{route('user.invest')}}" class="item">
                        <div class="box-icon w-48 round"><span class="icon icon-bag-2"></span></div>
                        <span class="fw-6 text-dark">Deposit</span>
                    </a></li>
                    <li><a href="{{route('user.share')}}" class="item">
                        <div class="box-icon w-48 round"><span class="icon icon-send-2"></span></div>
                        <span class="fw-6 text-dark">Invite</span>
                    </a></li>

                    <li><a href="{{route('user.level-team')}}" class="item">
                        <div class="box-icon w-48 round"><span class="icon icon-import"></span></div>
                        <span class="fw-6 text-dark">My Team</span>
                    </a></li>
                    
                </ul>

                
                <div class="mt-24">
                    <div class="tab-slide wrapper-tab">
                        <ul class="nav nav-tabs tab-1" role="tablist" >
                            <li class="item-slide-effect"></li>
                            <li class="nav-item active" role="presentation">   
                                <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#tokens">Deposit</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#NFTs">Withdraw</button>
                            </li> 
                        </ul>
                    </div>
                    <div class="tab-content mt-24">
                        <div class="tab-pane fade active show" id="tokens" role="tabpanel">
                            <ul class="list-view check-list">
                                <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                    <?php
                                    date_default_timezone_set('UTC');
                                    $cnt = 0; ?>
                                    @foreach($deposit_list as $value)

                                    @if($value->investType==1)
                                    <li class="item">
                                        <a href="#" class="gap-12">
                                            <div class="image">
                                                
                                            </div>
                                            <span class="content">
                                                <span class="body-1">{{ $value->amount }} {{ generalDetail()->cur_text }}</span>
                                                <span class="body-4 mt-4 tid" style="
                                                padding-bottom: 0px;
                                                margin-bottom: -4px;
                                            ">（TID: {{ $value->transaction_id }}）</span>

                                                <br>
                                                <span class="body-1" style="font-size: 13px;">{{date("D, d M Y H:i:s ", strtotime($value->created_at))}}</span>

                                            </span>
                                            @if($value->status == "Pending")
                                            
                                                <div class="col-sm-2 button-danger">
                                                    <form type="POST" action="{{ route('user.cancel-payment', ['id' => $value->orderId]) }}">
                                                        @csrf
                                                      <button class="tf-btn btn-sm primary" type="submit">Cancel</button>
                                                    </form>
                                                </div>
                                           
                                            @else
                                            <div class="col-sm-2">
    <button class="tf-btn btn-sm {{ $value->status == 'Active' ? 'btn-success' : 'btn-danger' }}">
        {{ $value->status == 'Active' ? 'Success' : $value->status }}
    </button>
</div>
                                            @endif
                                        </a>
                                    </li>
                                    @else
                                    <li class="item">
                                        <a href="#" class="gap-12">
                                            <div class="image">
                                                
                                            </div>
                                            <span class="content">
                                                <span class="body-1">{{ $value->amount }} {{ generalDetail()->cur_text }}</span>
                                                <span class="body-4 mt-4 tid" style="
                                                padding-bottom: 0px;
                                                margin-bottom: -4px;
                                            ">Registeration Bonus</span>

                                                <br>
                                                <span class="body-1" style="font-size: 13px;">{{date("D, d M Y H:i:s ", strtotime($value->created_at))}}</span>

                                            </span>
                                            @if($value->status == "Pending")
                                            
                                                <div class="col-sm-2 button-danger">
                                                    <form type="POST" action="{{ route('user.cancel-payment', ['id' => $value->orderId]) }}">
                                                        @csrf
                                                      <button class="tf-btn btn-sm primary" type="submit">Cancel</button>
                                                    </form>
                                                </div>
                                           
                                            @else
                                            <div class="col-sm-2">
    <button class="tf-btn btn-sm {{ $value->status == 'Active' ? 'btn-success' : 'btn-danger' }}">
        {{ $value->status == 'Active' ? 'Success' : $value->status }}
    </button>
</div>
                                            @endif
                                        </a>
                                    </li>
                                    @endif
                                    
                                @endforeach
                                <?php }?> 
                              
                          
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="NFTs" role="tabpanel">
                            <ul class="list-view check-list">
                                <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                    <?php
                                    date_default_timezone_set('UTC');
                                    $cnt = 0; ?>
                                    @foreach($withdraw_report as $value)

                                    <li class="item">
                                        <a href="#" class="gap-12">
                                            <div class="image">
                                                
                                            </div>
                                            <span class="content">
                                                <span class="body-1">{{ $value->amount }} {{ generalDetail()->cur_text }}</span>
                                                <span class="body-4 mt-4 tid" style="
                                                padding-bottom: 0px;
                                                margin-bottom: -4px;
                                            ">（TID: {{ $value->txn_id }}）</span>

                                                <br>
                                                <span class="body-1" style="font-size: 13px;">{{date("D, d M Y H:i:s ", strtotime($value->paid_date))}}</span>

                                            </span>
                                            @if($value->status == "Pending")
                                            
                                            <div class="col-sm-2 ">
                                                <button class="tf-btn btn-sm info">{{ $value->status }}</button>
                                            </div>
                                           
                                            @else
                                            <div class="col-sm-2 ">
                                                <button class="tf-btn btn-sm {{ $value->status == 'Approved' ? 'success' : 'danger' }}">{{ $value->status }}</button>
                                            </div>
                                            @endif
                                        </a>
                                    </li>
                                    
                                @endforeach
                                <?php }?> 

                               
                            </ul>
                        </div>
                        <style>
                            .tid {
    display: inline-block; /* Ensure it's treated as a block element for scrolling */
    max-width: 150px; /* Set a fixed width as needed */
    white-space: nowrap; /* Prevent line breaks */
    overflow: hidden; /* Hide overflow */
    padding-bottom: 5px; /* Add some padding if necessary */
    margin-top: 5px; /* Add some margin if necessary */
}

.tid:hover {
    overflow-x: auto; /* Show horizontal scroll on hover */
}

                        </style>
                        
                    </div>
                </div>
                
            </div>
        </div>       
    </div>      
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>