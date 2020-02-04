<?php $__env->startSection('title'); ?>
Registratie
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1>Registratie</h1>
<p>Registratie</p>
<div class="register">
<form method="POST" action="register" class="pb-3">
<p>Gebruikersnaam:</p><div class="input-group"><input type="text" name="username" value="<?php echo e(old('username')); ?>"></div>
<div><?php echo e($errors->first('username')); ?></div>
<p>Wachtwoord:</p><div class="input-group"><input type="password" name="password" value="<?php echo e(old('password')); ?>"></div>
<div><?php echo e($errors->first('password')); ?></div>
<p>E-mail:</p><div class="input-group"><input type="text" name="email" value="<?php echo e(old('email')); ?>"></div>
<div><?php echo e($errors->first('email')); ?></div>
<input type="submit" value="registreer">
<?php echo csrf_field(); ?>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiebe\Documents\stage\laravel\Laravel\resources\views/register.blade.php ENDPATH**/ ?>