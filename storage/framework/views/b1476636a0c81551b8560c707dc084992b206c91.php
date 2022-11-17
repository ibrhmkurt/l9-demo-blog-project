<?php $__env->startSection('title','Anasayfa'); ?>
<?php $__env->startSection('content'); ?>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        
<div class="col-md-9 col-xl-7">
    <?php echo $__env->make('front.widgets.articlesList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </div>

                <?php echo $__env->make('front.widgets.categoryWidget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kokbirasi/Desktop/bootstrapblogproject/resources/views/front/homepage.blade.php ENDPATH**/ ?>