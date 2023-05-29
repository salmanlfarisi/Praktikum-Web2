<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesanan</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Jumlah Pesanan</th>
            <th>Deskripsi</th>
            <th>Produk ID</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nama_pemesan'] ?></td>
                <td><?= $row['alamat_pemesan'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['jumlah_pesanan'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['produk_id'] ?></td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>