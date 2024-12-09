

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Seller Review Reports')); ?>

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
                        
                        <table class="table-borderless table-striped" aria-describedby="mydesc" id="table_list"
                               data-toggle="table" data-url="<?php echo e(route('seller-review.report',1)); ?>" data-click-to-select="true"
                               data-side-pagination="server" data-pagination="true"
                               data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                               data-show-columns="true" data-show-refresh="true" data-fixed-columns="true"
                               data-fixed-number="1" data-fixed-right-number="1" data-trim-on-search="false"
                               data-escape="true"
                               data-responsive="true" data-sort-name="id" data-sort-order="desc"
                               data-pagination-successively-size="3" data-table="seller_ratings" data-status-column="deleted_at"
                               data-show-export="true" data-export-options='{"fileName": "seller-review-report-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                               data-mobile-responsive="true" data-filter-control="true" data-filter-control-container="#filters" data-toolbar="#filters">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" data-field="id" data-sortable="true"><?php echo e(__('ID')); ?></th>
                                <th scope="col" data-field="seller_name" data-sortable="true"><?php echo e(__('Seller')); ?></th>
                                <th scope="col" data-field="buyer_name" data-align="center" data-sortable="true"><?php echo e(__('Buyer')); ?></th>
                                <th scope="col" data-field="item_name"  data-sortable="true"><?php echo e(__('Item')); ?></th>
                                <th scope="col" data-field="ratings" data-visible="true" data-Formatter="ratingFormatter"><?php echo e(__('Ratings')); ?></th>
                                <th scope="col" data-field="review" data-sortable="false" data-formatter="descriptionFormatter"><?php echo e(__('Review')); ?></th>
                                <th scope="col" data-field="report_status"  data-sortable="true" data-filter-control="select" data-filter-data="" data-formatter="reportStatusFormatter"><?php echo e(__('Report Status')); ?></th>
                                <th scope="col" data-field="report_reason"  data-sortable="false"><?php echo e(__('Report Reason')); ?></th>
                                <th scope="col" data-field="report_rejected_reason"  data-sortable="false"><?php echo e(__('Report Rejection Reason')); ?></th>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['item-update','item-delete'])): ?>
                                <th scope="col" data-field="operate" data-align="center" data-sortable="false" data-events="reviewReportEvents" data-escape="false"><?php echo e(__('Action')); ?></th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
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
                               <select name="report_status" class="form-select" id="status" aria-label="status">
                                   <option value="approved"><?php echo e(__("Approve")); ?></option>
                                   <option value="rejected"><?php echo e(__("Reject")); ?></option>
                               </select>
                           </div>
                       </div>
                       <div id="rejected_reason_container" class="col-md-12" style="display: none;">
                           <label for="rejected_reason" class="mandatory form-label"><?php echo e(__('Reason')); ?></label>
                           <textarea name="report_rejected_reason" id="report_rejected_reason" class="form-control" placeholder=<?php echo e(__('Reason')); ?>></textarea>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/seller_review/report.blade.php ENDPATH**/ ?>