@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <!----column-- -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">All Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ allUser() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/column-- -->
                        <!----column-- -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet org">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Working Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ allUser() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet org">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Pending Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ pendingUser() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet org">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Banned Users</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ pendingUser() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/column-- -->
                        <!----column-- -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Total Deposit</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ allDeposit() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Pending Deposit</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ allDeposit() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Approved Deposit</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ allDeposit() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/column-- -->
                        <!----column-- -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Total Withdraw</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ Withdraw() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Pending Withdraw</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ Withdraw() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Approved Withdraw</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ Withdraw() }}$</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card  wallet blue">
                                <div class="boxs">
                                    <span class="box one"></span>
                                    <span class="box two"></span>
                                    <span class="box three"></span>
                                    <span class="box four"></span>
                                </div>
                                <div class="card-header border-0">
                                    <div class="wallet-info">
                                        <span class="font-w400 d-block text-white">Totall Plans</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ Withdraw() }}</h4>
                                    </div>
                                    <div class="wallet-icon">
                                        <svg width="62" height="39" viewBox="0 0 62 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="42.7722" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                            <circle cx="19.2278" cy="19.2278" r="19.2278" fill="white"
                                                fill-opacity="0.2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/column-- -->
                    </div>
                    <div class="padding">
                        <h3 class="text-center" >Copyright©{{ env('APP_NAME') }}</h3>
                    </div>
                @endsection
