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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>


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
                    <img src="{{ asset('asset/logo.png') }}" class="small" height="120px" width="120px" alt="">
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
                                        <img src="{{ asset('images/profile/' . auth()->user()->pic) }}" alt="">
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
                                <i class="fa-solid fa-money-bill-transfer" style="font-size: 15px;margin-right:8px;"></i>
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
                    {{-- <li><a href="widget-basic.html">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M16.0754 2H19.4614C20.8636 2 21.9999 3.14585 21.9999 4.55996V7.97452C21.9999 9.38864 20.8636 10.5345 19.4614 10.5345H16.0754C14.6731 10.5345 13.5369 9.38864 13.5369 7.97452V4.55996C13.5369 3.14585 14.6731 2 16.0754 2Z"
                                        fill="#763ed0" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                        fill="#B9A8FF" />
                                </svg>
                            </div>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="IconlyDocument">
                                        <g id="Document">
                                            <path id="Document_2" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.81 2H16.191C19.28 2 21 3.78 21 6.83V17.16C21 20.26 19.28 22 16.191 22H7.81C4.77 22 3 20.26 3 17.16V6.83C3 3.78 4.77 2 7.81 2ZM8.08 6.66V6.65H11.069C11.5 6.65 11.85 7 11.85 7.429C11.85 7.87 11.5 8.22 11.069 8.22H8.08C7.649 8.22 7.3 7.87 7.3 7.44C7.3 7.01 7.649 6.66 8.08 6.66ZM8.08 12.74H15.92C16.35 12.74 16.7 12.39 16.7 11.96C16.7 11.53 16.35 11.179 15.92 11.179H8.08C7.649 11.179 7.3 11.53 7.3 11.96C7.3 12.39 7.649 12.74 8.08 12.74ZM8.08 17.31H15.92C16.319 17.27 16.62 16.929 16.62 16.53C16.62 16.12 16.319 15.78 15.92 15.74H8.08C7.78 15.71 7.49 15.85 7.33 16.11C7.17 16.36 7.17 16.69 7.33 16.95C7.49 17.2 7.78 17.35 8.08 17.31Z"
                                                fill="#130F26" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="IconlySwap">
                                        <g id="Swap">
                                            <path id="Swap_2" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.54618 3.27793C7.71236 3.39789 7.98037 3.67345 7.98037 3.67345C9.02079 4.64858 10.5879 7.07394 11.0911 8.30444C11.1016 8.30444 11.4001 9.03608 11.4118 9.38409V9.43041C11.4118 9.96371 11.1133 10.4626 10.6335 10.7179C10.4357 10.8232 9.95456 10.9211 9.72244 10.9683C9.64556 10.984 9.59599 10.9941 9.59308 10.997C8.90727 11.1016 7.85514 11.1704 6.70003 11.1704C5.48757 11.1704 4.38981 11.1016 3.71453 10.9733C3.70282 10.9733 3.08606 10.8462 2.88009 10.7642C2.58282 10.6372 2.3312 10.4044 2.17087 10.1145C2.05618 9.88294 2 9.63827 2 9.38409C2.01053 9.11685 2.18257 8.618 2.26215 8.42083C2.76539 7.12026 4.41204 4.6367 5.41852 3.68532C5.52307 3.57922 5.64206 3.46806 5.72485 3.39071C5.76902 3.34945 5.8029 3.3178 5.81877 3.30169C6.07039 3.10452 6.37936 3 6.71173 3C7.00783 3 7.30509 3.09264 7.54618 3.27793ZM18.2286 10.1618C18.2286 10.6856 17.8108 11.1096 17.2947 11.1096C16.7786 11.1096 16.3608 10.6856 16.3608 10.1618L16.1033 5.58295C16.1033 4.91543 16.637 4.375 17.2947 4.375C17.9524 4.375 18.4849 4.91543 18.4849 5.58295L18.2286 10.1618ZM21.1199 13.2356C21.4172 13.3639 21.6688 13.5955 21.8291 13.8853C21.9438 14.1169 22 14.3616 22 14.617C21.9895 14.883 21.8174 15.3831 21.7367 15.5802C21.2346 16.8797 19.5868 19.3633 18.5815 20.3158C18.4787 20.4194 18.3619 20.5284 18.2793 20.6055L18.2792 20.6055C18.2331 20.6486 18.1976 20.6817 18.1812 20.6983C17.9284 20.8955 17.6206 21 17.2894 21C16.991 21 16.6937 20.9074 16.4538 20.7209C16.2876 20.6021 16.0196 20.3265 16.0196 20.3265C14.978 19.3526 13.4121 16.926 12.9089 15.6954C12.8972 15.6954 12.5999 14.965 12.5882 14.617V14.5706C12.5882 14.0361 12.8855 13.5373 13.3665 13.2819C13.5639 13.1777 14.0435 13.0796 14.2762 13.0319L14.2762 13.0319C14.3539 13.016 14.404 13.0058 14.4069 13.0028C15.0927 12.8983 16.1449 12.8294 17.3 12.8294C18.5124 12.8294 19.6102 12.8983 20.2855 13.0265C20.296 13.0265 20.9139 13.1536 21.1199 13.2356ZM6.70553 12.8905C6.18942 12.8905 5.77161 13.3146 5.77161 13.8383L5.51414 18.4171C5.51414 19.0846 6.04781 19.625 6.70553 19.625C7.36325 19.625 7.89575 19.0846 7.89575 18.4171L7.63945 13.8383C7.63945 13.3146 7.22165 12.8905 6.70553 12.8905Z"
                                                fill="#130F26" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M2.00024 11.0785C2.05024 13.4165 2.19024 17.4155 2.21024 17.8565C2.28124 18.7995 2.64224 19.7525 3.20424 20.4245C3.98624 21.3675 4.94924 21.7885 6.29224 21.7885C8.14824 21.7985 10.1942 21.7985 12.1812 21.7985C14.1762 21.7985 16.1122 21.7985 17.7472 21.7885C19.0712 21.7885 20.0642 21.3565 20.8362 20.4245C21.3982 19.7525 21.7592 18.7895 21.8102 17.8565C21.8302 17.4855 21.9302 13.1445 21.9902 11.0785H2.00024Z"
                                        fill="#763ed0" />
                                    <path
                                        d="M11.2455 15.3842V16.6782C11.2455 17.0922 11.5815 17.4282 11.9955 17.4282C12.4095 17.4282 12.7455 17.0922 12.7455 16.6782V15.3842C12.7455 14.9702 12.4095 14.6342 11.9955 14.6342C11.5815 14.6342 11.2455 14.9702 11.2455 15.3842Z"
                                        fill="#763ed0" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.2114 14.5564C10.1114 14.9194 9.76237 15.1514 9.38437 15.1014C6.83337 14.7454 4.39537 13.8404 2.33737 12.4814C2.12637 12.3434 2.00037 12.1074 2.00037 11.8554V8.3894C2.00037 6.2894 3.71237 4.5814 5.81737 4.5814H7.78437C7.97237 3.1294 9.20237 2.0004 10.7044 2.0004H13.2864C14.7874 2.0004 16.0184 3.1294 16.2064 4.5814H18.1834C20.2824 4.5814 21.9904 6.2894 21.9904 8.3894V11.8554C21.9904 12.1074 21.8634 12.3424 21.6544 12.4814C19.5924 13.8464 17.1444 14.7554 14.5764 15.1104C14.5414 15.1154 14.5074 15.1174 14.4734 15.1174C14.1344 15.1174 13.8314 14.8884 13.7464 14.5524C13.5444 13.7564 12.8214 13.1994 11.9904 13.1994C11.1484 13.1994 10.4334 13.7444 10.2114 14.5564ZM13.2864 3.5004H10.7044C10.0314 3.5004 9.46937 3.9604 9.30137 4.5814H14.6884C14.5204 3.9604 13.9584 3.5004 13.2864 3.5004Z"
                                        fill="#B9A8FF" />
                                </svg>
                            </div>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="copyright">
                    <p class="fs-14"><strong>{{ env('APP_NAME') }}</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-14">Made with <span class="heart"></span> by {{ env('APP_NAME') }}</p>
                </div>
            </div>
        </div>
