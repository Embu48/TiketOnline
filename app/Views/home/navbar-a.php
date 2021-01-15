<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" href="/img//favicon.png">
<title>La Travel</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="/dist/css/adminlte.min.css">
<link rel="stylesheet" href="/css/all.min.css">
<link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
<link rel="stylesheet" href="/css/adminlte.min.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link href="/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse landing-page">
<div class="wrapper">
<nav class="main-header navbar navbar-expand-lg fixed-top navbar-dark " color-on-scroll="300">
    <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
        <div class="navbar-translate">
            <a class="navbar-brand" href="/home">La Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <span class="navbar-text" style="margin-right: 20px">
                <?= session()->get('name'); ?>
            </span>
            <a href="/dashboard/logout" class="btn btn-danger">Logout</a>
          </li>
        </ul>
    </div>
</nav>

<aside class="main-sidebar sidebar-dark-blue elevation-4">
<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <br />
    <div class="author">
      <h6 class="description">Welcome, <?= session()->get('name'); ?>!</h6>
    </div>
  </div>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
          <p>
             
          </p>
        </a>
      </li>
    <li class="nav-item">
      <a href="/home" class="nav-link">
        <i class="nav-icon fas fa-plane"></i>
        <p>
          Transportasi
        </p>
      </a>
    </li>
    </br>
    <li class="nav-item">
        <a href="/rute" class="nav-link">
          <i class="nav-icon fas fa-inbox"></i>
          <p>
            Rute
          </p>
        </a>
        </li>
        </br>
        <li class="nav-item">
            <a href="/pesanan" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Pesanan
              </p>
            </a>
        </li>
        <br />
        <li class="nav-item">
            <a href="/dashboard/admin" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contact Us
              </p>
            </a>
        </li>
        <br />
      </li>
    </ul>
  </nav>
</div>
</aside>

<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#"></a></li>
          <li class="breadcrumb-item"><a href="#"></a></li>
          <li class="breadcrumb-item active"> </li>
        </ol>
      </div>
    </div>
  </div>
</section>


