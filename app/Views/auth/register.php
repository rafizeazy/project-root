<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mazer Admin Dashboard</title>
    <link rel="shortcut icon" href="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 33 34'%3e%3cpath d='M3 27.472c0 4.409 6.18 5.552 13.5 5.552 7.281 0 13.5-1.103 13.5-5.513s-6.179-5.552-13.5-5.552c-7.281 0-13.5 1.103-13.5 5.513z' fill='%23435ebe'/%3e%3ccircle cx='16.5' cy='8.8' r='8.8' fill='%2341bbdd'/%3e%3c/svg%3e" type="image/x-icon">
    <link rel="stylesheet" href="../assets/compiled/css/app.css">
    <link rel="stylesheet" href="../assets/compiled/css/auth.css">
</head>

<body>
    <script src="./assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form action="#" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
                    </form>

                    <div class="text-center mt-5">
                        <p class="text-gray-600">Already have an account? <a href="<?= base_url('login') ?>" class="font-bold">Log in</a>.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>