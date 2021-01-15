<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->include('home/navbar-u'); ?>
    <?= $this->include('ticket/navbar'); ?>
    
</head>
<?php $session = session(); ?>
<?php if (session()->get('role') == '2') { ?>

<div class="section section-light text-center">
<div class="container">
<div class="tm-container-outer" id="tm-section-3">
<div class="tab-content clearfix">           	

    <div class="tab-pane fade show active" id="4a">

        <div class="tm-recommended-place-wrap">
            <div class="tm-recommended-place">
                <img src="/img/trans/batavia1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <div class="text-center">
                    <h3 class="tm-recommended-title">Batavia Air</h3>
                    </div>
                    <p class="tm-text-highlight">Singapore</p>
                    <div class="text-center">
                    <p class="tm-text-gray">12:50 (dari tempat berangkat)</p>
                    <i class="fa fa-angle-down tm-down-arrow "></i> 
                    <p class="tm-text-gray">15:55 (sampai tempat tujuan)</p>  
                    </div>
                </div>
                <a href="#" class="tm-recommended-price-box">
                    <p class="tm-recommended-price">Rp990.000,00</p>
                    <p class="tm-recommended-price-link">Pesan!</p>
                </a>                        
            </div>

            <div class="tm-recommended-place">
                <img src="/img/trans/batik1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <div class="text-center">
                    <h3 class="tm-recommended-title">Batik Air</h3>
                    </div>
                    <p class="tm-text-highlight">Singapore</p>
                    <div class="text-center">
                    <p class="tm-text-gray">12:50 (dari tempat berangkat)</p>
                    <i class="fa fa-angle-down tm-down-arrow "></i> 
                    <p class="tm-text-gray">15:55 (sampai tempat tujuan)</p>  
                    </div>
                </div>
                <a href="#" class="tm-recommended-price-box">
                    <p class="tm-recommended-price">Rp890.000,00</p>
                    <p class="tm-recommended-price-link">Pesan!</p>
                </a>                        
            </div>

            <div class="tm-recommended-place">
                <img src="/img/trans/lion1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <div class="text-center">
                    <h3 class="tm-recommended-title">Lion Air</h3>
                    </div>
                    <p class="tm-text-highlight">Yangon, Myanmar</p>
                    <div class="text-center">
                    <p class="tm-text-gray">12:50 (dari tempat berangkat)</p>
                    <i class="fa fa-angle-down tm-down-arrow "></i> 
                    <p class="tm-text-gray">15:55 (sampai tempat tujuan)</p>  
                    </div> 
                </div>
                <div id="preload-hover-img"></div>
                <a href="#" class="tm-recommended-price-box">
                    <p class="tm-recommended-price">Rp500.000,00</p>
                    <p class="tm-recommended-price-link">Pesan!</p>
                </a>
            </div>

            <div class="tm-recommended-place">
                <img src="/img/trans/adam1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <div class="text-center">
                    <h3 class="tm-recommended-title">Adam Air</h3>
                    </div>
                    <p class="tm-text-highlight">Bangkok, Thailand</p>
                    <div class="text-center">
                    <p class="tm-text-gray">12:50 (dari tempat berangkat)</p>
                    <i class="fa fa-angle-down tm-down-arrow "></i> 
                    <p class="tm-text-gray">15:55 (sampai tempat tujuan)</p>  
                    </div>
                </div>
                <a href="#" class="tm-recommended-price-box">
                    <p class="tm-recommended-price">Rp790.000,00</p>
                    <p class="tm-recommended-price-link">Pesan!</p>
                </a>
            </div>

            <div class="tm-recommended-place">
                <img src="/img/trans/garuda1.jpg" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <div class="text-center">
                    <h3 class="tm-recommended-title">Garuda</h3>
                    </div>
                    <p class="tm-text-highlight">Vientiane, Laos</p>
                    <div class="text-center">
                    <p class="tm-text-gray">12:50 (dari tempat berangkat)</p>
                    <i class="fa fa-angle-down tm-down-arrow "></i> 
                    <p class="tm-text-gray">15:55 (sampai tempat tujuan)</p>  
                    </div>
                </div>
                <a href="#" class="tm-recommended-price-box">
                    <p class="tm-recommended-price">Rp690.000,00</p>
                    <p class="tm-recommended-price-link">Pesan!</p>
                </a>
            </div>    
        </div>                        
    </div> 
</div>
</div>

<?php } else { ?>

<div class="section section-light text-center">
<div class="container">
<div class="tm-container-outer" id="tm-section-3">
<div class="tab-content clearfix">           	

        <div class="tab-pane fade show active" id="4a">
            <div class="tm-recommended-place-wrap">
                <?php foreach ($tiket as $tk) : ?>
                <div class="tm-recommended-place">
                    <img src="/img/<?= $transportasi['foto_pesawat']; ?>" alt="Image" class="img-fluid tm-recommended-img">
                    <div class="tm-recommended-description-box">
                        <div class="text-center">
                        <h3 class="tm-recommended-title"><?= $transportasi['nama_pesawat']; ?></h3>
                        </div>
                        <p class="tm-text-highlight"><?= $tk['berangkat']; ?> ke: <?= $tk['tujuan']; ?></p>
                        <div class="text-center">
                        <p class="tm-text-gray"><?= $tk['jam_berangkat']; ?></p>
                        <i class="fa fa-angle-down tm-down-arrow "></i> 
                        <p class="tm-text-gray"><?= $tk['jam_sampai']; ?></p>  
                        </div>
                    </div>
                    <a href="#" class="tm-recommended-price-box">
                        <p class="tm-recommended-price"><?= $tk['harga']; ?></p>
                        <p class="tm-recommended-price-link">Pesan!</p>
                        <p href="/.../<?= $tr['nama_pesawat']; ?>" class="btn btn-primary">Ubah Data</p>
                    </a>                        
                </div>
                <?php endforeach; ?>
        </div>                        
    </div> 
</div>
</div>

<div>
        <a class="btn btn-danger" data-toggle="collapse" href="#data" role="button" aria-expanded="false" aria-controls="collapseExample">
                Tambah Data
            </a>
        </p>
        <div class="collapse mb-3" id="data">
            <div class="card card-body">
                <form action="/.../..." method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Ticket</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="nama" name="nama" value="<?= old('nama'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">dari</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="berangkat" name="berangkat" value="<?= old('berangkat'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">tujuan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?= old('tujuan'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">jam</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="jam_berangkat" name="jam_berangkat" value="<?= (old('jam_berangkat')) ? old('jam_berangkat') : 00.00; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">harga</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') : 0; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="foto">Pilih gambar..</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
</div>


        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>


<?php } ?>

<section class="p-5 tm-container-outer tm-bg-gray">            
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                          
            </div>
        </div>
    </div>            
</section>


<?= $this->include('ticket/footer'); ?>
