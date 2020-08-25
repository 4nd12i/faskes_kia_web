<script>

    function getNama(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomNama'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#namadiv').html(msg);
            getUsia();
            getPekerjaan();
            getKehamilan();
            getNoJkn();
            getIdPasienIbu();
          }
      });
    }

    function getUsia(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomUsia'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#usiadiv').html(msg);
          }
      });
    }

    function getPekerjaan(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomPekerjaan'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#pekerjaandiv').html(msg);
          }
      });
    }

    function getKehamilan(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomKehamilan'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#kehamilandiv').html(msg);
          }
      });
    }

    function getNoJkn(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomNoJkn'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#nojkndiv').html(msg);
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
        Catatan Persalinan
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('transaksi/catatan_pasienibu'); ?>'><i class="fa fa-dashboard"></i> Catatan Persalinan </a></li>
        <li class="active">Persalinan Ibu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Semua Data -> Persalinan</h3>
              </div>
              <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/catatan_persalinan_hasil'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4">
                      <label>NIK
                        <span style="color: red;"><b>*</b></span>
                      </label>
                      <select name="nik" id="nik" class="form-control select2" style="width: 100%;" onchange="javascript:getNama();">
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
                    <div class="form-group col-xs-4" id="namadiv">
                      <label>Nama Pasien
                      </label>
                      <input type="text" class="form-control input-lg" name="nama" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="usiadiv">
                      <label>Usia
                      </label>
                      <input type="text" class="form-control input-lg" name="usia" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4" id="pekerjaandiv">
                      <label>Pekerjaan
                      </label>
                      <input type="text" class="form-control input-lg" name="pekerjaan" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="kehamilandiv">
                      <label>Kehamilan Ke
                      </label>
                      <input type="text" class="form-control input-lg" name="kehamilan_ke" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="nojkndiv">
                      <label>No JKN
                      </label>
                      <input type="text" class="form-control input-lg" name="no_jkn" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success pull-right" name="simpan" id="simpan">
                    <i class="fa fa-book"></i> Cek Data Pasien
                  </button>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group" id="tabeldiv">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama Lengkap</th>
                      <th>Tanggal Persalinan</th>
                      <th>Usia Kehamilan</th>
                      <th>Cara Persalinan</th>
                      <th>Keadaan Ibu</th>
                      <th>Penolong Persalinan</th>
                      <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                      <?php
                        // print_r($row);
                          if(isset($row)){
                            $no=1;
                            foreach($row as $a){
                              $url="transaksi/catatan_persalinan_detail_form/";
                              echo"<tr>"
                                  .  "<td>".$no."</td>"
                                  .  "<td >".$a->nik."</td>"
                                  .  "<td >".$a->nama."</td>"
                                  .  "<td >".mediumdate_indo($a->tgl_persalinan)."</td>"
                                  .  "<td >".$a->usia_kehamilan."</td>"
                                  .  "<td >".$a->cara_persalinan."</td>"
                                  .  "<td >".$a->keadaan_ibu."</td>"
                                  .  "<td >".$a->penolong_persalinan."</td>"
                                  .  "<td >"
                                  .  "<a href='".site_url($url)."' class='btn bg-purple margin'> <i class='fa fa-book'></i> Detail </a>&nbsp;"
                                  .  "</td>"
                                  .  "</tr>";
                              $no++;
                            }
                        }
                      ?>
                    </tbody>
                    <!-- <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot> -->
                  </table>
              </div>
            </div>
              <!-- /.box-body -->
            </form>
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
