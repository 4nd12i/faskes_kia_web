<script>

function getNama(){
var id = document.form_utama.nik.value;
  $.ajax({
      type:"POST",
      url:"<?php echo site_url('transaksi/isiKolomNama'); ?>",
      data: "id="+id,
      success:function(msg){
        $('#namadiv').html(msg);
        getIdPasienIbu();
      }
  });
}

function getIdPasienIbu(){
var id = document.form_utama.nik.value;
  $.ajax({
      type:"POST",
      url:"<?php echo site_url('transaksi/isiKolomIdPasienIbu'); ?>",
      data: "id="+id,
      success:function(msg){
        $('#idpasienibudiv').html(msg);
      }
  });
}

</script>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Layanan Kesehatan
        <small>Persalinan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="transaksi/catatan_pasienibu_add"><i class="fa fa-dashboard"></i> Layanan Kesehatan Persalinan </a></li>
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
              <h2 class="box-title">Layanan Kesehatan Persalinan</h2>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/persalinan_save'); ?>'>
                <div class="box-body">
                  <?php
                    $msg=$this->session->flashdata('msg');
                    echo $msg ;
                  ?>
                  <div class="form-group">
                    <label>NIK
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select name="nik" id="nik" class="form-control select2" style="width: 100%;" onchange="javascript:getNama();" required>
                      <option value=""></option>
                      <?php
                        foreach($pasienibu as $pi){
                          echo "<option value='$pi->nik'>$pi->nik</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group" id="idpasienibudiv">
                    <input type="hidden" class="form-control" name="id_pasien_ibu" required>
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php $idbidan=$this->session->userdata('id_bidan'); echo $idbidan; ?>" name="id_bidan" required>
                  </div>
                  <div class="form-group" id="namadiv">
                    <label>Nama Lengkap
                    </label>
                    <input type="text" class="form-control" name="nama" readonly>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <h3><i class="fa fa-plus-square margin-r-5"></i> Data Medis</h3>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Persalinan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_persalinan" value="<?php echo date('Y/m/d') ?>" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Usia Kehamilan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" placeholder="Contoh : isi angka 8 untuk 8 tahun" name="usia_kehamilan" required>
                  </div>
                  <div class="form-group">
                    <label>Penolong Persalinan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="penolong_persalinan" required>
                  </div>
                  <div class="form-group">
                    <label>Cara Persalinan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control select2" name="cara_persalinan" id="cara_persalinan" style="width: 100%;" required>
                       <option value=""></option>
                       <option value="Persalinan Normal">Persalinan Normal</option>
                       <option value="Persalinan Dengan Alat">Persalinan Dengan Alat</option>
                       <option value="Persalinan Caesar">Persalinan Caesar</option>
                       <option value="Persalinan Di Air">Persalinan Di Air</option>
                     </select>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label>Keadaan Ibu
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="keadaan_ibu" rows="10" cols="80" required>
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
