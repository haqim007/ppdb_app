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
                <h1 class="m-0">Tambah User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
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
            <div class="card card-outline card-primary">

        <div class="card-body">
        <p class="login-box-msg">Form Tambah User Baru</p>
        <form action="<?php echo $submit_url ?>" method="post">
            <div class="input-group mb-3">
            <?php $prev_val = isset($edit_user) ? $edit_user['id'] : "" ?>
            <input type="hidden" class="form-control" name="id" value="<?php echo $prev_val ?>">
        <?php $prev_val = isset($edit_user) ? $edit_user['firstname'] : "" ?>
            <input required type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo $prev_val ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <?php $prev_val = isset($edit_user) ? $edit_user['lastname'] : "" ?>
            <input required type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $prev_val ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
                <?php $prev_val = isset($edit_user) ? $edit_user['gender'] : "" ?>
                <select required name="gender" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option <?php echo $prev_val == "laki-laki" ? "selected" : "" ?> value="laki-laki">Laki-laki</option>
                    <option <?php echo $prev_val == "perempuan" ? "selected" : "" ?> value="perempuan">Perempuan</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-restroom"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <?php $prev_val = isset($edit_user) ? $edit_user['role'] : "" ?>
                <select required name="role" class="form-control">
                    <option value="">Pilih Role</option>
                    <option <?php echo $prev_val == "admin" ? "selected" : "" ?> value="admin">Admin</option>
                    <option <?php echo $prev_val == "student" ? "selected" : "" ?> value="student">Calon Siswa</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-circle"></span>
                    </div>
                </div>
            </div>
            
            <div class="input-group mb-3">
                <?php $prev_val = isset($edit_user) ? $edit_user['email'] : "" ?>
            <input required type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $prev_val ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input required type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
            </div>
</section>
<!-- /.content -->
</div>
