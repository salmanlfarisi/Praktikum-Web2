<?php 
require_once 'dbkoneksi.php';

// Cek untuk edit data pelanggan

//membuat kondisi untuk mengedit data pelanggan 
if (!empty($_GET['idedit'])) {
  $edit = $_GET['idedit'];
  //untuk menampilkan data dengan perintah select
  $sql = "SELECT * FROM pelanggan WHERE id=?";
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
            
<form method="POST" action="proses_pelanggan.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_beli" class="col-4 col-form-label">kartu_id Kelamin</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="jk" name="jk" 
        value="L" type="radio" class="form-control"> Laki - Laki
        <input id="jk" name="jk" 
        value="P" type="radio" class="form-control"> Perempuan
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir " class="col-4 col-form-label">Tangggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" value=""
        type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="email" name="email" value=""
        type="email" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kartu_id" class="col-4 col-form-label">Kartu</label> 
    <div class="col-8">
        <?php 
            $sqlkartu_id = "SELECT * FROM kartu";
            $rskartu_id = $dbh->query($sqlkartu_id);
        ?>
      <select id="kartu_id" name="kartu_id" class="custom-select">
          <?php 
            foreach($rskartu_id as $rowkartu_id){
         ?>
            <option value="<?=$rowkartu_id['id']?>"><?=$rowkartu_id['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option> 
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" >
      <input type="hidden" nama "idedit"
      class="btn btn-primary" value="<?= $edit ?>">
    </div>
  </div>
</form>
