<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo \App\Services\HelperService::childCategoryRendering($categories,0,$category->parent_category_id); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/category/dropdowntree.blade.php ENDPATH**/ ?>