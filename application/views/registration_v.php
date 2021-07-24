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
            <h1>Form Pendaftaran 
                <?php if(isset($prev_data_diri)){ ?>
                    <a class="btn btn-success" target="_blank" href="<?php echo site_url("home/export_pdf/".$prev_data_diri['student_id']) ?>">Export</a>
                <?php } ?>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Pendaftaran</li>
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
                <h3 class="card-title">Data Diri</h3>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php $fullname = isset($prev_data_diri) ? $prev_data_diri['firstname']." ".$prev_data_diri['lastname'] : ""; ?>
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['student_id'] : ""; ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" disabled class="form-control" value="<?php echo $data_user['firstname']." ".$data_user['lastname'] ?>">
                            <input type="hidden" readonly class="form-control" name="fullname" value="<?php echo $data_user['firstname']." ".$data_user['lastname'] ?>">
                            <input type="hidden" readonly class="form-control" name="user_id" value="<?php echo $data_user['id'] ?>">
                            <input type="hidden" readonly class="form-control" name="student_id" value="<?php echo $prev_val ?>">
                        </div>
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['nis'] : ""; ?>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" name="nis" class="form-control" value="<?php echo $prev_val ?>">
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['nik_id'] : set_value("nik_id"); ?>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" class="form-control" name="nik_id" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['birth_place'] : set_value("birth_place"); ?>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="birth_place" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['birth_date'] : set_value("birth_date"); ?>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" value="<?php echo $prev_val ?>" required name="birth_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['citizenship'] : set_value("citizenship"); ?>
                        <div class="form-group">
                            <label>Kewarganegaraan</label>
                            <input type="text" class="form-control" name="citizenship" required value="<?php echo $prev_val ?>">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['school_origin'] : set_value("school_origin"); ?>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" required class="form-control" name="school_origin" value="<?php echo $prev_val ?>">
                        </div>
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['nem'] : ""; ?>
                        <div class="form-group">
                            <label>Nilai UN</label>
                            <input type="text" name="nem" class="form-control" value="<?php echo $prev_val ?>">
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['family_card'] : set_value("family_card"); ?>
                        <div class="form-group">
                            <label>Upload KK</label>
                            <input type="file" class="file_upload form-control" name="family_card" required>
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
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['birth_certificate'] : set_value("birth_certificate"); ?>
                        <div class="form-group">
                            <label>Upload Akte Kelahiran</label>
                            <input type="file" class="file_upload form-control" name="birth_certificate" value="" required>
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
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['certificate_degree'] : set_value("certificate_degree"); ?>
                        <div class="form-group">
                            <label>Upload Ijazah</label>
                            <input type="file" name="certificate_degree" class="form-control file_upload" required>
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
                        <?php $prev_val = isset($prev_data_diri) ? $prev_data_diri['certificate_exam_results'] : set_value("certificate_exam_results"); ?>
                        <div class="form-group">
                            <label>Upload SKHUN</label>
                            <input type="file" class="file_upload form-control" name="certificate_exam_results" required>
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
                            <input type="text" class="form-control" name="father_name" value="<?php echo $prev_val ?>">
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['job'] : set_value("father_job"); ?>
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <input type="text" class="form-control" name="father_job" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['phone'] : set_value("father_phone"); ?>
                        <div class="form-group">
                            <label>No HP Ayah</label>
                            <input type="number" class="form-control" name="father_phone" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['last_education'] : set_value("father_last_education"); ?>
                        <div class="form-group">
                            <label>Pendidikan Terakhir Ayah</label>
                            <input type="text" value="<?php echo $prev_val ?>" required name="father_last_education" class="form-control">
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_father) ? $prev_data_father['address'] : set_value("father_address"); ?>
                        <div class="form-group">
                            <label>Alamat Ayah</label>
                            <textarea name="father_address" required class="form-control"><?php echo $prev_val ?></textarea>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['guardian_name'] : set_value("mother_name"); ?>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="mother_name" value="<?php echo $prev_val ?>">
                        </div>
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['job'] : set_value("mother_job"); ?>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <input type="text" class="form-control" name="mother_job" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['phone'] : set_value("mother_phone"); ?>
                        <div class="form-group">
                            <label>No HP Ibu</label>
                            <input type="number" class="form-control" name="mother_phone" value="<?php echo $prev_val ?>" required>
                        </div>
                        <!-- /.form-group -->
                        <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['last_education'] : set_value("mother_last_education"); ?>
                        <div class="form-group">
                            <label>Pendidikan Terakhir Ibu</label>
                            <input type="text" value="<?php echo $prev_val ?>" required name="mother_last_education" class="form-control">
                        </div>
                        <!-- /.form-group -->
                         <!-- /.form-group -->
                        <?php $prev_val = isset($prev_data_mother) ? $prev_data_mother['address'] : set_value("mother_address"); ?>
                        <div class="form-group">
                            <label>Alamat Ibu</label>
                            <textarea name="mother_address" required class="form-control"><?php echo $prev_val ?></textarea>
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

        <?php $status = isset($prev_data_diri) ? $prev_data_diri['status'] : "";
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
                        <div class="form-group">
                            <p style="font-size:12px;"><i>Setelah data diproses maka tidak dapat lagi diperbarui</i></p>
                        </div>
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
                <?php if(!isset($prev_data_diri) || $prev_data_diri["status"] == "belum disetujui"){ ?>
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                <?php } ?>
            </div>
        </div>
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>