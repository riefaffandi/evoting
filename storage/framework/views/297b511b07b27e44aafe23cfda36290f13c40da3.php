<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3">
        <div class="row h-100 g-0 py-5 justify-content-center align-self-center">
            <div class="col-lg-4 my-auto">
                <div class="card border-0 shadow">
                    <div class="card-header text-center fs-3 fw-bold text-uppercase p-3 border-0 shadow-sm">
                        Profil
                    </div>
                    <div class="card-body p-4">
                        <form action="" method="post">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form-user','data' => ['profile' => $profile]]); ?>
<?php $component->withName('form-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['profile' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profile)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <div class="my-4">
                                <div class="d-grid gap-2 col-lg-6 mx-auto my-1">
                                    <button type="submit" class="btn btn-rounded btn-lg btn-warning"><i class="bi bi-pencil"></i> Edit Profile</button>
                                </div>
                            </div>
                        </form>
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
<?php endif; ?><?php /**PATH C:\laragon\www\evoting\resources\views/user/profile.blade.php ENDPATH**/ ?>