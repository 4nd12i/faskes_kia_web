<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data Bidan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Master Bidan </a></li>
        <li class="active">Edit Bidan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <div class="box-header with-border">
                <h3 class="box-title">Formulir -> Edit Bidan</h3>
              </div>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('master/bidan_update'); ?>'>
              <div class="box-body">

                <div class="col-md-3">
                  <!-- Profile Image -->
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="../../../assets/template/back/dist/img/user4-128x128.jpg" alt="User profile picture">

                      <h3 class="profile-username text-center"><?php echo $detail->nama; ?></h3>

                      <p class="text-muted text-center"><?php echo $detail->no_ktp; ?></p>

                      <div class="form-group">
                        <label>Upload Berkas
                        </label>
                        <input type="file" class="form-control" name="foto">
                        <p class="help-block">Ukuran foto maksimal 2Mb.</p>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_bidan" value='<?php echo $detail->id_bidan; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>No. SIPB
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_sipb" value='<?php echo $detail->no_sipb; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>No KTP
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_ktp" value='<?php echo $detail->no_ktp; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama" value='<?php echo $detail->nama; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="tempat_lahir" value='<?php echo $detail->tempat_lahir; ?>' required>
                  </div>

                  <div class="form-group">
                    <label>Tanggal Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value='<?php echo $detail->tgl_lahir; ?>' required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>No. Telp
                    </label>
                    <input type="number" class="form-control" name="tlp" value='<?php echo $detail->tlp; ?>'>
                  </div>
                  <div class="form-group">
                    <label>No. HP
                    </label>
                    <input type="number" class="form-control" name="hp" value='<?php echo $detail->hp; ?>'>
                  </div>
                  <div class="form-group">
                    <label>Agama
                    </label>
                    <select class="form-control" name="agama" id="agama" value="<?php echo $detail->agama; ?>" style="width: 100%;" >
                       <?php if($detail->agama=='Islam'):?>
                         <option value="Islam" selected="selected">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Katolik">Katolik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Budha">Budha</option>
                       <?php elseif($detail->agama=='Kristen Protestan'):?>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan" selected="selected">Kristen Protestan</option>
                         <option value="Katolik">Katolik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Budha">Budha</option>
                       <?php elseif($detail->agama=='Katolik'):?>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Katolik" selected="selected">Katolik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Budha">Budha</option>
                       <?php elseif($detail->agama=='Hindu'):?>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Katolik">Katolik</option>
                         <option value="Hindu" selected="selected">Hindu</option>
                         <option value="Budha">Budha</option>
                       <?php elseif($detail->agama=='Budha'):?>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Katolik">Katolik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Budha" selected="selected">Budha</option>
                       <?php else:?>
                         <option value=""></option>
                         <option value="Islam">Islam</option>
                         <option value="Kristen Protestan">Kristen Protestan</option>
                         <option value="Katolik">Katolik</option>
                         <option value="Hindu">Hindu</option>
                         <option value="Budha">Budha</option>
                      <?php endif;?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Golongan Darah
                    </label>
                    <input type="text" class="form-control" name="gol_darah" value="<?php echo $detail->gol_darah; ?>">
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-map-marker margin-r-5"></i> Data Lokasi</h3>
                  </div>
                  <div class="form-group">
                    <label>Alamat Sesuai KTP
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="alamat_ktp" rows="10" cols="80">
                            <?php echo $detail->alamat_ktp; ?>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alamat Domisili
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor2" name="alamat_domisili" rows="10" cols="80">
                            <?php echo $detail->alamat_domisili; ?>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lokasi Praktek Bidan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div id="map" class="map"></div>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-book margin-r-5"></i> Data Pendidikan</h3>
                  </div>
                  <div class="form-group">
                    <label>Jenjang Pendidikan Terakhir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?php echo $detail->pendidikan_terakhir; ?>" style="width: 100%;" required>
                    <?php if($detail->pendidikan_terakhir=='SMK'):?>
                      <option value="SMK" selected="selected">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan_terakhir=='D3'):?>
                      <option value="SMK">SMK</option>
                      <option value="D3" selected="selected">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan_terakhir=='S1'):?>
                      <option value="SMK">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1" selected="selected">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan_terakhir=='S2'):?>
                      <option value="SMK">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2" selected="selected">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan_terakhir=='S3'):?>
                      <option value="SMK">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3" selected="selected">Strata 3</option>
                    <?php else:?>
                      <option value=""></option>
                      <option value="SMK">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                   <?php endif;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Sekolah
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $detail->nama_sekolah; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Jurusan Sekolah
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $detail->nama_sekolah; ?>" required>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/bidan'); ?>" class="btn btn-default pull-left">Close</a>
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
