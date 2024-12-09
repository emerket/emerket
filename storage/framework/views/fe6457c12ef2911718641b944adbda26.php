

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Send Notification')); ?>

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
    <div class="row">
        <section class="section">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-create')): ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form action="<?php echo e(route('notification.store')); ?>" class="create-form needs-validation" method="post" data-parsley-validate enctype="multipart/form-data">
                                <div class="card-body">
                                    <textarea id="user_id" name="user_id" style="visibility: hidden;position: absolute;" aria-label="user_id"></textarea>
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <label for="send_to" class="form-label"><?php echo e(__('Select User')); ?></label>
                                            <select id="send_to" name="send_to" class="form-control w-100 select2" required>
                                                <option value="all"><?php echo e(__('All')); ?></option>
                                                <option value="selected"><?php echo e(__('Selected Only')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <label for="title" class="form-label"><?php echo e(__('Title')); ?> </label> <span class="text-danger">*</span>
                                            <input name="title" id="title" type="text" class="form-control" placeholder=<?php echo e(__('Title')); ?> required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="message" class="form-label"><?php echo e(__('Message')); ?></label> <span class="text-danger">*</span>
                                            <textarea id="message" name="message" class="form-control" placeholder=<?php echo e(__('Message')); ?> required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-check">
                                                <input id="include_image" name="include_image" type="checkbox" class="form-check-input">
                                                <label for="include_image" class="form-check-label"><?php echo e(__('Include Image')); ?></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="show_image" style="display: none">
                                        <div class="col-md-12 col-sm-12">
                                            <label class="form-label"><?php echo e(__('Image')); ?></label>
                                            <input id="file" name="file" type="file" accept="image/*" class="form-control">
                                            <p style="display: none" id="img_error_msg" class="badge rounded-pill bg-danger"></p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12">
                                            <label for="item_id" class="form-label"><?php echo e(__('Item')); ?> </label>
                                            <select name="item_id" class="select2 form-select form-control-sm" data-parsley-minSelect='1' id="item_id">
                                                <option value=""> <?php echo e(__('Select Item')); ?> </option>
                                                <?php $__currentLoopData = $item_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($row->id); ?>" data-parametertypes='<?php echo e($row->name); ?>'><?php echo e($row->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit" name="submit"><?php echo e(__('Submit')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table table-borderless table-striped" aria-describedby="mydesc"
                                               id="user_notification_list" data-toggle="table" data-url="<?php echo e(route('customer.show',1)); ?>"
                                               data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                               data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                               data-toolbar="#toolbar" data-show-columns="true" data-show-refresh="true"
                                               data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                                               data-trim-on-search="false" data-responsive="true" data-sort-name="id"
                                               data-sort-order="desc" data-pagination-successively-size="3"
                                               data-escape="true"
                                               data-query-params="notificationUserList"
                                               data-mobile-responsive="true">
                                            
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" data-field="state" data-checkbox="true"></th>
                                                <th scope="col" data-field="id" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                                <th scope="col" data-field="name" data-sortable="true"><?php echo e(__('Name')); ?></th>
                                                <th scope="col" data-field="mobile" data-sortable="true"><?php echo e(__('Number')); ?></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="toolbar">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-delete')): ?>
                                    <a href="<?php echo e(route('notification.batch.delete')); ?>" class="btn btn-danger btn-sm btn-icon text-white" id="delete_multiple" title="Delete Notification"><em class='fa fa-trash'></em></a>
                                <?php endif; ?>
                            </div>
                            <table aria-describedby="mydesc" class='table-striped' id="table_list" data-toggle="table"
                                   data-url="<?php echo e(route('notification.show',1)); ?>" data-click-to-select="true"
                                   data-side-pagination="server" data-pagination="true"
                                   data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-toolbar="#toolbar"
                                   data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                                   data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                                   data-escape="true"
                                   data-responsive="true" data-sort-name="id" data-sort-order="desc"
                                   data-pagination-successively-size="3" data-show-export="true" data-export-options='{"fileName": "advertisement-package-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']">
                                <thead>
                                <tr>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-delete')): ?>
                                        <th scope="col" data-field="state" data-checkbox="true"></th>
                                    <?php endif; ?>
                                    <th scope="col" data-field="id" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                    <th scope="col" data-field="title" data-sortable="true"><?php echo e(__('Title')); ?></th>
                                    <th scope="col" data-field="message" data-sortable="true"><?php echo e(__('Message')); ?></th>
                                    <th scope="col" data-field="image" data-formatter="imageFormatter"><?php echo e(__('Image')); ?></th>
                                    <th scope="col" data-field="send_to" data-sortable="true"><?php echo e(__('Send To')); ?></th>
                                    
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('notification-delete')): ?>
                                        <th scope="col" data-field="operate" data-escape="false"><?php echo e(__('Action')); ?></th>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        // function responseHandler(res) {
        //     $.each(res.rows, function (i, row) {
        //         row.state = $.inArray(row.id, selections) !== -1
        //     })
        //     return res;
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/notification/index.blade.php ENDPATH**/ ?>