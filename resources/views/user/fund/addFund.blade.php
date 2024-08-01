
<style>
	a:hover {
    text-decoration: none;
    list-style: none;
}
</style>
			<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
        <base href="http://127.0.0.1:8000/">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <style>
         .card-nft{
          display:grid !important;
         }
      </style>

    <!-- manifest json -->
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>home</title>
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

    <div class="header-style2 fixed-top">
        <div class="logo">
            <h4>Quantification Records<h4>
        </div>
        <div class="right">
            <a href="#notification" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 6.44043V9.77043" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" />
                    <path
                        d="M12.0199 2C8.3399 2 5.3599 4.98 5.3599 8.66V10.76C5.3599 11.44 5.0799 12.46 4.7299 13.04L3.4599 15.16C2.6799 16.47 3.2199 17.93 4.6599 18.41C9.4399 20 14.6099 20 19.3899 18.41C20.7399 17.96 21.3199 16.38 20.5899 15.16L19.3199 13.04C18.9699 12.46 18.6899 11.43 18.6899 10.76V8.66C18.6799 5 15.6799 2 12.0199 2Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                    <path
                        d="M15.3299 18.8203C15.3299 20.6503 13.8299 22.1503 11.9999 22.1503C11.0899 22.1503 10.2499 21.7703 9.64992 21.1703C9.04992 20.5703 8.66992 19.7303 8.66992 18.8203"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" />
                </svg>
            </a>
            <a href="#sidebar" data-bs-toggle="modal">
                <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="1">
                        <path d="M2.5 10H17.5" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M2.5 5H17.5" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M2.5 15H17.5" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
           
           
        <div class="card-wallet-1 mt-28" style="background: #8052ff;
    color: white;">
                <div class="card-header">
                    
                    <h6 class="fw-7 flex-grow-1" style="color:white;"> NFT Quantification</h6>
                </div>
                <div class="card-body">
                    <div class="grid-2" style="    grid-template-columns: 1fr 1fr 1fr;">

                        <span class="button-2 fw-6">@lang('Total NFT Earnings')</span>
                        <span class="button-2 fw-6"> @lang('Team Todays Earnings')</span>

                        <span class="button-2 fw-6">   @lang('Total team income')</span>

                        <span class="text-dark-2 body-3" style="color:black;">{{number_format($totalRoi,2)}}</span>
                        <span class="text-dark-2 body-3" style="color:black;">{{number_format($todaysLevelIncome,2)}}</span>



                        <span class="text-dark-2 body-3" style="color:black;"> {{number_format($totalLevelIncome,2)}}</span>

                        <span class="button-2 fw-6" style="margin-top:40px;"> @lang("Todays Quantifiable Amount")</span>
                        <span class="button-2 fw-6" style="margin-top:40px;"> @lang('Todays Earnings')</span>

                        <span class="button-2 fw-6" style="margin-top:40px;">  @lang('Todays Quantifiable Count')</span>

                        <span class="text-dark-2 body-3" style="color:black;"><?=(Auth::user()->tradeAmt<=0 && $todaysRoi<$quantifiable_count)?number_format($balance,2):number_format(Auth::user()->tradeAmt,2)?> / {{number_format($balance,2)}}</span>
                        <span class="text-dark-2 body-3" style="color:black;">{{number_format($todaysRoiSum,2)}}</span>



                            <span class="text-dark-2 body-3" style="color:black;"> dsfghjkl</span>
                       



                    </div>

                </div>


            </div>




        
                            

            
            <div class="mt-24">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Most Popular</h4>
                    <a href="most-popular.html" class="text-primary fw-6">See All</a>
                </div>
                <div class="mt-24 swiper tf-sw-2 sw-lr" data-preview="1.2" data-space="20" style="height: fit-content;">
                    <div class="swiper-wrapper">
                    @if($balance>=50)

                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level1">
                                <img class="lazyload" data-src="images/vip1-By.jpg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP1</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level1">
                                <img class="lazyload" data-src="images/vip1-By.jpg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP1</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Not unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                        @if($balance>=500 && $userDirect>=5)

                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level2">
                                <img class="lazyload" data-src="images/copy2.jpeg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP2</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level2">
                                <img class="lazyload" data-src="images/vip2-by.png" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP2</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Not unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                        @if($balance>=2000 && $userDirect>=5)

                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level3">
                                <img class="lazyload" data-src="images/copy3.jpeg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP3</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level3">
                                <img class="lazyload" data-src="images/vip3.jpg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP3</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Not unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endif
                        @if($balance>=5000 && $userDirect>=5)

                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level4">
                                <img class="lazyload" data-src="images/copy4.jpeg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP4</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="swiper-slide">
                            <a href="nft-item-details.html" class="card-banner-2 level level4">
                                <img class="lazyload" data-src="images/Vip4.jpg" alt="img" style="object-fit:initial;">
                                <div class="box-top d-flex align-items-center justify-content-between">
                                    <div class="tag button-2 text-white">VIP4</div>
                                   
                                </div>
                                <div class="box-bottom">
                                    <div class="content">
                                        <div class="d-flex justify-content-between">
                                            <span class="text-white body-3">@lang('Not unlocked this level yet')</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

          
            <div class="app-content style-2">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP1 Upgrade Conditions</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Effective amount')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('1st generation valid members')</span>

                        <span class="body-3 text-dark-2">@lang('2st generation valid members')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('3st generation valid members')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">{{number_format($balance)}}/30</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team1total}}/0</span>

                        <span class="body-3 text-dark-2">{{$active_gen_team2total}}/0</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team3total}}/0</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP1 Benefits</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Daily
                        quantified times')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">50</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">500</span>

                        <span class="body-3 text-dark-2">3 times</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">1.8%-95%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        
        
    </div>
          


         
    <div class="app-content style-2">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP2 Upgrade Conditions</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Effective amount')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('1st generation valid members')</span>

                        <span class="body-3 text-dark-2">@lang('2st generation valid members')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('3st generation valid members')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">{{number_format($balance)}}/30</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team1total}}/0</span>

                        <span class="body-3 text-dark-2">{{$active_gen_team2total}}/0</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team3total}}/0</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP2 Benefits</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Daily
                        quantified times')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">500</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">2000</span>

                        <span class="body-3 text-dark-2">3 times</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">2.1%-2.5%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        
        
    </div>






    <div class="app-content style-2">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP3 Upgrade Conditions</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Effective amount')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('1st generation valid members')</span>

                        <span class="body-3 text-dark-2">@lang('2st generation valid members')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('3st generation valid members')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">{{number_format($balance)}}/30</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team1total}}/0</span>

                        <span class="body-3 text-dark-2">{{$active_gen_team2total}}/0</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team3total}}/0</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP3 Benefits</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Daily
                        quantified times')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">2000</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">5000</span>

                        <span class="body-3 text-dark-2">3 times</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">2.6%-2.9%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        
        
    </div>





    <div class="app-content style-2">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP4 Upgrade Conditions</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Effective amount')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('1st generation valid members')</span>

                        <span class="body-3 text-dark-2">@lang('2st generation valid members')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('3st generation valid members')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">{{number_format($balance)}}/30</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team1total}}/0</span>

                        <span class="body-3 text-dark-2">{{$active_gen_team2total}}/0</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">{{$active_gen_team3total}}/0</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        </br></br>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIP4 Benefits</h6>
        <div class="tf-container">
            
            <a href="#" class="box-wallet-3">
                <!-- <div class="avatar round avt-48">
                    <img src="images/avt/avt10.png" alt="">                      
                </div> -->
                
                <div class="content d-flex justify-content-between">
                    <div class="content-left">
                    <p class="body-1 mt-2">@lang('Minimum
                    amount quantification')</p>
                    <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('Maximum
                    amount quantification')</span>

                        <span class="body-3 text-dark-2">@lang('Daily
                        quantified times')</span>
                        
                       
                        <span class="d-block mt-2 button-3 text-dark-2 fw-6">@lang('return on
                        investment')</span>
                    </div>
                    <div class="content-right text-end">
                    <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                           
                           <span class="button-2">5000</span>  
                       </div>
                       <span class="mt-2 d-block button-2 text-dark-2">100000</span>

                        <span class="body-3 text-dark-2">3 times</span>
                       
                        <span class="mt-2 d-block button-2 text-dark-2">3.1%-3.5%</span>
                    </div>
                </div>
                
                    
            </a> 
          





            
                
                
        </div>
        
        
    </div>



        </div>

    </div>
    

    <div class="menubar-footer footer-fixed">
      <ul class="inner-bar">
          <li class="active">
              <a href="http://127.0.0.1:8000/user/dashboard">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20.0402 6.81969L14.2802 2.78969C12.7102 1.68969 10.3002 1.74969 8.79023 2.91969L3.78023 6.82969C2.78023 7.60969 1.99023 9.20969 1.99023 10.4697V17.3697C1.99023 19.9197 4.06023 21.9997 6.61023 21.9997H17.3902C19.9402 21.9997 22.0102 19.9297 22.0102 17.3797V10.5997C22.0102 9.24969 21.1402 7.58969 20.0402 6.81969ZM12.7502 17.9997C12.7502 18.4097 12.4102 18.7497 12.0002 18.7497C11.5902 18.7497 11.2502 18.4097 11.2502 17.9997V14.9997C11.2502 14.5897 11.5902 14.2497 12.0002 14.2497C12.4102 14.2497 12.7502 14.5897 12.7502 14.9997V17.9997Z" fill="#7F52FF"/>
                  </svg>
                      
              </a>
          </li>
          <li><a href="http://127.0.0.1:8000/user/statistics">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g opacity="0.6">
                          <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                              stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path
                              d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                              stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                  </svg>
              </a>
          </li>
          <li class="action-add-wallet"><a href="http://127.0.0.1:8000/user/create-nft"><i class="icon-plus"></i></a></li>
          <li><a href="http://127.0.0.1:8000/user/myWallet">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.6">
                    <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z"
                        stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
            </svg>
             
                  
              </a>
          </li>
          <li><a href="http://127.0.0.1:8000/user/more">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.6">
                <path d="M12.1596 10.87C12.0596 10.86 11.9396 10.86 11.8296 10.87C9.44957 10.79 7.55957 8.84 7.55957 6.44C7.55957 3.99 9.53957 2 11.9996 2C14.4496 2 16.4396 3.99 16.4396 6.44C16.4296 8.84 14.5396 10.79 12.1596 10.87Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.15973 14.56C4.73973 16.18 4.73973 18.82 7.15973 20.43C9.90973 22.27 14.4197 22.27 17.1697 20.43C19.5897 18.81 19.5897 16.17 17.1697 14.56C14.4297 12.73 9.91973 12.73 7.15973 14.56Z" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
              </a>
          </li>
      </ul>

  </div>


  <!-- notification  -->
  <div class="offcanvas offcanvas-end full" id="notification">
      <div class="header fixed-top">
          <div class="left">
              <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon"><i
                      class="icon-arrow-right"></i></a>
          </div>
          <h3>Notification</h3>
          <div class="right">
              <a href="javascript:void(0);">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                          stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M15.9965 12H16.0054" stroke="#1A1528" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      <path d="M11.9955 12H12.0045" stroke="#1A1528" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                      <path d="M7.99451 12H8.00349" stroke="#1A1528" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                  </svg>
              </a>
          </div>
      </div>
      <div class="overflow-auto app-content style-1">
          <div class="tf-container">
              <div class="tab-slide wrapper-tab">
                  <ul class="nav nav-tabs tab-1" role="tablist">
                      <li class="item-slide-effect"></li>
                      <li class="nav-item active" role="presentation">
                          <button class="nav-link active" data-bs-toggle="tab"
                              data-bs-target="#general">General</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#NFTs">NFTs</button>
                      </li>
                  </ul>
              </div>
              <div class="tab-content mt-24">
                  <div class="tab-pane fade active show" id="general" role="tabpanel">
                      <ul class="list-view-v8">
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 green round">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M18.5398 4.11984L13.0398 2.05984C12.4698 1.84984 11.5398 1.84984 10.9698 2.05984L5.4698 4.11984C4.4098 4.51984 3.5498 5.75984 3.5498 6.88984V14.9898C3.5498 15.7998 4.0798 16.8698 4.7298 17.3498L10.2298 21.4598C11.1998 22.1898 12.7898 22.1898 13.7598 21.4598L19.2598 17.3498C19.9098 16.8598 20.4398 15.7998 20.4398 14.9898V6.88984C20.4498 5.75984 19.5898 4.51984 18.5398 4.11984ZM15.4798 9.71984L11.1798 14.0198C11.0298 14.1698 10.8398 14.2398 10.6498 14.2398C10.4598 14.2398 10.2698 14.1698 10.1198 14.0198L8.5198 12.3998C8.2298 12.1098 8.2298 11.6298 8.5198 11.3398C8.8098 11.0498 9.2898 11.0498 9.5798 11.3398L10.6598 12.4198L14.4298 8.64984C14.7198 8.35984 15.1998 8.35984 15.4898 8.64984C15.7798 8.93984 15.7798 9.42984 15.4798 9.71984Z"
                                              fill="url(#paint0_linear_3096_2848)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_2848" x1="20.4399" y1="22.0073"
                                                  x2="-0.127083" y2="16.9977" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#07BD74" />
                                                  <stop offset="1" stop-color="#1EE495" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="d-flex gap-5 align-items-center">
                                              <div class="body-1">Security Updates!</div>
                                              <span class="dots bg-blue"></span>
                                          </div>
                                          <div class="body-4">Just Now</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Now ENFTI has a Two-Factor Authentication. Try it now to make your account
                                          more secure.
                                      </p>
                                  </div>


                              </a>
                          </li>
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 primary round">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M20.97 16.08C20.73 18.75 18.8 20.5 16 20.5H7C4.24 20.5 2 18.26 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.51 16.75 3.55C19.14 3.83 20.76 5.5 20.97 7.92C21 8.21 20.76 8.45 20.47 8.45H18.92C17.96 8.45 17.07 8.82 16.43 9.48C15.67 10.22 15.29 11.26 15.38 12.3C15.54 14.12 17.14 15.55 19.04 15.55H20.47C20.76 15.55 21 15.79 20.97 16.08Z"
                                              fill="url(#paint0_linear_3096_2059)" />
                                          <path
                                              d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z"
                                              fill="url(#paint1_linear_3096_2059)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_2059" x1="20.9725" y1="20.5"
                                                  x2="-1.18128" y2="13.3314" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#7F2DFF" />
                                                  <stop offset="1" stop-color="#9958FF" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_3096_2059" x1="22.0002" y1="14.0502"
                                                  x2="16.1532" y2="11.9294" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#7F2DFF" />
                                                  <stop offset="1" stop-color="#9958FF" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="d-flex gap-5 align-items-center">
                                              <div class="body-1">Multiple Wallet Features!</div>
                                              <span class="dots bg-blue"></span>
                                          </div>
                                          <div class="body-4">5 min ago</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Try ENFTI new feature, now you can link your multiple wallet accounts.
                                      </p>
                                  </div>


                              </a>
                          </li>
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 orange round">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z"
                                              fill="url(#paint0_linear_3096_6268)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_6268" x1="21.99" y1="22"
                                                  x2="-1.79815" y2="15.1063" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#FB9400" />
                                                  <stop offset="1" stop-color="#FFAB38" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="body-1">ENFTI Has Updates!</div>
                                          <div class="body-4">1 hr Ago</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Now you can make an offer and buy multiple NFTs at once.
                                      </p>
                                  </div>


                              </a>
                          </li>
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 error round">
                                      <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <circle opacity="0.08" cx="24" cy="24" r="24" fill="#FB5556" />
                                          <path
                                              d="M31.5099 17.85L25.5699 14.42C24.5999 13.86 23.3999 13.86 22.4199 14.42L16.4899 17.85C15.5199 18.41 14.9199 19.45 14.9199 20.58V27.42C14.9199 28.54 15.5199 29.58 16.4899 30.15L22.4299 33.58C23.3999 34.14 24.5999 34.14 25.5799 33.58L31.5199 30.15C32.4899 29.59 33.0899 28.55 33.0899 27.42V20.58C33.0799 19.45 32.4799 18.42 31.5099 17.85ZM23.2499 19.75C23.2499 19.34 23.5899 19 23.9999 19C24.4099 19 24.7499 19.34 24.7499 19.75V25C24.7499 25.41 24.4099 25.75 23.9999 25.75C23.5899 25.75 23.2499 25.41 23.2499 25V19.75ZM24.9199 28.63C24.8699 28.75 24.7999 28.86 24.7099 28.96C24.5199 29.15 24.2699 29.25 23.9999 29.25C23.8699 29.25 23.7399 29.22 23.6199 29.17C23.4899 29.12 23.3899 29.05 23.2899 28.96C23.1999 28.86 23.1299 28.75 23.0699 28.63C23.0199 28.51 22.9999 28.38 22.9999 28.25C22.9999 27.99 23.0999 27.73 23.2899 27.54C23.3899 27.45 23.4899 27.38 23.6199 27.33C23.9899 27.17 24.4299 27.26 24.7099 27.54C24.7999 27.64 24.8699 27.74 24.9199 27.87C24.9699 27.99 24.9999 28.12 24.9999 28.25C24.9999 28.38 24.9699 28.51 24.9199 28.63Z"
                                              fill="url(#paint0_linear_3096_3570)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_3570" x1="33.0899" y1="34"
                                                  x2="11.1725" y2="28.2267" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#FF4D67" />
                                                  <stop offset="1" stop-color="#FF8A9B" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="body-1">New Updates Available!</div>
                                          <div class="body-4">3 hr Ago</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Update Ossea now to get access to the latest features, NFTs, &
                                          cryptocurrencies.
                                      </p>
                                  </div>


                              </a>
                          </li>
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 blue round">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M18.75 8V10.1C18.31 10.04 17.81 10.01 17.25 10V8C17.25 4.85 16.36 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.19 10.01 5.69 10.04 5.25 10.1V8C5.25 5.1 5.95 1.25 12 1.25C18.05 1.25 18.75 5.1 18.75 8Z"
                                              fill="url(#paint0_linear_3096_452)" />
                                          <path
                                              d="M18.75 10.1C18.31 10.04 17.81 10.01 17.25 10H6.75C6.19 10.01 5.69 10.04 5.25 10.1C2.7 10.41 2 11.66 2 15V17C2 21 3 22 7 22H17C21 22 22 21 22 17V15C22 11.66 21.3 10.41 18.75 10.1ZM8.71 16.71C8.52 16.89 8.26 17 8 17C7.87 17 7.74 16.97 7.62 16.92C7.49 16.87 7.39 16.8 7.29 16.71C7.11 16.52 7 16.26 7 16C7 15.87 7.03 15.74 7.08 15.62C7.13 15.5 7.2 15.39 7.29 15.29C7.39 15.2 7.49 15.13 7.62 15.08C7.99 14.92 8.43 15.01 8.71 15.29C8.8 15.39 8.87 15.5 8.92 15.62C8.97 15.74 9 15.87 9 16C9 16.26 8.89 16.52 8.71 16.71ZM12.92 16.38C12.87 16.5 12.8 16.61 12.71 16.71C12.52 16.89 12.26 17 12 17C11.73 17 11.48 16.89 11.29 16.71C11.2 16.61 11.13 16.5 11.08 16.38C11.03 16.26 11 16.13 11 16C11 15.73 11.11 15.48 11.29 15.29C11.66 14.92 12.33 14.92 12.71 15.29C12.89 15.48 13 15.73 13 16C13 16.13 12.97 16.26 12.92 16.38ZM16.71 16.71C16.52 16.89 16.26 17 16 17C15.74 17 15.48 16.89 15.29 16.71C15.11 16.52 15 16.27 15 16C15 15.73 15.11 15.48 15.29 15.29C15.67 14.92 16.34 14.92 16.71 15.29C16.75 15.34 16.79 15.39 16.83 15.45C16.87 15.5 16.9 15.56 16.92 15.62C16.95 15.68 16.97 15.74 16.98 15.8C16.99 15.87 17 15.94 17 16C17 16.26 16.89 16.52 16.71 16.71Z"
                                              fill="url(#paint1_linear_3096_452)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_452" x1="5.54032" y1="1.70776"
                                                  x2="19.0943" y2="9.50112" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#5786FF" />
                                                  <stop offset="1" stop-color="#2D68FF" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_3096_452" x1="2.43011" y1="10.6207"
                                                  x2="21.5878" y2="22.6561" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#5786FF" />
                                                  <stop offset="1" stop-color="#2D68FF" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="body-1">Your Password Changed!</div>
                                          <div class="body-4">1 Day Ago</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Your password is successfully changed. Now you can login with your new
                                          password.
                                      </p>
                                  </div>


                              </a>
                          </li>
                          <li>
                              <a href="#" class="item">
                                  <div class="box-icon w-48 primary round">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M20.97 16.08C20.73 18.75 18.8 20.5 16 20.5H7C4.24 20.5 2 18.26 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.51 16.75 3.55C19.14 3.83 20.76 5.5 20.97 7.92C21 8.21 20.76 8.45 20.47 8.45H18.92C17.96 8.45 17.07 8.82 16.43 9.48C15.67 10.22 15.29 11.26 15.38 12.3C15.54 14.12 17.14 15.55 19.04 15.55H20.47C20.76 15.55 21 15.79 20.97 16.08Z"
                                              fill="url(#paint0_linear_3096_4786)" />
                                          <path
                                              d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z"
                                              fill="url(#paint1_linear_3096_4786)" />
                                          <defs>
                                              <linearGradient id="paint0_linear_3096_4786" x1="20.9725" y1="20.5"
                                                  x2="-1.18128" y2="13.3314" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#7F2DFF" />
                                                  <stop offset="1" stop-color="#9958FF" />
                                              </linearGradient>
                                              <linearGradient id="paint1_linear_3096_4786" x1="22.0002" y1="14.0502"
                                                  x2="16.1532" y2="11.9294" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#7F2DFF" />
                                                  <stop offset="1" stop-color="#9958FF" />
                                              </linearGradient>
                                          </defs>
                                      </svg>
                                  </div>
                                  <div class="content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="body-1">Wallet Connected!</div>
                                          <div class="body-4">1 week Ago</div>
                                      </div>
                                      <p class="mt-8 body-5">
                                          Your wallet is connected to Ossea. Enjoy our services and cryptocurrencies.
                                      </p>
                                  </div>


                              </a>
                          </li>

                  </div>
                  <div class="tab-pane fade" id="NFTs" role="tabpanel">
                      <ul class="mt-24 list-view check-list">
                          <li class="item active">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-1.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #105</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.624</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">24 seconds ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                          <li class="item">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-2.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #103</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.836</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">15 minutes ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                          <li class="item">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-3.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #107</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.982</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">22 minutes ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                          <li class="item">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-4.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #102</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.476</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">40 minutes ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                          <li class="item">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-5.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #112</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.629</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">2 hours ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                          <li class="item">
                              <a href="javascript:void(0);">
                                  <div class="avatar round avt-48">
                                      <img src="images/avt/nft-logo-6.png" alt="">
                                  </div>
                                  <div class="content d-flex justify-content-between">
                                      <div class="content-left">
                                          <span class="body-3 text-dark-2">Billionaire Club</span>
                                          <p class="body-1 mt-2">Exclusive Ape #101</p>
                                          <span class="d-block text-dark-2 mt-2 button-3">+more</span>
                                      </div>
                                      <div class="content-right text-end">
                                          <span class="body-3 text-dark-2">Sale</span>
                                          <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M4.60008 6.06675L7.78005 4.65341C7.92005 4.59341 8.08007 4.59341 8.2134 4.65341L11.3934 6.06675C11.6734 6.19341 11.9334 5.85341 11.7401 5.61341L8.40672 1.54008C8.18005 1.26008 7.80673 1.26008 7.58006 1.54008L4.24673 5.61341C4.06006 5.85341 4.32008 6.19341 4.60008 6.06675Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M4.60004 9.93366L7.78669 11.347C7.92669 11.407 8.08671 11.407 8.22004 11.347L11.4067 9.93366C11.6867 9.807 11.9467 10.147 11.7534 10.387L8.42003 14.4603C8.19337 14.7403 7.82004 14.7403 7.59337 14.4603L4.26004 10.387C4.06004 10.147 4.31338 9.807 4.60004 9.93366Z"
                                                      fill="#1A1528" />
                                                  <path
                                                      d="M7.85338 6.32602L5.10004 7.69935C4.85337 7.81935 4.85337 8.17268 5.10004 8.29268L7.85338 9.66602C7.94671 9.71268 8.06001 9.71268 8.15334 9.66602L10.9067 8.29268C11.1533 8.17268 11.1533 7.81935 10.9067 7.69935L8.15334 6.32602C8.05334 6.27935 7.94671 6.27935 7.85338 6.32602Z"
                                                      fill="#1A1528" />
                                              </svg>
                                              <span class="button-2">0.556</span>
                                          </div>
                                          <span class="mt-2 d-block body-4 text-dark-2">2 hours ago</span>
                                      </div>
                                  </div>


                              </a>
                          </li>
                      </ul>
                  </div>

              </div>

          </div>
      </div>
  </div>

  <!-- sidebar -->
  <div class="modal fade modalLeft" id="sidebar">
      <div class="modal-dialog" role="document">
          <div class="modal-content modal-sidebar">
              <div class="sidebar-header">
                  <a href="index.html" class="sidebar-logo">
                      <img src="images/logo/logo-1.png" alt="img">
                  </a>
                  <p>Enfro - NFT Mobile App </p>
              </div>
              <div class="sidebar-content">
                  <div class="d-flex gap-10 align-items-center pb-20 line-bt">
                      <div class="avatar avt-40">
                          <img src="images/avt/avt10.png" alt="img">
                      </div>
                      <div class="content-right">
                          <p class="text-1">Good morning</p>
                          <h6 class="fw-7">Beacon_NFT</h6>
                      </div>
                  </div>
                  <ul class="pt-20 pb-20">
                      <li class="text-sm-start text-uppercase fw-7 text-dark">Main menu</li>
                      <li class="mt-18 sub-menu" id="accordionExample">
                          <a href="index.html" class="nav-link-item">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 20 20" fill="none">
                                  <path
                                      d="M7.62043 17.3185V14.7628C7.62042 14.1152 8.14704 13.589 8.79935 13.5849H11.1945C11.8497 13.5849 12.3809 14.1123 12.3809 14.7628V17.3111C12.3809 17.8728 12.8373 18.3293 13.4031 18.3334H15.0372C15.8003 18.3354 16.5329 18.0357 17.0733 17.5007C17.6136 16.9656 17.9173 16.239 17.9173 15.4813V8.22162C17.9173 7.60957 17.644 7.02901 17.1712 6.63633L11.6198 2.22864C10.6494 1.45768 9.26346 1.48259 8.32181 2.2879L2.88983 6.63633C2.3946 7.01743 2.09861 7.59972 2.08398 8.22162V15.4739C2.08398 17.0532 3.37347 18.3334 4.96413 18.3334H6.56089C6.83329 18.3354 7.09522 18.2293 7.28855 18.0388C7.48187 17.8482 7.59059 17.589 7.59058 17.3185H7.62043Z"
                                      fill="#D3D5DA" />
                              </svg>
                              <span>Home</span>
                          </a>
                        

                      </li>
                      <li class="mt-16">
                          <a href="javascript:void(0);" class="nav-link-item btn-choose-page">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 20 20" fill="none">
                                  <path opacity="0.4"
                                      d="M15.6734 7.51758C15.2971 7.51758 14.7987 7.50925 14.1782 7.50925C12.6649 7.50925 11.4206 6.25675 11.4206 4.72925V2.04925C11.4206 1.83841 11.2523 1.66675 11.0436 1.66675H6.6357C4.57865 1.66675 2.91602 3.35508 2.91602 5.42425V14.4034C2.91602 16.5742 4.65787 18.3334 6.80733 18.3334H13.3712C15.4209 18.3334 17.0827 16.6559 17.0827 14.5851V7.89258C17.0827 7.68091 16.9152 7.51008 16.7056 7.51091C16.3533 7.51341 15.9308 7.51758 15.6734 7.51758Z"
                                      fill="#D3D5DA" />
                                  <path opacity="0.4"
                                      d="M13.4029 2.13947C13.1538 1.88031 12.7188 2.05864 12.7188 2.41781V4.61531C12.7188 5.53697 13.4779 6.29531 14.3996 6.29531C14.9804 6.30197 15.7871 6.30364 16.4721 6.30197C16.8229 6.30114 17.0013 5.88197 16.7579 5.62864C15.8788 4.71447 14.3046 3.07614 13.4029 2.13947Z"
                                      fill="#D3D5DA" />
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7.47742 9.48986H10.2983C10.6408 9.48986 10.9191 9.21236 10.9191 8.86986C10.9191 8.52736 10.6408 8.24902 10.2983 8.24902H7.47742C7.13492 8.24902 6.85742 8.52736 6.85742 8.86986C6.85742 9.21236 7.13492 9.48986 7.47742 9.48986ZM7.47751 13.6517H12.0142C12.3567 13.6517 12.635 13.3742 12.635 13.0317C12.635 12.6892 12.3567 12.4109 12.0142 12.4109H7.47751C7.13501 12.4109 6.85751 12.6892 6.85751 13.0317C6.85751 13.3742 7.13501 13.6517 7.47751 13.6517Z"
                                      fill="#D3D5DA" />
                              </svg>
                              <span>Pages</span>
                          </a>
                      </li>
                      <li class="mt-16">
                          <a href="javascript:void(0);" class="nav-link-item btn-choose-component">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 20 20" fill="none">
                                  <path opacity="0.4"
                                      d="M13.3947 1.66675H16.2164C17.3849 1.66675 18.3318 2.62162 18.3318 3.80005V6.64552C18.3318 7.82395 17.3849 8.77882 16.2164 8.77882H13.3947C12.2262 8.77882 11.2793 7.82395 11.2793 6.64552V3.80005C11.2793 2.62162 12.2262 1.66675 13.3947 1.66675Z"
                                      fill="#D3D5DA" />
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.78145 1.66675H6.60309C7.77165 1.66675 8.71853 2.62162 8.71853 3.80005V6.64552C8.71853 7.82395 7.77165 8.77882 6.60309 8.77882H3.78145C2.6129 8.77882 1.66602 7.82395 1.66602 6.64552V3.80005C1.66602 2.62162 2.6129 1.66675 3.78145 1.66675ZM3.78145 11.2213H6.60309C7.77165 11.2213 8.71853 12.1762 8.71853 13.3546V16.2001C8.71853 17.3777 7.77165 18.3334 6.60309 18.3334H3.78145C2.6129 18.3334 1.66602 17.3777 1.66602 16.2001V13.3546C1.66602 12.1762 2.6129 11.2213 3.78145 11.2213ZM16.2172 11.2213H13.3956C12.227 11.2213 11.2802 12.1762 11.2802 13.3546V16.2001C11.2802 17.3777 12.227 18.3334 13.3956 18.3334H16.2172C17.3858 18.3334 18.3327 17.3777 18.3327 16.2001V13.3546C18.3327 12.1762 17.3858 11.2213 16.2172 11.2213Z"
                                      fill="#D3D5DA" />
                              </svg>
                              <span>Components</span>
                          </a>
                      </li>

                      
                      
                      <li class="mt-16">
                          <a href="http://127.0.0.1:8000/logout" class="nav-link-item not-link">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                  viewBox="0 0 20 20" fill="none">
                                  <path opacity="0.4"
                                      d="M1.66602 5.37258C1.66602 3.33008 3.35788 1.66675 5.43646 1.66675H9.57072C11.6451 1.66675 13.3327 3.32508 13.3327 5.36425V14.6276C13.3327 16.6709 11.6408 18.3334 9.56139 18.3334H5.42883C3.35364 18.3334 1.66602 16.6751 1.66602 14.6359V13.8526V5.37258Z"
                                      fill="#D3D5DA" />
                                  <path
                                      d="M18.149 9.54579L15.7775 7.12162C15.5324 6.87162 15.138 6.87162 14.8937 7.12329C14.6502 7.37495 14.651 7.78079 14.8953 8.03079L16.1947 9.35828H14.9489H7.95696C7.61203 9.35828 7.33203 9.64579 7.33203 9.99995C7.33203 10.355 7.61203 10.6416 7.95696 10.6416H16.1947L14.8953 11.9691C14.651 12.2191 14.6502 12.625 14.8937 12.8766C15.0162 13.0025 15.1761 13.0658 15.3368 13.0658C15.4959 13.0658 15.6558 13.0025 15.7775 12.8783L18.149 10.455C18.2667 10.3341 18.3333 10.1708 18.3333 9.99995C18.3333 9.82995 18.2667 9.66662 18.149 9.54579Z"
                                      fill="#D3D5DA" />
                              </svg>
                              <span>Logout</span>
                          </a>
                      </li>
                  </ul>
                  <ul class="pt-20">
                      <li class="text-sm-start text-uppercase fw-7 text-2">Setting</li>

                      <li class="mt-16">
                          <div class="nav-mode">
                              <label for="switchCheckTheme" class="flex-grow-1 text-dark" >Dark mode</label>
                              <input class="tf-switch-check toggle-theme lg" id="switchCheckTheme" type="checkbox">
                          </div>
                      </li>
                  </ul>
              </div>


          </div>
      </div>
  </div>

  <!-- modal Page -->
  <div class="modal fade modalLeft" id="modalPage">
      <div class="modal-dialog" role="document">
          <div class="modal-content modal-second">
              <div class="header line-bt">
                  <div class="left" data-bs-dismiss="modal">
                      <a href="javascript:void(0);" class="icon"><i class="icon-arrow-right"></i></a>
                  </div>
                  <h4>Pages</h4>
              </div>
              <div class="overflow-auto">
                  <div class="tf-container">
                      <ul>
                        
                          <li><a href="http://127.0.0.1:8000/logout" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Boarding</span>

                              </a></li>
                          <li><a href="wallet.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Wallet</span>

                              </a></li>
                          <li><a href="index.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Home</span>
                              </a></li>
                        
                          <li><a href="notification-empty.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Notification Empty</span>

                              </a></li>
                          <li><a href="explore-art.html"
                                  class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Explore Art</span>
                              </a></li>
                          <li><a href="most-popular.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Most Popular</span>

                              </a></li>
                          <li><a href="top-collection.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Top Collection</span>
                              </a></li>
                          <li><a href="top-creator.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Top Creator</span>
                              </a></li>
                          <li><a href="search-not-found.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Search Not Found</span>
                              </a></li>

                          <li><a href="search-result-collection.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Search Result Collection</span>
                              </a></li>
                          <li><a href="search-result-show-item.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Search Result show Item</span>
                              </a></li>
                          <li><a href="http://127.0.0.1:8000/user/statistics" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>statistics</span>
                              </a></li>
                          <li><a href="creator-details.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Creator Details</span>
                              </a></li>
                          <li><a href="nft-item-details.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>NFT Details</span>
                              </a></li>
                          <li><a href="make-offer.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Make An Offer</span>
                              </a></li>
                          <li><a href="approve-currency.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Approve Currency</span>
                              </a></li>
                          <li><a href="confirm-offer.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Confirm Offer</span>
                              </a></li>
                          <li><a href="create-new-item-blank.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Create new Item Blank</span>
                              </a></li>
                          <li><a href="http://127.0.0.1:8000/user/create-nft" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Create New Item Filled</span>
                              </a></li>
                          <li><a href="nft-details-unlisting.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Nft Detail Unlisting</span>
                              </a></li>
                          <li><a href="listing-nft-forsale.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>NFT Listing Forsale</span>
                              </a></li>
                          <li><a href="nft-details-listed.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>NFT Detail Listed</span>
                              </a></li>
                          
                          <li><a href="http://127.0.0.1:8000/user/more" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>More</span>
                              </a></li>
                          <li><a href="http://127.0.0.1:8000/user/setting" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Settings</span>
                              </a></li>
                        

                      </ul>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- modal component -->
  <div class="modal fade modalLeft" id="modalComponent">
      <div class="modal-dialog" role="document">
          <div class="modal-content modal-second">
              <div class="header line-bt">
                  <div class="left" data-bs-dismiss="modal">
                      <a href="javascript:void(0);" class="icon"><i class="icon-arrow-right"></i></a>
                  </div>
                  <h4>Components</h4>
              </div>
              <div class="overflow-auto">
                  <div class="tf-container">
                      <ul>
                          <li><a href="ui-alert.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Alert</span>
                              </a></li>
                          <li><a href="ui-avatar.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Avatar</span>
                              </a></li>
                          <li><a href="ui-button.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Button</span>
                              </a></li>
                          <li><a href="ui-radio.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Radio button</span>
                              </a></li>
                          <li><a href="ui-input.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Input</span>
                              </a></li>
                          <li><a href="ui-badge.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Badge</span>
                              </a></li>
                          <li><a href="ui-chart.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Charts</span>
                              </a></li>
                          <li><a href="ui-dropdown.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Dropdown</span>
                              </a></li>
                         
                          <li><a href="ui-modal.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Modal</span>
                              </a></li>

                          <li><a href="ui-progressbar.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Progressbar</span>
                              </a></li>

                          <li><a href="ui-typography.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Typography</span>
                              </a></li>

                          <li><a href="ui-switch.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Switch</span>
                              </a></li>
                          <li><a href="ui-stepper.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Stepper</span>
                              </a></li>
                          <li><a href="ui-spinner.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Spinner</span>
                              </a></li>
                          <li><a href="ui-rangle-slider.html" class="nav-link-item pt-16 pb-16 line-bt not-link">
                                  <span>Range slider</span>
                              </a></li>


                          <li><a href="ui-language.html" class="nav-link-item pt-16 pb-16 not-link">
                                  <span>Language</span>
                              </a></li>
                      </ul>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- filter -->
  <div class="offcanvas offcanvas-end full" id="filter">
      <div class="header fixed-top">
          <div class="left">
            <a href="javascript:void(0);" data-bs-dismiss="offcanvas" class="icon fs-12"><i class="icon-close2"></i></a>
          </div>
          <h3>Filter Options</h3>
      </div>
      <div class="overflow-auto app-content style-2">
          <div class="tf-container">
              <div class="wrap-slider-tab">
                  <div class="wrapper-tab-nft style-2">
                      <ul class="nav nav-tabs tab-1" role="tablist" >
                          <li class="nav-item active" role="presentation">   
                              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#status">Status</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#price">Price</button>
                          </li> 
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#quantity">Quantity</button>
                          </li> 
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chains">Chains</button>
                          </li> 
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#category">Category</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#currency">Currency</button>
                          </li> 
                      </ul>
                  </div>
                  <div class="tab-content mt-24">
                      <div class="tab-pane fade active show" id="status" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#status-accordion" aria-expanded="true" aria-controls="status-accordion">
                                  <h6 class="flex-grow-1">Status</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="status-accordion" class="accordion-collapse collapse show" aria-labelledby="status-accordion">
                                  <div class="card-body">
                                      <fieldset class="d-flex align-items-center gap-12">
                                          <input type="checkbox" class="tf-checkbox" id="check-status-1">
                                          <label for="check-status-1" class="button-2 text-dark-3">Buy Now</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-status-2" checked>
                                          <label for="check-status-2" class="button-2 text-dark-3">New</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-status-3" checked>
                                          <label for="check-status-3" class="button-2 text-dark-3">Has Offers</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-status-4">
                                          <label for="check-status-4" class="button-2 text-dark-3">On Auction</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-status-5">
                                          <label for="check-status-5" class="button-2 text-dark-3">Buy with Card</label>
                                      </fieldset>
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                      <div class="tab-pane fade" id="price" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#price-accordion" aria-expanded="true" aria-controls="price-accordion">
                                  <h6 class="flex-grow-1">Price</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="price-accordion" class="accordion-collapse collapse show" aria-labelledby="price-accordion">
                                  <div class="card-body">
                                      <div class="nice-select tf-select-v3 icon" tabindex="0"><span class="current">ETH</span>
                                          <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M5.74998 7.58294L9.72494 5.81628C9.89994 5.74128 10.1 5.74128 10.2666 5.81628L14.2416 7.58294C14.5916 7.74128 14.9166 7.31628 14.6749 7.01628L10.5083 1.92461C10.2249 1.57461 9.75829 1.57461 9.47495 1.92461L5.30829 7.01628C5.07495 7.31628 5.39998 7.74128 5.74998 7.58294Z" fill="#1A1528"/>
                                              <path d="M5.75006 12.4171L9.73336 14.1837C9.90836 14.2587 10.1084 14.2587 10.2751 14.1837L14.2584 12.4171C14.6084 12.2587 14.9334 12.6837 14.6917 12.9837L10.525 18.0754C10.2417 18.4254 9.77505 18.4254 9.49171 18.0754L5.32505 12.9837C5.07505 12.6837 5.39172 12.2587 5.75006 12.4171Z" fill="#1A1528"/>
                                              <path d="M9.81672 7.90898L6.37505 9.62565C6.06672 9.77565 6.06672 10.2173 6.37505 10.3673L9.81672 12.084C9.93339 12.1423 10.075 12.1423 10.1917 12.084L13.6333 10.3673C13.9417 10.2173 13.9417 9.77565 13.6333 9.62565L10.1917 7.90898C10.0667 7.85065 9.93339 7.85065 9.81672 7.90898Z" fill="#1A1528"/>
                                          </svg>
                                          <svg class="arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M16.6 7.45898L11.1667 12.8923C10.525 13.534 9.47503 13.534 8.83336 12.8923L3.40002 7.45898" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                                 
                                          <ul class="list">  
                                              <li data-value="last-month" class="option selected">ETH</li>                                                        
                                              <li data-value="last-week" class="option">Polygon</li>
                                              <li data-value="last-week" class="option">Klaytn</li>
                                              <li data-value="last-week" class="option">Solana</li>
                                              <li data-value="last-week" class="option">USDT</li>
                                              <li data-value="last-week" class="option">USDC</li>
                                          </ul>
                                      </div>
                                      <div class="mt-20 d-flex align-items-center gap-14">
                                          <input type="text" class="form-control" value="0.09">
                                          <span class="body-1">To</span>
                                          <input type="text" class="form-control" value="1.00">

                                      </div>
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                      <div class="tab-pane fade" id="quantity" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#quantity-accordion" aria-expanded="true" aria-controls="quantity-accordion">
                                  <h6 class="flex-grow-1">Quantity</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="quantity-accordion" class="accordion-collapse collapse show" aria-labelledby="quantity-accordion">
                                  <div class="card-body">
                                      <fieldset class="d-flex align-items-center gap-12">
                                          <input type="radio" name="radio2" class="tf-radio" id="check-qty1" checked>  
                                          <label for="check-qty1" class="button-2 text-dark-3">All Items</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="radio" name="radio2" class="tf-radio" id="check-qty2">  
                                          <label for="check-qty2" class="button-2 text-dark-3">Single Items</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="radio" name="radio2" class="tf-radio" id="check-qty3">  
                                          <label for="check-qty3" class="button-2 text-dark-3">Bundles</label>
                                      </fieldset>
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                      <div class="tab-pane fade" id="chains" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#chain-accordion" aria-expanded="true" aria-controls="chain-accordion">
                                  <h6 class="flex-grow-1">Chains</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="chain-accordion" class="accordion-collapse collapse show" aria-labelledby="chain-accordion">
                                  <div class="card-body">
                                      <fieldset class="d-flex align-items-center gap-12">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-1">
                                          <label for="check-chain-1" class="d-flex align-items-center gap-8">
                                              <svg class="icon-eth" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M5.17509 6.82484L8.75256 5.23484C8.91006 5.16734 9.09008 5.16734 9.24008 5.23484L12.8176 6.82484C13.1326 6.96734 13.4251 6.58484 13.2076 6.31484L9.45756 1.73234C9.20256 1.41734 8.78257 1.41734 8.52757 1.73234L4.77757 6.31484C4.56757 6.58484 4.86009 6.96734 5.17509 6.82484Z" fill="#1A1528"/>
                                                  <path d="M5.17493 11.1754L8.7599 12.7654C8.9174 12.8329 9.09742 12.8329 9.24742 12.7654L12.8324 11.1754C13.1474 11.0329 13.4399 11.4154 13.2224 11.6854L9.47241 16.2679C9.21741 16.5829 8.79742 16.5829 8.54242 16.2679L4.79242 11.6854C4.56742 11.4154 4.85243 11.0329 5.17493 11.1754Z" fill="#1A1528"/>
                                                  <path d="M8.83493 7.1175L5.73742 8.6625C5.45992 8.7975 5.45992 9.195 5.73742 9.33L8.83493 10.875C8.93993 10.9275 9.06739 10.9275 9.17239 10.875L12.2699 9.33C12.5474 9.195 12.5474 8.7975 12.2699 8.6625L9.17239 7.1175C9.05989 7.065 8.93993 7.065 8.83493 7.1175Z" fill="#1A1528"/>
                                              </svg>
                                              <span class="button-2 text-dark-3">Ethereum</span>
                                          </label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-2">
                                          <label for="check-chain-2" class="d-flex align-items-center gap-8">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M12.935 6.36462C12.6553 6.20483 12.2958 6.20483 11.9762 6.36462L9.73913 7.6829L8.22112 8.5218L6.02399 9.84008C5.74435 9.99987 5.38482 9.99987 5.06524 9.84008L3.34749 8.80144C3.06785 8.64165 2.86811 8.32206 2.86811 7.96253V5.96514C2.86811 5.64556 3.0279 5.32598 3.34749 5.12624L5.06524 4.12755C5.34488 3.96775 5.70441 3.96775 6.02399 4.12755L7.74174 5.16619C8.02138 5.32598 8.22112 5.64556 8.22112 6.00509V7.32337L9.73913 6.44452V5.08629C9.73913 4.76671 9.57934 4.44713 9.25976 4.24739L6.06394 2.36984C5.7843 2.21005 5.42477 2.21005 5.10519 2.36984L1.82947 4.28734C1.50989 4.44713 1.3501 4.76671 1.3501 5.08629V8.84138C1.3501 9.16097 1.50989 9.48055 1.82947 9.68029L5.06524 11.5578C5.34488 11.7176 5.70441 11.7176 6.02399 11.5578L8.22112 10.2795L9.73913 9.40065L11.9363 8.12232C12.2159 7.96253 12.5754 7.96253 12.895 8.12232L14.6128 9.12102C14.8924 9.28081 15.0921 9.60039 15.0921 9.95992V11.9573C15.0921 12.2769 14.9323 12.5965 14.6128 12.7962L12.935 13.7949C12.6553 13.9547 12.2958 13.9547 11.9762 13.7949L10.2585 12.7962C9.97882 12.6364 9.77908 12.3168 9.77908 11.9573V10.679L8.26106 11.5578V12.8761C8.26106 13.1957 8.42086 13.5153 8.74044 13.715L11.9762 15.5926C12.2558 15.7524 12.6154 15.7524 12.935 15.5926L16.1707 13.715C16.4504 13.5552 16.6501 13.2356 16.6501 12.8761V9.08107C16.6501 8.76149 16.4903 8.44191 16.1707 8.24217L12.935 6.36462Z" fill="#8247E5"/>
                                              </svg>
                                              <span class="button-2 text-dark-3">Polygon</span>   
                                          </label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-3" checked>
                                          <label for="check-chain-3" class="d-flex align-items-center gap-8">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.77788 8.65685L14.434 3.04119L9.22175 0.900391L4.05078 13.3839L8.77788 8.65685ZM14.9189 14.3527L9.38428 8.85855L14.9189 3.3644C17.8276 6.44964 17.8276 11.2675 14.9189 14.3527ZM3.52637 14.6353L8.98002 9.2221L14.4337 14.6353L8.98002 16.8976L3.52637 14.6353ZM3.08122 14.3527C1.6767 12.8688 0.895868 10.9022 0.899918 8.85858L8.49438 1.30381L3.08122 14.3527Z" fill="url(#paint0_linear_81_3936)"/>
                                                  <defs>
                                                  <linearGradient id="paint0_linear_81_3936" x1="17.1002" y1="0.90039" x2="0.900191" y2="17.1007" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#FF9000"/>
                                                  <stop offset="0.515625" stop-color="#FF3600"/>
                                                  <stop offset="1" stop-color="#780000"/>
                                                  </linearGradient>
                                                  </defs>
                                              </svg>
                                              <span class="button-2 text-dark-3">Klaytn</span>   
                                          </label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-4" checked>
                                          <label for="check-chain-4" class="d-flex align-items-center gap-8">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83586 3.29657C3.93203 3.20424 4.05897 3.15039 4.18976 3.15039H16.3993C16.6224 3.15039 16.734 3.41966 16.5762 3.57738L14.1643 5.98928C14.072 6.0816 13.9451 6.13545 13.8104 6.13545H1.60091C1.3778 6.13545 1.26625 5.86618 1.42396 5.70847L3.83586 3.29657ZM3.83586 12.3018C3.92818 12.2095 4.05513 12.1557 4.18976 12.1557H16.3993C16.6224 12.1557 16.734 12.4249 16.5762 12.5827L14.1643 14.9946C14.072 15.0869 13.9451 15.1407 13.8104 15.1407H1.60091C1.3778 15.1407 1.26625 14.8715 1.42396 14.7137L3.83586 12.3018ZM13.8104 7.62402C13.9451 7.62402 14.072 7.67788 14.1643 7.7702L16.5762 10.1821C16.734 10.3398 16.6224 10.6091 16.3993 10.6091H4.18976C4.05513 10.6091 3.92818 10.5552 3.83586 10.4629L1.42396 8.05101C1.26625 7.89329 1.3778 7.62402 1.60091 7.62402H13.8104Z" fill="url(#paint0_linear_81_3946)"/>
                                                  <defs>
                                                  <linearGradient id="paint0_linear_81_3946" x1="13.3738" y1="0.738838" x2="4.9238" y2="16.9239" gradientUnits="userSpaceOnUse">
                                                  <stop stop-color="#00FFA3"/>
                                                  <stop offset="1" stop-color="#DC1FFF"/>
                                                  </linearGradient>
                                                  </defs>
                                              </svg> 
                                              <span class="button-2 text-dark-3">Solana</span>   
                                          </label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-5" checked>
                                          <label for="check-chain-5" class="d-flex align-items-center gap-8">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.86597 2.31922L0.912047 8.52394C0.900806 8.54702 0.897244 8.57309 0.901881 8.59833C0.906519 8.62358 0.919112 8.64668 0.93782 8.66426L8.91566 16.309C8.93832 16.3307 8.9685 16.3428 8.9999 16.3428C9.0313 16.3428 9.06148 16.3307 9.08414 16.309L17.062 8.66474C17.0807 8.64716 17.0933 8.62406 17.0979 8.59881C17.1026 8.57356 17.099 8.54749 17.0878 8.52442L14.1338 2.31969C14.1243 2.29885 14.109 2.2812 14.0897 2.26885C14.0704 2.25649 14.0479 2.24995 14.025 2.25001H3.97575C3.95272 2.24972 3.93011 2.2561 3.91063 2.26838C3.89115 2.28066 3.87564 2.29832 3.86597 2.31922Z" fill="#50AF95"/>
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0246 9.16091C9.96731 9.1652 9.67139 9.18286 9.0113 9.18286C8.48629 9.18286 8.11353 9.16711 7.98275 9.16091C5.95381 9.07165 4.43938 8.71846 4.43938 8.29559C4.43938 7.87271 5.95381 7.51999 7.98275 7.42931V8.80915C8.11544 8.81869 8.49536 8.84112 9.02037 8.84112C9.65039 8.84112 9.96588 8.81487 10.0227 8.80962V7.43027C12.0473 7.52047 13.5584 7.87366 13.5584 8.29559C13.5584 8.71751 12.0478 9.0707 10.0227 9.16043L10.0246 9.16091ZM10.0246 7.28756V6.05282H12.8501V4.16992H5.15722V6.05282H7.98228V7.28708C5.68605 7.39256 3.95923 7.84741 3.95923 8.39247C3.95923 8.93754 5.68605 9.39191 7.98228 9.49787V13.4546H10.0241V9.49644C12.3151 9.39096 14.039 8.93658 14.039 8.392C14.039 7.84741 12.3165 7.39304 10.0241 7.28708L10.0246 7.28756Z" fill="white"/>
                                              </svg>
                                              <span class="button-2 text-dark-3">USDT</span>   
                                          </label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-chain-6">
                                          <label for="check-chain-6" class="d-flex align-items-center gap-8">
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <g clip-path="url(#clip0_81_3966)">
                                                  <path d="M8.9999 17.1004C13.4887 17.1004 17.0999 13.4892 17.0999 9.00039C17.0999 4.51161 13.4887 0.900391 8.9999 0.900391C4.51113 0.900391 0.899902 4.51161 0.899902 9.00039C0.899902 13.4892 4.51113 17.1004 8.9999 17.1004Z" fill="#2775CA"/>
                                                  <path d="M11.2276 10.2826C11.2276 9.10135 10.5188 8.69635 9.1013 8.52763C8.0888 8.3926 7.8863 8.12263 7.8863 7.65008C7.8863 7.17752 8.22383 6.87385 8.8988 6.87385C9.5063 6.87385 9.84383 7.07635 10.0126 7.5826C10.0463 7.68385 10.1476 7.75133 10.2488 7.75133H10.7888C10.9238 7.75133 11.0251 7.65008 11.0251 7.51513V7.48135C10.89 6.73883 10.2825 6.1651 9.5063 6.09763V5.28763C9.5063 5.15261 9.40505 5.05136 9.23633 5.01758H8.73008C8.59505 5.01758 8.4938 5.11883 8.46002 5.28763V6.06386C7.44752 6.19888 6.80633 6.87385 6.80633 7.71763C6.80633 8.83138 7.4813 9.27008 8.8988 9.43888C9.84383 9.6076 10.1476 9.8101 10.1476 10.3501C10.1476 10.8902 9.67502 11.2614 9.03383 11.2614C8.15627 11.2614 7.85252 10.8901 7.75127 10.3838C7.71758 10.2489 7.61633 10.1813 7.51508 10.1813H6.94127C6.80633 10.1813 6.70508 10.2826 6.70508 10.4176V10.4514C6.84002 11.2951 7.38005 11.9026 8.4938 12.0714V12.8814C8.4938 13.0163 8.59505 13.1176 8.76377 13.1514H9.27002C9.40505 13.1514 9.5063 13.0501 9.54008 12.8814V12.0714C10.5526 11.9026 11.2276 11.1938 11.2276 10.2826Z" fill="white"/>
                                                  <path d="M7.27843 13.8264C4.64593 12.8814 3.2959 9.9452 4.27471 7.34639C4.78096 5.92889 5.89471 4.84892 7.27843 4.34267C7.41346 4.2752 7.48093 4.17395 7.48093 4.00514V3.53267C7.48093 3.39764 7.41346 3.29639 7.27843 3.2627C7.24465 3.2627 7.17718 3.2627 7.1434 3.29639C3.93718 4.30889 2.18215 7.7177 3.19465 10.9239C3.80215 12.8139 5.25343 14.2652 7.1434 14.8727C7.27843 14.9401 7.41346 14.8727 7.44715 14.7376C7.48093 14.7039 7.48093 14.6702 7.48093 14.6027V14.1301C7.48093 14.0289 7.37968 13.8939 7.27843 13.8264ZM10.856 3.29639C10.7209 3.22892 10.5859 3.29639 10.5522 3.43142C10.5184 3.4652 10.5184 3.49889 10.5184 3.56645V4.03892C10.5184 4.17395 10.6197 4.30889 10.7209 4.37645C13.3534 5.32139 14.7035 8.25764 13.7247 10.8564C13.2184 12.2739 12.1047 13.3539 10.7209 13.8602C10.5859 13.9276 10.5184 14.0289 10.5184 14.1977V14.6702C10.5184 14.8052 10.5859 14.9064 10.7209 14.9401C10.7547 14.9401 10.8222 14.9401 10.856 14.9064C14.0622 13.8939 15.8172 10.4851 14.8047 7.27892C14.1972 5.35517 12.7122 3.90389 10.856 3.29639Z" fill="white"/>
                                                  </g>
                                                  <defs>
                                                  <clipPath id="clip0_81_3966">
                                                  <rect width="18" height="18" fill="white"/>
                                                  </clipPath>
                                                  </defs>
                                              </svg> 
                                              <span class="button-2 text-dark-3">USDC</span>   
                                          </label>
                                      </fieldset>
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                      <div class="tab-pane fade" id="category" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#category-accordion" aria-expanded="true" aria-controls="category-accordion">
                                  <h6 class="flex-grow-1">Category</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="category-accordion" class="accordion-collapse collapse show" aria-labelledby="category-accordion">
                                  <div class="card-body">
                                      <fieldset class="d-flex align-items-center gap-12">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-1" checked>
                                          <label for="check-category-1" class="button-2 text-dark-3">Art</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-2" checked>
                                          <label for="check-category-2" class="button-2 text-dark-3">Collectibles</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-3">
                                          <label for="check-category-3" class="button-2 text-dark-3">Domain Names</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-4">
                                          <label for="check-category-4" class="button-2 text-dark-3">Music</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-5">
                                          <label for="check-category-5" class="button-2 text-dark-3">Photography</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-6" checked>
                                          <label for="check-category-6" class="button-2 text-dark-3">Sports</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-7">
                                          <label for="check-category-7" class="button-2 text-dark-3">Trading Cards</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-8" checked>
                                          <label for="check-category-8" class="button-2 text-dark-3">Utility</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-category-9">
                                          <label for="check-category-9" class="button-2 text-dark-3">Virtual Worlds</label>
                                      </fieldset>
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                      <div class="tab-pane fade" id="currency" role="tabpanel">
                          <div class="card-nft-1">
                              <div class="card-header gap-12" data-bs-toggle="collapse" data-bs-target="#currency-accordion" aria-expanded="true" aria-controls="currency-accordion">
                                  <h6 class="flex-grow-1">Currency</h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M19.9201 8.94922L13.4001 15.4692C12.6301 16.2392 11.3701 16.2392 10.6001 15.4692L4.08008 8.94922" stroke="#1A1528" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>    
                              </div>
                              <div id="currency-accordion" class="accordion-collapse collapse show" aria-labelledby="currency-accordion">
                                  <div class="card-body">
                                      <fieldset class="d-flex align-items-center gap-12">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-1" checked>
                                          <label for="check-currency-1" class="button-2 text-dark-3">ETH</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-2" checked>
                                          <label for="check-currency-2" class="button-2 text-dark-3">WETH</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-3" checked>
                                          <label for="check-currency-3" class="button-2 text-dark-3">APE</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-4">
                                          <label for="check-currency-4" class="button-2 text-dark-3">ASH</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-5">
                                          <label for="check-currency-5" class="button-2 text-dark-3">BAT</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-6" checked>
                                          <label for="check-currency-6" class="button-2 text-dark-3">CUBE</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-7">
                                          <label for="check-currency-7" class="button-2 text-dark-3">DAI</label>
                                      </fieldset>
                                      <fieldset class="d-flex align-items-center gap-12 mt-20">
                                          <input type="checkbox" class="tf-checkbox" id="check-currency-8">
                                          <label for="check-currency-8" class="button-2 text-dark-3">GALA</label>
                                      </fieldset>
                                      
                                  </div>
                              </div>
                                   
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div> 
      <div class="btn-fixed style-2">
          <div class="grid-2 gap-15">
              <a href="#" class="tf-btn disabled-primary btn-reset">RESET</a>
              <a href="search-result-collection.html" class="tf-btn primary">APPLY</a>
          </div>
      </div>     
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all tab headers and the container that moves in the carousel effect
    const tabs = document.querySelectorAll('.van-tab');
    const contentPanels = document.querySelectorAll('.van-swipe-item');
    const container = document.querySelector('.van-swipe__track');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs and hide all content panels
            tabs.forEach(t => {
                t.classList.remove('van-tab--active');
                t.setAttribute('aria-selected', 'false'); // Updating ARIA for accessibility
            });
            contentPanels.forEach(panel => {
                panel.style.display = 'none';
                panel.setAttribute('aria-hidden', 'true'); // Make sure hidden panels are not focusable
            });

            // Set the clicked tab as active and update ARIA
            tab.classList.add('van-tab--active');
            tab.setAttribute('aria-selected', 'true');

            // Display the corresponding content panel and update ARIA
            const panelToShow = contentPanels[index];
            panelToShow.style.display = 'block';
            panelToShow.setAttribute('aria-hidden', 'false');

            // Calculate the offset to slide the container
            const offset = index * 500; // Change 500 to match the actual width of your content panels if different
            container.style.transform = `translateX(-${offset}px)`;
            container.style.transitionDuration = '500ms'; // Smooth transition for the sliding effect
        });
    });

    // Optionally set the first tab as active on load
    tabs[0].classList.add('van-tab--active');
    tabs[0].setAttribute('aria-selected', 'true');
    contentPanels[0].style.display = 'block';
    contentPanels[0].setAttribute('aria-hidden', 'false');
    container.style.transform = 'translateX(0px)'; // Ensure starting position is correct
});

document.addEventListener('DOMContentLoaded', function() {
    // Select all tab elements and the container for tab content
    const tabs = document.querySelectorAll('.van-tab');
    const contentPanels = document.querySelectorAll('.van-swipe-item');
    const tabContainer = document.querySelector('.van-tabs__nav');
    const tabHighlight = document.querySelector('.van-tabs__line'); // Line under the tab

    function activateTab(tab) {
        // Deactivate all tabs and hide all content panels
        tabs.forEach((t, index) => {
            t.classList.remove('van-tab--active');
            t.setAttribute('aria-selected', 'false');
            contentPanels[index].style.display = 'none';
        });

        // Find index of the clicked tab
        const tabIndex = Array.from(tabs).indexOf(tab);

        // Activate the clicked tab and show corresponding content panel
        tab.classList.add('van-tab--active');
        tab.setAttribute('aria-selected', 'true');
        contentPanels[tabIndex].style.display = 'block';

        // Move the highlight line under the active tab
        const tabWidth = tab.offsetWidth;
        const tabOffset = tab.offsetLeft;
        tabHighlight.style.transform = `translateX(${tabOffset}px) scaleX(${tabWidth / 100})`;
        tabHighlight.style.transitionDuration = '1.9s';

        // Optional: Adjust the tab container scroll to ensure the active tab is visible
        tabContainer.scrollLeft = tabOffset - tabContainer.offsetWidth / 2 + tabWidth / 2;
    }

    // Add click event listeners to all tabs
    tabs.forEach(tab => {
        tab.addEventListener('click', () => activateTab(tab));
    });

    // Optionally activate the first tab on page load
    if (tabs.length > 0) activateTab(tabs[0]);
});


</script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/lazysize.min.js"></script>
  <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/carousel.js"></script>
  <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
  <script type="text/javascript" src="js/count-down.js"></script>
  <script type="text/javascript" src="js/multiple-modal.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>		<!--end page-wrapper-->
	