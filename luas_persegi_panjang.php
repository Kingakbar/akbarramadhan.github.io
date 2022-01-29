<?php
include 'includes/header.php';

if (isset($_POST["submit"])) {
    $masukpanjang = $_POST["masukpanjang"];
    $masuklebar = $_POST["masuklebar"];

    $luas_persegi_panjang = $masukpanjang * $masuklebar;
    $keliling_persegi_panjang = 2 * ($masukpanjang + $masuklebar);
}





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
                    <a class="dropdown-item" href="luas_lingkaran.php">Luas Lingkaran</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">

                <div class="alert alert-success text-center" role="alert">
                    <h3 class="text-center">Hasil Luas <br>
                        Persegi Panjang</h3>
                    <?php
                    if ($_POST) {
                        echo "Hasil hitung luas persegi panjang adalah sebagai berikut:<br />";
                        echo "Diketahui;<br />";
                        echo "Panjang = $masukpanjang<br />";
                        echo "Lebar = $masuklebar<br />";
                        echo "Maka luas persegi panjang sama dengan [ $masukpanjang x $masuklebar ] = $luas_persegi_panjang<br />";
                        echo "Maka keliling persegi panjang sama dengan [ 2 x ($masukpanjang + $masuklebar) ] = $keliling_persegi_panjang";
                    }

                    ?> <br>
                    <button class="btn btn-warning text-white" onClick="window.location.href=window.location.href">Refresh Page</button>
                </div>

                <div class="card2 mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="masukpanjang">Masukan Angka Panjang</label>
                                <input type="number" name="masukpanjang" id="masukpanjang" placeholder="Masuk Panjang Dari Persegi Panjang" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="masuklebar">Masukan Angka Lebar</label>
                                <input type="number" name="masuklebar" id="masuklebar" placeholder="Masuk Lebar Dari Persegi Panjang" class="form-control" required>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Lihat Hasil</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ini adalah akhir dari card -->

<!-- akhir isi kontent -->

<?php
include 'includes/footer.php';
?>