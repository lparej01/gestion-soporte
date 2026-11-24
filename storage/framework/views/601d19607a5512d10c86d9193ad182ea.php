

<?php $__env->startSection('template_title'); ?>
    Rol
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php ($actionsBlade = json_decode($actions)); ?>



        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-sm-12 mb-4">

                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tables.bo-table','data' => ['data' => $rols,'title' => 'LISTADOS DE ROLES','dataId' => 'table','dataToolbar' => '#toolbar','dataToggle' => 'table','dataShowRefresh' => 'false','dataShowToggle' => 'false','dataShowFullscreen' => 'false','dataShowColumns' => 'true','dataShowPaginationSwitch' => 'false','dataShowColumnsToggleAll' => 'true','dataSearch' => 'true','dataSearchAccentNeutralise' => 'true','dataSearchAlign' => 'left','dataSearchHighlight' => 'true','dataSearchOnEnterKey' => 'false','dataStrictSearch' => 'true','dataPagination' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables.bo-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rols),'title' => 'LISTADOS DE ROLES','data-id' => 'table','data-toolbar' => '#toolbar','data-toggle' => 'table','data-show-refresh' => 'false','data-show-toggle' => 'false','data-show-fullscreen' => 'false','data-show-columns' => 'true','data-show-pagination-switch' => 'false','data-show-columns-toggle-all' => 'true','data-search' => 'true','data-search-accent-neutralise' => 'true','data-search-align' => 'left','data-search-highlight' => 'true','data-search-on-enter-key' => 'false','data-strict-search' => 'true','data-pagination' => 'true']); ?>
                                 <?php $__env->slot('headerActions', null, []); ?> 

                                    <div class="float-right">
                                        <?php if($actionsBlade->can_create > 0): ?>
                                            <a href="<?php echo e(route('create_rol')); ?>" class="btn btn-primary float-right"
                                                data-placement="left">
                                                <?php echo e(__('Crear Nuevo Rol')); ?>

                                            </a>
                                        <?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notify.modal','data' => ['xData' => '{ id: tableControlles.idRow }','idModal' => 'modalRole']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notify.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{ id: tableControlles.idRow }','id-modal' => 'modalRole']); ?>
                                             <?php $__env->slot('modalTitle', null, []); ?> 
                                                <h4 class="text-lg">Rol</h4>
                                             <?php $__env->endSlot(); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notify.modal','data' => ['xData' => '{ id: tableControlles.idRow }','idModal' => 'modalRole']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notify.modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-data' => '{ id: tableControlles.idRow }','id-modal' => 'modalRole']); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>

                                 <?php $__env->endSlot(); ?>

                                <?php $__env->startPush('scripts'); ?>
                                    <script>
                                        (function() {
                                            let rolActions = <?php echo $actions; ?>;
                                            tableControlles.conditionalRow({

                                                <?php if($actionsBlade->can_show > 0): ?>
                                                    show: rolActions.can_show,
                                                <?php endif; ?>

                                                <?php if($actionsBlade->can_edit > 0): ?>
                                                    edit: rolActions.can_edit,
                                                <?php endif; ?>

                                                <?php if($actionsBlade->can_disable > 0): ?>
                                                    disable: rolActions.can_disable,
                                                <?php endif; ?>

                                                 <?php if($actionsBlade->can_delete > 0): ?>
                                                    delete: rolActions.can_delete,
                                                <?php endif; ?>  

                                                

                                            })
                                        })()
                                    </script>
                                    <script src="<?php echo e(asset("assets/team/js/plugins/bootstrap-table.min.js")); ?>"></script>
                                    <script src="<?php echo e(asset("assets/team/scripts/tables/rol.js")); ?>"></script>
                                <?php $__env->stopPush(); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.team.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/admin/rol/index.blade.php ENDPATH**/ ?>