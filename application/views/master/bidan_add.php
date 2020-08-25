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
        <li><a href="#"><i class="fa fa-dashboard"></i> Master Bidan </a></li>
        <li class="active">Tambah Bidan</li>
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
                <h3 class="box-title">Formulir -> Tambah Bidan</h3>
              </div>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('master/bidan_save'); ?>'>
                <div class="box-body">
                  <div class="form-group">
                    <label>Counter ID
                    </label>
                    <input type="text" class="form-control" name="idbidan" value="<?php echo $idbidan; ?>" readonly required>
                  </div>
                  <div class="form-group">
                    <label>No. SIPB
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_sipb" required>
                  </div>
                  <div class="form-group">
                    <label>No KTP
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_ktp" required>
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
                    </label>
                    <input type="number" class="form-control" name="hp">
                  </div>
                  <div class="form-group">
                    <label>Agama
                    </label>
                    <select class="form-control" name="agama" id="agama" style="width: 100%;" >
                       <option value=""></option>
                       <option value="Islam">Islam</option>
                       <option value="Kristen Protestan">Kristen Protestan</option>
                       <option value="Katolik">Katolik</option>
                       <option value="Hindu">Hindu</option>
                       <option value="Budha">Budha</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Golongan Darah
                    </label>
                    <input type="text" class="form-control" name="gol_darah">
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-map-marker margin-r-5"></i> Data Lokasi</h3>
                  </div>
                  <div class="form-group">
                    <label>Alamat Sesuai KTP
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="alamat_ktp" rows="10" cols="80">
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alamat Domisili
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor2" name="alamat_domisili" rows="10" cols="80">
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Lokasi Praktek Bidan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <!-- <div id="map" class="map"></div> -->
                    <?php echo $map['html'];?>
                    <?php echo $map['js'];?>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-book margin-r-5"></i> Data Pendidikan</h3>
                  </div>
                  <div class="form-group">
                    <label>Jenjang Pendidikan Terakhir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" style="width: 100%;" required>
                      <option value=""></option>
                      <option value="SMK">SMK</option>
                      <option value="D3">Diploma 3</option>
                      <option value="S1">Strata 1</option>
                      <option value="S2">Strata 2</option>
                      <option value="S3">Strata 3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Sekolah
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama_sekolah" required>
                  </div>
                  <div class="form-group">
                    <label>Jurusan Sekolah
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="jurusan" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Masuk Bidan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker1" name="tgl_masuk_bidan" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Upload Photo
                    </label>
                    <input type="file" class="form-control" name="foto">
                    <p class="help-block">Ukuran foto maksimal 2Mb.</p>
                  </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/bidan'); ?>" class="btn btn-default pull-left">Close</a>
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
