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
            <h1 class="m-0">Manajemen User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
   
<!-- /.row -->
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Seluruh User <a class="btn btn-primary btn-sm" href="<?php echo site_url("users/create") ?>">Tambah User</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $value) { ?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['firstname']." ".$value['lastname'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['role'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo site_url("users/update/".$value['id']) ?>">Ubah</a>
                                <a class="btn btn-danger" onclick="confirmDelete(); return false;" href="<?php  echo site_url("users/delete/".$value['id'])  ?>">Hapus</a>
                            </td>
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
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    function confirmDelete(e){
        var result = confirm("Apakah Anda yakin?");
        if(result){
             e.preventDefault();
            return false;
        }else{
           
        }

        
    }
</script>