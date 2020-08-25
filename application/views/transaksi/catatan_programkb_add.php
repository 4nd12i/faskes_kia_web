<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Layanan Kesehatan
        <small>Program KB</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="transaksi/catatan_pasienibu_add"><i class="fa fa-dashboard"></i> Layanan Kesehatan Program KB </a></li>
        <li class="active">Tambah Catatan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Layanan Kesehatan Program KB</h2>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/programkb_save'); ?>'>
                <div class="box-body">
                  <?php
                    $msg=$this->session->flashdata('msg');
                    echo $msg ;
                  ?>
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php $idbidan=$this->session->userdata('id_bidan'); echo $idbidan; ?>" name="id_bidan" required>
                  </div>
                  <div class="form-group">
                    <label>No Registrasi
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="no_registrasi" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Peserta
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama_peserta" required>
                  </div>
                  <div class="form-group">
                    <label>Usia
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" placeholder="Contoh : isi angka 8 untuk 8 tahun" name="usia" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Suami / Istri
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="suami_istri" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="alamat" rows="10" cols="80" required>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tempat Pelayanan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div id="map" class="map"></div>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Mulai
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_mulai" value="<?php echo date('Y/m/d') ?>" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Metode Kontrasepsi
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control select2" name="metode_kontrasepsi" id="metode_kontrasepsi" style="width: 100%;" required>
                      <option value=""></option>
                      <option value="Kondom">Kondom</option>
                      <option value="Pil KB Kombinasi">Pil KB Kombinasi</option>
                      <option value="KB Spiral">KB Spiral</option>
                      <option value="KB Suntik">KB Suntik</option>
                      <option value="KB Alami">KB Alami</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Tindakan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker1" name="tgl_tindakan" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Kembali
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker2" name="tgl_kembali" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Keterangan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor2" name="keterangan" rows="10" cols="80" required>
                        </textarea>
                    </div>
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
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
