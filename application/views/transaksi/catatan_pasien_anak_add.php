<script>

    function getNamaAyah(){
    var id = document.form_utama.nama.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomNamaAyah'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#namaayahdiv').html(msg);
            getNamaIbu();
          }
      });
    }

    function getNamaIbu(){
    var id = document.form_utama.nama.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomNamaIbu'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#namaibudiv').html(msg);
            getIdPasienAnak();
          }
      });
    }

    function getIdPasienAnak(){
    var id = document.form_utama.nama.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomIdPasienAnak'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#idpasienanakdiv').html(msg);
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
        <small>Data Pasien Anak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="transaksi/catatan_pasienibu_add"><i class="fa fa-dashboard"></i> Layanan Kesehatan Imunisasi </a></li>
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
              <h2 class="box-title">Layanan Kesehatan Imunisasi</h2>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/pasienanak_save'); ?>'>
                <div class="box-body">
                  <?php
                    $msg=$this->session->flashdata('msg');
                    echo $msg ;
                  ?>
                  <div class="form-group">
                    <label>Nama Lengkap Anak
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select name="nama" id="nama" class="form-control select2" style="width: 100%;" onchange="javascript:getNamaAyah();" required>
                      <option value=""></option>
                      <?php
                        foreach($pasienanak as $pa){
                          echo "<option value='$pa->nama'>$pa->nama</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group" id="idpasienanakdiv">
                    <input type="hidden" class="form-control" name="id_pasien_anak" required>
                  </div>
                  <div class="form-group" id="idpasienibudiv">
                    <input type="hidden" class="form-control" value="<?php $idbidan=$this->session->userdata('id_bidan'); echo $idbidan; ?>" name="id_bidan" required>
                  </div>
                  <div class="form-group" id="namaayahdiv">
                    <label>Nama Ayah
                    </label>
                    <input type="text" class="form-control" name="nama_ayah" readonly>
                  </div>
                  <div class="form-group" id="namaibudiv">
                    <label>Nama Ibu
                    </label>
                    <input type="text" class="form-control" name="nama_ibu" readonly>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <h3><i class="fa fa-plus-square margin-r-5"></i> Data Medis</h3>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Periksa
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_periksa" value="<?php echo date('Y/m/d') ?>" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Usia Anak
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="number" class="form-control" placeholder="Contoh : isi angka 2 untuk 2 bulan" name="usia" required>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group col-xs-6">
                      <label>Tinggi Badan
                        <span style="color: red;"><b>* (Cm)</b></span>
                      </label>
                      <input type="number" class="form-control" name="tinggi_badan" required>
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Berat Badan
                        <span style="color: red;"><b>* (Kg)</b></span>
                      </label>
                      <input type="number" class="form-control" name="berat_badan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jenis Imunisasi
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <select class="form-control select2" name="jenis_imunisasi" id="jenis_imunisasi" style="width: 100%;" required>
                       <option value=""></option>
                       <option value="HB-0">HB-0 (0-7 hari)</option>
                       <option value="BCG">BCG (0-2 Bulan)</option>
                       <option value="Polio 1">Polio 1 (0-2 Bulan)</option>
                       <option value="DPT-HB-Hib 1">DPT-HB-Hib 1 (2-3 Bulan)</option>
                       <option value="Polio-2">Polio 2 (2-3 Bulan)</option>
                       <option value="DPT-HB-Hib 2">DPT-HB-Hib 2 (3-4 Bulan)</option>
                       <option value="Polio 3">Polio 3 (3-4 Bulan)</option>
                       <option value="DPT-HB-Hib 3">DPT-HB-Hib 3 (4-5 Bulan)</option>
                       <option value="Polio 4">Polio 4 (4-5 Bulan)</option>
                       <option value="IPV">IPV (4-5 Bulan)</option>
                       <option value="Campak">Campak (9-10 Bulan)</option>
                       <option value="DPT-HB-Hib Lanjutan">DPT-HB-Hib Lanjutan (18-24 Bulan)</option>
                       <option value="Campak Lanjutan">Campak Lanjutan (24-30 Bulan)</option>
                     </select>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label>Nasihat / Saran
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="keterangan" rows="10" cols="80" required>
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
