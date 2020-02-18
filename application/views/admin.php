
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Responsif Program -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css -->
  <?php $this->load->view('partials/base_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar -->
<?php $this->load->view('partials/base_nav'); ?>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Page Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">List Admin</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title"><a href="<?php echo base_url('admin/daftar') ?>" class="btn btn-primary">Tambah Admin</a></h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Admin</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;foreach ($admin as $row) { ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $row['kd_admin']; ?></td>
                          <td><?php echo $row['nama_admin']; ?></td>
                          <td><?php echo $row['username_admin']; ?></td>
                          <td><?php echo $row['email_admin']; ?></td>
                          <td><?php if ($row['level_admin'] == '1') { ?>
                            <p class="btn-primary">OWNER</p>
                          <?php }else{ ?>
                            <p class="btn-danger">Penjaga</p>
                          <?php } ?>
                          </td>
                          <td><a href="<?php echo base_url('backend/home/viewadmin/'.$row['kd_admin']) ?>" class="btn btn btn-primary">View</a></td>
                        </tr>
                      <?php } ?>
                    </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

    </section>
  </div>

  <?php $this->load->view('partials/base_footer'); ?>

</div>

<?php $this->load->view('partials/base_js'); ?>
<script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
      <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });
      </script>
</body>
</html>
