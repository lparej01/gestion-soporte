

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6 col-7">
                <?php if(isset($title)): ?>
                    <h6><?php echo e($title); ?></h6>
                <?php endif; ?>
                <p class="text-sm mb-0">
                    <?php if(isset($captionIcon)): ?>
                        <i class="fa fa-<?php echo e($captionIcon); ?> text-info" aria-hidden="true"></i>
                    <?php endif; ?>
                    <?php if(isset($caption)): ?>
                        <span class="font-weight-bold ms-1"> <?php echo e($caption); ?></span>
                    <?php endif; ?>
                </p>
                <?php if(isset($headerTitle)): ?>
                    <div><?php echo e($headerTitle); ?></div>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
                <?php if(isset($btnAction)): ?>
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle cursor-pointer" type="button" id="dropdownActions"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e($btnAction->title); ?>

                            <?php if(isset($btnAction->icon)): ?>
                                <i class="fa fa-<?php echo e($btnAction->icon || 'ellipsis-v'); ?> text-secondary" aria-hidden="true"></i>
                            <?php endif; ?>
                        </button>

                        <?php if(isset($btnAction->actions)): ?>
                            <ul class="dropdown-menu dropdown-menu-right shadow-lg px-2 py-3 ms-sm-n4 ms-n5"
                                aria-labelledby="dropdownActions">
                                <?php $__currentLoopData = $btnAction->actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;"><?php echo e($actions->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div><?php echo e($headerActions); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
   
    
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0"> 
              
            <table class="table align-items-center mb-0 "
                id=<?php echo e($dataId); ?>

                data-toolbar="#toolbar"
                data-toggle="table"
                data-data-type="text"
                data-strict-search=<?php echo e($dataStrictSearch); ?>

                data-search=<?php echo e($dataSearch); ?>

                data-search-accent-neutralise=<?php echo e($dataSearchAccentNeutralise); ?>

                data-search-align=<?php echo e($dataSearchAlign); ?> data-search-highlight=<?php echo e($dataSearchHighlight); ?>

                data-search-on-enter-key=<?php echo e($dataSearchOnEnterKey); ?>

                <?php if(isset($searchCustomSearch)): ?> data-custom-search=<?php echo e($searchCustomSearch); ?> <?php endif; ?>
                <?php if(isset($searchSelector)): ?>  data-search-selector=<?php echo e($searchSelector); ?>  <?php endif; ?>
                data-show-refresh=<?php echo e($dataShowRefresh); ?> data-show-toggle=<?php echo e($dataShowToggle); ?>

                data-show-fullscreen=<?php echo e($dataShowFullscreen); ?> data-show-columns=<?php echo e($dataShowColumns); ?>

                data-show-pagination-switch=<?php echo e($dataShowPaginationSwitch); ?>

                data-show-columns-toggle-all=<?php echo e($dataShowColumnsToggleAll); ?>

                <?php if(isset($dataPagination)): ?>
                data-pagination=<?php echo e($dataPagination); ?>

                <?php endif; ?>
                
                data-id-field="id"
                <?php if(isset($dataHeight)): ?>
                    data-height=<?php echo e($dataHeight); ?>

                <?php endif; ?>
                data-page-list="[10, 25, 50, 100, all]"
                
                 
                >

                <?php echo e($slot); ?>

            
            
            </table>
   
        </div> 
       
    </div>
    </div>
</div>

<script>
    var $tableInstanceInUse = $('#<?php echo e($dataId); ?>');

    function renderTable(columns) {
        $tableInstanceInUse.bootstrapTable('destroy').bootstrapTable({
            data: <?php echo $data; ?>,
            columns: columns ?? []
        })
    }
</script>

<script src="<?php echo e(asset('/assets/scripts/useTables.js')); ?>"></script>

<script>
    var tableControlles = new TableControlles($tableInstanceInUse);    
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>


<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/components/tables/bo-table.blade.php ENDPATH**/ ?>