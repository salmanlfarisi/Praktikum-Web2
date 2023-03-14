<?php
require_once "header.php";
require_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 02 </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Judul</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        // Tangkap Hasil Inputan 
                        $proses = $_POST["kirim"];
                        $nama_costumer = $_POST["nama"];
                        $produk = $_POST["radio"];
                        $jumlah_produk = $_POST["jumlah"];
                        $total;

                        if ($produk === "TV") {
                            $total = $jumlah_produk * 4200000;
                        } elseif ($produk === "KULKAS") {
                            $total = $jumlah_produk * 3100000;
                        } elseif ($produk === "MESIN CUCI") {
                            $total = $jumlah_produk * 3800000;
                        }
                        ?>

                        <!doctype html>
                        <html lang="en">

                        <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                            <title>Form Belanja</title>
                        </head>

                        <body>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form method="POST" action="praktikum02.php">
                                            <h1>Belanja Online </h1>
                                            <hr>
                                            <div class="form-group row">
                                                <label for="nama" class="col-4 col-form-label">Costumer</label>
                                                <div class="col-8">
                                                    <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-4">Produk</label>
                                                <div class="col-8">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV">
                                                        <label for="radio_0" class="custom-control-label">TV</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS">
                                                        <label for="radio_1" class="custom-control-label">KULKAS</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                                                        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label>
                                                <div class="col-4">
                                                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <button name="kirim" type="submit" class="btn btn-primary" value="proses">Kirim</button>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="list-group-item list-group-item-action active" aria-current="true" name="harga">
                                            Daftar Harga
                                        </button>
                                        <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
                                        <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
                                        <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.900.000</button>
                                        <button type="button" class="list-group-item list-group-item-action" disabled>Harga Dapat Berubah Setiap Saat</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nama Costumer :</th><br>
                                            <th>Produk Pilihan :</th><br>
                                            <th>Jumlah :</th><br>
                                            <th>Total Belanja :</th><br>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $nama_costumer; ?></td>
                                            <td><?= $produk; ?></td>
                                            <td><?= $jumlah_produk; ?></td>
                                            <td><?= $total; ?></td>
                                        </tr>
                                    </tbody>
                            </div>
                            <!-- Optional JavaScript; choose one of the two! -->

                            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

                        </body>

                        </html>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once "footer.php";
?>