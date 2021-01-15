<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->include('home/navbar-a'); ?>
    
</head>

<div class="page-header page-header-xs" data-parallax="true" style="background-image: url('/img/map.jpg');">
    <div class="filter"></div>
  </div>
  <div class="section profile-content">
    <div class="container">
      <div class="owner">
        <div class="avatar">
          <img src="/img/logo.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
        </div>
        <div class="name">
          <h4 class="title login-logo"><a><b>Rute </b></a>
            <br/>
          </h4>
          <h6 class="description">List</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <p> </p>
          <br />
        </div>
      </div>
      <br/>
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#pesawat" role="tab">Plane</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#kapal" role="tab">Ship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#kereta" role="tab">Train</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#bus" role="tab">Bus</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content following">
        <div class="tab-pane active" id="pesawat" role="tabpanel">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
              <table align = "center">
                    <tr align="center">
                        <td><b>No.</b></td>
                        <td><b>Transport</b></td>
                        <td><b>Asal</b></td>
                        <td><b>Tujuan</b></td>
                        <td><b>Harga</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Jam</b></td>
                        <td><b>Status</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($data1 as $key => $keluar){
                              if($keluar['jenis_transportasi'] == "pesawat"){
                        ?>

                        <tr align = "center"><td><?php echo $i; $i+=1?></td>
                            <td><?php echo $keluar['transport']; ?></td>
                            <td><?php echo $keluar['asal']; ?></td>
                            <td><?php echo $keluar['tujuan']; ?></td>
                            <td><?php echo $keluar['harga']; ?></td>
                            <td><?php echo $keluar['tanggal_berangkat']; ?></td>
                            <td><?php echo $keluar['jam_berangkat']; ?></td>
                            <td><?php echo $keluar['status']; ?></td>
                            <?php
                            if ($keluar['status'] == 'Tersedia'){ ?>
                                <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Tutup/'.$keluar['id']); ?>">Tutup</a> </td>
                            <?php } else{?>
                                <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Sedia/'.$keluar['id']); ?>">Sedia</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Hapus/'.$keluar['id']); ?>">Hapus</a></td>
                            <?php } ?>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
                <hr />
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane text-center" id="kapal" role="tabpanel">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
              <table align = "center">
                    <tr align="center">
                        <td><b>No.</b></td>
                        <td><b>Transport</b></td>
                        <td><b>Asal</b></td>
                        <td><b>Tujuan</b></td>
                        <td><b>Harga</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Jam</b></td>
                        <td><b>Status</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($data1 as $key => $keluar){
                              if($keluar['jenis_transportasi'] == "kapal"){
                        ?>

                        <tr align = "center"><td><?php echo $i; $i+=1?></td>
                            <td><?php echo $keluar['transport']; ?></td>
                            <td><?php echo $keluar['asal']; ?></td>
                            <td><?php echo $keluar['tujuan']; ?></td>
                            <td><?php echo $keluar['harga']; ?></td>
                            <td><?php echo $keluar['tanggal_berangkat']; ?></td>
                            <td><?php echo $keluar['jam_berangkat']; ?></td>
                            <td><?php echo $keluar['status']; ?></td>
                            <?php
                            if ($keluar['status'] == 'Tersedia'){ ?>
                                <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Tutup/'.$keluar['id']); ?>">Tutup</a> </td>
                            <?php } else{?>
                                <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Sedia/'.$keluar['id']); ?>">Sedia</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Hapus/'.$keluar['id']); ?>">Hapus</a></td>
                            <?php } ?>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
                <hr />
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane text-center" id="kereta" role="tabpanel">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
              <table align = "center">
                    <tr align="center">
                        <td><b>No.</b></td>
                        <td><b>Transport</b></td>
                        <td><b>Asal</b></td>
                        <td><b>Tujuan</b></td>
                        <td><b>Harga</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Jam</b></td>
                        <td><b>Status</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($data1 as $key => $keluar){
                              if($keluar['jenis_transportasi'] == "kereta"){
                        ?>

                        <tr align = "center"><td><?php echo $i; $i+=1?></td>
                            <td><?php echo $keluar['transport']; ?></td>
                            <td><?php echo $keluar['asal']; ?></td>
                            <td><?php echo $keluar['tujuan']; ?></td>
                            <td><?php echo $keluar['harga']; ?></td>
                            <td><?php echo $keluar['tanggal_berangkat']; ?></td>
                            <td><?php echo $keluar['jam_berangkat']; ?></td>
                            <td><?php echo $keluar['status']; ?></td>
                            <?php
                            if ($keluar['status'] == 'Tersedia'){ ?>
                                <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Tutup/'.$keluar['id']); ?>">Tutup</a> </td>
                            <?php } else{?>
                                <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Sedia/'.$keluar['id']); ?>">Sedia</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Hapus/'.$keluar['id']); ?>">Hapus</a></td>
                            <?php } ?>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
                <hr />
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-pane text-center" id="bus" role="tabpanel">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <ul class="list-unstyled follows">
              <table align = "center">
                    <tr align="center">
                        <td><b>No.</b></td>
                        <td><b>Transport</b></td>
                        <td><b>Asal</b></td>
                        <td><b>Tujuan</b></td>
                        <td><b>Harga</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Jam</b></td>
                        <td><b>Status</b></td>
                        <td><b>Aksi</b></td>
                    </tr>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($data1 as $key => $keluar){
                              if($keluar['jenis_transportasi'] == "bus"){
                        ?>

                        <tr align = "center"><td><?php echo $i; $i+=1?></td>
                            <td><?php echo $keluar['transport']; ?></td>
                            <td><?php echo $keluar['asal']; ?></td>
                            <td><?php echo $keluar['tujuan']; ?></td>
                            <td><?php echo $keluar['harga']; ?></td>
                            <td><?php echo $keluar['tanggal_berangkat']; ?></td>
                            <td><?php echo $keluar['jam_berangkat']; ?></td>
                            <td><?php echo $keluar['status']; ?></td>
                            <?php
                            if ($keluar['status'] == 'Tersedia'){ ?>
                                <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Tutup/'.$keluar['id']); ?>">Tutup</a> </td>
                            <?php } else{?>
                                <td><a  class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Sedia/'.$keluar['id']); ?>">Sedia</a> | <a class="btn btn-primary" href="<?php echo base_url('index.php/Rute/Hapus/'.$keluar['id']); ?>">Hapus</a></td>
                            <?php } ?>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
                <hr />
              </ul>
            </div>
          </div>
        </div>




       
      
        <a align='center' class="btn btn-danger" data-toggle="collapse" href="#data" role="button" aria-expanded="false" aria-controls="collapseExample">
                Tambah Rute
            </a>
        </p>
        <div class="collapse mb-3" id="data">
            <div class="card card-body">
                <form action="/rute/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Kode Transportasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="transport" name="transport" value="<?= set_value('transport') ?>" placeholder="Kode Transportasi">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="stok" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-2">
                      <select name="jenis" class="form-control" id="jenis" name="jenis" value="<?= set_value('jenis') ?>" placeholder="Tipe">
                      <option value="none" selected disabled hidden> 
                          -
                      </option>
                        <option value="pesawat">Pesawat</option>
                        <option value="kapal">Kapal</option>
                        <option value="kereta">Kereta</option>
                        <option value="bus">Bus</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Asal</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="asal" name="asal" value="<?= set_value('asal') ?>" placeholder="Keberangkatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Tujuan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?= set_value('tujuan') ?>" placeholder="Destinasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Harga (Rp) </label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga') ?>" placeholder="0">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal') ?>" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="appt" class="col-sm-2 col-form-label">Jam</label>
                        <div class="col-sm-2">
                            <input type="time" class="form-control" id="jam" name="jam" value="<?= set_value('jam') ?>" placeholder="Waktu">
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

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
  </div>

<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/dist/js/adminlte.min.js"></script>
<script src="/dist/js/demo.js"></script>
