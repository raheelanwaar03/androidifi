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
                        <h3>Welcome back to {{ env('APP_NAME') }}!</h3>
                        <p>Login in to your account and start earning.</p>
                        <div class="page-links">
                            <a href="{{ route('login') }}"
                                class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a><a
                                href="{{ route('register') }}"
                                class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address"
                                required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            <i class="bi bi-eye" style="float:right;margin-top:-44px;margin-right:10px;"
                                id="togglePassword"></i>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a
                                    href="{{ route('password.request') }}">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');

        toggleButton.addEventListener('click', () => {
            // Toggle the type attribute
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

        });
    </script>

    <script src="{{ asset('auth/js/jquery.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}') }}') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}') }}') }}"></script>
</body>

</html>
