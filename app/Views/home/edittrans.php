<?= $this->include('home/navbar'); ?>
<?= $this->include('ticket/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="m-3">Detail Transportasi</h2>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="card my-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $transportasi['foto']; ?>" class="card-img" alt="<?= $transportasi['foto']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $transportasi['nama']; ?></h5>
                            <p class="card-text"><b>Stok : </b><?= $transportasi['jumlah']; ?></p>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editList">
                                Edit Data
                            </button>
                            <div class="modal fade" id="editList" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Edit Data transportasi <?= $transportasi['nama']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/.../.../<?= $transportasi['id']; ?>" method="post">
                                                <?= csrf_field(); ?>
                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $transportasi['nama']; ?>">
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="jenis_transportasi" name="jenis_transportasi" value="<?= $transportasi['jenis_transportasi']; ?>">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                                                    <div class="col-sm-3">
                                                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $transportasi['jumlah']; ?>" min="1">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="foto" value="<?= $transportasi['foto']; ?>">
                                                <div class="form-group row modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/.../<?= $transportasi['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger ml-1" onclick="return  confirm('Data Transportasi akan dihapus, lanjut?');">Hapus</button>
                            </form>
                            <br><br>
                            <a href="/...">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('ticket/footer'); ?>
