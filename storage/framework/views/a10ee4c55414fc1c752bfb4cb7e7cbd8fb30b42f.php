<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/x-icon">
    <title><?php echo e(config('app.name', 'E-Voting App')); ?></title>
</head>
<body class="bg-style font-quicksand">
    <?php if(session()->has('success')): ?>
    <div class="bg-success py-3 px-5 text-white"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session()->has('error')): ?>
    <div class="bg-danger py-3 px-5 text-white"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    <?php if(session()->has('warning')): ?>
    <div class="bg-warning py-3 px-5 text-dark"><?php echo e(session('warning')); ?></div>
    <?php endif; ?>
    <?php echo $__env->make('layouts.UserNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo e($slot); ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Navbar shrink function
            var navbarShrink = function () {
                const navbarCollapsible = document.body.querySelector('#mainNav');
                if (!navbarCollapsible) {
                    return;
                }
                if (window.scrollY === 0 || window.scrollY <= 10) {
                    navbarCollapsible.classList.add('navbar-shrink');
                    navbarCollapsible.classList.remove('bg-light');
                    navbarCollapsible.classList.add('bg-blur');
                    navbarCollapsible.classList.remove('shadow');
                    $('meta[name=theme-color]').attr('content', '#3C3A35');
                } else {
                    navbarCollapsible.classList.remove('navbar-shrink');
                    navbarCollapsible.classList.add('bg-light');
                    navbarCollapsible.classList.remove('bg-blur');
                    navbarCollapsible.classList.add('shadow');
                    $('meta[name=theme-color]').attr('content', '#f8f9fa');
                }
            };
            // Shrink the navbar 
            navbarShrink();
            // Shrink the navbar when page is scrolled
            document.addEventListener('scroll', navbarShrink);
        });
    </script>
    <?php if(Request::is('login')): ?>
    <script>
        check_login_as();
        function check_login_as() {
            if ($('#login_as')[0].checked) {
                $('#label_login_as').text('Admin');
                $('#label_username').text('Username');
            } else {
                $('#label_login_as').text('Pemilih');
                $('#label_username').text('NIK');
            }
        }
        $(document).ready(function(){
            $('#login_as').change(function () {
                check_login_as();
            });
        });
    </script>
    <?php endif; ?>
    <script src="<?php echo e(asset('/assets/js/app.js')); ?>"></script>
    <?php if(auth()->guard()->check()): ?>
    <script src="<?php echo e(asset('/assets/js/user.js')); ?>"></script>
    <?php endif; ?>
    <?php if(Request::is('hasil')): ?>
    <script src="<?php echo e(asset('/assets/js/voteresult.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(asset('/assets/js/notif.js')); ?>"></script>
</body>
</html><?php /**PATH D:\tes\evoting\resources\views/layouts/User.blade.php ENDPATH**/ ?>