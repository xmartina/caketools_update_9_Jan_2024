<?php
include_once (rootDir . 'admin_auth/login/parts/header.php');
?>

<body>
<!-- Content -->

<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card p-2">
                <!-- Logo -->
                <div class="app-brand justify-content-center mt-5">
                    <a href="/" class="app-brand-link gap-2">
                        <img style="max-width: 190px;" src="/assets/images/logo/logo_dark.png" alt="Image">
                    </a>
                </div>
                <!-- /Logo -->

                <div class="card-body mt-2">
                    <div class="py-4">
                        <?php
                        if (isset($_GET['wrong-pass'])) {
                            echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                            your password is incorrect, please check and try again
                      </div>';
                        } elseif (isset($_GET['no-user'])) {
                            echo '<div class="error-msg text-danger pb-3 mb-2 text-center">
                                    Sorry this user was not found, please check and try again
                                  </div>';
                        } elseif (isset($_GET['login-success'])){
                            echo '<div class="success-msg text-success pb-3 mb-2 text-center">
                                    login successful, <a href="/admin">redirecting to dashboard</a>
                                  </div>';
                            ?>
                            <script>
                                function redirectToDashboard() {
                                    setTimeout(function () {
                                        window.location.href = '/admin';
                                    }, 3000);
                                }
                                window.onload = redirectToDashboard;
                            </script>
                        <?php } ?>
                    </div>
                    <h4 class="mb-2">Welcome Admin 👋</h4>
                    <p class="mb-4">Please sign-in to your account </p>

                    <form class="mb-3"  method="POST">
                        <div class="form-floating form-floating-outline mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="user_input"
                                placeholder="Enter your email or username"
                                autofocus />
                            <label for="email">Email or Username</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="password"
                                            id="password"
                                            class="form-control"
                                            name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                            <a href="javascript:void(0)" class="float-end mb-1">
                                <span>Forgot Password?</span>
                            </a>
                        </div>
                        <div class="mb-3">
                            <button name="admin_login" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>


                    <div class="divider my-4">
                        <div class="divider-text">or</div>
                    </div>
                </div>
            </div>
            <!-- /Login -->
            <img
                alt="mask"
                src="<?=adminUrl?>assets/img/illustrations/auth-basic-login-mask-light.png"
                class="authentication-image d-none d-lg-block"
                data-app-light-img="illustrations/auth-basic-login-mask-light.png"
                data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
        </div>
    </div>
</div>

<!-- / Content -->

<?php
include_once (rootDir . 'admin_auth/login/parts/footer.php');
?>