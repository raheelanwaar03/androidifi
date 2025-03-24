@extends('user.layout.app')

@section('content')
    <section class="pricing2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h2 class="title">
                            Investment Plans
                        </h2>
                        <p class="text">
                            We use the latest technologies and tools in order to create a better code that not only works
                            great, but it is easy easy to work with too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pricing-tab">
                    <div class="tab-menu">
                        <ul class="nav" id="my-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly"
                                    role="tab" aria-controls="pills-monthly" aria-selected="true">All Plans</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">
                            <div class="row justify-content-center">
                                @foreach ($plans as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="price-box basic">
                                            <div class="price-title">
                                                <h3 class="heading-title">Duration {{ $item->expiry }} days</h3>
                                            </div>
                                            <div class="price-rate">
                                                <div class="center-align-content">
                                                    <p class="price">Invest : ${{ $item->invest }}</p>
                                                    <i class="fas fa-dollar-sign"></i>
                                                </div>
                                            </div>
                                            <div class="service-feature">
                                                <ul class="service-feature-list">
                                                    <li>
                                                        <p>Percentage: {{ $item->percentage }}%</p>
                                                    </li>
                                                    <li>
                                                        <p>Profit : ${{ $item->profit }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buy-btn-wrapper">
                                                <a class="base-btn1" href="{{ route('User.Buy.Plan', $item->id) }}">Invest
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box basic">
                                        <div class="price-title">
                                            <h3 class="heading-title">After 10 days</h3>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">200%</p>
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Minimam Invest : $100</p>
                                                </li>
                                                <li>
                                                    <p>Maximam Invest : $1000</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="base-btn1" href="#">Deposit<i
                                                    class="fas fa-dollar-sign"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box basic">
                                        <div class="price-title">
                                            <h3 class="heading-title">After 20 days</h3>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">400%</p>
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Minimam Invest : $200</p>
                                                </li>
                                                <li>
                                                    <p>Maximam Invest : $2000</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="base-btn1" href="#">Deposit<i
                                                    class="fas fa-dollar-sign"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="price-box basic">
                                        <div class="price-title">
                                            <h3 class="heading-title">After 30 days</h3>
                                        </div>
                                        <div class="price-rate">
                                            <div class="center-align-content">
                                                <p class="price">500%</p>
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="service-feature">
                                            <ul class="service-feature-list">
                                                <li>
                                                    <p>Minimam Invest : $300</p>
                                                </li>
                                                <li>
                                                    <p>Maximam Invest : $3000</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buy-btn-wrapper">
                                            <a class="base-btn1" href="#">Deposit<i
                                                    class="fas fa-dollar-sign"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Area End -->

    <!-- Start invest Area Start -->
    <section class="start-invest  bg-color1 dark-ip1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h2 class="title">
                            Start Investment
                        </h2>
                        <p class="text">
                            We use the latest technologies and tools in order to create a better code that not only works
                            great, but it is easy easy to work with too.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-menu-area">
                        <ul class="nav nav-lend mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-all-tabthree-tab" data-toggle="pill"
                                    href="#pills-all-tabthree" role="tab" aria-controls="pills-all-tabthree"
                                    aria-selected="true">New Investors</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-all-tabthree" role="tabpanel"
                            aria-labelledby="pills-all-tabthree-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">AMOUNT</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-my-tabfour" role="tabpanel"
                            aria-labelledby="pills-my-tabfour-tab">
                            <div class="responsive-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">USER</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">AMOUNT</th>
                                            <th scope="col">Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p5.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p6.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p1.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p2.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p3.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/people/p4.png" alt="">
                                                Tom Bass
                                            </td>
                                            <td>
                                                Feb 20, 2021
                                            </td>
                                            <td>
                                                $4990
                                            </td>
                                            <td>Bitcoin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
