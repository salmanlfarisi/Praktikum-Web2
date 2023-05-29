<?php  
// Import database
require_once '../pelanggan/dbkoneksi.php';
$delete = $_GET['iddel'];
// Tangkap data id deleete nya
$sql = "DELETE FROM produk WHERE id=?";
// Bikin Query
$st = $dbh->prepare($sql);
// Eksekusi Query
$st->execute([$delete]);

header('location:list_produk.php');

?>