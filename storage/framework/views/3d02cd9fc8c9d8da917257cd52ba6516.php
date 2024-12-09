

<?php $__env->startSection('title'); ?>
    <?php echo e(__('User Packages')); ?>

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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        

                        <div class="row">
                            <div class="col-12">

                                <table class="table-borderless table-striped" aria-describedby="mydesc"
                                       id="table_list" data-toggle="table" data-url="<?php echo e(route('package.users.show')); ?>"
                                       data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                       data-search-align="right" data-toolbar="#toolbar" data-show-columns="true"
                                       data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                                       data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                                       data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                                       data-escape="true"
                                       data-query-params="queryParams" data-table="packages"
                                       data-show-export="true" data-export-options='{"fileName": "user-package-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                                       data-mobile-responsive="true">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" data-field="id" data-align="center" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                        <th scope="col" data-field="user.name" data-align="center" data-sortable="false"><?php echo e(__('User Name')); ?></th>
                                        <th scope="col" data-field="package.name" data-align="center" data-sortable="false"><?php echo e(__('Package Name')); ?></th>
                                        <th scope="col" data-field="start_date" data-align="center"><?php echo e(__('Start Date')); ?></th>
                                        <th scope="col" data-field="end_date" data-align="center" data-formatter="unlimitedBadgeFormatter" data-sortable="true"><?php echo e(__('End Date')); ?></th>
                                        <th scope="col" data-field="total_limit" data-align="center" data-formatter="unlimitedBadgeFormatter" data-sortable="true"><?php echo e(__('Total Limit')); ?></th>
                                        <th scope="col" data-field="used_limit" data-align="center" data-sortable="true"><?php echo e(__('Used Limit')); ?></th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/packages/user.blade.php ENDPATH**/ ?>