<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e($favicon ?? url('assets/images/logo/logo.png')); ?>" type="image/x-icon">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href=" <?php echo e(asset('assets/css/pages/auth.css')); ?>">
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
</head>

<body>
<div id="auth" class="login_bg" style="background-image: url('<?php echo e($login_bg_image??''); ?>');">
    <img src="<?php echo e($login_bg_image ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/bg/login.jpg')); ?>" alt="" style="display: none" id="bg_image">
    <div class="justify-content-md-end justify-content-sm-center login-box d-flex align-items-center">
        <div class="col-lg-3 col-12 card" id="auth-box">
            <div class="auth-logo mb-5 d-block">
                <img id="company_logo" src="<?php echo e($company_logo ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/sidebar_logo.png')); ?>" alt="Logo">
            </div>
            <div class="center mtop-75">
                <div class='login_heading'>
                    <h3>Hi, Welcome Back!</h3>
                    <p>Enter your details to sign in to your account.</p>
                </div>

                <div class="pt-4">
                    <form method="POST" action="<?php echo e(route('login')); ?>" id="frmLogin">
                        <?php echo csrf_field(); ?>
                        <div class="form-group position-relative form-floating mb-4">
                            <input id="email" type="email" placeholder="<?php echo e(__("Email")); ?>" class="form-control login-border form-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <label for="email"><?php echo e(__("Email address")); ?></label>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="form-group position-relative form-floating has-icon-right mb-4"
                             id="pwd">
                            <input id="password" type="password" placeholder="Password" class="form-control login-border form-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                            <label for="password">Password</label>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="form-control-icon icon-right">
                                <i class="bi bi-eye" id='toggle_pass'></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-sm shadow-lg mt-3 login_btn">Log in</button>
                        <?php if(config('app.demo_mode')): ?>
                            <div class="text-danger text-center mt-2" role="alert">
                                If you cannot login, then Click Here.
                                <br><a class="text-decoration-underline" target="_blank" href="<?php echo e(Request::root()); ?>"><?php echo e(Request::root()); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if(config('app.demo_mode')): ?>
                            <div class="row mt-3">
                                <hr class="w-100">
                                <div class="col-12 text-center text-black-50">Demo Credentials</div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button class="btn w-100 btn-info mt-2" id="admin_btn">Admin</button>
                                </div>

                                <div class="col-md-6">
                                    <button class="btn w-100 btn-info mt-2" id="staff_btn">Staff</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#toggle_pass").on('click', function () {
        $(this).toggleClass("bi bi-eye bi-eye-slash");
        let input = $('[name="password"]');
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $('#bg_image').on('error', function () {
        this.src = $(this).data('custom-image');
        $('.login_bg').css('background-image', "url(" + $(this).data('custom-image') + ")");
    });
    $('#company_logo').on('error', function () {
        this.src = $(this).data('custom-image');
    });

    <?php if(config('app.demo_mode')): ?>
    // Super admin panel
    $('#admin_btn').on('click', function () {
        $('#email').val('admin@gmail.com');
        $('#password').val('admin123');
        $('.login_btn').attr('disabled', true);
        $(this).attr('disabled', true);
        $('#frmLogin').submit();
    })

    $('#staff_btn').on('click', function () {
        $('#email').val('staff@gmail.com');
        $('#password').val('Staff@123');
        $('.login_btn').attr('disabled', true);
        $(this).attr('disabled', true);
        $('#frmLogin').submit();
    })

    <?php endif; ?>
</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/auth/login.blade.php ENDPATH**/ ?>