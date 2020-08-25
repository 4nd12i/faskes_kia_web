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
        <li><a href='<?php echo site_url('transaksi/catatan_persalinan'); ?>'><i class="fa fa-dashboard"></i> Catatan Persalinan </a></li>
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
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_pasien_ibu" value="<?php echo $detail->id_pasien_ibu; ?>" readonly required>
                    </div>
                    <div class="form-group col-xs-4">
                      <label>NIK
                        <span style="color: red;"><b>*</b></span>
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->nik; ?>" name="nik" readonly>
                      <!-- <select name="nik" id="nik" class="form-control select2" style="width: 100%;" onchange="javascript:getNama();">
                        <option value=""></option>
                        <?php
                          foreach($pasienibu as $pi){
                            echo "<option value='$pi->nik'";
                            echo $detail['nik']==$pi->nik?'selected':'';
                            echo ">$pi->nik</option>";
                          }
                        ?>
                      </select> -->
                    </div>
                    <div class="form-group col-xs-4" id="namadiv">
                      <label>Nama Pasien
                      </label>
                      <input type="text" class="form-control input-lg" name="nama" value="<?php echo $detail->nama; ?>" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="usiadiv">
                      <label>Usia
                      </label>
                      <input type="text" class="form-control input-lg" name="usia" value="<?php echo $detail->usia; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4" id="pekerjaandiv">
                      <label>Pekerjaan
                      </label>
                      <input type="text" class="form-control input-lg" name="pekerjaan" value="<?php echo $detail->pekerjaan; ?>" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="kehamilandiv">
                      <label>Kehamilan Ke
                      </label>
                      <input type="text" class="form-control input-lg" name="kehamilan_ke" value="<?php echo $detail->kehamilan_ke; ?>" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="nojkndiv">
                      <label>No JKN
                      </label>
                      <input type="text" class="form-control input-lg" name="no_jkn" value="<?php echo $detail->no_jkn; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <a href='catatan_persalinan' class="btn btn-warning margin pull-left">Kembali</a>
                  </div>
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
                              $url="transaksi/catatan_persalinan_detail_form/$a->id_persalinan";
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
