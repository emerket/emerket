

<?php $__env->startSection('title'); ?>
    <?php echo e(__('System Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4><?php echo $__env->yieldContent('title'); ?></h4>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <form class="create-form-without-reset" action="<?php echo e(route('settings.store')); ?>" method="post" enctype="multipart/form-data" data-success-function="successFunction" data-parsley-validate>
            <?php echo csrf_field(); ?>
            <div class="row d-flex mb-3">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('Company Details')); ?></h6>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group mandatory">
                                    <label for="company_name" class="col-sm-6 col-md-6 form-label mt-1"><?php echo e(__('Company Name')); ?></label>
                                    <input name="company_name" type="text" class="form-control" id="company_name" placeholder="<?php echo e(__('Company Name')); ?>" value="<?php echo e($settings['company_name'] ?? ''); ?>" required>
                                </div>
                                <div class="col-sm-12 form-group mandatory">
                                    <label for="company_email" class="col-sm-12 col-md-6 form-label mt-1"><?php echo e(__('Email')); ?></label>
                                    <input id="company_email" name="company_email" type="email" class="form-control" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e($settings['company_email'] ?? ''); ?>" required>
                                </div>

                                <div class="col-sm-12 form-group mandatory">
                                    <label for="company_tel1" class="col-sm-12 col-md-6 form-label mt-1"><?php echo e(__('Contact Number')." 1"); ?></label>
                                    <input id="company_tel1" name="company_tel1" type="text" class="form-control" placeholder="<?php echo e(__('Contact Number')." 1"); ?>" maxlength="16" onKeyDown="if(this.value.length==16 && event.keyCode!=8) return false;" value="<?php echo e($settings['company_tel1'] ?? ''); ?>" required>
                                </div>

                                <div class="col-sm-12">
                                    <label for="company_tel2" class="col-sm-12 col-md-6 form-label mt-1"><?php echo e(__('Contact Number')." 2"); ?></label>
                                    <input id="company_tel2" name="company_tel2" type="text" class="form-control" placeholder="<?php echo e(__('Contact Number')." 2"); ?>" maxlength="16" onKeyDown="if(this.value.length==16 && event.keyCode!=8) return false;" value="<?php echo e($settings['company_tel2'] ?? ''); ?>">
                                </div>

                                <div class="col-sm-12">
                                    <label for="company_address" class="col-sm-12 col-md-6 form-label mt-1"><?php echo e(__('Address')); ?></label>
                                    <textarea id="company_address" name="company_address" type="text" class="form-control" placeholder="<?php echo e(__('Address')); ?>"><?php echo e($settings['company_address'] ?? ''); ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('More Setting')); ?></h6>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12 col-md-6 col-xs-12 mandatory">
                                    <label for="default_language" class="form-label "><?php echo e(__('Default Language')); ?></label>
                                    <select name="default_language" id="default_language" class="form-select form-control-sm">
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($row); ?>

                                            <option value="<?php echo e($row->code); ?>"
                                                <?php echo e($settings['default_language'] == $row->code ? 'selected' : ''); ?>>
                                                <?php echo e($row->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-xs-12 mandatory">
                                    <label for="currency_symbol" class="form-label"><?php echo e(__('Currency Symbol')); ?></label>
                                    <input id="currency_symbol" name="currency_symbol" type="text" class="form-control" placeholder="<?php echo e(__('Currency Symbol')); ?>" value="<?php echo e($settings['currency_symbol'] ?? ''); ?>" required="">
                                </div>

                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="android_version" class="form-label "><?php echo e(__('Android Version')); ?></label>
                                    <input id="android_version" name="android_version" type="text" class="form-control" placeholder="<?php echo e(__('Android Version')); ?>" value="<?php echo e($settings['android_version']?? ''); ?>" required="">
                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="play_store_link" class="form-label "><?php echo e(__('Play Store Link')); ?></label>
                                    <input id="play_store_link" name="play_store_link" type="url" class="form-control" placeholder="<?php echo e(__('Play Store Link')); ?>" value="<?php echo e($settings['play_store_link'] ?? ''); ?>">
                                </div>


                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="ios_version" class="form-label "><?php echo e(__('IOS Version')); ?></label>
                                    <input id="ios_version" name="ios_version" type="text" class="form-control" placeholder="<?php echo e(__('IOS Version')); ?>" value="<?php echo e($settings['ios_version'] ?? ''); ?>" required="">
                                </div>

                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="app_store_link" class="form-label "><?php echo e(__('App Store Link')); ?></label>
                                    <input id="app_store_link" name="app_store_link" type="url" class="form-control" placeholder="<?php echo e(__('App Store Link')); ?>" value="<?php echo e($settings['app_store_link'] ?? ''); ?>">
                                </div>


                                <div class="form-group col-sm-12 col-md-4">
                                    <label class="form-label "><?php echo e(__('Maintenance Mode')); ?></label>
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="maintenance_mode" id="maintenance_mode" class="checkbox-toggle-switch-input" value="<?php echo e($settings['maintenance_mode'] ?? 0); ?>">
                                        <input class="form-check-input checkbox-toggle-switch" type="checkbox" role="switch" <?php echo e($settings['maintenance_mode'] == '1' ? 'checked' : ''); ?> id="switch_maintenance_mode">
                                        <label class="form-check-label" for="switch_maintenance_mode"></label>
                                    </div>
                                </div>

                                <div class="form-group col-sm-12 col-md-4">
                                    <label class="form-label"><?php echo e(__('Force Update')); ?></label>
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="force_update" id="force_update" class="checkbox-toggle-switch-input" value="<?php echo e($settings['force_update'] ?? 0); ?>">
                                        <input class="form-check-input checkbox-toggle-switch" type="checkbox" role="switch" <?php echo e($settings['force_update'] == '1' ? 'checked' : ''); ?>id="switch_force_update">
                                        <label class="form-check-label" for="switch_force_update"></label>
                                    </div>
                                </div>

                                <div class="form-group col-sm-12 col-md-4">
                                    <label class="form-check-label"><?php echo e(__('Number With Suffix')); ?></label>
                                    <div class="form-check form-switch  ">
                                        <input type="hidden" name="number_with_suffix" id="number_with_suffix" class="checkbox-toggle-switch-input" value="<?php echo e($settings['number_with_suffix'] ?? 0); ?>">
                                        <input class="form-check-input checkbox-toggle-switch" type="checkbox" role="switch" <?php echo e($settings['number_with_suffix'] == '1' ? 'checked' : ''); ?> id="switch_number_with_suffix" aria-label="switch_number_with_suffix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="divider pt-3">
                                <h6 class="divider-text"><?php echo e(__('FCM Notification Settings')); ?></h6>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-6 col-sm-12">
                                    <label for="firebase_project_id" class="form-label"><?php echo e(__('Firebase Project Id')); ?></label>
                                    <input type="text" id="firebase_project_id" name="firebase_project_id" class="form-control" placeholder="<?php echo e(__('Firebase Project Id')); ?>" value="<?php echo e($settings['firebase_project_id'] ?? ''); ?>"/>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="service_file" class="form-label"><?php echo e(__('Service Json File')); ?></label><span style="color: #00B2CA"><?php echo e(__('(Accept only Json File)')); ?></span>
                                    <input id="service_file" name="service_file" type="file" class="form-control">
                                    <p style="display: none" id="img_error_msg" class="badge rounded-pill bg-danger"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Images')); ?></h6>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                            <label class=" col-form-label "><?php echo e(__('Favicon Icon')); ?></label>
                            <input class="filepond" type="file" name="favicon_icon" id="favicon_icon">
                            <img src="<?php echo e($settings['favicon_icon'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/favicon.png')); ?>" class="mt-2 favicon_icon" alt="image" style=" height: 31%;width: 21%;">
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label class="form-label "><?php echo e(__('Company Logo')); ?></label>
                            <input class="filepond" type="file" name="company_logo" id="company_logo">
                            <img src="<?php echo e($settings['company_logo'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/logo.png')); ?>" class="mt-2 company_logo" alt="image" style="height: 31%;width: 21%;">
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label class="form-label "><?php echo e(__('Login Page Image')); ?></label>
                            <input class="filepond" type="file" name="login_image" id="login_image">
                            <img src="<?php echo e($settings['login_image'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/bg/login.jpg')); ?>" class="mt-2 login_image" alt="image" style="height: 31%;width: 21%;">
                        </div>
                        <div class="form-group col-md-4 col-sm-12">
                            <label class="form-label "><?php echo e(__('Watermark Image')); ?></label>
                            <input class="filepond" type="file" name="watermark_image" id="watermark_image">
                            <img src="<?php echo e($settings['watermark_image'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/watermark.png')); ?>" class="mt-2 watermark_image" alt="image" style="height: 31%;width: 21%;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Web Settings')); ?></h6>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="web_theme_color" class="form-label "><?php echo e(__('Theme Color')); ?></label>
                            <input id="web_theme_color" name="web_theme_color" type="color" class="form-control form-control-color" placeholder="<?php echo e(__('Theme Color')); ?>" value="<?php echo e($settings['web_theme_color'] ?? ''); ?>">
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="place_api_key" class="form-label "><?php echo e(__('Place API Key')); ?></label>
                            <input class="form-control" type="text" name="place_api_key" id="place_api_key" value="<?php echo e($settings['place_api_key'] ?? ''); ?>">
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label "><?php echo e(__('Header Logo')); ?></label>
                            <input class="filepond" type="file" name="header_logo" id="header_logo">
                            <img src="<?php echo e($settings['header_logo'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/Header Logo.svg')); ?>" class="w-25" alt="image">
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label "><?php echo e(__('Footer Logo')); ?></label>
                            <input class="filepond" type="file" name="footer_logo" id="footer_logo">
                            <img src="<?php echo e($settings['footer_logo'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/Footer Logo.svg')); ?>" class="w-25" alt="image">
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label "><?php echo e(__('Placeholder image')); ?> <small><?php echo e(__('(This image will be displayed if no image is available.)')); ?></small></label>
                            <input class="filepond" type="file" name="placeholder_image" id="placeholder_image">
                            <img src="<?php echo e($settings['placeholder_image'] ?? ''); ?>" data-custom-image="<?php echo e(asset('assets/images/logo/favicon.png')); ?>" alt="image" style="height: 31%;width: 21%;">
                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="footer_description" class="form-label "><?php echo e(__('Footer Description')); ?></label>
                            <textarea id="footer_description" name="footer_description" class="form-control" rows="5" placeholder="<?php echo e(__('Footer Description')); ?>"><?php echo e($settings['footer_description'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="google_map_iframe_link" class="form-label "><?php echo e(__('Google Map Iframe Link')); ?></label>
                            <textarea id="google_map_iframe_link" name="google_map_iframe_link" type="text" class="form-control" rows="5" placeholder="<?php echo e(__('Google Map Iframe Link')); ?>"><?php echo e($settings['google_map_iframe_link'] ?? ''); ?></textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="google_map_iframe_link" class="form-label "><?php echo e(__('Default Latitude & Longitude')); ?> <small><?php echo e(__('(For Default Location Selection)')); ?></small></label>
                            <div class="form-group">
                                <label for="default_latitude" class="form-label "><?php echo e(__('Latitude')); ?></label>
                                <input id="default_latitude" name="default_latitude" type="text" class="form-control" placeholder="<?php echo e(__('Latitude')); ?>" value="<?php echo e($settings['default_latitude'] ?? ''); ?>">
                                <label for="default_longitude" class="form-label "><?php echo e(__('Longitude')); ?></label>
                                <input id="default_longitude" name="default_longitude" type="text" class="form-control" placeholder="<?php echo e(__('Longitude')); ?>" value="<?php echo e($settings['default_longitude'] ?? ''); ?>">
                            </div>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label"><?php echo e(__('Show Landing Page')); ?></label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="show_landing_page" value="0">
                                <input class="form-check-input" type="checkbox" id="show_landing_page" name="show_landing_page" value="1" <?php echo e(isset($settings['show_landing_page']) && $settings['show_landing_page'] == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="show_landing_page">
                                    <?php echo e(__('On / Off')); ?>

                                </label>
                            </div>
                        </div>

                        <div class="divider pt-3">
                            <h6 class="divider-text"><?php echo e(__('Social Media Links')); ?></h6>
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="instagram_link" class="form-label "><?php echo e(__('Instagram Link')); ?></label>
                            <input id="instagram_link" name="instagram_link" type="url" class="form-control" placeholder="<?php echo e(__('Instagram Link')); ?>" value="<?php echo e($settings['instagram_link'] ?? ''); ?>">
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="x_link" class="form-label "><?php echo e(__('X Link')); ?></label>
                            <input id="x_link" name="x_link" type="url" class="form-control" placeholder="<?php echo e(__('X Link')); ?>" value="<?php echo e($settings['x_link'] ?? ''); ?>">
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="facebook_link" class="form-label "><?php echo e(__('Facebook Link')); ?></label>
                            <input id="facebook_link" name="facebook_link" type="url" class="form-control" placeholder="<?php echo e(__('Facebook Link')); ?>" value="<?php echo e($settings['facebook_link'] ?? ''); ?>">
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="linkedin_link" class="form-label "><?php echo e(__('Linkedin Link')); ?></label>
                            <input id="linkedin_link" name="linkedin_link" type="url" class="form-control" placeholder="<?php echo e(__('Linkedin Link')); ?>" value="<?php echo e($settings['linkedin_link'] ?? ''); ?>">
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="pinterest_link" class="form-label "><?php echo e(__('Pinterest Link')); ?></label>
                            <input id="pinterest_link" name="pinterest_link" type="url" class="form-control" placeholder="<?php echo e(__('Pinterest Link')); ?>" value="<?php echo e($settings['pinterest_link'] ?? ''); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Deep Link')); ?></h6>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-6 col-sm-12">
                            <label for="deep_link_text_file" class="form-label"><?php echo e(__('Apple App Site Association File')); ?></label>
                            <input id="deep_link_text_file" name="deep_link_text_file" type="file" class="form-control">
                            <p style="display: none" id="img_error_msg" class="badge rounded-pill bg-danger"></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="deep_link_json_file" class="form-label"><?php echo e(__('Assetlinks File')); ?></label>
                            <input id="deep_link_json_file" name="deep_link_json_file" type="file" class="form-control">
                            <p style="display: none" id="img_error_msg" class="badge rounded-pill bg-danger"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="divider pt-3">
                        <h6 class="divider-text"><?php echo e(__('Authentication Setting (Enable/Disable)')); ?></h6>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label"><?php echo e(__('Mobile Authentication')); ?></label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="mobile_authentication" value="0">
                                <input class="form-check-input" type="checkbox" id="mobile_authentication" name="mobile_authentication" value="1" <?php echo e(isset($settings['mobile_authentication']) && $settings['mobile_authentication'] == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="google_authentication">
                                    <?php echo e(__('On / Off')); ?>

                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label"><?php echo e(__('Google Authentication')); ?></label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="google_authentication" value="0">
                                <input class="form-check-input" type="checkbox" id="google_authentication" name="google_authentication" value="1" <?php echo e(isset($settings['google_authentication']) && $settings['google_authentication'] == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="google_authentication">
                                    <?php echo e(__('On / Off')); ?>

                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label"><?php echo e(__('Email Authentication')); ?></label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="email_authentication" value="0">
                                <input class="form-check-input" type="checkbox" id="email_authentication" name="email_authentication" value="1" <?php echo e(isset($settings['email_authentication']) && $settings['email_authentication'] == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="email_authentication">
                                    <?php echo e(__('On / Off')); ?>

                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="form-label"><?php echo e(__('Apple Authentication')); ?></label>
                            <div class="form-check form-switch">
                                <input type="hidden" name="apple_authentication" value="0">
                                <input class="form-check-input" type="checkbox" id="email_authentication" name="apple_authentication" value="1" <?php echo e(isset($settings['apple_authentication']) && $settings['apple_authentication'] == 1 ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="apple_authentication">
                                    <?php echo e(__('On / Off')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <button type="submit" value="btnAdd" class="btn btn-primary me-1 mb-3"><?php echo e(__('Save')); ?></button>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function successFunction() {
            window.location.reload();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/settings/system.blade.php ENDPATH**/ ?>