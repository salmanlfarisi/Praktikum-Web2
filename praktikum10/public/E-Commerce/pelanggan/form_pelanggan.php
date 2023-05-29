<?php
require_once 'dbkoneksi.php';

// Cek untuk edit data pelanggan

//membuat kondisi untuk mengedit data pelanggan 
if (!empty($_GET['idedit'])) {
  $edit = $_GET['idedit'];
  //untuk menampilkan data dengan perintah select
  $sql = "SELECT * FROM pesanan WHERE id=?";
  $st = $dbh->prepare($sql);
  //intruksi untuk menjalankan program 
  $st->execute([$edit]);
  //untuk menampilkan baris di setiap data 
  $row = $st->fetch();
} else {
  //untuk membuat data baru 
  $row = [];
};
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Daftar Pelanggan</title>
</head>

<body>
  <section id="pemesanan" class="events">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-header">
        <h2>Pemesanan</h2>
        <p>Form <span>Pemesanan</span></p>
        <form method="POST" action="proses_pelanggan.php">
      </div>
      <div class="form-group row">
                <label for="id" class="col-4 col-form-label">ID</label>
                <div class="col-8">
                  <input id="id" name="id" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="date" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                  <input id="tanggal" name="tanggal" type="date" class="form-control">
                </div>
              </div>
               <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                  <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat Pemesan</label>
                <div class="col-8">
                  <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="no_hp" class="col-4 col-form-label">No HP</label>
                <div class="col-8">
                  <input id="no_hp" name="no_hp" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                  <input id="email" name="email" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label>
                <div class="col-8">
                  <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                <div class="col-8">
                  <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                </div>
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
  </section>

  </select>
  </div>
  </div>