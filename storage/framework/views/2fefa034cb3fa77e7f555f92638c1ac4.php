<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset("assets/team/img/iconos.jpeg")); ?>">
  <link rel="icon"  href="<?php echo e(asset("assets/team/img/iconos.jpeg")); ?>" class="rounded">
  <title>
    Gestion de Soporte
  </title>
  
  <!--     Fonts and icons     -->
  <link href="<?php echo e(asset("assets/team/fonts.googleapis.css?family=Open+Sans:300,400,600,700" )); ?>"rel="stylesheet" />
  <link href="<?php echo e(asset("assets/team/css/nucleo-icons.css")); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset("assets/team/css/nucleo-svg.css")); ?>" rel="stylesheet" />  
  <link href="<?php echo e(asset("assets/team/css/bootstrap-icon.css")); ?>" rel="stylesheet" />  
 

   <!-- Font Awesome Icons -->
  <script src="<?php echo e(asset("assets/team/42d5adcbca.js")); ?>" crossorigin="anonymous"></script>

  <link href="<?php echo e(asset("assets/team/css/nucleo-svg.css")); ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo e(asset("assets/team/css/soft-ui-dashboard.css?v=1.0.7")); ?>" rel="stylesheet" />
 
  <link href="<?php echo e(asset("assets/team/css/toastr.min.css")); ?>" rel="stylesheet" type="text/css" />
  
  <script src="<?php echo e(asset("assets/team/js/jquery.min.js")); ?>"></script>



</head>

<body class="g-sidenav-show  bg-gray-100">


<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loadingscreen','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loadingscreen'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

 <?php echo $__env->make("theme/$theme/aside", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">  
   
          <?php echo $__env->make("theme/$theme/navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
        <main class="py-4">
       
         <?php echo $__env->yieldContent('content', View::make('theme.team.container')); ?>  
         <?php echo $__env->make("theme/$theme/footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
       
         </main>



    </div>
	   <!--container-->


    <script src="<?php echo e(asset("assets/team/js/core/popper.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/core/bootstrap.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/perfect-scrollbar.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/smooth-scrollbar.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/chartjs.min.js")); ?>"></script>    
    <script async defer src="<?php echo e(asset("assets/team/buttons.github.io.js")); ?>"></script>  
    <script src="<?php echo e(asset("assets/team/js/soft-ui-dashboard.min.js?v=1.0.7")); ?>"></script>   
    <script src="<?php echo e(asset("assets/team/js/plugins/fullcalendar.min.js")); ?>"></script>  
    <script src="<?php echo e(asset("assets/team/js/plugins/echarts.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/animate.min.js")); ?>"></script>    
    <script src="<?php echo e(asset("assets/team/js/plugins/bootstrap-notify.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/axios.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/team/js/plugins/axios.min.js")); ?>"></script>  
     

   <script src="<?php echo e(asset("assets/team/js/toastr.min.js")); ?>" type="text/javascript"></script>

    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notify.status-notify','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notify.status-notify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

   

</body>

</html>
<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/theme/team/app.blade.php ENDPATH**/ ?>