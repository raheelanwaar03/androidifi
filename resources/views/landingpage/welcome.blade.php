
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{env('APP_NAME')}} | Welcome to new univers</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">

</head>

<body class="darker-blue">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ route('LandingPage') }}"><img draggable="false" src="{{ asset('asset/logo.png') }}" height="150px" width="150" alt="logo"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="#Video">Video</a></li>
                                <li><a target="_blank" href="{{ asset('home/pdf/fx Tread Presentation.pdf') }}">Plan</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <a href="{{ route('register') }}" class="btn login-btn ml-50">Sign Up</a>

                            <a href="{{ route('login') }}" class="btn login-btn ml-50">Log in</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area clearfix dzsparallaxer auto-init none" data-options='{direction: "normal"}' id="home">
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url({{ asset('home/img/bg-img/bg-5.png') }})"></div>

        <!-- Hero Content -->
        <div class="hero-content transparent">
            <!-- blip -->
            <div class="dream-blip blip1"></div>
            <div class="dream-blip blip2"></div>
            <div class="dream-blip blip3"></div>
            <div class="dream-blip blip4"></div>

            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            <div class="promo-section">
                                <div class="integration-link">
                                    <span class="integration-icon">
                                        <img draggable="false" src="{{ asset('home/img/svg/img-dollar.svg') }}" width="24" height="24" alt="">
                                    </span>
                                    <span class="integration-text">Discover a new ways to enjoy your World!</span>
                                </div>
                            </div>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Get Most Benefits of ICO, crypto & Forex Trading.</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">We have over 15 year exprience in business consultting arena. We have over 15 year exprience in business consultting arena and artficial intelligence.</p>
                            <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#" class="btn dream-btn mr-3">Join Now</a>
                                <a href="#" class="btn dream-btn"> Whitepaper</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="vertical-social">
        <ul>
            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

        </ul>
    </div>

    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-70 clearfix" id="services">
        <div class="container">

            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Why Choose Our Investment Solutions</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Partner with us for a journey towards financial success tailored specifically to you. Our investment solutions stand out due to their tailored approach, precision, and commitment to your financial growth. We prioritize your unique goals, crafting strategies that align with your aspirations and risk tolerance.</p>
            </div>


            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/1.png') }}" alt="">
                        </div>
                        <h6>P2P Trading</h6>
                        <p>Peer-to-peer (P2P) trading represents a revolutionary way of exchanging assets directly between individuals, eliminating the need for intermediaries like banks or traditional financial institutions.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/2.png') }}" alt="">
                        </div>
                        <h6>Forex Trading</h6>
                        <p>Forex trading, also known as foreign exchange trading or {{ env('APP_NAME') }} trading, is the global marketplace for buying and selling currencies. It operates 24 hours a day, five days a week, and involves trading currency pairs, where one currency is exchanged for another at an agreed-upon price.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/3.png') }}" alt="">
                        </div>
                        <h6>Nifty Bank Trading</h6>
                        <p>Nifty Bank trading involves engaging in the Indian stock market through the Nifty Bank Index, comprising major banking sector stocks listed on the National Stock Exchange (NSE).</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/4.png') }}" alt="">
                        </div>
                        <h6>Share Market</h6>
                        <p>The share market, also known as the stock market, is a dynamic and pivotal aspect of the global financial system. It serves as a platform where individuals and institutions buy and sell shares or ownership stakes in publicly traded companies.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/5.png') }}" alt="">
                        </div>
                        <h6>Trading</h6>
                        <p>Trading is the art of buying and selling financial instruments, such as stocks, currencies, or commodities, with the aim of making a profit. It involves analyzing market trends, studying price movements, and leveraging various strategies to capitalize on opportunities.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-left mb-100 wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img draggable="false" src="img/services/6.png') }}" alt="">
                        </div>
                        <h6>Spot Trading</h6>
                        <p>Spot trading refers to the buying and selling of financial instruments, such as stocks, commodities, or cryptocurrencies, for immediate delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our Services Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                        <img draggable="false" src="{{ asset('home/img/core-img/about1.png') }}" class="img-responsive center-block" alt="">
                        <!-- client meta -->
                        <div class="growing-company text-center mt-30 wow fadeInUp" data-wow-delay="0.8s">
                            <p>* Already growing up <span class="counter">5236</span> company</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">ABOUT {{ env('APP_NAME') }} TREAD Looking To Secure Your Financial Future?</h4>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Our investment plans are designed to provide both guidance and opportunity. With our expertly crafted strategies, discover how even a modest investment can yield substantial returns. Whether you're aiming for short-term gains or long-term stability, our plans cater to your aspirations. Experience the potential to earn significantly more than traditional savings, ensuring your money works as hard as you do. Join us in exploring the world of investment where growth, security, and financial well-being converge. Start investing confidently and pave the way for a prosperous tomorrow.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">The aim of Company is to provide freedom from financial problems to every member through digital environment.With member's support company will provide technology in every people's hand.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Company wants to explain benefits of web and mobile application techonology to solve financial issues. We want to grow internet power for digitalisation.</p>
                        <!-- <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->


    <section class="demo-video section-before section-padding-100">
        <div class="container">
            <div class="section-heading text-center">

                        <div class="dream-dots justify-content-center">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2>Watch our demo video</h2>
                        <!-- <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> -->
                    </div>
            <!-- Welcome Video Area -->
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                <div class="welcome-video-area" id="Video">
                    <!-- Welcome Thumbnail -->
                    <div class="welcome-thumb">
                        <img draggable="false" src="{{ asset('home/img/bg-4.jpg') }}') }}" alt="">
                    </div>
                    <!-- Video Icon -->
                    <div class="video-icon">
                        <a href="!https://www.youtube.com/watch?v=gbXEPHsTkgU" class="btn dream-btn video-btn" id="videobtn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>


    <!-- ##### trust Area Start ##### -->
    <div class="trust-section section-padding-100">
        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">We are trusted</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s" >Our commitment to transparency, security, and integrity sets us apart in the world of {{ env('APP_NAME') }} Tread. With a proven track record of reliability and a steadfast dedication to safeguarding our clients' assets, we've earned the trust of thousands of users worldwide. Rest assured, your investments are in safe hands with our trusted team of experts guiding the way.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/1.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/2.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <div class="value">8.9</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/3.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/4.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/5.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                           <div class="value">7.4</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ico-platform-logo">
                            <img draggable="false" src="{{ asset('home/img/ico-platforms/6.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### trust Area End ##### -->

    <!-- ##### Our roadmap Area start ##### -->
    <section class="roadmap section-padding-100" style="background: url('{{ asset('home/img/bg-roadmap.png') }}') no-repeat center center;background-size: cover;" id="roadmap">

        <div class="container-fluid">
            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2>Our Roadmap</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> -->
            </div>
            <div class="row">
                <div class="section_5-content">
                    <div class="section_5-slider-trumb"></div>
                    <div id="section_5-slider-circle">
                        <div style="left:10%" class="data_cir cir_0" data-date="{{ env('APP_NAME') }}&nbsp;Token">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info">LAUNCHING
                                    DATE<br>
                                    15/08/2024
                                    </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/1.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:18%" class="data_cir cir_1" data-date="OWN&nbsp;P&nbsp;2&nbsp;P&nbsp;EXCHANGE&nbsp;PLATFORM">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>LAUNCHING DATE</span></li>
                                <li><span>10/10/2024</span></li>

                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/2.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:36%" class="data_cir cir_2" data-date="Meta&nbsp;Game">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>LAUNCHING&nbsp;DATE</span></li>
                                <li><span>10/12/2024</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/3.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:45%" class="data_cir cir_3" data-date="Decentralised&nbsp;Exchange">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>LAUNCHING&nbsp;DATE</span></li>
                                <li><span>15/02/2025</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/4.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:60%" class="data_cir cir_4 red_crc" data-date="NFT&nbsp;Non&nbsp;-&nbsp;fungible&nbsp;token">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>LAUNCHING DATE</span></li>
                                <li><span>12/06/2025</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/5.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:75%" class="data_cir cir_5 next" data-date="Centralised&nbsp;Exchange">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>LAUNCHING DATE</span></li>
                                <li><span>12/08/2025</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/6.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:90%" class="data_cir cir_6 next" data-date="Metaverse">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul>
                                    <li><span>LAUNCHING DATE</span></li>
                                <li><span>15/04/2026</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/7.svg') }}" alt=""></span></span>
                            </div>
                        </div>

                        <!-- <div style="left:80%" class="data_cir cir_7 next" data-date="Q1 2024">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span>Mainnet launch</span></li>
                                <li><span>Wallet beta-version release</span></li>
                                <li><span>Masternodes implementation</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/8.svg') }}" alt=""></span></span>
                            </div>
                        </div>
                        <div style="left:90%" class="data_cir cir_8 next" data-date="Q2 2024">
                            <div class="data_cir-content">
                                <span><span class="roadmap_content_info"><ul><li><span> Platform integration to electronic marketplaces</span></li>
                                <li><span>Zero Fee</span></li>
                                </ul>
                                </span><span class="roadmap_img"><img draggable="false" src="img/roadmap-icons/9.svg') }}" alt=""></span></span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our roadmap Area End ##### -->


    <!-- ##### Our features Area start ##### -->
    <section class="features section-padding-100">

        <div class="section-heading text-center">

            <div class="dream-dots justify-content-center">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2>Our Wallet Application</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="services-column col-lg-5 col-lg-offset-1 col-md-10 offset-md-1 col-xs-10 offset-xs-1">
                    <!--Services Block Four-->
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-mobile"></span>
                            </div>
                            <h3><a href="#">Powerfull Mobile and Online App</a></h3>
                            <div class="text">Revolutionize your trading experience with our powerful mobile and online app. Seamlessly manage your investments, analyze market trends, and execute trades with ease. Take control of your financial future anytime, anywhere.</div>

                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-widget"></span>
                            </div>
                            <h3><a href="#">Brings more Transparency and Speed</a></h3>
                            <div class="text">Experience heightened transparency and lightning-fast trades on our platform. With real-time data and rapid execution, stay ahead of the market with ease.</div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon ti-settings"></span>
                            </div>
                            <h3><a href="#">Special for Multiple Use Capabilities</a></h3>
                            <div class="text">Discover the ultimate trading tool From style to functionality, these  are more than just an accessory. Explore their versatile features now</div>
                        </div>
                    </div>

                </div>
                <div class="service-img-wrapper col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <img draggable="false" src="img/phone.png') }}" class="center-block img-responsive phone-img" alt="">
                        <img draggable="false" src="{{ asset('home/img/core-img/rings-bg.png') }}" class="center-block img-responsive rings " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our features Area End ##### -->

    <!-- ##### Subscribe Area start ##### -->
    <section class="container " style="padding-bottom: 0px" id="start">
        <div class="subscribe">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-wrapper">

                        <div class="service-text">
                            <div class="col-lg-4 col-md-4 col-xs-12 text-center">
                                <img src="{{ asset('home/img/core-img/cash.png') }}" alt="">
                            </div>
                            <div class="col-lg-8 col-md-8 col-xs-12 text-left">
                                <div class="section-heading text-left">
                                    <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Don’t Miss Our News And Updates!</h2>
                                    <!-- <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> -->
                                </div>
                                <div class="group">
                                    <input type="text" name="subject" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>enter your email</label>
                                    <button class="dream-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-5 text-left mt-30">
                                <ul class="list-unstyled list-inline social-list">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-medium"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### FAQ & Timeline Area Start ##### -->
    <div class="faq-timeline-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-md-12">
                    <div class="section-heading">

                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Frequently Asked Questions</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-left:0">1.What is trading?</p>
                    </div>

                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.2s">What are the objectives of this token?</dt>
                            <dd class="wow fadeInUp" data-wow-delay="0.3s">
                                <p>2.How do I create an account?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.3s">What is Token Sale and pre-sale?</dt>
                            <dd>
                                <p>3.How do I deposit funds into my account?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.4s">What is the pre-sale start date?</dt>
                            <dd>
                                <p>4.How long does it take for deposits and withdrawals to be processed?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">4.Can I trade on this platform using a mobile device?</dt>
                            <dd>
                                <p>5.Is there a referral program available?</p>
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">

                    <div class="ico-counter">
                        <div class="counter-down">

                            <div class="content">
                                <div class="conuter-header">
                                    <h3 class="text-center">{{ env('APP_NAME') }} Token LAUNCHING</h3>
                                </div>
                                <div class="counterdown-content">

                                   <!-- <div class="ico-sales-status mb-15 o-hidden">
                                        <div class="pull-left">
                                            <h3 class="dollar-earning">$7,575,357</h3>
                                            <p style="padding-left:10px">Worth of DREAM tokens</p>
                                        </div>
                                        <div class="pull-right">
                                            <h3 class="btc-earning">9.764 <span>BTC</span></h3>
                                            <p>BTC Raised</p>
                                        </div>
                                    </div> -->
                                    <!-- Countdown  -->
                                    <div class="count-down titled circled text-center">
                                        <div class="simple_timer syotimer timer"><div class="timer-head-block"></div><div class="timer-body-block"><div class="table-cell day"><div class="tab-val">122</div><div class="tab-metr tab-unit">days</div></div><div class="table-cell hour"><div class="tab-val">08</div><div class="tab-metr tab-unit">hours</div></div><div class="table-cell minute"><div class="tab-val">52</div><div class="tab-metr tab-unit">minutes</div></div><div class="table-cell second"><div class="tab-val" style="opacity: 1;">58</div><div class="tab-metr tab-unit">seconds</div></div></div><div class="timer-foot-block"></div></div>
                                    </div>
                                    <div class="ico-progress">
                                       <ul class="list-unstyled list-inline clearfix mb-10">
                                          <li class="title">33m</li>
                                          <li class="strength">75m</li>
                                       </ul>
                                       <!-- skill strength -->
                                       <div class="current-progress">
                                          <div class="progress-bar has-gradient" style="width: 75%"></div>
                                       </div>
                                       <span class="pull-left">Softcap in 103 days</span>
                                       <span class="pull-right">Token Hardcap</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="button mt-30">Buy More Tokens</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="ico-docs">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">WhitePaper</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">OnePager</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">Rating Review</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="pdf/fx Tread Presentation.pdf" target="_blank"><span class="title">Marketing Plan</span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- ##### FAQ & Timeline Area End ##### -->

    <!-- ##### token-distribution Area start ##### -->
    <section class="token-distribution">
        <div class="container">

            <div class="section-heading text-center">

                <div class="dream-dots justify-content-center">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2>Air COIN DISTRIBUTION</h2>
                <p></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="text-center mb-30">Token Allocation</h2>
                <div class="token-allocation">
                    <img draggable="false" src="{{ asset('home/img/core-img/allocation.png') }}" class="center-block" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="token-info-wapper"></div>
                <h2 class="text-center mb-30">AIR DROP PLAN</h2>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon" style="background-image: url('{{ asset('home/img/svg/token-icon-1.svg') }}');"></div>
                        <div class="token-descr">Company Total Supply 6 Crore</div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon" style="background-image: url('{{ asset('home/img/svg/token-icon-2.svg') }}');"></div>
                        <div class="token-descr">Air Drop 50 Lakh</div>
                    </div>
                </div>
                <div class="token-info">
                    <div class="info-wrapper">
                        <div class="token-icon" style="background-image: url('{{ asset('home/img/svg/token-icon-3.svg') }}');"></div>
                        <div class="token-descr">ITO 50 lakh</div>
                    </div>
                </div>
                <div class="token-info" style="margin-bottom:0">
                    <div class="info-wrapper">
                        <div class="token-icon" style="background-image: url('{{ asset('home/img/svg/token-icon-4.svg') }}');"></div>
                        <div class="token-descr">Reward 3 crore </div>
                    </div>
                </div>
                <div class="token-info" style="margin-bottom:0">
                    <div class="info-wrapper">
                        <div class="token-icon" style="background-image: url('{{ asset('home/img/svg/token-icon-4.svg') }}');"></div>
                        <div class="token-descr">Released Every Month 2 Crore</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ##### token-distribution Area End ##### -->


    <!-- ##### Team Area Start ##### -->
    <section class="our_team_area section-padding-0-0 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">

                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Meet Our Awesome Team</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">we pride ourselves on our exceptional team of professionals who are dedicated to revolutionizing the world of cryptocurrency exchange. With a blend of expertise, passion, and innovation, our team is committed to providing you with the best possible experience in the digital asset market.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ asset('home/img/team-img/1.png') }}" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Sunny khan</h5>
                            <p>Executive Officer</p>
                        </div>
                        <!-- Social Icon -->
                        <!-- <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div> -->
                    </div>
                </div>


                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ asset('home/img/team-img/2.png') }}" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Ajoy Das</h5>
                            <p>Business Development</p>
                        </div>
                        <!-- Social Icon -->
                        <!-- <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ asset('home/img/team-img/3.png') }}" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Afroza Mou</h5>
                            <p>UX/UI Designer</p>
                        </div>
                        <!-- Social Icon -->
                        <!-- <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img draggable="false" src="{{ asset('home/img/team-img/4.png') }}" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>Lim Sarah</h5>
                            <p>Head of Marketing</p>
                        </div>
                        <!-- Icon -->
                        <!-- <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url('{{ asset('home/img/core-img/pattern.png') }}');">

        <!-- ##### Contact Area Start ##### -->
        <div class="contact_us_area" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">

                            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Contact With Us</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="contact_form">
                            <form action="#" method="post" id="main_contact_form" novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div id="success_fail_info"></div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                            <input type="text" name="name" id="name" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="text" name="email" id="email" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                            <input type="text" name="subject" id="subject" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                            <textarea name="message" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                        <button type="submit" class="btn dream-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Contact Area End ##### -->

        <div class="footer-content-area " style="background: url('{{ asset('home/img/bg-2.png') }}') center;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12 col-md-5">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text wow fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="/"><img draggable="false" src="{{ asset('asset/logo.png') }}" height="150px" width="150px" alt="logo"></a>
                                </div>
                                <p>Our investment plans are designed to provide both guidance and opportunity. With our expertly crafted strategies, discover how even a modest investment can yield substantial returns. Whether you're aiming for short-term gains or long-term stability, our plans cater to your aspirations. Experience the potential to earn significantly more than traditional savings, ensuring your money works as hard as you do. </p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.2s">
                                <h5>QUICK LINKS</h5>
                                <a href="#home"><p>Home</p></a>
                                <a href="#about"><p>About</p></a>
                                <a href="#services"><p>Services</p></a>
                                <a href="#roadmap"><p>Roadmap</p></a>

                            </div>
                            <!-- Content Info -->
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h5>QUICK LINKS</h5>
                                <a href="#Video"><p>Video</p></a>
                                <a target="_blank" href="pdf/fx Tread Presentation.pdf"><p>Plan</p></a>
                                <a href="#team"><p>Team</p></a>
                                <a href="#contact"><p>Contact</p></a>
                            </div>
                            <!-- Content Info -->
                            <div class="contact_info text-center wow fadeInUp" data-wow-delay="0.4s">
                                <h5>ADDRESS</h5>
                                <p>Mailing Address:xxx0 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+1-212-456-7890</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ asset('home/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('home/js/plugins.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('home/js/dzsparallaxer.js') }}"></script>

    <script src="{{ asset('home/js/jquery.syotimer.min.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset('home/js/script.js') }}"></script>

</body>

</html>
