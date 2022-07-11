<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-6 pt-lg-8">
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
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-1">
                        <div class="text-muted text-center mt-2 mb-3">
                            <h2><?= lang('Auth.loginTitle') ?></h2>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= route_to('login') ?>" method="post" class="user">
                            <?= csrf_field() ?>
                            <?php if ($config->validFields === ['email']) : ?>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" type="email" name="login">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>" type="text" name="login">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" type="password" name="password">
                                </div>
                            </div>
                            <?php if ($config->allowRemembering) : ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4"><?= lang('Auth.loginAction') ?></button>
                            </div>
                        </form>
                        <hr>
                        <?php if ($config->allowRegistration) : ?>
                            <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                        <?php endif; ?>
                        <?php if ($config->activeResetter) : ?>
                            <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>