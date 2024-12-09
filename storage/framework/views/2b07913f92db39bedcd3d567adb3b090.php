<header>
    <nav class="navbar navbar-expand navbar-light" style="background-color: white;">
        <div class="container-fluid">

            <div class="col-6 row d-flex align-items-center">
                <div class="col-1 me-3 me-md-2">
                    <a href="#" class="burger-btn d-block"><i class="bi bi-justify fs-3"></i></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <?php if(config('app.demo_mode')): ?>
                    <div class="col-2">
                        <span class="badge alert-info primary-background-color">Demo Mode</span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-6 justify-content-end d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="dropdown">
                        <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar avatar-md2">
                                <button class="dropdown-btn">
                                    <?php if($currentLanguage): ?>
                                        <img src="<?php echo e($currentLanguage->image); ?>" alt="<?php echo e($currentLanguage->name); ?>" id="current-flag" class="flag">
                                        <span id="current-language"><?php echo e($currentLanguage->code); ?></span>
                                    <?php else: ?>
                                    <img src="<?php echo e($defaultLanguage->image); ?>" alt="<?php echo e($defaultLanguage->name); ?>" alt="default-language" id="current-flag" class="flag">
                                    <span id="current-language"><?php echo e($defaultLanguage->code); ?></span>
                                    <?php endif; ?>
                                    <span class="arrow">&#9662;</span>
                                </button>
                            </div>
                            <div class="text"></div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end topbarUserDropdown" aria-labelledby="topbarUserDropdown">
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('language.set-current', $language->code)); ?>">
                                        <img src="<?php echo e($language->image); ?>" alt="<?php echo e($language->name); ?>" class="flag"> <?php echo e($language->name); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    &nbsp;&nbsp;
                    <div class="dropdown">
                        <a href="#" id="topbarUserDropdown"
                           class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar avatar-md2">
                                <img src="<?php echo e(Auth::user()->profile == '' ? url('assets/images/faces/2.jpg') : Auth::user()->profile); ?> " alt="">
                            </div>
                            <div class="text">
                                <h6 class="user-dropdown-name"><?php echo e(Auth::user()->name); ?></h6>
                                <p class="user-dropdown-status text-sm text-muted"></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end topbarUserDropdown" aria-labelledby="topbarUserDropdown">
                            <li><a class="dropdown-item" href="<?php echo e(route('change-password.index')); ?>"><i class="icon-mid bi bi-gear me-2"></i><?php echo e(__("Change Password")); ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('change-profile.index')); ?>"><i class="icon-mid bi bi-person me-2"></i><?php echo e(__("Change Profile")); ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?> " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-mid bi bi-box-arrow-left me-2"></i> <?php echo e(__("Logout")); ?></a></li>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>