<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3" id="loginPage">
        <div class="row h-100 g-0 justify-content-center">
            <div class="col-lg-4 my-auto">
                <div class="card border-0 shadow mb-3" id="qrcode" style="display: none">
                    <div class="card-body p-3" id="reader"></div>
                </div>
                <div class="card border-0 shadow">
                    <div class="card-header text-center fs-3 fw-bold text-uppercase p-3 border-0 shadow-sm">
                        Masuk Ke Akun Anda
                    </div>
                    <div class="text-center">
                        <small>masukkan data sesuai yang ada daftarkan sebelumnya</small>
                    </div>
                    <div class="card-body p-3">
                        <form action="<?php echo e(route('login')); ?>" method="post" id="formLogin">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control text-center fs-5" id="username"
                                    name="username" placeholder="username" value="<?php echo e(old('username')); ?>" autofocus
                                    required>
                                <label for="username" id="label_username">NIK / Username</label>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="small text-danger py-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    value="<?php echo e(old('password')); ?>" placeholder="Password" required>
                                <label for="password">Password</label>
                                <button
                                    class="btn btn-outline-secondary position-absolute top-50 end-0 translate-middle-y"
                                    type="button" id="togglePassword">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="small text-danger py-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="m-3">
                                <p class="fw-bold mx-2">Masuk sebagai :</p>
                                <div class="form-check form-switch form-switch-lg">
                                    <input class="form-check-input" type="checkbox" id="login_as" name="login_as">
                                    <label class="form-check-label px-3 py-2" for="login_as"
                                        id="label_login_as">Pemilih</label>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="d-grid gap-2 col-lg-6 mx-auto my-1">
                                    <button type="submit" class="btn btn-rounded btn-lg btn-primary"><i
                                            class="bi bi-box-arrow-in-right"></i> Masuk</button>
                                    <button type="button" id="start-scan"
                                        class="btn btn-xl btn-rounded btn-secondary"><i class="fa fa-qrcode"
                                            aria-hidden="true"></i> Login With
                                        QRCode</button>
                                </div>
                            </div>
                            <small class="d-block text-center p-3">Belum Terdaftar? <a href="<?php echo e(route('register')); ?>"
                                    class="text-decoration-none fw-bold">Buat Akun!</a></small>
                        </form>
                        <form id="barcode-login-form" action="<?php echo e(route('login.with.barcode')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="idbarcode" name="uuid" required>
                            <button type="submit" style="display:none;">Login</button>
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
<?php endif; ?>
<?php /**PATH C:\laragon\www\evoting\resources\views/auth/login.blade.php ENDPATH**/ ?>