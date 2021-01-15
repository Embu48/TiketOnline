<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/img//favicon.png">
    <title>La Travel</title>
    
    <?= $this->include('startup/navbar'); ?>
    
</head>

<body class="landing-page sidebar-collapse">
<div class="page-header" style="background-image: url('/img/fountain.jpg');">
    <div class="login-box ">
        <div class="login-logo">
            <a><b>Get </b>Your <b>Ticket</b></a>
        </div>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <form class="user" action="/login/auth" method="POST">
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="username" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4 m-auto">
                    <button type="submit" class="btn btn-danger btn-round">Masuk</button>
                </div>
            </div>
        </form>
    </div>
    </div>

    <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Wanna Go On Travel?</h2>
            <h5 class="description">
              We have many alt Transit, just take your time, Friends!.                       
            </h5>
            <h5 class="description">
              Register an account, select yout destination, pay it!, then you ready to go,
            </h5>
            <h5 class="description">
              easy isn't it?!
            </h5>
            <br>
            <a href="#myModal" class="btn trigger-btn btn-danger btn-round" data-toggle="modal">Register Now!</a>
          </div>
        </div>

        <div id="myModal" class="modal fade text-center">
        <div class="modal-dialog">
        <div class="modal-content modal-login">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">X</button>			
				<h4 class="modal-title">Member Register</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
      
			<div class="modal-body">
				<div class="panel panel-default">
            <?= $validation->listErrors() ?>
              <form action="/register/save" method="post">
                  <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Username" required="required">		
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" name="username" placeholder="Email" required="required">	
                  </div>    
                  <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="confpassword" placeholder="Re- Password" required="required">	
                  </div>    
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
                  </div>
              </form>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
            </div>
        </div>
        </div>
        </div>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <img src="/img/pesawat.jpg "width="128" height="64">
              </div>
              <div class="description">
                <h4 class="info-title">Airplane</h4>
                <p class="description">We are ready to bring you a new experience on your flight with our partner!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <img src="/img/kapal.jpg "width="64" height="64">
              </div>
              <div class="description">
                <h4 class="info-title">Ship</h4>
                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <img src="/img/train.jpg "width="64" height="64">
              </div>
              <div class="description">
                <h4 class="info-title">Train</h4>
                <p>Choose from a variety train you would like!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <img src="/img/bus.jpg "width="128" height="64">
              </div>
              <div class="description">
                <h4 class="info-title">Bus</h4>
                <p>No More Bangku Tempel!.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-dark text-center">
      <div class="container">
        <h2 class="title">Admin</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#">
                  <img src="/img/gilang.jpg" alt="Gilang Rahman Affandi">
                </a>
              </div>
              <div class="card-body">
                <a href="#">
                  <div class="author">
                    <h4 class="card-title">Gilang Rahman Affandi</h4>
                    <h6 class="card-category">1817051075</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  Frontend.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#">
                  <img src="/img/embu.jpg" alt="Embu Banjar Kusuma">
                </a>
              </div>
              <div class="card-body">
                <a href="#">
                  <div class="author">
                    <h4 class="card-title">Embu Banjar Kusuma</h4>
                    <h6 class="card-category">1817051048</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  Backend.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#">
                  <img src="/img/rifqi.jpg" alt="Rifqi Adiyatma">
                </a>
              </div>
              <div class="card-body">
                <a href="#paper-kit">
                  <div class="author">
                    <h4 class="card-title">Rifqi Adiyatma</h4>
                    <h6 class="card-category">1817051055</h6>
                  </div>
                </a>
                <p class="card-description text-center">
                  Database
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="login-logo">
            <a><b>La </b>Travel</a>
        </div>
    </div>
  </div>

    <div class="footer register-footer text-center">
        <h6>
      ©2021, Get Your E-Ticket, Easy Travel!
        </h6>
    </div>
    
</body>

<script src="/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/js/plugins/moment.min.js"></script>
  <script src="/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</html>