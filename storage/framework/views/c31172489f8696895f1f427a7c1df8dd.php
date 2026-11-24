<div>
    <div class="modal fade" id="<?php echo e($idModal); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <?php if(isset($modalTitle)): ?>
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e($modalTitle); ?></h1>
                    <?php endif; ?>
                    <button type="button" class="btn btn-only btn-link btn-icon-only text-lg" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-circle-fill "></i>
                    </button>
                </div>
                <div data-modal-content>

                </div>
                <?php if(isset($modalFooter)): ?>
                    <div class="modal-footer">
                        <?php echo e($modalFooter); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/components/notify/modal.blade.php ENDPATH**/ ?>