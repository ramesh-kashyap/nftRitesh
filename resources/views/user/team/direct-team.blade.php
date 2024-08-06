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
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/nestnft.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/nestnft.png" />

    <title>Team</title>
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

    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn"><i class="icon-arrow-right"></i></a>
        </div>
        <h3>Team</h3>
    </div>
    <div class="app-content">
        <div class="px-24">
            <div class="tab-slide wrapper-tab">
                <ul class="nav nav-tabs tab-1" role="tablist">
                    <li class="item-slide-effect"></li>
                    <li class="nav-item active" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" id="activeTab"
                            onclick="location.href='{{ route('user.referral-team', ['search' => 'Active']) }}'">Active</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" id="pendingTab"
                            onclick="location.href='{{ route('user.referral-team', ['search' => 'Pending']) }}'">Pending</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="ranking">
                <!-- Content will be loaded here -->
            </div>
        </div>
        <div class="tab-content mt-24">

            <div class="tab-pane fade active show" id="ranking" role="tabpanel">
                <div class="px-24 card-layout">
                    <div class="swiper tf-sw sw-auto sw-lr" data-preview="auto" data-space="16"
                        style="height: fit-content;">
                        <div class="swiper-wrapper" style="justify-content: end;">
                            <div class="swiper-slide">
                                <a href="#categories" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom"
                                    class="category-select"><span>Team</span> <i class="icon icon-left-arr"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="px-16 mt-24">

                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                    <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                    @foreach ($direct_team as $value)

                    <?php 
            $myLevelteam = my_level_team($value->id);
            $teamRecharge=my_level_team($value->id);
            $todayIncome=todayIncome($value->id);
            ?>



                    <ul class="mt-24 list-view-v6 check-list">
                        <li>
                            <a href="javascript:void(0);" class="item box-accordion d-block active">
                                <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-1" aria-expanded="true"
                                    aria-controls="accordion-1">
                                    <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                        <div class="avatar round avt-48">
                                            <img src="images/50.png" alt="">
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <p class="button-1">{{ $value->username }}</p>
                                                @if($value->active_status == 'Active')
                                                <span class="mt-2 d-block body-4 text-dark-2" style="color: green;">
                                                    {{ $value->active_status }}
                                                </span>
                                                @elseif($value->active_status == 'Pending')
                                                <span class="mt-2 d-block body-4 text-dark-2" style="color: red;">
                                                    {{ $value->active_status }}
                                                </span>
                                                @else
                                                <span class="mt-2 d-block body-4 text-dark-2">
                                                    {{ $value->active_status }}
                                                </span>
                                                @endif
                                                <span class="less text-primary mt-2 button-3">User Details</span>

                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>

                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">

                                                    <span
                                                        class="button-2">{{ ($value->investment->sum('amount'))?$value->investment->sum('amount'):0 }}
                                                        USDT</span>
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">Total Volume</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-1" class="accordion-collapse collapse" aria-labelledby="accordion-1">
                                    <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                        <li>
                                            <div class="body-5" style="font-weight: bold;">Direct Team</div>
                                            <div class="d-flex gap-4 align-items-center">

                                                <span class="button-3">{{ $value->direct_team }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="body-5" style="font-weight: bold;">Today Income</div>
                                            <span class="button-3 text-green">{{$todayIncome}}</span>
                                        </li>
                                        <li>
                                            <div class="body-5" style="font-weight: bold;">Total Team</div>
                                            <span class="button-3">{{$myLevelteam}}</span>
                                        </li>
                                        <li>
                                            <div class="body-5" style="font-weight: bold;">Deposit Active</div>
                                            <span class="button-3">{{$teamRecharge}}</span>
                                        </li>

                                    </ul>
                                </div>
                            </a>
                        </li>


                    </ul>
                    @endforeach
                    <?php }?>

                    {{ $direct_team->withQueryString()->links() }}



                </div>

            </div>

        </div>
    </div>

    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li>
                <a href="{{route('user.dashboard')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02 2.84016L3.63 7.04016C2.73 7.74016 2 9.23016 2 10.3602V17.7702C2 20.0902 3.89 21.9902 6.21 21.9902H17.79C20.11 21.9902 22 20.0902 22 17.7802V10.5002C22 9.29016 21.19 7.74016 20.2 7.05016L14.02 2.72016C12.62 1.74016 10.37 1.79016 9.02 2.84016Z"
                            stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 17.9902V14.9902" stroke="#1A1528" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </li>
            <li class="active"><a href="{{route('user.statistics')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM17.26 9.96L14.95 12.94C14.66 13.31 14.25 13.55 13.78 13.6C13.31 13.66 12.85 13.53 12.48 13.24L10.65 11.8C10.58 11.74 10.5 11.74 10.46 11.75C10.42 11.75 10.35 11.77 10.29 11.85L7.91 14.94C7.76 15.13 7.54 15.23 7.32 15.23C7.16 15.23 7 15.18 6.86 15.07C6.53 14.82 6.47 14.35 6.72 14.02L9.1 10.93C9.39 10.56 9.8 10.32 10.27 10.26C10.73 10.2 11.2 10.33 11.57 10.62L13.4 12.06C13.47 12.12 13.54 12.12 13.59 12.11C13.63 12.11 13.7 12.09 13.76 12.01L16.07 9.03C16.32 8.7 16.8 8.64 17.12 8.9C17.45 9.17 17.51 9.64 17.26 9.96Z"
                            fill="#7F52FF" />
                    </svg>
                    <span class="text">statistics</span>
                </a>
            </li>
            <li class="action-add-wallet"><a href="{{route('user.createNft')}}"><i class="icon-plus"></i></a></li>
            <li><a href="{{route('user.myWallet')}}">
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
            <li><a href="{{route('user.more')}}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                            <path
                                d="M12.1596 10.87C12.0596 10.86 11.9396 10.86 11.8296 10.87C9.44957 10.79 7.55957 8.84 7.55957 6.44C7.55957 3.99 9.53957 2 11.9996 2C14.4496 2 16.4396 3.99 16.4396 6.44C16.4296 8.84 14.5396 10.79 12.1596 10.87Z"
                                stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.15973 14.56C4.73973 16.18 4.73973 18.82 7.15973 20.43C9.90973 22.27 14.4197 22.27 17.1697 20.43C19.5897 18.81 19.5897 16.17 17.1697 14.56C14.4297 12.73 9.91973 12.73 7.15973 14.56Z"
                                stroke="#1A1528" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                    </svg>
                </a>
            </li>
        </ul>

    </div>

    <div class="offcanvas offcanvas-bottom" id="categories">
        @for ($l=1;$l<=3;$l++) <div class="offcanvas-body">
            <fieldset class="d-flex gap-12 pt-0 py-20 line">
                <?php echo  (Session::get('selected_level')==$l)?"":""?>
                <a style="color: <?php echo  (Session::get('selected_level')==$l)?"#":"#000"?>"
                    href="{{route('user.referral-team') }}?selected_level={{$l}}">Lvl {{$l}}</a>
            </fieldset>

    </div>
    @endfor
    </div>




    <div class="offcanvas offcanvas-bottom" id="sale">
        <div class="offcanvas-body">
            <div class="grid-2 gap-16">
                <a href="#" class="tf-btn primary btn-sm">Sales</a>
                <a href="#" class="tf-btn outline-btn-primary btn-sm">Listings</a>
                <a href="#" class="tf-btn outline-btn-primary btn-sm">Bids</a>
                <a href="#" class="tf-btn primary btn-sm">Transfers</a>
            </div>
            <a href="#" data-bs-dismiss="offcanvas" class="mt-32 tf-btn primary btn-lg">Apply</a>
        </div>
    </div>

    <script>
        
        
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const searchParam = urlParams.get('search');
        
            if (searchParam === 'Pending') {
                document.getElementById('pendingTab').classList.add('active');
                document.getElementById('activeTab').classList.remove('active');

            } else {
                document.getElementById('activeTab').classList.add('active');
            }
        });
        </script>
        

    <script>
        function filterStatus(status) {
            const items = document.querySelectorAll('.status-item');

            items.forEach(item => {
                if (status === 'All' || item.dataset.status === status) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Initially display all items
        filterStatus('All');

    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/countto.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>
