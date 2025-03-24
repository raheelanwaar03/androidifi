@extends('layout.app')

@section('links')
    <style>
        .hidden {
            display: none;
        }

        .copy-icon {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-blog">
                                        <h4 class="text-white d-inline">Admin Wallet Details</h4>
                                        <img src="{{ asset('asset/images/profile/1.jpg') }}" alt=""
                                            class="img-fluid mt-4 mb-4 w-100 rounded">
                                        <h4 class="text-white">Account Number : <span
                                                id="account-number">{{ $wallet->number }}</span>
                                            <span class="copy-icon btn btn-sm btn-primary"
                                                onclick="copyToClipboard('account-number')">Copy</span>
                                        </h4>
                                        <h4 class="text-white">User Name : {{ $wallet->onwer }}</h4>
                                        <h4 class="text-white">Type : {{ $wallet->type }}</h4>
                                        <h4 class="text-white">Minimum Amount : {{ $wallet->limit }}</h4>
                                        <hr>
                                        <p class="mb-0">Note : {{ $wallet->note }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <h4>Request For Deposit</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('User.Store.Deposit') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="container">
                                            <h2 style="text-align: center;">Deposit Amount</h2>
                                            <input type="number" name="amount" id="inputValue" class="form-control"
                                                placeholder="Enter a value">
                                            <input type="hidden" name="total" id="totalAmount">
                                            <div class="text-center">
                                                <div id="result"></div>
                                            </div>
                                            <div class="m-3">
                                                <button id="showInputs" class="btn btn-info">Pay</button>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div id="paymentDetails" class="hidden">
                                                <h3>Add Profe</h3>
                                                <div class="m-2">
                                                    <label for="formID">Transcation ID:</label>
                                                    <input type="text" name="trx" id="formID" class="form-control"
                                                        placeholder="Transcation ID">
                                                </div>
                                                <div class="m-3">
                                                    <label for="formFile" class="form-label">Screen Shot</label>
                                                    <input class="form-control" type="file" name="image"
                                                        id="formFile">
                                                </div>
                                                <div class="m-2">
                                                    <button id="uploadButton" class="btn btn-primary">Upload</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection


            @section('scripts')
                <script>
                    document.getElementById('showInputs').addEventListener('click', function() {
                        document.getElementById('paymentDetails').classList.remove('hidden');
                        document.getElementById('inputValue').readOnly = true;
                        this.disabled = true;
                    });

                    document.getElementById('uploadButton').addEventListener('click', function() {
                        // Your upload functionality goes here
                        alert('File uploaded successfully!');
                    });

                    document.getElementById('inputValue').addEventListener('input', function() {
                        var inputValue = parseFloat(this.value);
                        var percentage = inputValue * 0.01;
                        var totalAmount = inputValue + percentage;
                        var resultElement = document.getElementById('result');
                        var totalAmountInput = document.getElementById('totalAmount'); // Hidden input field for total amount
                        if (!isNaN(inputValue) && inputValue >= {{ $wallet->limit }}) {
                            resultElement.innerHTML =
                                `<p>1% of ${inputValue} is ${percentage.toFixed(2)}</p><p>Total Amount: ${totalAmount.toFixed(2)}</p>`;
                            totalAmountInput.value = totalAmount.toFixed(2); // Set the value of hidden input field
                        } else {
                            resultElement.innerHTML =
                                '<p>Please enter a value greater than or equal to {{ $wallet->limit }}</p>';
                            totalAmountInput.value = ''; // Clear the value if input value is invalid
                        }
                    });
                </script>
                <script>
                    function copyToClipboard(elementId) {
                        const el = document.getElementById(elementId); // Get the element containing the account number
                        const text = el.textContent.trim(); // Get the text content and remove extra whitespace

                        // Create a temporary input element
                        const tempInput = document.createElement("input");
                        tempInput.value = text;
                        document.body.appendChild(tempInput);

                        // Select the text in the input element
                        tempInput.select();
                        tempInput.setSelectionRange(0, 99999); /* For mobile devices */

                        // Copy the selected text to the clipboard
                        document.execCommand("copy");

                        // Remove the temporary input element
                        document.body.removeChild(tempInput);

                        // Provide some feedback to the user
                        alert("Account number copied to clipboard: " + text);
                    }
                </script>
            @endsection
