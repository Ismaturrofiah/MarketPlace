<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid mt--6">
    <!-- Card stats -->
    <div class="row">
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">List Staff</h3>
                        </div>
                        <div class="col text-right">
                            <a href="<?= base_url('staff/tambah'); ?>" class="btn btn-sm btn-primary">Tambah Barang</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($barang as $brg) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="<?= base_url(); ?>/gambar/<?= $brg['gambar']; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"></td>
                                    <td><?= $brg['nama']; ?></td>
                                    <td><?= $brg['jenis']; ?></td>
                                    <td><?= $brg['harga']; ?></td>
                                    <td><?= $brg['keterangan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('staff/edit/' . $brg['id_barang']); ?>" class="badge badge-info">Edit</a>
                                        <a onclick="return confirm('Apakah anda yakin menghapus ?')" href="/staff/delete/<?= $brg['id_barang']; ?>" id="hapus" class="badge badge-danger" data-toggle="tooltip" data-original-title="Edit user">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>