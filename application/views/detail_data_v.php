<style>
    .file_upload{
        min-height:43px;
    }
</style>
<div class="content-wrapper" style="min-height: 1342.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Detail  
                <a class="btn btn-success" target="_blank" href="<?php echo site_url("home/export_pdf/".$prev_data_student['student_id']) ?>">Export</a>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="<?php echo $submit_url ?>" method="post" enctype='multipart/form-data'>
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
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Data Calon Peserta Didik</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php $fullname = isset($prev_data_student) ? $prev_data_student['firstname']." ".$prev_data_student['lastname'] : ""; ?>
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['student_id'] : ""; ?>
                        <div class="form-group-row">
                            <Label>Nama</Label>
                            <p class="form-control-static"><?php echo $fullname ?></p>
                            <input type="hidden" class="form-control" name="student_id" value="<?php echo $prev_val ?>">
                        </div>
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['nis'] : ""; ?>
                        <div class="form-group">
                            <label>NIS</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['nik_id'] : set_value("nik_id"); ?>
                        <div class="form-group">
                            <label>NIK</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['birth_place'] : set_value("birth_place"); ?>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['birth_date'] : set_value("birth_date"); ?>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['citizenship'] : set_value("citizenship"); ?>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['school_origin'] : set_value("school_origin"); ?>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['nem'] : ""; ?>
                        <div class="form-group">
                            <label>Nilai UN</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['family_card'] : set_value("family_card"); ?>
                        <div class="form-group">
                            <label>Upload KK</label>
                            <?php if(!empty($prev_val)){ ?>
                                <label class="form-control-static">
                                    <a href="<?php echo site_url("home/download/".$fullname."/".$prev_val) ?>" target="_blank">
                                        Download
                                    </a>
                                </label>
                            <?php } ?>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['birth_certificate'] : set_value("birth_certificate"); ?>
                        <div class="form-group">
                            <label>Upload Akte Kelahiran</label>
                            <?php if(!empty($prev_val)){ ?>
                                <label class="form-control-static">
                                    <a href="<?php echo site_url("home/download/".$fullname."/".$prev_val) ?>" target="_blank">
                                        Download
                                    </a>
                                </label>
                            <?php } ?>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['certificate_degree'] : set_value("certificate_degree"); ?>
                        <div class="form-group">
                            <label>Upload Ijazah</label>
                            <?php if(!empty($prev_val)){ ?>
                                <label class="form-control-static">
                                    <a href="<?php echo site_url("home/download/".$fullname."/".$prev_val) ?>" target="_blank">
                                        Download
                                    </a>
                                </label>
                            <?php } ?>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_student) ? $prev_data_student['certificate_exam_results'] : set_value("certificate_exam_results"); ?>
                        <div class="form-group">
                            <label>Upload SKHUN</label>
                            <?php if(!empty($prev_val)){ ?>
                                <label class="form-control-static">
                                    <a href="<?php echo site_url("home/download/".$fullname."/".$prev_val) ?>" target="_blank">
                                        Download
                                    </a>
                                </label>
                            <?php } ?>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Data Orang tua</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['guardian_name'] : set_value("father_name"); ?>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['job'] : set_value("father_job"); ?>
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['phone'] : set_value("father_phone"); ?>
                        <div class="form-group">
                            <label>No HP Ayah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['last_education'] : set_value("father_last_education"); ?>
                        <div class="form-group">
                            <label>Pendidikan Terakhir Ayah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['address'] : set_value("father_address"); ?>
                        <div class="form-group">
                            <label>Alamat Ayah</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['guardian_name'] : set_value("mother_name"); ?>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['job'] : set_value("mother_job"); ?>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['phone'] : set_value("mother_phone"); ?>
                        <div class="form-group">
                            <label>No HP Ibu</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['last_education'] : set_value("mother_last_education"); ?>
                        <div class="form-group">
                            <label>Pendidikan Terakhir Ibu</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                         <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['address'] : set_value("mother_address"); ?>
                        <div class="form-group">
                            <label>Alamat Ibu</label>
                            <p class="form-control-static"><?php echo $prev_val ?></p>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- / row -->
                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <?php $status = isset($prev_data_student) ? $prev_data_student['status'] : "";
            if(!empty($status)){
        ?>
        
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Status Pendaftaran</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        
                        <div class="form-group-row">
                            <span>Status: </span>
                            <label class="form-control-static" style="font-size: 30px;margin-left: 28px;"><strong><?php echo ucwords($status) ?></strong></label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                    </div>
                    <!-- /.col -->
                    </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <?php } ?>
        <!-- /.row -->
        <div class="row">
            <!-- <div class="col-md-4"></div>
            <div class="col-md-4"></div> -->
            <div class="col-md-12 mb-3" style="display:flex;justify-content:space-between;">
                <a class="btn btn-default btn-lg" href="<?php site_url("home") ?>">Kembali</a>
            </div>
        </div>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>