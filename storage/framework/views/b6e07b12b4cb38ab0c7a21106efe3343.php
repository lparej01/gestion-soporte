<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/team/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/team/img/favicon.png')); ?>">
    <title>
        GESTION DE SOPORTE
    </title>

    <!--     Fonts and icons     -->
    <link href="<?php echo e(asset('assets/team/fonts.googleapis.css?family=Open+Sans:300,400,600,700')); ?>"rel="stylesheet" />
    <link href="<?php echo e(asset('assets/team/css/nucleo-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/team/css/nucleo-svg.css')); ?>" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="<?php echo e(asset('assets/team/42d5adcbca.js')); ?>" crossorigin="anonymous"></script>

    <link href="<?php echo e(asset('assets/team/css/nucleo-svg.css')); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets/team/css/soft-ui-dashboard.css?v=1.0.7')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('assets/team/js/jquery.min.js')); ?>"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }

        .container {
            padding-top: 50px;
            margin: auto;
        }
    </style>
    <div class="container">
        <main class="main-content  mt-0">
            <section>
                <div class="page-header h-100vh">
                    <div class="container pt-3">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-8 d-flex flex-column mx-auto">
                                <div class="card card-plain mt-2">
                                    <div class="pb-0 text-left bg-transparent">
                                        <h4 class="font-weight-bolder text-info text-gradient text-center">Gestion de Soporte</h4>

                                    </div>                                   
                                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="mb-3">
                                                <?php echo e(Form::label('USUARIO:')); ?>

                                                <input id="email" type="email"
                                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="email" value="<?php echo e(old('email')); ?>" required
                                                    autocomplete="email" autofocus>

                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="mb-3 input-div">
                                                <?php echo e(Form::label('CONTRASEÑA:')); ?>

                                                <input id="password-field" type="password"
                                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="password" required autocomplete="current-password">
                                                <span toggle="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="rememberMe"
                                                    checked="">
                                                <label class="form-check-label" for="rememberMe">Recuerdame</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn bg-gradient-info w-100 mt-4 mb-0">Ingresar al
                                                    sistema</button>
                                            </div>
                                        </form>
                                    
                                    <div class="card-footer text-center d-flex flex-column px-lg-2 px-1">

                                        <span class="text-muted">RESTABLECER CONTRASEÑA
                                            <a href="<?php echo e(route('forgot.password')); ?>"
                                                class="text-info text-gradient font-weight-bold">AQUI</a>
                                        </span>
                                        <span class="text-muted">
                                            <a href="<?php echo e(route('user.create')); ?>"
                                                class="text-info text-gradient font-weight-bold">REGISTRESE AQUI</a>
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n7"
                                        style="background-image:url('assets/team/img/curved-images/curved5.jpg')">


                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

    <script src="<?php echo e(asset('assets/team/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/chartjs.min.js')); ?>"></script>
    <script async defer src="<?php echo e(asset('assets/team/buttons.github.io.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/soft-ui-dashboard.min.js?v=1.0.7')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/echarts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/animate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/team/js/plugins/bootstrap-notify.js')); ?>"></script>


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
<?php /**PATH C:\xampp\htdocs\gestion-soporte\resources\views/auth/login.blade.php ENDPATH**/ ?>