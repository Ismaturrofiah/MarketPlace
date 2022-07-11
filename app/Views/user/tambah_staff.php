<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid mt--6">
    <!-- Card stats -->
    <div class="row">
    </div>
    <div class="row">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Tambah Barang</h3>
                        </div>
                    </div>
                    <?php if (!empty(session()->getFlashdata('errors'))) : ?>
                        <div style="margin-top:3%;" class="valid">
                            <div class="alert alert-danger text-white " role="alert">
                                <?php echo session()->getFlashdata('errors'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <form action="/staff/simpan" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nama">Nama Barang</label>
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama barang">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Jenis Barang</label>
                                        <select id="inputState" class="form-control" name="jenis">
                                            <option selected>Pilih Jenis Barang</option>
                                            <?php foreach ($jenis as $j) : ?>
                                                <option value="<?= $j['id_jenis']; ?>"><?= $j['jenisbarang']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Harga Barang</label>
                                        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga barang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Image -->
                        <h6 class="heading-small text-muted mb-4">Foto Produk</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="file-input">
                                        <input type="file" name="gambar" id="file" class="file">
                                        <label for="file">Upload Foto <i style="padding-left: 5px;" class=" fas fa-upload"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Keterangan -->
                        <h6 class="heading-small text-muted mb-4">Keterangan</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="file-input">
                                        <input type="textarea" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="display: flex; margin-left:2%" class="buton">
                                        <a class="btn btn-danger mb-3" href="<?= base_url('staff'); ?>">Kembali</a>
                                        <button style="margin-left: 2%;" type="submit" class="btn btn-primary mb-3" name="submit">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>