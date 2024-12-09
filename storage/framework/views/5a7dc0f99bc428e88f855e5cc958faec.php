

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Item Listing Packages')); ?>

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
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('item-listing-package-create')): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card">
                            <?php echo Form::open(['route' => 'package.store', 'data-parsley-validate', 'files' => true,'class'=>'create-form', 'data-pre-success-function'=>'preSuccessFunction']); ?>

                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-12 col-12 form-group mandatory">
                                        <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label col-12 '])); ?>

                                        <?php echo e(Form::text('name', '', [
                                            'class' => 'form-control ',
                                            'placeholder' => __("Package Name"),
                                            'data-parsley-required' => 'true',
                                            'id' => 'name',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-12 col-12 form-group">
                                        <?php echo e(Form::label('ios_product_id', __('IOS Product ID'), ['class' => 'form-label col-12 '])); ?>

                                        <?php echo e(Form::text('ios_product_id', '', [
                                            'class' => 'form-control ',
                                            'placeholder' => __("IOS Product ID"),
                                            'id' => 'ios_product_id',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-6 col-12 form-group mandatory">
                                        <?php echo e(Form::label('price', __('Price') . ' (' . $currency_symbol . ')', [
                                            'class' => 'form-label col-12 ',
                                        ])); ?>

                                        <?php echo e(Form::number('price', 0, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Package Price'),
                                            'data-parsley-required' => 'true',
                                            'id' => 'price',
                                            'min' => '0',
                                            'step'=>0.01,
                                            'data-parsley-field-name'=>'price',

                                        ])); ?>

                                    </div>

                                    <div class="col-md-6 col-12 form-group mandatory">
                                        <?php echo e(Form::label('discount_in_percentage', __('Discount') . ' (%)', [
                                            'class' => 'form-label col-12 ',
                                        ])); ?>

                                        <?php echo e(Form::number('discount_in_percentage', 0, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Package Price'),
                                            'data-parsley-required' => 'true',
                                            'id' => 'discount_in_percentage',
                                            'min' => '0',
                                            'max'=>'100',
                                            'step'=>0.01,
                                            'data-parsley-field-name'=>'price',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-12 col-12 form-group mandatory">
                                        <?php echo e(Form::label('price', __('Final Price') . ' (' . $currency_symbol . ')', [
                                            'class' => 'form-label col-12' ,
                                        ])); ?>

                                        <?php echo e(Form::number('final_price', 0, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Stripped Price'),
                                            'data-parsley-required' => 'true',
                                            'id' => 'final_price',
                                            'min' => '0',
                                            'step'=>0.01
                                        ])); ?>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12 form-group mandatory">
                                        <label for="icon" class="mandatory form-label"><?php echo e(__('Image')); ?></label>
                                        <input type="file" name="icon" id="icon" class="form-control" data-parsley-required="true" accept=".jpg,.jpeg,.png">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-12 form-group mandatory">
                                        <label for="description" class="mandatory form-label"><?php echo e(__('Description')); ?></label>
                                        <textarea id="description" name="description" class="form-control" data-parsley-required="true"></textarea>
                                    </div>
                                </div>

                                <div id="duration_limitation" class="col-md-12 col-sm-12 form-group">
                                    <div class="row">
                                        <?php echo e(Form::label('days', __('Days'), ['class' => 'form-label col-12 '])); ?>

                                        <div class="col-md-3">
                                            <input type="radio" id="limited_duration" class="duration_type" name="duration_type" value="limited">
                                            <label for="limited_duration"><?php echo e(__('Limited')); ?></label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" id="unlimited_duration" class="duration_type" name="duration_type" value="unlimited" checked>
                                            <label for="unlimited_duration"><?php echo e(__('Unlimited')); ?></label>
                                        </div>
                                    </div>
                                </div>

                                <div id="limitation_for_duration" class="col-md-12 col-sm-12 form-group" style="display: none;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text myDivClass" style="height: 42px;">
                                                <span class="mySpanClass"><?php echo e(__("Days")); ?></span>
                                            </div>
                                        </div>
                                        <?php echo e(Form::number('duration', '', [
                                            'class' => 'form-control',
                                            'type' => 'number',
                                            'min' => '1',
                                            'id' => 'durationLimit',
                                            'style' => 'height: 42px;',
                                        ])); ?>

                                    </div>
                                </div>

                                <div id="limit" class="col-md-12 col-sm-12 form-group">
                                    <div class="row">
                                        <?php echo e(Form::label('items', __('Items'), ['class' => 'form-label col-12 '])); ?>

                                        <div class="col-md-3">
                                            <input type="radio" id="limited_items" name="item_limit_type" value="limited">
                                            <label for="limited_items"><?php echo e(__('Limited')); ?></label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" id="unlimited_items" name="item_limit_type" value="unlimited" checked>
                                            <label for="unlimited_items"><?php echo e(__('Unlimited')); ?></label>
                                        </div>
                                    </div>

                                </div>

                                <div id="limitation_for_limit" class="col-md-12 col-sm-12 form-group" style="display: none;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text myDivClass" style="height: 42px;">
                                                <span class="mySpanClass"><?php echo e(__("Number")); ?></span>
                                            </div>
                                        </div>
                                        <?php echo e(Form::number('item_limit', '', [
                                            'class' => 'form-control',
                                            'type' => 'number',
                                            'min' => '1',
                                            'id' => 'durationForLimit',
                                            'style' => 'height: 42px;',
                                        ])); ?>

                                    </div>
                                </div>


                                <div class="col-md-12 col-12 text-end form-group pt-4">
                                    <?php echo e(Form::submit(__('Add Package'), ['class' => 'center btn btn-primary', 'style' => 'width:200'])); ?>

                                </div>
                            </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="<?php echo e(\Illuminate\Support\Facades\Auth::user()->can('item-listing-package-create') ? "col-md-8" : "col-md-12"); ?>">
                <div class="card">
                    <div class="card-body">

                        

                        <div class="row">
                            <div class="col-12">

                                <table class="table table-borderless table-striped" aria-describedby="mydesc"
                                       id="table_list" data-toggle="table" data-url="<?php echo e(route('package.show',1)); ?>"
                                       data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                       data-search-align="right" data-toolbar="#toolbar" data-show-columns="true"
                                       data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                                       data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                                       data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                                       data-escape="true"
                                       data-query-params="queryParams" data-table="packages"
                                       data-show-export="true" data-export-options='{"fileName": "item-package-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                                       data-mobile-responsive="true">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" data-field="id" data-align="center" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                        <th scope="col" data-field="icon" data-formatter="imageFormatter" data-align="center"><?php echo e(__('Image')); ?></th>
                                        <th scope="col" data-field="name" data-align="center" data-sortable="true"><?php echo e(__('Name')); ?></th>
                                        <th scope="col" data-field="duration" data-align="center" data-sortable="true"><?php echo e(__('Days')); ?></th>
                                        <th scope="col" data-field="item_limit" data-align="center" data-sortable="true"><?php echo e(__('Item Limit')); ?></th>
                                        <th scope="col" data-field="price" data-align="center" data-sortable="true"><?php echo e(__('Price')); ?></th>
                                        <th scope="col" data-field="discount_in_percentage" data-align="center" data-sortable="true"><?php echo e(__('Discount in(%)')); ?></th>
                                        <th scope="col" data-field="final_price" data-align="center" data-sortable="true"><?php echo e(__('Final Price')); ?></th>
                                        <th scope="col" data-field="description" data-align="center" data-sortable="true" data-visible="false"><?php echo e(__('Description')); ?></th>
                                        <th scope="col" data-field="ios_product_id" data-align="center" data-sortable="true" data-visible="false"><?php echo e(__('IOS Product ID')); ?></th>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('item-listing-package-update')): ?>
                                            <th scope="col" data-field="status" data-sortable="true" data-align="center" data-formatter="statusSwitchFormatter"><?php echo e(__('Status')); ?></th>
                                            <th scope="col" data-field="operate" data-escape="false" data-align="center" data-sortable="false" data-events="packageEvents"><?php echo e(__('Action')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('item-listing-package-update')): ?>
        <!-- EDIT MODEL MODEL -->
            <div id="editModal" class="modal fade modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" class="form-horizontal edit-form" enctype="multipart/form-data" method="POST" data-parsley-validate>
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1"><?php echo e(__('Edit Package')); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="edit_name" class="form-label col-12 "><?php echo e(__('Name')); ?></label>
                                            <input type="text" id="edit_name" class="form-control col-12" placeholder="<?php echo e(__("Name")); ?>" name="name" data-parsley-required="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 form-group">
                                        <?php echo e(Form::label('ios_product_id', __('IOS Product ID'), ['class' => 'form-label col-12 '])); ?>

                                        <?php echo e(Form::text('ios_product_id', '', [
                                            'class' => 'form-control ',
                                            'placeholder' => __("IOS Product ID"),
                                            'id' => 'edit_ios_product_id',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-4 col-12 form-group mandatory">
                                        <?php echo e(Form::label('price', __('Price') . '(' . $currency_symbol . ')', [
                                            'class' => 'form-label col-12 ',
                                        ])); ?>

                                        <?php echo e(Form::number('price', '', [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Price'),
                                            'data-parsley-required' => 'true',
                                            'id' => 'edit_price',
                                            'step'=>0.01,
                                            'min' => '0',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-4 col-12 form-group mandatory">
                                        <?php echo e(Form::label('discount_in_percentage', __('Discount') . ' (%)', [
                                            'class' => 'form-label col-12 ',
                                        ])); ?>

                                        <?php echo e(Form::number('discount_in_percentage', 0, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Package Price'),
                                            'data-parsley-required' => 'true',
                                            'id' => 'edit_discount_in_percentage',
                                            'min' => '0',
                                            'max'=>'100',
                                            'step'=>0.01,
                                            'data-parsley-field-name'=>'price',
                                        ])); ?>

                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group mandatory">
                                            <label for="edit_final_price" class="form-label col-12"><?php echo e(__('Final Price') . '(' . $currency_symbol . ')'); ?></label>
                                            <input type="text" id="edit_final_price" class="form-control col-12" min="0" placeholder="<?php echo e(__('Final Price') . ' (' . $currency_symbol . ')'); ?>" name="final_price" data-parsley-required="true">
                                        </div>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="edit_image" class="form-label"><?php echo e(__('Image')); ?></label>
                                        <input type="file" name="icon" id="edit_image" class="form-control" accept=".jpg,.jpeg,.png">
                                    </div>
                                </div>

                                <div class=" row">

                                    <div class="col-md-6">
                                        <?php echo e(Form::label('days', __('Days'), ['class' => 'form-label col-sm-12  col-md-6 ',])); ?>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="radio" id="edit_duration_type_limited" name="duration_type" class="edit_duration_type" value="limited">
                                                <label for="edit_duration_type_limited"><?php echo e(__('Limited')); ?></label>
                                            </div>

                                            <div class="col-md-4">
                                                <input type="radio" id="edit_duration_type_unlimited" name="duration_type" class="edit_duration_type" value="unlimited">
                                                <label for="edit_duration_type_unlimited"><?php echo e(__('Unlimited')); ?></label>
                                            </div>
                                        </div>

                                        <div id="edit_limitation_for_duration" class="col-md-12 col-sm-12 form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text myDivClass" style="height: 42px;">
                                                        <span class="mySpanClass"><?php echo e(__("Days")); ?></span>
                                                    </div>
                                                </div>
                                                <?php echo e(Form::number('duration', '', [
                                                    'class' => 'form-control',
                                                    'type' => 'number',
                                                    'min' => '1',
                                                    'id' => 'edit_durationLimit',
                                                    'style' => 'height: 42px;',
                                                ])); ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <?php echo e(Form::label('limit', __('Item Limit'), ['class' => 'form-label col-12 col-sm-12  col-md-6 '])); ?>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="radio" id="edit_item_limit_type_limited" name="item_limit_type" class="edit_item_limit_type" value="limited">
                                                <label for="edit_item_limit_type_limited"><?php echo e(__('Limited')); ?></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" id="edit_item_limit_type_unlimited" name="item_limit_type" class="edit_item_limit_type" value="unlimited">
                                                <label for="edit_item_limit_type_unlimited"><?php echo e(__('Unlimited')); ?></label>
                                            </div>
                                        </div>

                                        <div id="edit_limitation_for_limit" class="col-md-12 col-sm-12 form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text myDivClass" style="height: 42px;">
                                                        <span class="mySpanClass"><?php echo e(__("Number")); ?></span>
                                                    </div>
                                                </div>
                                                <?php echo e(Form::number('item_limit', '', [
                                                    'class' => 'form-control',
                                                    'type' => 'number',
                                                    'min' => '1',
                                                    'id' => 'edit_ForLimit',
                                                    'style' => 'height: 42px;',
                                                ])); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="col-md-12 form-group mandatory">
                                        <label for="edit_description" class="mandatory form-label"><?php echo e(__('Description')); ?></label><br>
                                        <textarea id="edit_description" name="description" rows="3" cols="50" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light"><?php echo e(__('Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        function preSuccessFunction() {
            $('#')
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/packages/item-listing.blade.php ENDPATH**/ ?>