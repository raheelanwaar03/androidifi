@extends('layout.app')
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
                                        <span class="font-w400 d-block text-white">{{ env('APP_NAME') }}</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ number_format(auth()->user()->unc, 2) }}</h4>
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
                                        <span class="font-w400 d-block text-white">Wallet Balance</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">
                                            {{ number_format(auth()->user()->balance, 2) }}$</h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ totalDeposit() }}$</h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ userPendingDeposit() }}$</h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ userApprovedDeposit() }}$
                                        </h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ userTotalWithdraw() }}$
                                        </h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ userApprovedWithdraw() }}$
                                        </h4>
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
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">{{ userPendingWithdraw() }}$
                                        </h4>
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
                                        <span class="font-w400 d-block text-white">Referral Income</span>
                                        <h4 class="fs-24 font-w600 mb-0 d-inline-flex me-2">0$
                                        </h4>
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
                        {{-- adding refferal link --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h6 class="text-center">Just click and share your refer link</h6>
                                        </div>
                                        <p class="p-3 text-center"><span id="linkSpan"
                                                style="font-size: 15px;">{{ route('register', ['referral' => Auth::user()->register_id]) }}</span>
                                            <span class="copy-icon" onclick="copyLink()" style="font-size: 15px;"><i
                                                    id="shareBtn" class="fa-solid fa-share"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection

            @section('scripts')
                <script>
                    function copyLink() {
                        // Select the span element containing the link
                        var linkSpan = document.getElementById("linkSpan");

                        // Create a temporary input element
                        var tempInput = document.createElement("input");

                        // Set the value of the input element to the text content of the span
                        tempInput.value = linkSpan.textContent;

                        // Append the input element to the body (required for some browsers)
                        document.body.appendChild(tempInput);

                        // Select the text in the input element
                        tempInput.select();

                        // Copy the selected text
                        document.execCommand("copy");

                        // Remove the temporary input element
                        document.body.removeChild(tempInput);
                    }

                    if (navigator.share) {
                        document.querySelector('#shareBtn').addEventListener('click', async () => {
                            try {
                                await navigator.share({
                                    title: 'Web Share API Demo',
                                    text: 'Check out this link!',
                                    url: '{{ route('register', ['referral' => Auth::user()->register_id]) }}',
                                });
                                console.log('Successfully shared');
                            } catch (error) {
                                console.error('Error sharing:', error);
                            }
                        });
                    } else {
                        console.log('Web Share API not supported');
                    }
                </script>
            @endsection
