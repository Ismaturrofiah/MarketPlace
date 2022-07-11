<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login</title>
    <!-- Favicon -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="ni ni-shop text-white"></i>
                </div>
                <div class="sidebar-brand-text text-white mx-3">Your Style Shop</div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a class="navbar-brand" href="javascript:void(0)">
                                <div class="sidebar-brand-icon rotate-n-15">
                                    <i class="ni ni-shop text-primary"></i>
                                </div>
                                <div class="sidebar-brand-text text-primary mx-3">Your Style Shop</div>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content'); ?>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; <?= date('Y'); ?> <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Your Style Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>