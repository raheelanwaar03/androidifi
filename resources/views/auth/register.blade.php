<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | Authentication</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/iofrm-theme6.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <x-alert />
    <div class="form-body">
        <div class="website-logo">
            <a href="{{ route('LandingPage') }}">
                <div>
                    <img class="logo-size" src="{{ asset('asset/logo.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('auth/images/graphic2.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome to the new univers of earning!</h3>
                        <p>Register your account and earn 50 free {{ env('APP_NAME') }} coin.</p>
                        <div class="page-links">
                            <a href="{{ route('login') }}"
                                class="{{ request()->is('login') ? 'active' : '' }}">Login</a><a
                                href="{{ route('register') }}"
                                class="{{ request()->is('register') ? 'active' : '' }}">Register</a>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="name" required>
                            <input class="form-control" type="eamil" name="email" placeholder="eamil" required>
                            <input class="form-control" type="number" name="phone" placeholder="phone" required
                                minlength="11">
                            <div class="d-flex">
                                <input class="form-control" type="password" id="password" name="password"
                                    placeholder="Password" required>
                                <i class="bi bi-eye" style="margin-left: -30px;margin-top:8px"
                                    onclick="togglePasswordVisibility('password')"></i>
                            </div>
                            <div class="d-flex">
                                <input class="form-control" type="password" id="confirm_password"
                                    name="password_confirmation" placeholder="Retype Password" required>
                                <i class="bi bi-eye" style="margin-left: -30px;margin-top:8px"
                                    onclick="togglePasswordVisibility('confirm_password')"></i>
                            </div>
                            <input class="form-control" type="text" name="referral" value="{{ $referral }}"
                                readonly>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button> <a
                                    href="{{ route('login') }}">Already have an account?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>

    <script src="{{ asset('auth/js/jquery.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}') }}') }}"></script>
</body>

</html>
