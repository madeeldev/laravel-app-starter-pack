<?php $__env->startSection('title', 'Pages / Not Found 404'); ?>

<?php $__env->startSection('content'); ?>

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="http://127.0.0.1:8000">Back to home</a>
        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
            Designed by <a href="https://adeelsafdar.dev">Adeel Safdar</a>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2024\impaqt\resources\views/404.blade.php ENDPATH**/ ?>