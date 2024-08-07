<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3" id="announcementPage">
        <div class="row h-100 g-0 justify-content-center pb-2">
            <div class="col-lg-6 my-auto">
                <div class="card border-0 shadow">
                    <div class="card-header text-center fs-3 fw-bold text-uppercase p-3 border-0 shadow-sm">
                        Pengumuman
                    </div>
                    <div class="card-body p-3">
                        <div class="display-2 text-center my-3">
                            <i class="bi bi-layout-text-sidebar-reverse text-primary"></i>
                        </div>
                        <?php echo $config->announcement; ?>

                        <hr>
                        <p class="fs-6">
                            Sesi <?php echo e($config->event_name); ?> akan diselenggarakan pada :
                        </p>
                        <ul class="fs-6">
                            <li>Tanggal : <?php echo e(date_format(new DateTime($config->start), "d/m/Y")); ?></li>
                            <li>Pukul : <?php echo e(date_format(new DateTime($config->start), "H:i")); ?></li>
                        </ul>
                        <p class="fs-6">
                            Dan akan berakhir pada :
                        </p>
                        <ul class="fs-6">
                            <li>Tanggal : <?php echo e(date_format(new DateTime($config->end), "d/m/Y")); ?></li>
                            <li>Pukul : <?php echo e(date_format(new DateTime($config->end), "H:i")); ?></li>
                        </ul>
                        <div class="align-self-center text-center m-3">
                            <a href="<?php echo e(route('voting')); ?>" class="btn btn-rounded btn-lg btn-dark border-0 shadow-lg">
                                <i class="bi bi-arrow-right"></i>&nbsp; Menuju Pemilihan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH D:\tes\evoting\resources\views/user/announcement.blade.php ENDPATH**/ ?>