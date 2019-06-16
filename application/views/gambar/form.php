<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
  <!--<h1>Tambah Gambar</h1><hr>-->
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">

<?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
 <!-- <table cellpadding="8"> -->
    <div class="form-group">
    <tr>
       <label for="text">No. Surat</label>
      <input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>" class="form-control" placeholder="Masukkan No Surat ">
    </tr>
  </div>

  <div class="form-group">
    <tr>
      <label for="text">Gambar</label>
      <td><input type="file" name="input_gambar"></td>
    </tr>
  </div>
  <!--</table>-->

  <button type="submit" name="submit" class="btn btn-md btn-success" value="simpan">Simpan</button>
  <button type="reset" name="reset" class="btn btn-md btn-warning" value="reset">reset</button>
  

 <!--<input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>-->
<?php echo form_close(); ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>