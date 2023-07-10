

<?php $__env->startSection('title', 'Miverr - Home'); ?>


<?php $__env->startSection('content'); ?>
    <h1>Welcome to the Category Page</h1>
    <script>
  window.addEventListener('load', function() {
    var headerSearch = document.getElementById('header-search');
    var headerBottomMenu = document.querySelector('.header-bottom-menu');
    
    headerBottomMenu.classList.add('show');
    headerSearch.classList.add('show');
  });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
    

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miverr\resources\views/pages/categories.blade.php ENDPATH**/ ?>