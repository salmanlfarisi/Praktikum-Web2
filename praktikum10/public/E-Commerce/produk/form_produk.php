<?php
require_once '../pelanggan/dbkoneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Daftar Produk</title>
</head>

<body>




    <h1 class="text-center">Form Produk</h1>
    <form method="GET" action="proses_produk.php">
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
            <div class="col-8">
                <input id="nama" name="nama" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
            <div class="col-8">
                <input id="harga_jual" name="harga_jual" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
            <div class="col-8">
                <input id="harga_beli" name="harga_beli" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
                <input id="stok" name="stok" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label>
            <div class="col-8">
                <input id="min_stok" name="min_stok" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <input id="deskripsi" name="deskripsi" value="" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="kategori_produk" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <?php
                $sqlkategori = "SELECT * FROM kategori_produk";
                $rskategori = $dbh->query($sqlkategori);
                ?>
                <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                    <?php
                    foreach ($rskategori as $rowkategori) {
                    ?>
                        <option value="<?= $rowkategori['id'] ?>"><?= $rowkategori['nama'] ?></option>
                    <?php
                    }
                    ?>
                    <!--<option value="1">Makanan</option>
                            <option value="2">Minuman<option>
                            <option value="3">Snack</option>-->

                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
            </div>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>