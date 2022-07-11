<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<!-- Card stats -->
<div class="row">
    <?php if (in_groups('Administrator')) : ?>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                            <span class="h2 font-weight-bold mb-0"><?= $users; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-nowrap">Last Update</span>
                        <span class="text-nowrap"><?= date('d F Y'); ?></span>
                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-xl-4 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Barang</h5>
                        <span class="h2 font-weight-bold mb-0"><?= $barang; ?></span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Last Update</span>
                    <span class="text-nowrap"><?= date('d F Y'); ?></span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Page visits</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Unique users</th>
                            <th scope="col">Bounce rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">/dashboard/</th>
                            <td>4,569</td>
                            <td>340</td>
                            <td><i class="fas fa-arrow-up text-success mr-3"></i> 46,53%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>