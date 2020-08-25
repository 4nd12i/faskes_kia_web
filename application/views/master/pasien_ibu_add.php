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
        <li><a href="#"><i class="fa fa-dashboard"></i> Master Pasien Ibu </a></li>
        <li class="active">Tambah Pasien Ibu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Formulir -> Tambah Ibu</h3>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('master/pasienibu_save'); ?>'>
                <div class="box-body">
                  <div class="form-group">
                    <label>No Urut Pasien Ibu
                    </label>
                    <input type="text" class="form-control" name="id_pasien_ibu" value="<?php echo $id_pasien_ibu; ?>" readonly required>
                  </div>
                  <div class="form-group">
                    <label>NIK
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nik" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="tempat_lahir" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>No. Telp
                    </label>
                    <input type="number" class="form-control" name="tlp">
                  </div>
                  <div class="form-group">
                    <label>No. HP
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" name="hp" required>
                  </div>
                  <div class="form-group">
                    <label>Agama
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control" name="agama" id="agama" style="width: 100%;" required>
                       <option value=""></option>
                       <option value="Islam">Islam</option>
                       <option value="Kristen Protestan">Kristen Protestan</option>
                       <option value="Katolik">Katolik</option>
                       <option value="Hindu">Hindu</option>
                       <option value="Budha">Budha</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Pendidikan
                    </label>
                    <select class="form-control" name="pendidikan" id="pendidikan" style="width: 100%;">
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
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan
                    </label>
                    <input type="text" class="form-control" name="pekerjaan">
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
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lokasi Pasien Ibu
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <!-- <div id="map" class="map"></div> -->
                    <?php echo $map['js'];?>
                    <?php echo $map['html'];?>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-plus-square margin-r-5"></i> Data Medis</h3>
                  </div>
                  <div class="form-group">
                    <label>No. JKN
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_jkn" required>
                  </div>
                  <div class="form-group">
                    <label>Usia
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" name="usia" required>
                  </div>
                  <div class="form-group">
                    <label>Golongan Darah
                    </label>
                    <input type="text" class="form-control" name="gol_darah">
                  </div>
                  <div class="form-group">
                    <label>Kehamilan Ke
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" name="kehamilan_ke" required>
                  </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/pasien_ibu'); ?>" class="btn btn-default pull-left">Close</a>
                <button type="submit" class="btn btn-success  pull-right" name="simpan" id="simpan"><i class="fa fa-plus"></i> Simpan </button>
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
