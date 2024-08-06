
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
    <link rel="stylesheet"type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/nestnft.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/nestnft.png" />

    <title>Quantification Records</title>
</head>
<style>
.card mt-20{

    border: 1px solid #8052ff;
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

    <?php 
     
         $total= $active_gen_team1total+$active_gen_team2total;
                                                    
                                                  
                                                    // dd($balance);
 ?>
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h4>Quantification Records</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">

            <div class="card mt-20" style="
    background: url('/images/45.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: right;
    color: #fff;
">
                <div class="card-header line-bt"> 

                <?php 
                
                $vip =0;

                if ($balance>=50 && $balance<500 && $directIncome>=5) 
                {
                   $vip = 1;
                }
                elseif($balance>=500 && $balance<2000) 
                {
                    if ($userDirect>=3 && $directIncome>=10 && $total>=5) 
                    {
                        $vip = 2;
                    }
                    else
                    {
                        $vip = 1;
                    }
                }
                elseif($balance>=2000 && $balance<5000) 
                {
                    if ($userDirect>=6 && $directIncome>=20 && $total>=20) 
                    {
                        $vip = 3;
                    }
                    elseif ($userDirect>=3 && $directIncome>=10 && $total>=5) {
                        $vip = 2;
                    }
                    else
                    {
                        $vip = 1;
                    }
                }
                elseif($balance>=5000) 
                {
                    if ($userDirect>=15 && $directIncome>=50 && $total>=35) 
                    {
                        $vip = 4;
                    }
                    elseif ($userDirect>=6 && $directIncome>=20 && $total>=20) {
                        $vip = 3;
                    }
                    elseif ($userDirect>=3 && $directIncome>=10 && $total>=5) {
                        $vip = 2;
                    }
                    else
                    {
                        $vip = 1;
                    }
                }


                ?>
                    <h4 class="fw-6" style="color:white;">Vip {{$vip}}</h4>

                    <p class="text-5 pb-20 mt-4" style="font-size: 18px;">@lang('Unlocked this level yet')</p>
                    <div class="avatar round avt-48">
                                      <img src="images/avt/2.png" alt="">
                                  </div>
                                
                                 
                </div>

                
               
            </div>
<!--         
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 1</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Not unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-1.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 2</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-2.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                      
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 2</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Not unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-2.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 3</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-3.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown style-2">
                       
                        <div class="dropdown-menu full">
                            <ul class="top">
                                <li>
                                    <h5 class="dropdown-header">Dropdown-header</h5>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 02</a> 
                                </li>
                            </ul>
                            <ul class="bottom">
                                <li>
                                    <h5 class="dropdown-header">VIP 4</h5>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 04</a> 
                                </li>
                            </ul>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 3</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Not unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-3.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 4</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-4.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown style-3">
                       
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Normal</a>
                            <a class="dropdown-item active" href="javascript:void(0);">Active</a>
                            <a class="dropdown-item disable" href="javascript:void(0);">Disable</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">VIP 4</h4>
                    <p class="text-5 pb-20 mt-4">@lang('Not unlocked this level yet')</p>
                </div>
                <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-4.png" alt="">
                                  </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div> -->
                
              
                                                    </br></br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP1 Guidelines Benefits</h6></br>
        <div class="tf-container">
            
            <a  class="box-wallet-3" style="border: 1px solid #8052ff;
">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Direct Team Bonus
                        ')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Team commision
                        ')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">50</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">500</span>

                        <span class="body-3 text-dark-2">5 USDT</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">1.8% to 1.95%</span>
                        <span class="body-3 text-dark-2">12%/7%/5%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
      
          





            
                
                
                                                    </br>
                                                    

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP2 Guidelines Benefits</h6></br>
        <div class="tf-container">
            
        <a  class="box-wallet-3" style="border: 1px solid #8052ff;">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Direct Team Bonus
                        ')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Team commision
                        ')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">500</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">2000</span>

                        <span class="body-3 text-dark-2">10 USDT</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">2.1%-2.5%</span>
                        <span class="body-3 text-dark-2">13%/6%/3%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
      
          





            
                
                
        
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP3 Guidelines Benefits</h6></br>
        <div class="tf-container">
            
        <a  class="box-wallet-3" style="border: 1px solid #8052ff;">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> 
                  -->
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Direct Team Bonus
                        ')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Team commision
                        ')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">2000</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">5000</span>

                        <span class="body-3 text-dark-2">20 USDT</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">2.6%-2.9%</span>
                        <span class="body-3 text-dark-2">15%/7%/5%</span>

                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
       
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP4  Guidelines Benefits</h6></br>
        <div class="tf-container">
            
        <a  class="box-wallet-3" style="border: 1px solid #8052ff;">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Direct Team Bonus
                        ')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                         
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Team commision
                        ')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">5000</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">Above</span>

                        <span class="body-3 text-dark-2">50 USDT</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">3.1%-3.5%</span>
                        <span class="mt-2 d-block button-2 text-dark-2">Above</span>
                        <span class="body-3 text-dark-2">18%/9%/8%</span>

                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        </div>
    </div>
    

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>