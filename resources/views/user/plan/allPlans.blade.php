@extends('layout.app')
@section('links')
    <link rel="stylesheet" href="{{ asset('asset/css/datatable.css') }}">
@endsection
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="text-center">All Plans</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($plans as $item)
                                            <div class="col-md-6">
                                                <div class="card border"
                                                    style="border: 1px linear-gradient(to left, #743ad5, #d53a9d);">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <h3>{{ $item->name }}</h3>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Referral Income</h5>
                                                            <h6>5 Level</h6>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Level Income</h5>
                                                            <h6>4 Levels</h6>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Investment</h5>
                                                            <div class="d-flex">
                                                                <h6>{{ $item->min_invest }}$</h6>—
                                                                <h6>{{ $item->max_invest }}$</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Daily Roi</h5>
                                                            <div class="d-flex">
                                                                <h6>{{ $item->min_roi_per }}%</h6>—
                                                                <h6>{{ $item->max_roi_per }}%</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Total Roi</h5>
                                                            <div class="d-flex">
                                                                <h6>{{ $item->min_roi_profit }}$</h6>—
                                                                <h6>{{ $item->max_roi_profit }}$</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5>Validity</h5>
                                                            <h6>{{ $item->expiry }} Days</h6>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-primary  mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#investment{{ $item->id }}">Invest</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- MODEL --}}
                                            <div class="modal fade" id="investment{{ $item->id }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="">
                                                                <h5 class="modal-title">Invest In {{ $item->name }}
                                                                    amount must be between
                                                                    ({{ $item->min_invest }}$-{{ $item->max_invest }}$)
                                                                </h5>
                                                            </div>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('User.Buy.Plan', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="number" id="amountInput" name="investment"
                                                                    style="text-decoration: none;" class="form-control">
                                                                <p id="result"></p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger light btn-sm"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" id="submitButton"
                                                                onclick="submitAmount()"
                                                                class="btn btn-primary btn-sm">Invest</button>
                                                            </form>
                                                        </div>
                                                        {{-- <script>
                                                            function checkAmount() {
                                                                var amountInput = document.getElementById("amountInput");
                                                                var resultElement = document.getElementById("result");
                                                                var submitButton = document.getElementById("submitButton");

                                                                var amount = parseFloat(amountInput.value);

                                                                if (isNaN(amount)) {
                                                                    resultElement.textContent = "Please enter a valid number.";
                                                                    submitButton.disabled = true;
                                                                } else if (amount < {{ $item->min_invest }}) {
                                                                    resultElement.textContent = "Entered amount must be at least {{ $item->min_invest }}.";
                                                                    submitButton.disabled = true;
                                                                } else {
                                                                    resultElement.textContent = "Entered amount is valid.";
                                                                    submitButton.disabled = false;
                                                                }
                                                            }

                                                            function submitAmount() {
                                                                var amountInput = document.getElementById("amountInput");
                                                                var amount = parseFloat(amountInput.value);
                                                                // Logic to submit the amount goes here
                                                                console.log("Amount submitted:", amount);
                                                            }
                                                        </script> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection

            @section('scripts')
                <script src="{{ asset('asset/js/code.jquery.com/jquery-3.7.1.js') }}"></script>
                <script src="{{ asset('asset/js/cdn.datatables.net/2.0.2/js/dataTables.js') }}"></script>
                <script>
                    new DataTable('#example', {
                        paging: false
                    });
                </script>
            @endsection
