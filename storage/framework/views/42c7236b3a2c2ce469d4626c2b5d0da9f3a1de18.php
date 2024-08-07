<nav class="navbar navbar-expand-lg sticky-top navbar-light text-uppercase navbar-shrink rounded-bottom bg-blur" id="mainNav">
    <div class="container">
        <a class="navbar-brand fw-bold mx-5" href="/"><?php echo e(config('app.name', 'E-Voting App')); ?></a>
        <button class="navbar-toggler border-0 shadow-md rounded mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="bi bi-filter-left display-3"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <div class="navbar-nav p-3">
                <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="<?php echo e(route('homepage')); ?>">Beranda</a>
                <a class="nav-link <?php echo e(Request::routeIs('announcement') ? 'active' : ''); ?>" href="<?php echo e(route('announcement')); ?>">Pengumuman</a>
                <a class="nav-link <?php echo e(Request::routeIs('voting') ? 'active' : ''); ?>" href="<?php echo e(route('voting')); ?>">Pemilihan</a>
                <a class="nav-link <?php echo e(Request::routeIs('voting.result') ? 'active' : ''); ?>" href="<?php echo e(route('voting.result')); ?>">Hasil Pemilihan</a>
            </div>
            <div class="navbar-nav p-3">
                <?php if(auth()->guard('admin')->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i> <?php echo e(auth()->guard('admin')->user()->name); ?> (Admin)
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm">
                        <li><a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="<?php echo e(route('logout.admin')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item border-0 rounded text-uppercase"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i> <?php echo e(auth()->user()->name); ?>

                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm">
                        <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>"><i class="bi bi-person-bounding-box"></i> Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item border-0 rounded text-uppercase"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <a class="nav-link <?php echo e(Request::routeIs('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
                <a class="nav-link <?php echo e(Request::routeIs('register') ? 'active' : ''); ?>" href="<?php echo e(route('register')); ?>"><i class="bi bi-box-arrow-in-down"></i> Mendaftar</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav><?php /**PATH D:\tes\evoting\resources\views/layouts/UserNavbar.blade.php ENDPATH**/ ?>