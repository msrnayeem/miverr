<?php $__env->startSection('title', 'Miverr - Home'); ?>


<?php $__env->startSection('content'); ?>
    <h1>Welcome to the Home Page</h1>
    <p>This is the content of the home page.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miverr\resources\views/pages/index.blade.php ENDPATH**/ ?>