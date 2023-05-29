<?php
require_once '../pelanggan/dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Kategori Produk ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['harga_jual'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['kategori_produk_id'] ?></td>
                <td>
            <a class="btn btn-primary" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
            <a class="btn btn-primary" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
            <a class="btn btn-primary" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
            </td>
            </tr>
            
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>