<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="pt-5 pb-0 pb-lg-3 rounded align-middle" id="homePage">
        <div class="row h-100 g-0 mb-5 justify-content-center">
            <div class="col-lg-6 my-auto">
                <div class="text-center mx-auto">
                    <img src="/assets/img/log.png" class="img-fluid img-responsive rounded-3 shadow-sm" alt="evote">
                </div>
            </div>
            <div class="col-lg my-lg-auto">
                <div class="card border-0 py-3 bg-transparent">
                    <div class="card-body">
                        <div class="text-dark pb-2 text-center rounded" id="infoHome">
                            <h2 class="fw-bold mb-4 text-uppercase">Selamat Datang di <?php echo e(config('app.name', 'E-Voting App')); ?></h2>
                            <h4 class="my-2"><?php echo e($config->event_name); ?></h4>
                            <p class=""><em>Alamat : <?php echo e($config->location); ?></em></p>
                        </div>
                        <div class="align-self-center text-center m-3">
                            <a href="<?php echo e(route('announcement')); ?>" class="btn btn-rounded btn-lg btn-dark border-0 shadow-lg">
                                <i class="bi bi-arrow-right"></i>&nbsp; Selanjutnya
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
<?php endif; ?><?php /**PATH D:\tes\evoting\resources\views/user/home.blade.php ENDPATH**/ ?>