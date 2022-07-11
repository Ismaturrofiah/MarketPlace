<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid mt--6">
    <!-- Card stats -->
    <div class="row">
    </div>
    <div class="row">
        <div class="col-xl-10">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/assets/img/theme/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= user()->username; ?></h5>
                            <p class="card-text"><?= user()->email; ?></p>
                            <p class="card-text"><small class="text-muted">Member since <?= user()->created_at; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>