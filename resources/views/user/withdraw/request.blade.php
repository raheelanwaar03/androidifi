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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="text-center">Your Balance :
                                            ({{ number_format(auth()->user()->balance, 2) }})</h3>
                                        <p class="text-center"><span class="bold">Note:</span> Fee will be deducted from
                                            you requested amount</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('User.Store.Withdraw.Request') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="container">
                                            <div>
                                                <h3 class="text-center">Withdraw Form</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group mt-2">
                                                        <label for="amount" class="form-label">Withdraw Amount</label>
                                                        <input type="number" class="form-control" name="amount"
                                                            id="amount" placeholder="Enter Amount you want to withdraw"
                                                            required>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="account" class="form-label">Wallet</label>
                                                        <input type="text" class="form-control" name="account"
                                                            id="account" placeholder="Enter your wallet" required>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="user_name" class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="user_name" placeholder="Username" required>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="type" class="form-label">Type</label>
                                                        <select name="type" id="type" class="form-control" style="color:black">
                                                            <option value="Bep20">Bep20</option>
                                                            <option value="Trc20">Trc20</option>
                                                        </select>
                                                    </div>
                                                    <div class="m-2">
                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary">Submit</button>
                                                    </div>
                                                </div>
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
                        if (!isNaN(inputValue) && inputValue >= 100) {
                            resultElement.innerHTML =
                                `<p>1% of ${inputValue} is ${percentage.toFixed(2)}</p><p>Total Amount: ${totalAmount.toFixed(2)}</p>`;
                            totalAmountInput.value = totalAmount.toFixed(2); // Set the value of hidden input field
                        } else {
                            resultElement.innerHTML =
                                '<p>Please enter a value greater than or equal to 100</p>';
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
