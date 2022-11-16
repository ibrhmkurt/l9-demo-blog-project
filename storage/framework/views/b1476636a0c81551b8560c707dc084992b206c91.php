<?php $__env->startSection('title','Anasayfa'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-9 col-xl-7">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Post preview-->
                    <div class="position-relative">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title"><?php echo e($article->title); ?></h2>
                            <h3 class="post-subtitle"><?php echo e(str_limit($article->content,100)); ?></h3>
                        </a>
                        <p class="post-meta">
                            <a href="#!">Kategori: <?php echo e($article->getCategory->name); ?></a>
                            <span class="position-absolute bottom-0 end-0"><?php echo e($article->created_at->diffForHumans()); ?></span>
                        </p>
                    </div>
                    </div>
<?php if(!$loop->last): ?>
                    <!-- Divider-->
                    <hr class="my-4" />
<?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div> 
                <?php echo $__env->make('front.widgets.categoryWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kokbirasi/Desktop/bootstrapblogproject/resources/views/front/homepage.blade.php ENDPATH**/ ?>