<?php
require_once 'dbkoneksi.php';
?>
   <?php
   $_kode = $_POST ['id'];
   $_tanggal = $_POST['tanggal'];
   $_nama_pemesan = $_POST['nama_pemesan'];
   $_alamat = $_POST['alamat_pemesan'];
   $_no_hp = $_POST['no_hp'];
   $_email = $_POST['email'];
   $_jumlah_pesanan = $_POST['jumlah_pesanan'];
   $_deskripsi = $_POST['deskripsi'];

   $_kategori = $_POST['kategori_produk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[] = $_kode;
   $ar_data[] = $_tanggal;
   $ar_data[] = $_nama_pemesan; // ? 1
   $ar_data[] = $_alamat; // ? 2
   $ar_data[] = $_no_hp; // ? 3
   $ar_data[] = $_email;
   $ar_data[] = $_jumlah_pesanan;
   $ar_data[] = $_kategori; // ? 8

   if ($_proses == "Simpan") {
      // data baru
      $sql = "INSERT INTO pelanggan (id,tanggal,nama_pemesan,alamat_pemesan,no_hp,email,
       jumlah_pesanan,deskripsi,kategori_produk_id) VALUES (?,?,?,?,?,?,?,?,?)";
   } else if ($_proses == "Update") {
      $ar_data[] = $_POST['idedit']; // ? 9
      $sql = "UPDATE pelanggan SET id=?,tanggal=?,nama_pemesan=?,
       alamat_pemesan=?,no_hp=?,email=?,jumlah_pesanan=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
   }
   if (isset($sql)) {
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
   ?>