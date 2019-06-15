
<head>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>

<?php echo form_open("catatan/tambah", array('enctype'=>'multipart/form-data')); ?>
  <table cellpadding="8">
    <tr>
      <td>Deskripsi</td>
      <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
    </tr>
    <tr>
      <td>Catatan</td>
      <td><input type="file" name="input_catatan"></td>

    </tr>
  </table>
  
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>

<?php echo form_close(); ?>
