<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data Pasien Ibu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/pasien_ibu'); ?>'><i class="fa fa-dashboard"></i> Master Pasien Ibu </a></li>
        <li class="active">Edit Pasien Ibu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Formulir -> Edit Pasien Ibu</h3>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('master/pasienibu_update'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="id_pasien_ibu" value="<?php echo $detail->id_pasien_ibu; ?>" readonly required>
                </div>
                <div class="form-group">
                  <label>NIK
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nik" value="<?php echo $detail->nik; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $detail->nama; ?>" required>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $detail->tempat_lahir; ?>" required>
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <div class="input-group date">
                    <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="<?php echo $detail->tgl_lahir; ?>" required>
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>No. Telp
                  </label>
                  <input type="number" class="form-control" name="tlp" value="<?php echo $detail->tlp; ?>">
                </div>
                <div class="form-group">
                  <label>No. HP
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="number" class="form-control" name="hp" value="<?php echo $detail->hp; ?>" required>
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
                  <label>Pendidikan
                  </label>
                  <select class="form-control" name="pendidikan" id="pendidikan" value="<?php echo $detail->pendidikan; ?>" style="width: 100%;">
                    <?php if($detail->pendidikan=='SD'):?>
                      <option value="SD" selected="selected">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='SMP'):?>
                      <option value="SD">SD</option>
                      <option value="SMP" selected="selected">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='SMK'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK" selected="selected">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='D1'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1" selected="selected">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='D2'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2" selected="selected">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='D3'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3" selected="selected">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='S1'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1" selected="selected">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='S2'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2" selected="selected">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    <?php elseif($detail->pendidikan=='S3'):?>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3" selected="selected">Strata 3</option>
                    <?php else:?>
                      <option value=""></option>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">Diploma 1</option>
                      <option value="D2">Diploma 2</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                   <?php endif;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pekerjaan
                  </label>
                  <input type="text" class="form-control" name="pekerjaan" value="<?php echo $detail->pekerjaan; ?>">
                </div>
                <div class="form-group">
                  <h3><i class="fa fa-map-marker margin-r-5"></i> Data Lokasi</h3>
                </div>
                <div class="form-group">
                  <label>Alamat Pasien
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <div class="box-body pad">
                      <textarea id="editor1" name="alamat" rows="10" cols="80" required>
                          <?php echo $detail->alamat; ?>
                      </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label>Lokasi Pasien Ibu
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <div id="map" class="map"></div>
                </div>
                <div class="form-group">
                  <h3><i class="fa fa-plus-square margin-r-5"></i> Data Medis</h3>
                </div>
                <div class="form-group">
                  <label>No. JKN
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="text" class="form-control" name="no_jkn" value="<?php echo $detail->no_jkn; ?>" required>
                </div>
                <div class="form-group">
                  <label>Usia
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="number" class="form-control" name="usia" value="<?php echo $detail->usia; ?>" required>
                </div>
                <div class="form-group">
                  <label>Golongan Darah
                  </label>
                  <input type="text" class="form-control" name="gol_darah" value="<?php echo $detail->gol_darah; ?>">
                </div>
                <div class="form-group">
                  <label>Kehamilan Ke
                    <span style="color: red;"><b>*</b></span>
                  </label>
                  <input type="number" class="form-control" name="kehamilan_ke" value="<?php echo $detail->kehamilan_ke; ?>" required>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/pasien_ibu'); ?>" class="btn btn-default pull-left">Close</a>
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
