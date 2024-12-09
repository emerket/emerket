

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Advertisement Package')); ?>

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
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('advertisement-package-create')): ?>
                <div class="col-md-4">
                    <div class="card">
                        <?php echo Form::open(['route' => 'package.advertisement.store', 'data-parsley-validate', 'files' => true,'class'=>'create-form']); ?>


                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12 col-12 form-group mandatory">
                                    <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('name', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Package Name'),
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

                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-12 col-sm-12 form-group mandatory">
                                    <label for="w3review" class="mandatory form-label"><?php echo e(__('Description')); ?></label>
                                    <textarea id="w3review" class="form-control" name="description" rows="3" cols="48" data-parsley-required="true"></textarea>
                                </div>
                            </div>

                            <div id="duration_limitation" class="col-md-12 col-sm-12 form-group">
                                <div class="row">
                                    <?php echo e(Form::label('duration', __('Days'), ['class' => 'form-label col-12 '])); ?>

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
                                            'placeholder' => __('Unlimited'),
                                            'id' => 'durationLimit',
                                            'style' => 'height: 42px;',
                                        ])); ?>

                                    </div>
                                </div>
                            </div>

                            <div id="limit" class="col-md-12 col-sm-12 form-group">
                                <div class="row">
                                    <?php echo e(Form::label('limit', __('Item Limit'), ['class' => 'form-label col-12 '])); ?>

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
                                            'placeholder' => __('Unlimited'),
                                            'id' => 'durationForLimit',
                                            'style' => 'height: 42px;',
                                        ])); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 text-end form-group pt-4">
                                <?php echo e(Form::submit(__('Add Package'), ['class' => 'center btn btn-primary', 'style' => 'width:200'])); ?>

                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            <?php endif; ?>
            <div class="<?php echo e(\Illuminate\Support\Facades\Auth::user()->can('advertisement-package-create') ? "col-md-8" : "col-md-12"); ?>">
                <div class="card">
                    <div class="card-body">

                        
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-borderless table-striped" aria-describedby="mydesc"
                                       id="table_list" data-toggle="table" data-url="<?php echo e(route('package.advertisement.show')); ?>"
                                       data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                       data-search-align="right" data-toolbar="#toolbar" data-show-columns="true"
                                       data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                                       data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                                       data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                                       data-escape="true"
                                       data-query-params="queryParams" data-table="packages"
                                       data-show-export="true" data-export-options='{"fileName": "advertisement-package-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                                       data-mobile-responsive="true">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" data-field="id" data-align="center" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                        <th scope="col" data-field="icon" data-formatter="imageFormatter" data-align="center" data-sortable="false"><?php echo e(__('Image')); ?></th>
                                        <th scope="col" data-field="name" data-align="center" data-sortable="true"><?php echo e(__('Name')); ?></th>
                                        <th scope="col" data-field="price" data-align="center" data-sortable="true"><?php echo e(__('Price')); ?></th>
                                        <th scope="col" data-field="discount_in_percentage" data-align="center" data-sortable="true"><?php echo e(__('Discount in(%)')); ?></th>
                                        <th scope="col" data-field="final_price" data-align="center" data-sortable="true"><?php echo e(__('Final Price')); ?></th>
                                        <th scope="col" data-field="description" data-align="center" data-sortable="true" data-visible="false"><?php echo e(__('Description')); ?></th>
                                        <th scope="col" data-field="duration" data-align="center" data-sortable="true"><?php echo e(__('Days')); ?></th>
                                        <th scope="col" data-field="item_limit" data-align="center" data-sortable="true"><?php echo e(__('Item Limit')); ?></th>
                                        <th scope="col" data-field="ios_product_id" data-align="center" data-sortable="true" data-visible="false"><?php echo e(__('IOS Product ID')); ?></th>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('item-listing-package-update')): ?>
                                            <th scope="col" data-field="status" data-sortable="true" data-align="center" data-width="5%" data-formatter="statusSwitchFormatter"><?php echo e(__('Status')); ?></th>
                                            <th scope="col" data-field="operate" data-escape="false" data-align="center" data-sortable="false" data-events="advertisementPackageEvents"><?php echo e(__('Action')); ?></th>
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

        <!-- EDIT MODEL MODEL -->
        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel1"><?php echo e(__('Edit Package')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" class="edit-form form-horizontal" enctype="multipart/form-data" method="POST" data-parsley-validate>
                        <div class="modal-body">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" id="edit_id" name="edit_id">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="edit_name" class="form-label col-12 "><?php echo e(__('Name')); ?></label>
                                        <input type="text" id="edit_name" class="form-control col-12" placeholder="<?php echo e(__("Name")); ?>" name="name" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 form-group">
                                    <?php echo e(Form::label('ios_product_id', __('IOS Product ID'), ['class' => 'form-label col-12 '])); ?>

                                    <?php echo e(Form::text('ios_product_id', '', [
                                        'class' => 'form-control ',
                                        'placeholder' => __("IOS Product ID"),
                                        'id' => 'edit_ios_product_id',
                                    ])); ?>

                                </div>

                                <div class="col-md-12 col-12 form-group mandatory">
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

                                <div class="col-md-12 col-12 form-group mandatory">
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

                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory">
                                        <label for="edit_final_price" class="form-label col-12"><?php echo e(__('Final Price') . '(' . $currency_symbol . ')'); ?></label>
                                        <input type="text" id="edit_final_price" class="form-control col-12" min="0" placeholder="<?php echo e(__('Final Price') . ' (' . $currency_symbol . ')'); ?>" name="final_price" data-parsley-required="true">
                                    </div>
                                </div>


                                <div class="col-md-12 form-group">
                                    <label for="Field Name" class="form-label"><?php echo e(__('Image')); ?></label>
                                    <input type="file" name="icon" id="edit_image" class="form-control" accept=".jpg,.jpeg,.png">
                                </div>

                                <div id="edit_duration_limit" class="col-md-12 col-sm-12 form-group">
                                    <div class="row">
                                        <?php echo e(Form::label('duration', __('Days'), ['class' => 'form-label col-sm-12  col-md-12 ',])); ?>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text myDivClass" style="height: 42px;">
                                                    <span class="mySpanClass"><?php echo e(__("Number")); ?></span>
                                                </div>
                                            </div>
                                            <?php echo e(Form::number('duration', '', [
                                            'class' => 'form-control',
                                            'type' => 'number',
                                            'min' => '1',
                                            'placeholder' => __('Unlimited'),
                                            'id' => 'edit_durationLimit',
                                            'style' => 'height: 42px;',
                                        ])); ?>

                                        </div>
                                    </div>
                                </div>

                                <div id="edit_limit" class="col-md-12 col-sm-12 form-group">
                                    <div class="row">
                                        <?php echo e(Form::label('limit', __('Item Limit'), ['class' => 'form-label col-12 '])); ?>

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
                                                'placeholder' => __('Unlimited'),
                                                'id' => 'edit_ForLimit',
                                                'style' => 'height: 42px;',
                                            ])); ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 form-group mandatory">
                                    <label for="edit_description" class="mandatory form-label"><?php echo e(__('Description')); ?></label>
                                    <textarea id="edit_description" name="description" class="form-control" rows="3" cols="48" data-parsley-required="true"></textarea>
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
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/packages/advertisement.blade.php ENDPATH**/ ?>