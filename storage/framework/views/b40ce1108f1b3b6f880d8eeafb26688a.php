
<?php $__env->startSection('title'); ?>
    <?php echo e(__("Custom Fields")); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="page-title">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-6">
                <h4 class="mb-0"><?php echo $__env->yieldContent('title'); ?></h4>
            </div>
            <div class="col-12 col-md-6 text-end">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('custom-field-create')): ?>
                    <a href="<?php echo e(route('custom-fields.create', ['id' => 0])); ?>" class="btn btn-primary mb-0">+ <?php echo e(__("Create Custom Field")); ?> </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div id="filters">
                            <label for="filter"><?php echo e(__("Category")); ?></label>
                            <select name="category" class="form-control bootstrap-table-filter-control-category_names" aria-label="category">
                                <option value=""><?php echo e(__("All")); ?></option>
                                <?php echo $__env->make('category.dropdowntree', ['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </select>
                        </div>
                        <table class="stable-borderless table-striped" aria-describedby="mydesc" id="table_list"
                               data-toggle="table" data-url="<?php echo e(route('custom-fields.show',1)); ?>" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"
                               data-search="true" data-search-align="right" data-toolbar="#filters" data-show-columns="true"
                               data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1" data-fixed-right-number="1"
                               data-trim-on-search="false" data-responsive="true" data-sort-name="id" data-sort-order="desc"
                               data-pagination-successively-size="3"
                               data-escape="true"
                               data-show-export="true" data-export-options='{"fileName": "custom-field-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                               data-mobile-responsive="true" data-filter-control="true" data-filter-control-container="#filters">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" data-field="state" data-checkbox="true"></th>
                                <th scope="col" data-field="id" data-align="center" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                <th scope="col" data-field="image" data-align="center" data-formatter="imageFormatter"><?php echo e(__('Image')); ?></th>
                                <th scope="col" data-field="name" data-align="center" data-sortable="true"><?php echo e(__('Name')); ?></th>
                                <th scope="col" data-field="category_names" data-align="center" data-filter-name="category_id" data-filter-control="select" data-filter-data=""><?php echo e(__('Category')); ?></th>
                                <th scope="col" data-field="type" data-align="center" data-sortable="true"><?php echo e(__('Type')); ?></th>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['custom-field-update','custom-field-delete'])): ?>
                                    <th scope="col" data-field="operate" data-escape="false" data-sortable="false"><?php echo e(__('Action')); ?></th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/custom-fields/index.blade.php ENDPATH**/ ?>