<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->include('home/navbar-u'); ?>
    <?= $this->include('ticket/navbar'); ?>
</head>

<div class="tm-main-content" id="top">
<div class="tm-page-wrap mx-auto">
<section class="tm-banner">
    <div class="tm-container-outer tm-banner-bg">
        <div class="container">
            <div class="row tm-banner-row tm-banner-row-header">
                <div class="col-xs-12">
                    <div class="tm-banner-header">
                        <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                        <img src="img/dots-3.png" alt="Dots">
                        <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                        <a href="#" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
                    </div>    
                </div>  <!-- col-xs-12 -->                      
            </div> <!-- row -->
            <div class="row tm-banner-row" id="tm-section-search">
                <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                    <div class="form-row tm-search-form-row">                                
                        <div class="form-group tm-form-group tm-form-group-1">
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                <label for="inputCity">Choose Your City</label>
                                <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your city...">
                            </div>
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                <label for="inputCity">Choose Your Destination</label>
                                <input name="destination" type="text" class="form-control" id="inputDestination" placeholder="Type your destination...">
                            </div>
                        </div>
                        <div class="form-group tm-form-group tm-form-group-1">                                    
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                <label for="inputRoom">How many seats?</label>
                                <select name="room" class="form-control tm-select" id="inputRoom">
                                    <option value="1" selected>1 Seat</option>
                                    <option value="2">2 Seats</option>
                                    <option value="3">3 Seats</option>
                                    <option value="4">4 Seats</option>
                                    <option value="5">5 Seats</option>
                                    <option value="6">6 Seats</option>
                                    <option value="7">7 Seats</option>
                                    <option value="8">8 Seats</option>
                                    <option value="9">9 Seats</option>
                                    <option value="10">10 Seats</option>
                                </select>                                        
                            </div>
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">                                       
                                <label for="inputAdult">Adult</label>     
                                <select name="adult" class="form-control tm-select" id="inputAdult">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>                                        
                            </div>
                            <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                <label for="inputChildren">Children</label>                                            
                                <select name="children" class="form-control tm-select" id="inputChildren">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>                                        
                            </div>
                        </div>
                    </div> <!-- form-row -->
                    <div class="form-row tm-search-form-row">

                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                            <label for="inputCheckIn">Check In Date</label>
                            <input name="check-in" type="date" class="form-control" id="inputCheckIn" placeholder="Check In">
                        </div>
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                            <label for="inputCheckOut">Check Out Date</label>
                            <input name="check-out" type="date" class="form-control" id="inputCheckOut" placeholder="Check Out">
                        </div>
                    </div> 
                    <br>
                    <h4 align="center">Tiket Tersedia</h4>
                    <hr>
                    <table border="1" align = "center">
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
                              if($keluar['status'] == "Tersedia"){
                            ?>
                            <td><a class="btn btn-primary" href="<?php echo base_url('index.php/Ticket/Pesan/'.$keluar['transport']); ?>">Pesan</a> </td>
                        </tr>
                            <?php }}} ?>
                    </tbody>
                </table>                              
                </form>                             
            
            </div> <!-- row -->
            <div class="tm-banner-overlay"></div>
        </div>  <!-- .container -->                   
    </div>     <!-- .tm-container-outer -->                 
</section>

<section class="p-5 tm-container-outer tm-bg-gray">            
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                <p class="mb-4"></p>                      
            </div>
        </div>
    </div>            
</section>

<?= $this->include('ticket/footer'); ?>