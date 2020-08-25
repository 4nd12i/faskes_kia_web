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
        <small>Data Pasien Ibu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="transaksi/catatan_pasienibu_add"><i class="fa fa-dashboard"></i> Layanan Kesehatan Pasien Ibu </a></li>
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
              <h2 class="box-title">Layanan Kesehatan Pasien Ibu</h2>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/pasienibu_save'); ?>'>
                <div class="box-body">
                  <?php
                    $msg=$this->session->flashdata('msg');
                    echo $msg;
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
                    <label>Usia Kehamilan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="umur_kehamilan" required>
                  </div>
                  <div class="form-group">
                    <label>HPHT
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="hpht" required>
                  </div>
                  <div class="form-group">
                    <label>HTP
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="htp" required>
                  </div>
                  <div class="form-group">
                    <label>Riwayat Penyakit
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="riwayat_penyakit" rows="10" cols="80" >
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Keluhan Sekarang
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor2" name="keluhan_sekarang" rows="10" cols="80" >
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Letak Janin
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor3" name="letak_janin" rows="10" cols="80" >
                        </textarea>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group col-xs-6">
                      <label>Tinggi Badan
                        <span style="color: red;"><b>(Cm)</b></span>
                      </label>
                      <input type="number" class="form-control" name="tinggi_badan">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Berat Badan
                        <span style="color: red;"><b>(Kg)</b></span>
                      </label>
                      <input type="number" class="form-control" name="berat_badan" >
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group col-xs-6">
                      <label>Tekanan Darah
                      </label>
                      <input type="number" class="form-control" name="tekanan_darah">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Tinggi Fundus
                      </label>
                      <input type="number" class="form-control" name="tinggi_fundus" >
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group col-xs-6">
                      <label>Denyut Jantung
                      </label>
                      <input type="number" class="form-control" name="denyut_jantung">
                    </div>
                    <div class="form-group col-xs-6">
                      <label>Kaki Bengkak
                      </label>
                      <select class="form-control" name="kaki_bengkak" id="kaki_bengkak" style="width: 100%;" >
                         <option value=""></option>
                         <option value="Iya">Iya</option>
                         <option value="Tidak">Tidak</option>
                       </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Pemberian Vitamin
                    </label>
                    <select class="form-control" name="beri_vitamin" id="beri_vitamin" style="width: 100%;" >
                       <option value=""></option>
                       <option value="Iya">Iya</option>
                       <option value="Tidak">Tidak</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Kembali
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker1" name="kapan_kembali" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label>Nasihat / Saran Untuk Pasien
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor4" name="nasihat" rows="10" cols="80" required>
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
</div>
