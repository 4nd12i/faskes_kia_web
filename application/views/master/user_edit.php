<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/user'); ?>'><i class="fa fa-dashboard"></i> Master User </a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Formulir -> Edit User</h3>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('master/user_update'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <label>Username
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="username" value="<?php echo $detail->username; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label>NIK
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nik" value="<?php echo $detail->nik; ?>" readonly required>
                </div>
                <div class="form-group" id="idbidandiv">
                  <input type="hidden" class="form-control" name="id_bidan" value="<?php echo $detail->id_bidan; ?>" readonly required>
                </div>
                <div class="form-group" id="namadiv">
                  <label>Nama Lengkap
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $detail->nama; ?>" readonly required>
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
                  <select class="form-control" name="hak" id="hak" style="width: 100%;" required>
                     <?php
                        $hak = $detail->hak;
                        if($hak == "bidan"){
                          echo "
                            <option value='bidan' selected='selected'>Bidan</option>
                          ";
                        }else{
                          echo "
                            <option value=''></option>
                            <option value='bidan'>Bidan</option>
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
                <?php
                  $msg=$this->session->flashdata('msg');
                  echo $msg;
                ?>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/user'); ?>" class="btn btn-default pull-left">Close</a>
                <button type="submit" class="btn btn-primary pull-right" name="simpan" id="simpan"><i class="fa fa-edit"></i> Update </button>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
