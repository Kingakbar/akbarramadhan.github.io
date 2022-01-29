<?php
include 'includes/header.php';
?>


<!-- isi kontent -->
<h1 class="text-center mt-3">Selamat Datang di Portal <br>
    Silahkan masukan angka</h1>

<!-- ini adalah card -->
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <div class="nav-item dropdown">
                <div class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Perhitungan
                </div>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="luas_segitiga.php">Luas Segitiga</a>
                    <a class="dropdown-item" href="luas_persegi_panjang.php">Luas Persegi Panjang</a>
                    <a class="dropdown-item" href="#">Luas Lingkaran</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Silahkan Pilih <br>
                Perhitungan Terlebih Dahulu</h5>
        </div>
    </div>
</div>
<!-- ini adalah akhir dari card -->

<!-- akhir isi kontent -->




<?php
include 'includes/footer.php';
?>