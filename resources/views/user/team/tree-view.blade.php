
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

    <title>statistics</title>
</head>

<style>
.center-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%; /* Adjust the height as needed */
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.center-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%; /* Adjust the height as needed */
    flex-wrap: wrap; /* Allows items to wrap to the next line on smaller screens */
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%; /* Default to full width for mobile */
    margin: 10px; /* Adjust as needed for spacing between boxes */
}

.category-select {
    background: #8052ff;
    color: #000;
    width: 100%; /* Default to full width for mobile */
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    text-decoration: none;
}

.level-text {
    margin-left: 0; /* Default to no margin for mobile */
}

/* Larger screen styles */
@media (min-width: 768px) {
    .swiper-slide {
        width: 300px; /* Set fixed width for larger screens */
    }

    .category-select {
        width: 300px; /* Set fixed width for larger screens */
        color: #000;
    }

    .level-text {
        margin-left: 100px; /* Add margin on larger screens */
    }
}


</style>
<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
            <svg width="172" height="49" viewBox="0 0 172 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="text" d="M53.3 9.94L53.56 9.68H58.56V14.08C58.56 14.64 58.5667 15.12 58.58 15.52C58.5933 15.92 58.6 16.3933 58.6 16.94V30.16C58.6 30.6 58.5933 31.0067 58.58 31.38C58.5667 31.74 58.56 32.1533 58.56 32.62V37.08H56.38C55.42 37.08 54.6667 36.7933 54.12 36.22C53.5733 35.6467 53.3 34.8667 53.3 33.88V9.94ZM67.98 21.04C68.0867 21.3733 68.16 21.7533 68.2 22.18C68.2533 22.5933 68.28 22.9467 68.28 23.24C68.28 23.5467 68.2533 23.9067 68.2 24.32C68.16 24.72 68.0867 25.0933 67.98 25.44H61.2C60.88 25.44 60.4467 25.44 59.9 25.44C59.3533 25.4267 58.7933 25.42 58.22 25.42C57.6467 25.4067 57.1533 25.3933 56.74 25.38V21.1C57.1533 21.0867 57.6467 21.08 58.22 21.08C58.7933 21.0667 59.3533 21.06 59.9 21.06C60.4467 21.0467 60.88 21.04 61.2 21.04H67.98ZM70.26 9.68C70.34 10.08 70.3867 10.46 70.4 10.82C70.4133 11.1667 70.42 11.4933 70.42 11.8C70.42 12.1067 70.3867 12.48 70.32 12.92C70.2533 13.36 70.1467 13.7867 70 14.2H61.2C60.88 14.2 60.4467 14.2 59.9 14.2C59.3533 14.1867 58.7933 14.1733 58.22 14.16C57.6467 14.1467 57.1533 14.1333 56.74 14.12V9.68H70.26ZM71.14 32.56C71.14 34.0933 70.9 35.2333 70.42 35.98C69.9533 36.7133 69.02 37.08 67.62 37.08H56.74V32.74C57.5 32.7 58.2333 32.66 58.94 32.62C59.66 32.58 60.4667 32.56 61.36 32.56H71.14ZM76.0934 9.76C76.5201 9.66666 77.0601 9.6 77.7134 9.56C78.3801 9.50667 78.9001 9.48 79.2734 9.48C79.6468 9.48 80.1268 9.49333 80.7134 9.52C81.3001 9.54666 81.8734 9.6 82.4334 9.68L81.0534 15.84L80.6734 15.94C80.7534 16.98 80.8201 18.1467 80.8734 19.44C80.9401 20.7333 80.9934 22.0333 81.0334 23.34C81.0734 24.6333 81.0934 25.8067 81.0934 26.86V37C80.6534 37.08 80.2201 37.1333 79.7934 37.16C79.3668 37.1867 78.9868 37.2 78.6534 37.2C78.3201 37.2 77.9134 37.1867 77.4334 37.16C76.9668 37.1333 76.5201 37.08 76.0934 37V9.76ZM83.2134 21.5C82.7334 20.4867 82.2934 19.5 81.8934 18.54C81.4934 17.58 81.1334 16.6933 80.8134 15.88L78.3134 12.96L82.4334 9.68L89.6934 25.16C90.2001 26.2667 90.6734 27.34 91.1134 28.38C91.5534 29.4067 91.9401 30.3133 92.2734 31.1L94.9734 33.98L90.5934 37L83.2134 21.5ZM96.9734 9.7V36.92C96.5468 37.0133 96.0001 37.08 95.3334 37.12C94.6801 37.1733 94.1468 37.2 93.7334 37.2C93.3334 37.2 92.8534 37.1867 92.2934 37.16C91.7334 37.1333 91.1668 37.08 90.5934 37L92.0134 31.14L92.4334 31.04C92.3401 29.88 92.2601 28.6267 92.1934 27.28C92.1268 25.9333 92.0801 24.6267 92.0534 23.36C92.0268 22.0933 92.0134 21 92.0134 20.08V12.74C92.0134 11.5533 92.2401 10.7133 92.6934 10.22C93.1601 9.71333 93.9201 9.46 94.9734 9.46H96.7134L96.9734 9.7ZM109.013 37C108.573 37.08 108.119 37.1333 107.653 37.16C107.199 37.1867 106.773 37.2 106.373 37.2C105.986 37.2 105.539 37.1867 105.033 37.16C104.539 37.1333 104.073 37.08 103.633 37V9.92L103.913 9.68H108.973V11.68C108.973 12.7467 108.979 13.8333 108.993 14.94C109.006 16.0333 109.013 17.0933 109.013 18.12V37ZM120.393 9.68C120.486 9.97333 120.553 10.3133 120.593 10.7C120.633 11.0867 120.653 11.44 120.653 11.76C120.653 12.64 120.406 13.2733 119.913 13.66C119.433 14.0467 118.706 14.24 117.733 14.24H112.293C111.253 14.24 110.286 14.2333 109.393 14.22C108.499 14.2067 107.639 14.1933 106.813 14.18V9.68H120.393ZM118.113 21.12C118.206 21.44 118.273 21.8133 118.313 22.24C118.366 22.6667 118.393 23.0267 118.393 23.32C118.393 23.6267 118.366 23.9933 118.313 24.42C118.273 24.8333 118.206 25.2067 118.113 25.54H110.213C109.679 25.54 109.113 25.5333 108.513 25.52C107.926 25.4933 107.413 25.48 106.973 25.48V21.18C107.413 21.1667 107.926 21.1533 108.513 21.14C109.113 21.1267 109.679 21.12 110.213 21.12H118.113ZM143.565 17.94C143.565 19.1933 143.325 20.3133 142.845 21.3C142.379 22.2867 141.765 23.1133 141.005 23.78C140.245 24.4467 139.439 24.9333 138.585 25.24C139.292 25.4933 139.885 25.94 140.365 26.58C140.859 27.2067 141.252 27.94 141.545 28.78L143.025 32.78C143.279 33.4867 143.552 34.0733 143.845 34.54C144.152 35.0067 144.505 35.4 144.905 35.72C144.559 36.1867 144.045 36.5733 143.365 36.88C142.699 37.1733 142.012 37.32 141.305 37.32C140.332 37.32 139.619 37.0533 139.165 36.52C138.712 35.9867 138.299 35.1933 137.925 34.14L136.225 29.38C135.945 28.58 135.545 27.9067 135.025 27.36C134.505 26.8 133.672 26.52 132.525 26.52H127.905V22.44C128.452 22.4133 129.105 22.3867 129.865 22.36C130.639 22.32 131.385 22.2933 132.105 22.28C132.825 22.2667 133.379 22.26 133.765 22.26C134.925 22.26 135.812 22.0533 136.425 21.64C137.039 21.2133 137.465 20.6733 137.705 20.02C137.945 19.3533 138.065 18.66 138.065 17.94C138.065 17.18 137.945 16.4733 137.705 15.82C137.465 15.1667 137.039 14.6333 136.425 14.22C135.812 13.8067 134.925 13.6 133.765 13.6C133.285 13.6 132.712 13.6 132.045 13.6C131.379 13.5867 130.725 13.5733 130.085 13.56V37C129.659 37.08 129.199 37.1333 128.705 37.16C128.225 37.1867 127.792 37.2 127.405 37.2C127.072 37.2 126.652 37.1867 126.145 37.16C125.639 37.1333 125.179 37.08 124.765 37V9.9L125.045 9.62C126.645 9.59333 128.199 9.56667 129.705 9.54C131.225 9.5 132.705 9.48 134.145 9.48C135.999 9.48 137.632 9.78667 139.045 10.4C140.459 11.0133 141.565 11.9467 142.365 13.2C143.165 14.4533 143.565 16.0333 143.565 17.94ZM152.554 23.32C152.554 24.4533 152.628 25.6067 152.774 26.78C152.921 27.9533 153.201 29.04 153.614 30.04C154.028 31.04 154.621 31.8467 155.394 32.46C156.181 33.0733 157.214 33.38 158.494 33.38C159.761 33.38 160.781 33.0733 161.554 32.46C162.341 31.8467 162.941 31.04 163.354 30.04C163.768 29.04 164.041 27.9533 164.174 26.78C164.321 25.6067 164.394 24.4533 164.394 23.32C164.394 22.1867 164.321 21.04 164.174 19.88C164.041 18.7067 163.768 17.6267 163.354 16.64C162.941 15.64 162.341 14.8333 161.554 14.22C160.781 13.6067 159.761 13.3 158.494 13.3C157.214 13.3 156.181 13.6067 155.394 14.22C154.621 14.8333 154.028 15.64 153.614 16.64C153.201 17.6267 152.921 18.7067 152.774 19.88C152.628 21.04 152.554 22.1867 152.554 23.32ZM146.934 23.32C146.934 20.5467 147.348 18.0933 148.174 15.96C149.014 13.8267 150.288 12.1533 151.994 10.94C153.714 9.72667 155.881 9.12 158.494 9.12C161.121 9.12 163.288 9.73333 164.994 10.96C166.701 12.1733 167.968 13.8467 168.794 15.98C169.621 18.1133 170.034 20.56 170.034 23.32C170.034 26.1067 169.614 28.5733 168.774 30.72C167.934 32.8533 166.661 34.5267 164.954 35.74C163.261 36.9533 161.108 37.56 158.494 37.56C155.868 37.56 153.694 36.9467 151.974 35.72C150.268 34.4933 149.001 32.8133 148.174 30.68C147.348 28.5333 146.934 26.08 146.934 23.32Z" fill="white"/>
                <rect y="4" width="40" height="40" rx="10" fill="white"/>
                <path d="M9.04785 22.6666C9.04785 21.362 9.26527 20.128 9.7001 18.9644C10.1712 17.8008 10.8234 16.7783 11.6569 15.8969C12.5265 15.0154 13.5411 14.3278 14.7007 13.8342C15.8965 13.3406 17.2191 13.0938 18.6686 13.0938V19.0702C18.0163 19.0702 17.4365 19.2288 16.9292 19.5462C16.4219 19.8635 16.0233 20.3219 15.7334 20.9213C15.4435 21.5207 15.2986 22.2082 15.2986 22.9839V34.9985H9.04785V22.6666ZM24.7562 22.9839C24.7562 22.2788 24.6113 21.6265 24.3214 21.0271C24.0677 20.4277 23.6873 19.9517 23.18 19.5991C22.6727 19.2465 22.0566 19.0702 21.3319 19.0702V13.0938C22.7814 13.0938 24.0859 13.3406 25.2454 13.8342C26.4412 14.3278 27.4558 15.0154 28.2893 15.8969C29.1589 16.7783 29.8112 17.8008 30.246 18.9644C30.7171 20.128 30.9526 21.362 30.9526 22.6666V34.9985H24.7562V22.9839Z" fill="#7F52FF"/>
                <path d="M19.9995 15.2852C19.9995 15.2852 20.06 15.8492 20.2953 16.0846C20.5307 16.32 21.0948 16.3804 21.0948 16.3804C21.0948 16.3804 20.5307 16.4408 20.2953 16.6762C20.06 16.9116 19.9995 17.4756 19.9995 17.4756C19.9995 17.4756 19.9391 16.9116 19.7037 16.6762C19.4683 16.4408 18.9043 16.3804 18.9043 16.3804C18.9043 16.3804 19.4683 16.32 19.7037 16.0846C19.9391 15.8492 19.9995 15.2852 19.9995 15.2852Z" fill="#7F52FF"/>
                <path d="M19.9996 28.4297C19.9996 28.4297 20.1809 30.1218 20.887 30.828C21.5932 31.5341 23.2853 31.7154 23.2853 31.7154C23.2853 31.7154 21.5932 31.8967 20.887 32.6028C20.1809 33.309 19.9996 35.0011 19.9996 35.0011C19.9996 35.0011 19.8183 33.309 19.1121 32.6028C18.406 31.8967 16.7139 31.7154 16.7139 31.7154C16.7139 31.7154 18.406 31.5341 19.1121 30.828C19.8183 30.1218 19.9996 28.4297 19.9996 28.4297Z" fill="#7F52FF"/>
                <path d="M20 21.8555C20 21.8555 20.1209 22.9836 20.5917 23.4543C21.0624 23.9251 22.1905 24.0459 22.1905 24.0459C22.1905 24.0459 21.0624 24.1668 20.5917 24.6376C20.1209 25.1083 20 26.2364 20 26.2364C20 26.2364 19.8792 25.1083 19.4084 24.6376C18.9377 24.1668 17.8096 24.0459 17.8096 24.0459C17.8096 24.0459 18.9377 23.9251 19.4084 23.4543C19.8792 22.9836 20 21.8555 20 21.8555Z" fill="#7F52FF"/>
                <path d="M11.2383 28.4289C11.2383 28.4289 10.1102 28.3081 9.63948 27.8373C9.23659 27.3641 9.07719 26.5741 9.04785 26.2383V30.6194C9.04785 30.6194 9.16871 29.4913 9.63948 29.0205C10.1102 28.5498 11.2383 28.4289 11.2383 28.4289Z" fill="white"/>
                <path d="M11.7305 19.0657C11.7305 19.0657 10.6721 18.657 10.3393 18.0805C10.0726 17.5191 10.1231 16.7148 10.1816 16.3828L9.04773 20.6146C9.04773 20.6146 9.45644 19.5563 10.033 19.2234C10.6096 18.8905 11.7305 19.0657 11.7305 19.0657Z" fill="white"/>
                <path d="M28.7617 24.0476C28.7617 24.0476 29.8898 24.1685 30.3605 24.6393C30.7634 25.1125 30.9228 25.9024 30.9521 26.2383L30.9521 21.8572C30.9521 21.8572 30.8313 22.9853 30.3605 23.456C29.8898 23.9268 28.7617 24.0476 28.7617 24.0476Z" fill="white"/>
                <path d="M25.1824 16.0868C25.1824 16.0868 25.8511 15.1703 26.4942 14.998C27.1054 14.8857 27.8693 15.1426 28.1748 15.2852L24.3807 13.0946C24.3807 13.0946 25.2972 13.7633 25.4695 14.4064C25.6418 15.0495 25.1824 16.0868 25.1824 16.0868Z" fill="white"/>
                <path d="M15.325 14.9923C15.325 14.9923 14.8657 13.9549 15.038 13.3119C15.2463 12.7264 15.8508 12.1933 16.127 12L12.3328 14.1906C12.3328 14.1906 13.3702 13.7312 14.0133 13.9035C14.6563 14.0758 15.325 14.9923 15.325 14.9923Z" fill="white"/>
                <path d="M28.7617 32.8094C28.7617 32.8094 29.8898 32.9302 30.3605 33.401C30.7634 33.8742 30.9228 34.6642 30.9521 35L30.9521 30.6189C30.9521 30.6189 30.8313 31.747 30.3605 32.2177C29.8898 32.6885 28.7617 32.8094 28.7617 32.8094Z" fill="white"/>
            </svg>      
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
        <h3>@lang('Team List')</h3>
    </div>
    <div class="app-content">
        <div class="px-24">
           
        </div>
        <div class="tab-content mt-24">
                <div class="tab-pane fade active show"  role="tabpanel">
                    <div class="px-24 card-layout">
                        <div class="swiper tf-sw sw-auto sw-lr" data-preview="auto" data-space="16"     style="height: fit-content;"
                        >   
                        <div class="swiper-wrapper center-content">
    @for ($l = 1; $l <= 3; $l++)
        <div class="swiper-slide">
            <?php $isSelected = (Session::get('selected_level') == $l); ?>
            <a  class="category-select 1" style="background: #8052ff; width: 300px; height:2px; color: {{ $isSelected ? '#fff' : '#000' }}" href="{{ route('user.referral-team') }}?selected_level={{ $l }}">
               <span style="margin-left:100px;">@lang('Level') {{ $l }}</span>
            </a>
        </div>
    @endfor
</div>


                         
                        </div>
                    </div>
                
                    <div class="card-body mt-20 d-flex align-items-center gap-10">
    <span class="badge primary badge-lg" onclick="filterStatus('All')">All</span>
    <span class="badge primary badge-lg" onclick="filterStatus('Active')">Active</span>
    <span class="badge primary badge-lg" onclick="filterStatus('Pending')">Pending</span>
</div>

<div class="px-16 mt-24">
    <?php if (is_array($direct_team) || is_object($direct_team)) { ?>
        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
        @foreach ($direct_team as $value)
            <ul class="mt-24 list-view-v6 check-list status-item" data-status="{{ $value->active_status }}">
                <li>
                    <a class="item box-accordion d-block active">
                        <div class="box d-flex justify-content-between align-items-center gap-16 collapsed"  data-bs-toggle="collapse" data-bs-target="#accordion-1" aria-expanded="true" aria-controls="accordion-1">
                            <div class="flex-grow-1 d-flex gap-16 align-items-center">
                                <div class="avatar round avt-48">
                                    <img src="images/avt/nft-logo-13.png" alt="">                      
                                </div>
                                <div class="content d-flex justify-content-between">
                                    <div class="content-left">
                                        <p class="button-1">{{ $value->username }}</p>
                                        <span class="more text-primary mt-2 button-3">{{ $value->email }}</span>
                                        <span class="less text-primary mt-2 button-3">-less</span>
                                    </div>
                                    <div class="content-right text-end">
                                        <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                            <span class="button-2">{{ ($value->investment->sum('amount')) ? $value->investment->sum('amount') : 0 }} USDT</span>  
                                        </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </a>
                </li>
            </ul>
        @endforeach
    <?php } ?>
</div>


                    
                </div>
                <div class="tab-pane fade" id="activity" role="tabpanel">
                    
                    <div class="px-16 mt-24">
                        <ul class="mt-24 list-view-v9 check-list">
                           
                            <li class="mt-20">
                                <a href="javascript:void(0);" class="item active box-accordion">
                                    <div class="box d-flex justify-content-between align-items-center gap-16 collapsed" data-bs-toggle="collapse" data-bs-target="#">
                                        <div class="avatar round avt-48">
                                            <img src="" alt="">                      
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div class="content-left">
                                                <span class="body-3 text-dark-2">dsfghjkl</span>
                                                <p class="body-1 mt-2">dfghjkldfxxgchvjkghjk</p>
                                                <span class="more text-primary mt-2 button-3">+more</span>
                                                <span class="less text-primary mt-2 button-3">-less</span>
                                            </div>
                                            <div class="content-right text-end">
                                                <span class="body-3 text-dark-2">Sale</span>
                                                <div class="mt-2 d-flex gap-4 align-items-center justify-content-end">
                                                    <span class="button-2">dfghjk</span>  
                                                </div>
                                                <span class="mt-2 d-block body-4 text-dark-2">sdfghjkjvc</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="" class="accordion-collapse collapse" aria-labelledby="">
                                        <ul class="body pt-16 line-t d-flex gap-40 justify-content-between">
                                            <li>
                                                <div class="body-5">Quantity</div>
                                                <div class="d-flex gap-4 align-items-center">
                                                    <span class="button-3">fdghjkdfghj</span>  
                                                </div>
                                            </li>
                                            <li>
                                                <div class="body-5">Seller</div>
                                                <a href="#" target="_blank" class="button-3 text-green">
                                                    dsfghjklfdghvjk
                                                </a>
                                            </li>
                                            <li>
                                                <div class="body-5">Buyers</div>
                                                <a href="#" target="_blank" class="button-3">
                                                    sdfghjklfghvjbfghvj
                                                </a>
                                            </li>
                                            <li>
                                                <div class="body-5">Chain</div>
                                                <span class="button-3">dsfgjgkdfghjgh</span>
                                            </li>
                                        </ul>
                                    </div> 
                                </a>
                            </li>
                             
                        </ul>
                        
                    </div>
                </div>
        </div>
    </div>

  
  
 

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