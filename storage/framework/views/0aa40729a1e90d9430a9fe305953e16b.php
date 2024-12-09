
<?php if(empty($lang) || !$lang->rtl): ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/otherpages.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>"/>
<?php else: ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main/rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/otherpages_rtl.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>"/>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset("assets/css/bootstrap-switch-button.min.css")); ?>">


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/toastify-js/toastify.css')); ?>">


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/bootstrap-table/bootstrap-table.min.css')); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/bootstrap-table/fixed-columns/bootstrap-table-fixed-columns.min.css')); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset("assets/extensions/bootstrap-table/bootstrap-table-reorder-rows.css")); ?>">



<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css"/>


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/magnific-popup/magnific-popup.css')); ?>">


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/select2/select2.min.css')); ?>"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/select2/select2-bootstrap-5-theme.min.css')); ?>"/>


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/sweetalert2/sweetalert2.min.css')); ?>"/>


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/filepond/filepond.min.css')); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-image-preview.min.css')); ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/filepond/filepond-plugin-pdf-preview.min.css')); ?>" type="text/css"/>


<link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/jquery-jvectormap-2.0.5.css')); ?>" type="text/css"/>


<link rel="stylesheet" href="<?php echo e(asset('assets/extensions/jstree/jstree.min.css')); ?>"/>




<script>
    // Function to handle image errors
    function handleImageError(image) {
        image.classList.contains('custom-default-image')
        if (image.getAttribute('data-custom-image') != null) {
            image.src = image.getAttribute('data-custom-image');
        } else {
            image.src = "<?php echo e(asset('/assets/images/no_image_available.png')); ?>";
        }
        // console.log('Image failed to load: ' + image.src);
    }

    // Create a MutationObserver to watch for DOM changes
    const observer = new MutationObserver((mutationsList) => {
        mutationsList.forEach((mutation) => {
            if (mutation.addedNodes) {
                mutation.addedNodes.forEach((node) => {
                    // Check if the added node is an image element
                    if (node instanceof HTMLImageElement) {
                        node.addEventListener('error', () => {
                            handleImageError(node);
                        });
                    }
                });
            }
        });
    });

    // Start observing changes in the DOM
    observer.observe(document, {childList: true, subtree: true});

    const onErrorImage = (e) => {
        if (!e.target.src.includes('no_image_available.png')) {
            e.target.src = "<?php echo e(asset('/assets/images/no_image_available.png')); ?>";
        }
    };

    
    
    
    
    
</script>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/layouts/include.blade.php ENDPATH**/ ?>