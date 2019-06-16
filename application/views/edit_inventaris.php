<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('inventaris/update') ?>

              <div class="form-group">
                <label for="text">ID Barang</label>
                <input type="integer" name="id_barang" value="<?php echo $data_inventaris->id_barang ?>" class="form-control" placeholder="Masukkan ID Barang">
                <input type="hidden" value="<?php echo $data_inventaris->id_barang ?>" name="id_barang">
              </div>

              <div class="form-group">
                <label for="text">Nama Barang</label>
                <input type="text" name="nama_barang" value="<?php echo $data_inventaris->nama_barang ?>" class="form-control" placeholder="Masukkan Nama Barang">
              </div>

              <div class="form-group">
                <label for="text">Tempat</label>
                <input type="text" name="tempat" value="<?php echo $data_inventaris->tempat ?>" class="form-control" 
                placeholder="Masukkan Tempat" >
              </div>

              <div class="form-group">
                <label for="text">Jumlah</label>
                <input type="text" name="jumlah" value="<?php echo $data_inventaris->jumlah ?>" class="form-control"
                placeholder="Masukkan Jumlah Barang" >
              </div>

               <div class="form-group">
                <label for="text">Keterangan</label>
                <input type="text" name="keterangan" value="<?php echo $data_inventaris->keterangan ?>" class="form-control"
                placeholder="Masukkan Keterangan Barang" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>