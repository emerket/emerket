

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Items')); ?>

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
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div id="filters">
                            <label for="filter"><?php echo e(__("Status")); ?></label>
                            <select class="form-control bootstrap-table-filter-control-status" id="filter">
                                <option value=""><?php echo e(__("All")); ?></option>
                                <option value="review"><?php echo e(__("Under Review")); ?></option>
                                <option value="approved"><?php echo e(__("Approved")); ?></option>
                                <option value="rejected"><?php echo e(__("Rejected")); ?></option>
                                <option value="sold out"><?php echo e(__("Sold Out")); ?></option>
                            </select>
                        </div>
                        <table class="table-borderless table-striped" aria-describedby="mydesc" id="table_list"
                               data-toggle="table" data-url="<?php echo e(route('item.show',1)); ?>" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true"
                               data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                               data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                               data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                               data-escape="true"
                               data-responsive="true" data-sort-name="id" data-sort-order="desc"
                               data-pagination-successively-size="3" data-table="items" data-status-column="deleted_at"
                               data-show-export="true" data-export-options='{"fileName": "item-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                               data-mobile-responsive="true" data-filter-control="true" data-filter-control-container="#filters" data-toolbar="#filters">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                <th scope="col" data-field="name" data-sortable="true"><?php echo e(__('Name')); ?></th>
                                <th scope="col" data-field="description" data-align="center" data-sortable="true" data-formatter="descriptionFormatter"><?php echo e(__('Description')); ?></th>
                                <th scope="col" data-field="user.name" data-sort-name="user_name" data-sortable="true"><?php echo e(__('User')); ?></th>
                                <th scope="col" data-field="price" data-sortable="true"><?php echo e(__('Price')); ?></th>
                                <th scope="col" data-field="image" data-sortable="false" data-escape="false" data-formatter="imageFormatter"><?php echo e(__('Image')); ?></th>
                                <th scope="col" data-field="gallery_images" data-sortable="false" data-formatter="galleryImageFormatter" data-escape="false"><?php echo e(__('Other Images')); ?></th>
                                <th scope="col" data-field="latitude" data-sortable="true" data-visible="false"><?php echo e(__('Latitude')); ?></th>
                                <th scope="col" data-field="longitude" data-sortable="true" data-visible="false"><?php echo e(__('Longitude')); ?></th>
                                <th scope="col" data-field="address" data-sortable="true" data-visible="false"><?php echo e(__('Address')); ?></th>
                                <th scope="col" data-field="contact" data-sortable="true" data-visible="false"><?php echo e(__('Contact')); ?></th>
                                <th scope="col" data-field="country" data-sortable="true" data-visible="true"><?php echo e(__('Country')); ?></th>
                                <th scope="col" data-field="state" data-sortable="true" data-visible="true"><?php echo e(__('State')); ?></th>
                                <th scope="col" data-field="city" data-sortable="true" data-visible="true"><?php echo e(__('City')); ?></th>
                                <th scope="col" data-field="status" data-sortable="true" data-filter-control="select" data-filter-data="" data-escape="false" data-formatter="itemStatusFormatter"><?php echo e(__('Status')); ?></th>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('item-update')): ?>
                                    <th scope="col" data-field="active_status" data-sortable="true" data-sort-name="deleted_at" data-visible="true" data-escape="false" data-formatter="statusSwitchFormatter"><?php echo e(__('Active')); ?></th>
                                <?php endif; ?>
                                <th scope="col" data-field="rejected_reason" data-sortable="true" data-visible="true"><?php echo e(__('Rejected Reason')); ?></th>
                                <th scope="col" data-field="created_at" data-sortable="true" data-visible="false"><?php echo e(__('Created At')); ?></th>
                                <th scope="col" data-field="updated_at" data-sortable="true" data-visible="false"><?php echo e(__('Updated At')); ?></th>
                                <th scope="col" data-field="user_id" data-sortable="true" data-visible="false"><?php echo e(__('User ID')); ?></th>
                                <th scope="col" data-field="category_id" data-sortable="true" data-visible="false"><?php echo e(__('Category ID')); ?></th>
                                <th scope="col" data-field="likes" data-sortable="true" data-visible="false"><?php echo e(__('Likes')); ?></th>
                                <th scope="col" data-field="clicks" data-sortable="true" data-visible="false"><?php echo e(__('Clicks')); ?></th>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-update','item-delete'])): ?>
                                    <th scope="col" data-field="operate" data-align="center" data-sortable="false" data-events="itemEvents" data-escape="false"><?php echo e(__('Action')); ?></th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel1"><?php echo e(__('Item Details')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="center" id="custom_fields"></div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <div id="editStatusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel1"><?php echo e(__('Status')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="edit-form" action="" method="POST" data-success-function="updateApprovalSuccess">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="status" class="form-select" id="status" aria-label="status">
                                        <option value="review"><?php echo e(__("Under Review")); ?></option>
                                        <option value="approved"><?php echo e(__("Approve")); ?></option>
                                        <option value="rejected"><?php echo e(__("Reject")); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div id="rejected_reason_container" class="col-md-12" style="display: none;">
                                <label for="rejected_reason" class="mandatory form-label"><?php echo e(__('Reason')); ?></label>
                                <textarea name="rejected_reason" id="rejected_reason" class="form-control" placeholder=<?php echo e(__('Reason')); ?>></textarea>
                                
                            </div>
                            <input type="submit" value="<?php echo e(__("Save")); ?>" class="btn btn-primary mt-3">
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        function updateApprovalSuccess() {
            $('#editStatusModal').modal('hide');
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/items/index.blade.php ENDPATH**/ ?>