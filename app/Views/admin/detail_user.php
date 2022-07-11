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
                        <img src="<?= base_url('/assets/img/theme/' . $user->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $user->username; ?></h4>
                                </li>
                                <li class="list-group-item"><?= $user->email; ?></li>
                                <li class="list-group-item">
                                    <span class="badge badge-<?= ($user->name == 'Administrator') ? 'success' : 'warning' ?>"><?= $user->name; ?></span>
                                </li>
                                <li class="list-group-item"> Back to
                                    <small><a href="<?= base_url('admin'); ?>">&laquo User List</a></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>