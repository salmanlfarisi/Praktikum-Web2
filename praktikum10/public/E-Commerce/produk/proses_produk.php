<?php
require_once '../pelanggan/dbkoneksi.php';
?>
<?php
$_kode = $_GET['kode'];
$_nama = $_GET['nama'];
$_harga_jual = $_GET['harga_jual'];
$_harga_beli = $_GET['harga_beli'];

$_stok = $_GET['stok'];
$_minstok = $_GET['min_stok'];
$_deskripsi = $_GET['deskripsi'];
$_kategori = $_GET['kategori_produk_id'];


$_proses = $_GET['proses'];

// array data
$ar_data[] = $_kode; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_harga_jual; // 3
$ar_data[] = $_harga_beli;
$ar_data[] = $_stok;
$ar_data[] = $_minstok;
$ar_data[] = $_deskripsi;
$ar_data[] = $_kategori; // ? 8

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO produk (kode,nama,harga_jual,harga_beli,stok,
    min_stok,deskripsi,kategori_produk_id) VALUES (?,?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_GET['idedit']; // ? 9
   $sql = "UPDATE produk SET kode=?,nama=?,harga_jual=?,harga_beli=?,
    stok=?,min_stok=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:list_produk.php');
?>