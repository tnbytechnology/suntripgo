<?php if(!empty($list_item)): ?>
<section class="layout-pt-md layout-pb-lg">
    <div data-anim="slide-up delay-1" class="container">
        <div class="row justify-center text-center">
            <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-sm-6">
                    <div class="text-40 lh-13 text-blue-1 fw-600"><?php echo e($item['number']); ?></div>
                    <div class="text-14 lh-14 text-light-1 mt-5"><?php echo e($item['title']); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\gotrip\themes/GoTrip/Tour/Views/frontend/blocks/call-to-action/style-4.blade.php ENDPATH**/ ?>