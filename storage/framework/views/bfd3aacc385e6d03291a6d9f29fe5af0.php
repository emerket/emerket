

<?php $__env->startSection('title'); ?>
    <?php echo e(_('System Status')." "._("Settings")); ?>

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
<div class="row mb-3">
    <div class="col-md-8">
        <div class="card h-100">
            <div class="card-body">
                <div class="divider pt-3">
                    <h6 class="divider-text"><?php echo e(__('System Status')); ?></h6>
                </div>

                <!-- Backend Section -->
                <div class="card mt-3">
                    <div class="card-header">
                        <?php echo e(__('Backend')); ?>

                    </div>
                </div>

                <!-- Storage Section -->
                <div class="card mt-1">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <label for="Storage" class="form-label mb-0 me-2">
                                    <?php echo e(__('Storage')); ?>

                                </label>
                                <a href="#" data-bs-toggle="tooltip" title="<?php echo e($isLinked ? _('Storage folder is currently linked.') : _('Storage folder is not linked. Click to link it.')); ?>">
                                    <i class="bi bi-question-circle"></i>
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="bi <?php echo e($isLinked ? 'bi-check-circle text-success' : 'bi-x-circle text-danger'); ?> me-2" aria-label="<?php echo e($isLinked ? 'Linked' : 'Unlinked'); ?>"></i>

                                <form action="<?php echo e(route('toggle.storage.link')); ?>" method="GET" class="m-0">
                                    <button type="submit" class="btn btn-link text-primary" style="font-size: 0.875rem; padding: 0; text-decoration: underline;">
                                        <?php echo e(__('Link')); ?>

                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eClassify\resources\views/settings/system-status.blade.php ENDPATH**/ ?>