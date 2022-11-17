<?php if(isset($categories)): ?>
<div class="col-md-3">
    <ul class="list-group list-group-flush">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item"><span class="badge bg-danger rounded-pill"><?php echo e($category->articleCount()); ?></span> <?php echo e($category->name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH /home/kokbirasi/Desktop/bootstrapblogproject/resources/views/front/widgets/categoryWidget.blade.php ENDPATH**/ ?>