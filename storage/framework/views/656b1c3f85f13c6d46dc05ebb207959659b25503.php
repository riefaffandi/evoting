<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light bg-gradient shadow-sm text-uppercase navbar-shrink" id="dashNav">
    <div class="container">
        <a class="navbar-brand fw-bold mx-3" href="<?php echo e(route('dashboard')); ?>">Dashboard Admin</a>
        <button class="navbar-toggler border-0 shadow-md rounded mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <i class="bi bi-filter-left display-3"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav p-3">
                <a class="nav-link <?php echo e(Request::is('dashboard/user*') ? 'active' : ''); ?>" href="<?php echo e(route('user.index')); ?>">Data Pemilih</a>
                <a class="nav-link <?php echo e(Request::is('dashboard/candidate*') ? 'active' : ''); ?>" href="<?php echo e(route('candidate.index')); ?>">Data Kandidat</a>
                <a class="nav-link <?php echo e(Request::is('dashboard/voting_data') ? 'active' : ''); ?>" href="<?php echo e(route('voting.data')); ?>">Data Pemilihan</a>
                <a class="nav-link <?php echo e(Request::is('dashboard/admin*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.index')); ?>">Data Admin</a>
            </div>
            <div class="navbar-nav p-3">
                <a class="nav-link <?php echo e(Request::is('dashboard/configuration') ? 'active' : ''); ?>" href="<?php echo e(route('configuration')); ?>"><i class="bi bi-nut"></i> Konfigurasi</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person"></i> <?php echo e(strtok(auth()->guard('admin')->user()->name, " ")); ?>

                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm">
                        <li>
                            <div class="dropdown-header">
                                <div class="row px-3">
                                    <div class="col">
                                        <?php if(auth()->guard('admin')->user()->is_super == 1): ?>
                                        <h6 class="fw-bold text-danger fst-italic">Super Admin</h6>
                                        <?php endif; ?>
                                        <p class="fw-bold text-primary"><?php echo e(auth()->guard('admin')->user()->name); ?></p>
                                        <p class="small text-secondary"><?php echo e(auth()->guard('admin')->user()->username); ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <form action="<?php echo e(route('logout.admin')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item border-0 rounded text-uppercase"><i class="bi bi-box-arrow-right"></i>&nbsp; Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</nav><?php /**PATH D:\tes\evoting\resources\views/layouts/AdminNavbar.blade.php ENDPATH**/ ?>