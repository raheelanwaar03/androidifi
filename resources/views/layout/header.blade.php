<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE HERE -->
    <title>{{ env('APP_NAME') }} - User Dashboard</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('asset/images/favicon.png') }}">
    {{-- links --}}
    @yield('links')
    <link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/jquery-autocomplete/jquery-ui.css') }}" rel="stylesheet">
    <!-- Style css -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />


</head>

<body>
    <x-alert />
    <div id="preloader">
        <div class="inner">
            <span>{{ env('APP_NAME') }} </span>
            <div class="loading">
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="animation">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <span class="circle three"></span>
            <span class="circle four"></span>
            <span class="line-1">
                <svg width="1920" height="450" viewBox="0 0 1920 450" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                        d="M0 155L95.4613 293.923C106.459 309.928 131.116 305.943 136.512 287.289L209.86 33.7127C215.892 12.8576 244.803 11.2033 253.175 31.2341L344.838 250.546C352.224 268.217 376.708 269.648 386.102 252.958L519.839 15.3693C529.061 -1.01332 552.975 -0.0134089 560.797 17.0818L716.503 357.389C724.454 374.766 748.899 375.43 757.782 358.51L902.518 82.8223C911.524 65.6685 936.406 66.653 944.028 84.4648L1093.06 432.731C1101.14 451.601 1128.01 451.247 1135.58 432.172L1291.33 39.9854C1298.27 22.5135 1322.1 20.2931 1332.14 36.1824L1473.74 260.126C1482.47 273.922 1502.38 274.494 1511.88 261.221L1667.88 43.3025C1678.17 28.9257 1700.16 31.0533 1707.5 47.1365L1844.91 348.06C1853.69 367.287 1881.58 365.486 1887.81 345.29L1970 79"
                        stroke="url(#paint0_linear_332_3757)" stroke-opacity="0.4" stroke-width="6"
                        stroke-linecap="round" />
                    <defs>
                        <linearGradient id="paint0_linear_332_3757" x1="1946.24" y1="352.062" x2="-1.52124"
                            y2="345.607" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#6E4AFF" />
                            <stop offset="0.479167" stop-color="#E43BFF" />
                            <stop offset="1" stop-color="#6E4AFF" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="line-2">
                <svg width="1920" height="459" viewBox="0 0 1920 459" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 89L103.191 296.201C112.034 313.958 137.703 312.941 145.114 294.54L224.847 96.5574C232.264 78.141 257.962 77.1423 266.786 94.9275L352.649 267.995C360.863 284.553 384.264 285.148 393.31 269.03L516.226 50.0159C525.164 34.0902 548.205 34.4325 556.666 50.6167L713.497 350.608C721.71 366.318 743.86 367.222 753.326 352.234L901.462 117.684C911.188 102.286 934.102 103.763 941.771 120.282L1091.14 442.062C1099.38 459.816 1124.62 459.817 1132.86 442.064L1303.17 75.2544C1310.64 59.1685 1332.73 57.2308 1342.89 71.7713L1469.94 253.703C1479.15 266.893 1498.71 266.794 1507.78 253.511L1671.82 13.4627C1681.74 -1.05968 1703.63 0.478486 1711.42 16.2459L1844.42 285.267C1853.64 303.905 1880.89 301.723 1887.02 281.857L1970 13"
                        stroke="url(#paint0_linear_332_3758)" stroke-opacity="0.4" stroke-width="6"
                        stroke-linecap="round" />
                    <defs>
                        <linearGradient id="paint0_linear_332_3758" x1="1946.24" y1="286.062" x2="-1.52105"
                            y2="279.607" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#6E4AFF" />
                            <stop offset="0.479167" stop-color="#E43BFF" />
                            <stop offset="1" stop-color="#6E4AFF" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>

        </div>

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('User.Dashboard') }}" class="brand-logo">
                <div class="logo">
                    <img src="{{ asset('asset/logo.png') }}" class="small" height="80px" width="80px"
                        alt="">
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4"
                            d="M16.7548 0.333313H20.7051C22.341 0.333313 23.6667 1.67014 23.6667 3.31994V7.30359C23.6667 8.95339 22.341 10.2902 20.7051 10.2902H16.7548C15.1188 10.2902 13.7932 8.95339 13.7932 7.30359V3.31994C13.7932 1.67014 15.1188 0.333313 16.7548 0.333313Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.29492 0.333313H7.24522C8.8812 0.333313 10.2068 1.67014 10.2068 3.31994V7.30359C10.2068 8.95339 8.8812 10.2902 7.24522 10.2902H3.29492C1.65894 10.2902 0.333313 8.95339 0.333313 7.30359V3.31994C0.333313 1.67014 1.65894 0.333313 3.29492 0.333313ZM3.29492 13.7097H7.24522C8.8812 13.7097 10.2068 15.0466 10.2068 16.6964V20.68C10.2068 22.3287 8.8812 23.6666 7.24522 23.6666H3.29492C1.65894 23.6666 0.333313 22.3287 0.333313 20.68V16.6964C0.333313 15.0466 1.65894 13.7097 3.29492 13.7097ZM20.705 13.7097H16.7547C15.1188 13.7097 13.7931 15.0466 13.7931 16.6964V20.68C13.7931 22.3287 15.1188 23.6666 16.7547 23.6666H20.705C22.341 23.6666 23.6666 22.3287 23.6666 20.68V16.6964C23.6666 15.0466 22.341 13.7097 20.705 13.7097Z"
                            fill="white" />
                    </svg>

                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ env('APP_NAME') }} User Dashboard
                            </div>
                        </div>
                        <div class="dropdown header-profile2 ">
                            <a class="nav-link user-profile" href="javascript:void(0);" role="button"
                                data-bs-toggle="dropdown">
                                <div class="header-info2 d-flex align-items-center">
                                    @if (auth()->user()->pic == '')
                                        <img src="{{ asset('asset/images/profile/profile.png') }}" alt="">
                                    @else
                                        <img src="{{ asset('images/profile/' . auth()->user()->pic) }}"
                                            alt="">
                                    @endif
                                    <div class="d-flex align-items-center sidebar-info">
                                        <div class="user-info">
                                            <span
                                                class="font-w500 d-block  fs-5 text-white">{{ auth()->user()->name }}</span>
                                            <small class="text-end font-w400">{{ auth()->user()->role }}</small>
                                        </div>
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.8334 1.08331L7.00002 6.91665L1.16669 1.08331" stroke="#FFFF"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu profile dropdown-menu-end">
                                <a href="{{ route('profile.edit') }}" class="dropdown-item ai-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <form action="{{ route('logout') }}" method="POST" class="dropdown-item ai-icon">
                                    @csrf
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <button type="submit"
                                        style="background: none;color:rgb(145, 141, 141);border:none">
                                        <span class="ms-2">Logout </span>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('User.Dashboard') }}">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="IconlyHome">
                                        <g id="Home">
                                            <path id="Home_2"
                                                d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.7561 22 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z"
                                                fill="#130F26" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <i class="fa-solid fa-arrow-up" style="font-size: 15px;margin-right:8px;"></i>
                            </div>

                            <span class="nav-text">Topup Account</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Deposit.Request') }}">Deposit Request</a></li>
                            <li><a href="{{ route('User.All.Deposits') }}">All Deposit Requests</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <i class="fa-solid fa-money-bill-transfer"
                                    style="font-size: 15px;margin-right:8px;"></i>
                            </div>
                            <span class="nav-text">Withdraw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Withdraw.Request') }}">Request</a></li>
                            <li><a href="{{ route('User.All.Withdraw.Request') }}">All Requests</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <i style="font-size: 15px;margin-right:8px;" class="fa-regular fa-paper-plane"></i>
                            </div>
                            <span class="nav-text">Plans</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Total.Plans') }}">All Plans</a></li>
                            <li><a href="{{ route('User.Active.Plans') }}">Active Plan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon" style="font-size:15px;margin-right:8px;">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <span class="nav-text">Team</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('User.Direct.Commission') }}">Referral Commission</a></li>
                            <li><a href="{{ route('User.Daily.ROI') }}">Daily ROI</a></li>
                            <li><a href="{{ route('User.Team.Mangement') }}">Team Members</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="copyright">
                    <p class="fs-14"><strong>{{ env('APP_NAME') }}</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-14">Made with <span class="heart"></span> by {{ env('APP_NAME') }}</p>
                </div>
            </div>
        </div>
