<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="category">
        <div class="category-header">
            <label>
                <input type="checkbox" name="selected_categories[]" value="<?php echo e($category->id); ?>"
                <?php if(!empty($selected_categories)): ?>
                    <?php if(in_array($category->id,$selected_categories)): ?>
                        <?php echo e("checked"); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                >
                <?php echo e($category->name); ?>

            </label>
            <?php if(!empty($category->subcategories)): ?>
                <i style='font-size:24px' class='fas toggle-button'>&#xf0da;</i>
            <?php endif; ?>
        </div>
        <div class="subcategories" style="display: none;">
            <?php if(!empty($category->subcategories)): ?>
                <?php echo $__env->make('category.treeview', ['categories' => $category->subcategories,'selected_categories' => $selected_categories ??''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\eClassify\resources\views/category/treeview.blade.php ENDPATH**/ ?>