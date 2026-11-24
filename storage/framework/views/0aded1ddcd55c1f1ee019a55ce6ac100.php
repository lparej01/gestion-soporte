<?php if(session()->has('success')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" style="top: 5%; right: -30%;"
        class="position-fixed z-index-sticky alert alert-success right-3 text-sm py-2 px-4 w-30 d-flex align-items-center gap-2 text-white">
        <i class="bi bi bi-check-circle-fill"></i>
        <p class="m-0 p-2"><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" style="top: 5%; right: -30%;"
        class="position-fixed z-index-sticky alert alert-danger right-3 text-sm py-2 px-4 w-30 d-flex align-items-center gap-2 text-white">
        <i class="bi bi bi-check-circle-fill"></i>
        <p class="m-0 p-2"><?php echo e(session('error')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('info')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" style="top: 5%; right: -30%;"
        class="position-fixed z-index-sticky alert alert-info right-3 text-sm py-2 px-4 w-30 d-flex align-items-center gap-2 text-white">
        <i class="bi bi bi-check-circle-fill"></i>
        <p class="m-0 p-2"><?php echo e(session('info')); ?></p>
    </div>
<?php endif; ?>
<?php if(session()->has('warning')): ?>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" style="top: 5%; right: -30%;"
        class="position-fixed z-index-sticky alert alert-warning right-3 text-sm py-2 px-4 w-30 d-flex align-items-center gap-2 text-white">
        <i class="bi bi bi-check-circle-fill"></i>
        <p class="m-0 p-2"><?php echo e(session('warning')); ?></p>
    </div>
<?php endif; ?>
<script>
    $(() => {
        let session = "<?php echo e(session()->has('success') || session()->has('error') || session()->has('info') || session()->has('warning')); ?>" ??
            null;

        if (session) {
            anime({
                targets: '.alert',
                translateX: -500,
                direction: 'alternate',
            });
        }
    })
</script>
<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/components/notify/status-notify.blade.php ENDPATH**/ ?>