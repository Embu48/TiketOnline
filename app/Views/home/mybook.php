<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->include('home/navbar-u'); ?>
    <?= $this->include('ticket/navbar'); ?>
    
</head>
<!-- ini kalau ticket kosong -->
<?php $session = session(); ?>
<?php if($session->get('id') == '0'){ 
    ?>
<br/>
<div class="nav-tabs-navigation">
<div class="nav-tabs-wrapper">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#booked" role="tab">Booked</a>
    </li>
    </ul>
</div>
</div>
<div class="tab-pane text-center" id="booked" role="tabpanel">
    <h3 class="text-muted">Not Booking Anything Yet :(</h3>
    <button class="btn btn-warning btn-round">Booked Now!</button>
</div>

<!-- -->

<?php 
    } else {
?>

<br/>
<div class="nav-tabs-navigation">
<div class="nav-tabs-wrapper">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#booked" role="tab">Booked</a>
    </li>
    </ul>
</div>
</div>
<div class="tab-pane text-center" id="booked" role="tabpanel">
    <h3 class="text-muted">Pesanan saya </h3>
    <table border="1" align = "center">
                    <tr align="center">
                        <td><b>No.</b></td>
                        <td><b>Tiket</b></td>
                        <td><b>Status</b></td>
                    </tr>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($data1 as $key => $keluar){
                                if($keluar['user'] == $session->get('name')){
                        ?>

                        <tr align = "center"><td><?php echo $i; $i+=1?></td>
                            <td><?php echo $keluar['tiket']; ?></td>
                            <td><?php echo $keluar['status']; ?></td>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
</div>
</div>
<?php
    }
?>

<section class="p-5 tm-container-outer tm-bg-gray">            
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                          
            </div>
        </div>
    </div>            
</section>


<?= $this->include('ticket/footer'); ?>