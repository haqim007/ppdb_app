<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <!-- alert -->
        <div class="row">
            <div class="col-md-12">
                <?php 
                if(!empty($this->session->flashdata("message"))){ ?>
                    <div class="alert alert-<?php echo $this->session->flashdata("status") ?> alert-dismissible" role="alert">
                        <?php echo $this->session->flashdata("message"); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- alert -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jml_status['total'] ?></h3>

                <p>Total Pendaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $jml_status['diterima'] ?></h3>

                <p>Pendaftar Diterima</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $jml_status['cadangan'] ?></h3>

                <p>Pendaftar Cadangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $jml_status['ditolak'] ?></h3>

                <p>Pendaftar Ditolak</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>

<!-- /.row -->
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tabel Calon Peserta Didik</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Nilai UN</th>
                        <th>Asal Sekolah</th>
                        <th>Status</th>
                        <?php if($data_user['role'] == "admin"){ ?>
                            <th>Action</th>
                        <?php } ?>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pendaftar as $key => $value) { ?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['nis'] ?></td>
                            <td><?php echo $value['firstname']." ".$value['lastname'] ?></td>
                            <td><?php echo $value['nem'] ?></td>
                            <td><?php echo $value['school_origin'] ?></td>
                            <td><?php echo ucwords($value['status']) ?></td>
                            <?php if($data_user['role'] == "admin"){ ?>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo site_url("home/verification/".$value['student_id']) ?>">Proses</a>
                                    <a class="btn btn-success" href="<?php echo site_url("home/export_pdf/".$value['student_id']) ?>">Export</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                
                
            </table>
            </div>
            <!-- /.card-body -->

    

</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<script>
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');;
</script>