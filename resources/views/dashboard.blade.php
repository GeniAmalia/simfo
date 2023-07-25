@extends('layouts.header')

{{-- navbar --}}
<nav class="main-header navbar navbar-expand navbar-success navbar-dark">

    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Logout</a>
        </li>
    </ul>
</nav>
{{-- sidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIOMA</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3">
        <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Rahayu Wahyuni Pratiwi</a>
    </div>
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="/" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="organisasi" class="nav-link">
        <i class="nav-icon fas fa-document-text"></i>
        <p>Data Organisasi</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/forum" class="nav-link">
        <i class="nav-icon fas fa-messages"></i>
        <p>Forum/Diskusi</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/berita" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Berita/News</p>
        </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/about" class="nav-link">
            <i class="nav-icon fas fa-information"></i>
            <p>About</p>
            </a>
    </li>
    </ul>
    </ul>
    

</nav>
</div>
</aside>
    {{-- content --}}
<div class="content-wrapper" style="min-height: 543px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h5>Total Organisasi</h5>
                        <p>4</p>
                </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h5>Total Forum<sup style="font-size: 20px"></sup></h5>
                <p>37</p>
            </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h5>Total Berita</h5>
                <p>23</p>
            </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h5>Total Anggota</h5>
                <p>134</p>
            </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    </div>
    
    </div>
    </section>
    
    </div>
    </div>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.js?v=3.2.0"></script>
        <script src="dist/js/demo.js"></script>
        <script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
