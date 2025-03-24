<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to bottom right, #5306e0, #0c71ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #5306e0;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            color: #333333;
            margin-top: 10px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #5306e0;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4504b8;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <h1>Email Verification</h1>
        <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we
            just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
        <div class="btn-container">
            <div class="d-flex justify-content-center align-items-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <x-primary-button class="btn btn-info">
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger mt-4" type="submit">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>

</body>

</html>
