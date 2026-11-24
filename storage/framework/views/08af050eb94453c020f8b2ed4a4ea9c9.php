
 
 <?php if($item['submenu'] == []): ?>
      
     <li class="nav-item">
         <a class="nav-link m-0" data-bs-toggle="collapse" href="<?php echo e($item['url']); ?>" aria-expanded="false"
             aria-controls="ui-basic">

             <div class="icon icon-shape icon-sm shadow bg-gradient-white border-radius-md bg-outline-danger text-white text-center me-2 d-flex align-items-center justify-content-center">
                   <img id="imagen" src ="<?php echo e(asset('storage').'/'.$item['icono']); ?>"  class="rounded" width="25" height="25" >
             </div>
             <b class="menu-title" style="font-size: 16px;"><?php echo e($item['nombre']); ?></b>
             <i class="menu-arrow"></i>
         </a>
     </li>
 <?php else: ?>
  
     <li class="nav-item "  >
         <a class="nav-link m-0 "  data-bs-toggle="collapse" href="<?php echo e($item['url']); ?>" aria-expanded="false"
             aria-controls="ui-basic">
             <div
                 class="icon icon-shape icon-sm shadow bg-gradient-white border-radius-md bg-outline-danger text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <img id="imagen" src ="<?php echo e(asset('storage').'/'.$item['icono']); ?>"  class="rounded" width="35" height="35" >
                  
                 
             </div>
             <b class="menu-title" style="font-size: 18px;"><?php echo e($item['nombre']); ?></b>
             <i class="menu-arrow"></i>
         </a>
         <div class="collapse" id="<?php echo e($item['tipo']); ?>">
             <ul class="flex-column sub-menu navbar-nav">
                 <?php $__currentLoopData = $item['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li class="nav-item mt-2">
                         <a class="nav-link" href="<?php echo e(route($submenu['url'])); ?>">
                         
                            
                                <div class="icon icon-shape icon-sm  border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                             
                              <img id="imagen" src ="<?php echo e(asset('storage').'/'.$submenu['icono']); ?>"  class="rounded" width="35" height="35" >
                             </div>
                             <span class="nav-link-text ms-1" style="color: black"><?php echo e($submenu['nombre']); ?></span>
                         </a>
                     </li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


             </ul>
         </div>
     </li>

  

 <?php endif; ?>
 
<!-- End Navbar -->
<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/theme/team/menu-item.blade.php ENDPATH**/ ?>