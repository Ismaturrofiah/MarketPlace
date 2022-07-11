<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Your Style Shop</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="<?= base_url(); ?>/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <?= $this->include('templates/sidebar'); ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?= $this->include('templates/topbar'); ?>
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                                    </ol>
                                </nav>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <?= $this->renderSection('page-content'); ?>
            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left text-muted">
                            &copy; <?= date('Y'); ?> <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Your Style Shop</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>