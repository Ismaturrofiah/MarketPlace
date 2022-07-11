<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="ni ni-shop text-primary"></i>
                </div>
                <div class="sidebar-brand-text text-primary mx-3">Your Style Shope</div>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('dashboard'); ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <?php if (in_groups('Administrator')) : ?>
                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        User Management
                    </div>
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url('admin'); ?>">
                                <i class="fas fa-users text-primary"></i>
                                <span class="nav-link-text">User List</span>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Staffs Management
                </div>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('staff'); ?>">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="nav-link-text">Staff</span>
                        </a>
                    </li>
                </ul>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('category'); ?>">
                            <i class="fas fa-border-all text-primary"></i>
                            <span class="nav-link-text">Category</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>