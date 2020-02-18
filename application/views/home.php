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
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar -->
<?php $this->load->view('partials/base_nav'); ?>

  <!-- Wrapper -->
  <div class="content-wrapper">
    <!-- Page header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Data Kendaraan Hari <?php echo hari_indo(date('N',strtotime(date('Y-m-d')))).', '.tanggal_indo(date('Y-m-d',strtotime(''.date('Y-m-d').''))) ?></h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $masuk['count(kd_masuk)'] ?></h3>
                <p>Kendaraan Masuk</p>
              </div>
              <div class="icon">
                <i class="fa fa-arrow-circle-o-left"></i>
              </div>
              <a href="<?php echo base_url('masuk') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $keluar['count(kd_keluar)'] ?></h3>
                <p>Kendaraan Keluar</p>
              </div>
              <div class="icon">
                <i class="fa fa-arrow-circle-o-right"></i>
              </div>
              <a href="<?php echo base_url('keluar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $jenis['count(kd_kendaraan)'] ?></h3>

                <p>Jenis Kendaraan</p>
              </div>
              <div class="icon">
                <i class="fa fa-sitemap"></i>
              </div>
              <a href="<?php echo base_url('jeniskendaraan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $admin['count(kd_admin)'] ?></h3>
                <p>Data Pegawai</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url('admin') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
        </div>
     </div>
  </div>
    </section>
  </div>

  <?php $this->load->view('partials/base_footer'); ?>

</div>

<?php $this->load->view('partials/base_js'); ?>
</body>
</html>
