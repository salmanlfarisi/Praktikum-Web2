<?php  
// Import database
require_once 'dbkoneksi.php';
$delete = $_GET['iddel'];
// Tangkap data id deleete nya
$sql = "DELETE FROM pelanggan WHERE id=?";
// Bikin Query
$st = $dbh->prepare($sql);
// Eksekusi Query
$st->execute([$delete]);

header('location:list_pelanggan.php');

?>