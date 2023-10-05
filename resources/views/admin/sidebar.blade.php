<div class="app-menu navbar-menu bg-success">
    <!-- LOGO -->
    <div class="navbar-brand-box bg-success">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
            <img src="{{ asset('img/BGPTH-resized.png') }}" alt="" height="50">
        </span>
            <span class="logo-lg">
            <img src="{{ asset('img/BGPTH-resized.png') }}" alt="" height="50">
        </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('img/BGPTH-resized.png') }}" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('img/BGPTH-resized.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid bg-success">

            <div id="two-column-menu bg-success">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduk" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProduk">
                        <i class="ri-archive-line text-light"></i><span class=text-light data-key="t-produk">Produk</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduk">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('dataproduk.create') }}" class="nav-link" data-key="t-tambahproduk"> Tambah Produk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/dataproduk" class="nav-link" data-key="t-dataproduk"> Data Produk
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarKategori" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarKategori">
                        <i class="ri-archive-line text-light"></i><span class=text-light data-key="t-kategori">Kategori</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarKategori">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('datakategori.create') }}" class="nav-link" data-key="t-tambahkategori"> Tambah Kategori
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/datakategori" class="nav-link" data-key="t-datakategori"> Data Kategori
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background bg-success"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
