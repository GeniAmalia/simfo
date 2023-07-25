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
        <h1 class="{{ Auth()->user()->name}}"></h1>
        {{-- <a href="#" class="d-block">Rahayu Wahyuni Pratiwi</a> --}}
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
