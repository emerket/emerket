<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-block">
                <div class="logo text-center">
                    <a href="<?php echo e(url('home')); ?>">
                        <img src="<?php echo e($company_logo ?? ''); ?>" data-custom-image="<?php echo e(url('assets/images/logo/sidebar_logo.png')); ?>" alt="Logo" srcset="">
                    </a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="<?php echo e(url('home')); ?>" class='sidebar-link'>
                        <i class="bi  bi-house"></i>
                        <span class="menu-item"><?php echo e(__('Dashboard')); ?></span>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['category-list','category-create','category-update','category-delete','custom-field-list','custom-field-create','custom-field-update','custom-field-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Ads Listing')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['category-list','category-create','category-update','category-delete'])): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('category.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-list-task"></i>
                                <span class="menu-item"><?php echo e(__('Categories')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['custom-field-list','custom-field-create','custom-field-update','custom-field-delete'])): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('custom-fields.index')); ?> " class='sidebar-link'>
                                <i class="bi bi-columns-gap"></i>
                                <span class="menu-item"><?php echo e(__('Custom Fields')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-list','item-create','item-update','item-delete','tip-list','tip-create','tip-update','tip-delete'])): ?>

                    <div class="sidebar-new-title"><?php echo e(__('Items Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-list','item-create','item-update','item-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(Route('item.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-ui-radios-grid"></i>
                                <span class="menu-item"><?php echo e(__('Items')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['tip-list','tip-create','tip-update','tip-delete'])): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('tips.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-info-circle"></i>
                                <span class="menu-item"><?php echo e(__('Tips')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>


                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-listing-package-list','item-listing-package-create','item-listing-package-update','item-listing-package-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Package Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-listing-package-list','item-listing-package-create','item-listing-package-update','item-listing-package-delete','advertisement-package-list','advertisement-package-create','advertisement-package-update','advertisement-package-delete'])): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('package.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-list"></i>
                                <span class="menu-item"><?php echo e(__('Item Listing Package')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['advertisement-package-list','advertisement-package-create','advertisement-package-update','advertisement-package-delete','user-package-list'])): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('package.advertisement.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-badge-ad"></i>
                                <span class="menu-item"><?php echo e(__('Advertisement Package')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-package-list')): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('package.users.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span class="menu-item"><?php echo e(__('User Packages')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment-transactions-list')): ?>
                        <li class="sidebar-item sidebar-submenus">
                            <a href="<?php echo e(route('package.payment-transactions.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-cash-coin"></i>
                                <span class="menu-item"><?php echo e(__('Payment Transactions')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['seller-verification-field-list','seller-verification-field-create','seller-verification-field-update','seller-verification-field-delete','seller-verification-request-list','seller-verification-request-create','seller-verification-request-update','seller-verification-request-delete','seller-review-list','seller-review-update','seller-review-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Seller Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['seller-verification-request-list','seller-verification-request-create','seller-verification-request-update','seller-verification-request-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('seller-verification.verification-field')); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-1x2"></i>
                                <span class="menu-item"><?php echo e(__('Verification Fields')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['seller-verification-field-list','seller-verification-field-create','seller-verification-field-update','seller-verification-field-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('seller-verification.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-sliders2"></i>
                                <span class="menu-item"><?php echo e(__('Seller Verification')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['seller-review-list','seller-review-update','seller-review-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('seller-review.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-star-half"></i>
                                <span class="menu-item"><?php echo e(__('Seller Review')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['seller-review-list','seller-review-update','seller-review-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('seller-review.create')); ?>" class='sidebar-link'>
                                <i class="bi bi-list-stars"></i>
                                <span class="menu-item"><?php echo e(__('Seller Review Report')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['slider-list','slider-create','slider-update','slider-delete','feature-section-list','feature-section-create','feature-section-update','feature-section-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Home Screen Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['slider-list','slider-create','slider-update','slider-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(url('slider')); ?>" class='sidebar-link'>
                                <i class="bi bi-sliders2"></i>
                                <span class="menu-item"><?php echo e(__('Slider')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['feature-section-list','feature-section-create','feature-section-update','feature-section-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('feature-section.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-1x2"></i>
                                <span class="menu-item"><?php echo e(__('Feature Section')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['country-list','country-create','country-update','country-delete','state-list','state-create','state-update','state-delete','city-list','city-create','city-update','city-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Place/Location Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['country-list','country-create','country-update','country-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('countries.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-globe"></i>
                                <span class="menu-item"><?php echo e(__('Countries')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['state-list','state-create','state-update','state-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('states.index')); ?>" class='sidebar-link'>
                                <i class="fa fa-map-marked-alt"></i>
                                <span class="menu-item"><?php echo e(__('States')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['city-list','city-create','city-update','city-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('cities.index')); ?>" class='sidebar-link'>
                                <i class="fa fa-map-marker-alt"></i>
                                <span class="menu-item"><?php echo e(__('Cities')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['area-list','area-create','area-update','area-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('area.index')); ?>" class='sidebar-link'>
                                <i class="fa fa-map-marker"></i>
                                <span class="menu-item"><?php echo e(__('Areas')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['report-reason-list','report-reason-create','report-reason-update','report-reason-delete','user-report-list','user-report-create','user-report-update','user-report-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Reports Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['report-reason-list','report-reason-create','report-reason-update','report-reason-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('report-reasons.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-flag"></i>
                                <span class="menu-item"><?php echo e(__('Report Reasons')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['user-report-list','user-report-create','user-report-update','user-report-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('report-reasons.user-reports.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span class="menu-item"><?php echo e(__('User Reports')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['custom-field-list','custom-field-create','custom-field-update','custom-field-delete','customer-list','customer-create','customer-update','customer-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Promotional Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['custom-field-list','custom-field-create','custom-field-update','custom-field-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(url('notification')); ?>" class='sidebar-link'>
                                <i class="bi bi-bell"></i>
                                <span class="menu-item"><?php echo e(__('Send Notification')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['customer-list','customer-create','customer-update','customer-delete'])): ?>
                        <div class="sidebar-new-title"><?php echo e(__('Customers')); ?></div>
                        <li class="sidebar-item">
                            <a href="<?php echo e(url('customer')); ?>" class='sidebar-link'>
                                <i class="bi bi-people"></i>
                                <span class="menu-item"><?php echo e(__('Customers')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','role-create','role-update','role-delete','staff-list','staff-create','staff-update','staff-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Staff Management')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['role-list','role-create','role-update','role-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('roles.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-person-bounding-box"></i>
                                <span class="menu-item"><?php echo e(__('Role')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['staff-list','staff-create','staff-update','staff-delete'])): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('staff.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-gear"></i>
                                <span class="menu-item"><?php echo e(__('Staff Management')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['blog-ist','blog-create','blog-update','blog-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('Blog Management')); ?></div>
                    <li class="sidebar-item">
                        <a href="<?php echo e(route('blog.index')); ?>" class='sidebar-link'>
                            <i class="bi bi-pencil"></i>
                            <span class="menu-item"><?php echo e(__('Blogs')); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['faq-create','faq-list','faq-update','faq-delete'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('FAQ')); ?></div>
                    <li class="sidebar-item">
                        <a href="<?php echo e(route('faq.index')); ?>" class='sidebar-link'>
                            <i class="bi bi-question-square-fill"></i>
                            <span class="menu-item"><?php echo e(__('FAQs')); ?></span>
                        </a>
                    </li>

                <?php endif; ?>


                <div class="sidebar-new-title"><?php echo e(__('Web')); ?></div>
                <li class="sidebar-item">
                    <a href="<?php echo e(route('contact-us.index')); ?>" class='sidebar-link'>
                        <i class="bi bi-person-bounding-box"></i>
                        <span class="menu-item"><?php echo e(__('User Queries')); ?></span>
                    </a>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['settings-update'])): ?>
                    <div class="sidebar-new-title"><?php echo e(__('System Settings')); ?></div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings-update')): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('settings.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-gear"></i>
                                <span class="menu-item"><?php echo e(__('Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(\Illuminate\Support\Facades\Auth::user()->hasRole('Super Admin')): ?>
                        <li class="sidebar-item">
                            <a href="<?php echo e(route('system-update.index')); ?>" class='sidebar-link'>
                                <i class="bi bi-laptop"></i>
                                <span class="menu-item"><?php echo e(__('System Update')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>