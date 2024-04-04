<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="mazer/assets/css/main/app.css">
    <link rel="stylesheet" href="mazer/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="mazer/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="mazer/assets/images/logo/favicon.png" type="image/png">
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-7 d-none d-lg-block bg-primary"
                                style="background-image: url('mazer/assets/images/bg/bggblue.jpg'); background-size: cover; background-position: center;">
                            </div>

                            <div class="col-lg-5">
                                <div class="card ms-2 me-2">
                                    <div class="card-body">
                                        <img src="mazer/assets/images/bg/bgR.png" style="width:35px"
                                            class="mx-auto d-block">
                                        <h3 class="auth text-center mt-2">LOGIN</h3>
                                        <p class="auth- mb-3">Log in with your data that you entered during
                                            registration.</p>

                                        @if ($errors->has('login'))
                                            <div class="alert alert-danger" id="errorAlert">
                                                <i class="bi bi-exclamation-circle"></i> {{ $errors->first('login') }}
                                            </div>
                                        @endif

                                        <div class="alert alert-warning d-none" id="alertWarning">
                                            <i class="bi bi-exclamation-circle"></i> Semua kolom wajib di isi
                                        </div>

                                        <form id="loginForm" action="{{ route('login.process') }}" method="POST">
                                            @csrf
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="text" class="form-control form-control"
                                                    placeholder="Email/Nomor telepon" name="login"
                                                    value="{{ old('email') }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="password" class="form-control form-control"
                                                    placeholder="Password" name="password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-shield-lock"></i>
                                                </div>
                                            </div>
                                            <a class="font-bold text-sm" href="auth-forgot-password.html">Forgot
                                                password?</a>

                                            <button type="button" id="submitButton"
                                                class="btn btn-primary btn-sm btn-block btn-lg shadow-lg mt-3">Log
                                                in</button>
                                            <hr class="my-4">
                                            <a href="/auth/redirect"
                                                class="btn btn-light btn-sm btn-block btn-lg shadow-lg">
                                                <img src="mazer/assets/images/bg/icgoogle.png" style="width: 25px"
                                                    alt="">
                                                Login with Google
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('submitButton').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara langsung

            var loginInput = document.getElementsByName('login')[0].value;
            var passwordInput = document.getElementsByName('password')[0].value;

            // Periksa apakah ada input yang kosong
            if (loginInput.trim() === '' || passwordInput.trim() === '') {
                document.getElementById('alertWarning').classList.remove('d-none');
            } else {
                // Jika tidak ada input yang kosong, submit formulir
                document.getElementById('loginForm').submit();
            }
        });
    </script>
    <script>
        setTimeout(function() {
            // document.getElementById('errorAlert').classList.add('d-none');
            document.getElementById('alertWarning').classList.add('d-none');
        }, 3000);
    </script>
    <script>
        setTimeout(function() {
            // document.getElementById('errorAlert').classList.add('d-none');
            document.getElementById('errorAlert').classList.add('d-none');
        }, 3000);
    </script>
</body>

</html>
