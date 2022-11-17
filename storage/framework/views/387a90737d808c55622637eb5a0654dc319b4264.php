<?php if(isset($categories)): ?>
<div class="col-md-3">
    <ul class="list-group list-group-flush">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item <?php if(Request::segment(2)==$category->slug): ?>
            active
        <?php endif; ?>" >
            <span class="badge bg-danger rounded-pill"><?php echo e($category->articleCount()); ?></span> 
                <a href="<?php echo e(route('category', $category->slug)); ?>"> <?php echo e($category->name); ?> </a>       
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH /home/kokbirasi/Desktop/bootstrapblogproject/resources/views/front/widgets/categoryWidget.blade.php ENDPATH**/ ?>