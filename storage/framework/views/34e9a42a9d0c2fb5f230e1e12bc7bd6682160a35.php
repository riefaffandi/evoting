<div class="form-floating mb-3">
    <input type="number" class="form-control" id="username" name="username" placeholder="username" min="1" value="<?php echo e(old('username', $profile->username)); ?>" autofocus required>
    <label for="username" id="label_username">NIK</label>
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
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo e(old('name', $profile->name)); ?>" required>
    <label for="name" id="label_name">Nama</label>
    <?php $__errorArgs = ['name'];
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
<div class="form-floating mb-3">
    <input type="password" class="form-control" id="password" name="password" placeholder="password" value="<?php echo e(old('password')); ?>">
    <label for="password">Password</label>
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
<div class="form-floating mb-3">
    <input type="date" class="form-control" id="birth_date" name="birth_date" min="1960-01-01" max="2004-01-01" value="<?php echo e(old('birth_date', $profile->birth_date)); ?>" required>
    <label for="birth_date" id="label_birth_date">Tanggal Lahir</label>
    <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="small text-danger py-1"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div><?php /**PATH D:\tes\evoting\resources\views/components/form-user.blade.php ENDPATH**/ ?>