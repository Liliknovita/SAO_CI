<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/proker/tambah/" class="btn btn-md btn-success">Tambah Proker</a>
        <hr>

        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>id proker</th>
                    <th>Nama proker</th>
                    <th>Tanggal </th>
                    <th>tempat</th>
                    <th>id pengurus</th>
                    <th>Options</th>

                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_proker as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->id_proker ?></td>
                    <td><?php echo $hasil->nm_proker ?></td>
                    <td><?php echo $hasil->tgl_proker ?></td>
                    <td><?php echo $hasil->tempat ?></td>
                    <td><?php echo $hasil->id_pengurus ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/proker/edit/<?php echo $hasil->id_proker ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/proker/hapus/<?php echo $hasil->id_proker ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
              <button onclick="goBack()">Go Back</button>
                <script>
                function goBack() {
                window.history.back();
    }
</script>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>