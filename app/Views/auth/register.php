<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-4 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border-0">
                    <div class="card-header bg-transparent pb-i">
                        <div class="text-muted text-center mt-2 mb-4">
                            <h2><?= lang('Auth.register') ?></h2>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= route_to('register') ?>" method="post" class="user">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                    <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.username') ?>" type="text" name="username" value="<?= old('username') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                    <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" type="email" name="email" value="<?= old('email') ?>">
                                </div>
                                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" type="password" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <input class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" type="password" name="pass_confirm">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                            </div>
                        </form>
                        <hr>
                        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>