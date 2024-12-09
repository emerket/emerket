<script type="text/javascript" src="<?php echo e(asset('assets/js/apexcharts.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/app.js')); ?>"></script>







<script type="text/javascript" src="<?php echo e(asset('assets/extensions/sweetalert2/sweetalert2.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/tinymce/tinymce.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/jquery-vector-map/jquery-jvectormap-2.0.5.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/jquery-vector-map/jquery-jvectormap-asia-merc.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/jquery-vector-map/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/jquery-vector-map/jquery-jvectormap-world-mill.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/toastify-js/toastify.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/js/parsley.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/parsley.js')); ?>"></script>



<script type="text/javascript" src="<?php echo e(asset('assets/extensions/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/select2/select2.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/jquery-ui/jquery-ui.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/js/clipboard.min.js')); ?>"></script>


<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond.jquery.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-image-preview.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-pdf-preview.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-file-validate-size.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-file-validate-type.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-image-validate-size.min.js')); ?>"></script>


<script src="<?php echo e(asset("assets/extensions/jstree/jstree.min.js")); ?>"></script>



<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/common.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/function.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/bootstrap-table/formatter.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/bootstrap-table/queryParams.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/custom/bootstrap-table/actionEvents.js')); ?>"></script>



<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/bootstrap-table.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/fixed-columns/bootstrap-table-fixed-columns.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/mobile/bootstrap-table-mobile.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/jquery.tablednd.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/bootstrap-table.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/bootstrap-table-reorder-rows.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/export/bootstrap-table-export.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/export/tableExport.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/export/jspdf.umd.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/mobile/bootstrap-table-mobile.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/extensions/bootstrap-table/filter/bootstrap-table-filter-control.min.js')); ?>"></script>


<script src="<?php echo e(route('common.language.read')); ?>"></script>




<script type="text/javascript">
    window.baseurl = "<?php echo e(URL::to('/')); ?>/";
    <?php if(Session::has('success')): ?>
    showSuccessToast("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>

    
    
    

    
    
    
    
    
    
    
    

    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    showErrorToast("<?php echo $error; ?>");
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
    showErrorToast('<?php echo Session::get('error'); ?>')
    <?php endif; ?>

</script>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/layouts/footer_script.blade.php ENDPATH**/ ?>