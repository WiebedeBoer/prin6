<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1>Login</h1>
<p>Login</p>
<div class="login">
<form method="POST" action="login">
<p>Gebruikersnaam:</p><input type="text" name="username">
<p>Wachtwoord:</p><input type="password" name="password">
<input type="submit" value="login">
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiebe\Documents\stage\laravel\Laravel\resources\views/login.blade.php ENDPATH**/ ?>