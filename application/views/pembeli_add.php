<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Web</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.css" ?>">
    
    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
<div class="container">
    <br>
    <h1>Tambah Data</h1>
    <?php echo validation_errors(); ?>
    <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/pagination/insert') ?>">
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
    </div>
  </div>
  <div class="form-group">
    <label for="kode" class="col-sm-2 control-label">Nama Barang</label>
    <div class="col-sm-10">
        <select name="kode" id="kode" class="form-control">
            <?php foreach ($barang as $key => $value): ?>
                <option value="<?php echo $value['kode'] ?>"><?php echo $value['nama_barang'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah</button>
      <a href="<?php echo base_url() ?>" class="btn btn-default">Kembali</a>
    </div>
  </div>
</form>
</div>
</body>
</html>