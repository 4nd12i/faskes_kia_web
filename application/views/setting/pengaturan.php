<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaturan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Setting </a></li>
        <li class="active">Pengaturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- left col -->
        <section class="col-lg-6 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengaturan Aplikasi</h3>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('pengaturan/setting_update'); ?>'>
                <div class="box-body">
                  <?php
                    $msg1=$this->session->flashdata('msg1');
                    echo $msg1;
                  ?>
                  <div class="form-group">
                    <label>Nama Aplikasi
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->nama_aplikasi; ?>" name="nama_aplikasi">
                  </div>
                  <div class="form-group">
                    <label>Email Aplikasi
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->email; ?>" name="email">
                  </div>
                  <div class="form-group">
                    <label>No. Telp
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->tlp; ?>" name="tlp">
                  </div>
                  <div class="form-group">
                    <label>No. Fax
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->fax; ?>" name="fax">
                  </div>
                  <div class="form-group">
                    <label>Nama Perusahaan
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->nama_perusahaan; ?>" name="nama_perusahaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat Perusahaan
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="alamat" rows="10" cols="80">
                           <?php echo $detailpengaturan->alamat; ?>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Website
                    </label>
                    <input type="text" class="form-control" value="<?php echo $detailpengaturan->web; ?>" name="web">
                  </div>
                  <div class="form-group">
                    <label>Logo Perusahaan
                    </label>
                    <input type="file" class="form-control" value="<?php echo $detailpengaturan->logo; ?>" name="logo">
                  </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success  pull-right" name="simpan" id="simpan"><i class="fa fa-plus"></i> Simpan </button>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- left col -->

        <!-- Right col -->
        <section class="col-lg-6 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengaturan Administrator</h3>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' action='<?php echo site_url('pengaturan/user_update'); ?>'>
              <div class="box-body">
                <?php
                  $msg=$this->session->flashdata('msg');
                  echo $msg;
                ?>
                <div class="form-group">
                  <label>Username
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="username" value="<?php echo $detail->username; ?>" required>
                </div>
                <div class="form-group">
                  <label>NIK
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nik" value="<?php echo $detail->nik; ?>" required>
                </div>
                <div class="form-group" id="idbidandiv">
                  <input type="hidden" class="form-control" name="id_bidan" value="<?php echo $detail->id_bidan; ?>" required>
                </div>
                <div class="form-group" id="namadiv">
                  <label>Nama Lengkap
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $detail->nama; ?>" required>
                </div>
                <div class="form-group">
                  <label>Password
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                  <label>Ulangi Password
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="password" class="form-control" name="password1" required>
                </div>
                <div class="form-group">
                  <label>Hak Akses
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <select class="form-control" name="hak" id="hak" style="width: 100%;" readonly>
                     <?php
                        $hak = $detail->hak;
                        if($hak == "administrator"){
                          echo "
                            <option value='administrator' selected='selected'>Administrator</option>
                          ";
                        }else{
                          echo "
                            <option value=''></option>
                            <option value='administrator'>Administrator</option>
                          ";
                        };
                       ?>
                   </select>
                </div>
                <div class="form-group">
                  <label>Upload Photo
                  </label>
                  <input type="file" class="form-control" name="fotouser">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right" name="simpan" id="simpan"><i class="fa fa-edit"></i> Update </button>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
      </div>
      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
