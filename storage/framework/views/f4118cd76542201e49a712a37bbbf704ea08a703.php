<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title"><?php echo e($title ?? ''); ?></h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0"><?php echo e($desc ?? ''); ?></p>
                </div>
            </div>

            <div class="col-auto">

                <div class="d-flex x-gap-15 items-center ">
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-left-hover js-tour-prev">
                            <i class="icon icon-arrow-left"></i>
                        </button>
                    </div>

                    <div class="col-auto">
                        <div class="pagination -dots text-border js-tour-pag"></div>
                    </div>

                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-right-hover js-tour-next">
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-5 lg-4 md-3 sm-2 base-1" data-nav-prev="js-tour-prev" data-pagination="js-tour-pag" data-nav-next="js-tour-next">
            <div class="swiper-wrapper">

                <?php if(!empty($rows)): ?>
                    <?php $delay = 2; ?>
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $translation = $row->translate(); ?>
                        <div data-anim-child="slide-up delay-<?php echo e($delay); ?>" class="swiper-slide">
                            <a href="<?php echo e(route('tour.search',['cat_id[]' => $row->id])); ?>" class="tourTypeCard -type-1 d-block rounded-4 bg-blue-1-05 rounded-4">
                                <div class="tourTypeCard__content text-center pt-60 pb-24 px-30">
                                    <i class="<?php echo e($row->cat_icon); ?> text-60 sm:text-40 text-blue-1"></i>
                                    <h4 class="text-dark-1 text-18 fw-500 mt-50 md:mt-30"><?php echo e($translation->name); ?></h4>
                                    <?php if($row->tour_count): ?>
                                        <p class="text-light-1 lh-14 text-14 mt-5"><?php echo e(__(':count Tours',['count' => $row->tour_count])); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                        <?php $delay++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\gotrip\themes/GoTrip/Tour/Views/frontend/blocks/tour-types/index.blade.php ENDPATH**/ ?>