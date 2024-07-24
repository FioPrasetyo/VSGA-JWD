<body>
<nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="beranda.php"><img src="img/OIG2.jpeg" alt="" class="img-fluid" style="width: 30px; height: 30px;">SIMPERPUS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- beranda -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                    </li>
                    <!-- end beranda -->

                    <!-- menu data master -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data Master
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="buku.php">Data Buku</a></li> -->
                            <li><a class="dropdown-item" href="buku.php">Data Buku</a></li>
                            <li><a class="dropdown-item" href="anggota.php">Data Anggota</a></li>
                        </ul>
                    </li>
                    <!-- end menu data master -->

                    <!-- menu transaksi -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Data Transaksi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./transaksi.php">Peminjaman Buku</a></li>
                            <li><a class="dropdown-item" href="#">Pengembalian Buku</a></li>
                        </ul>
                    </li>
                    <!-- end menu transaksi -->

                    <!-- menu laporan -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Laporan</a>
                    </li>
                    <!-- end menu laporan -->

                    <li class="nav-item" align="right">
                        <a class="nav-link" href="index.html">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
        
    </nav>
</body>
