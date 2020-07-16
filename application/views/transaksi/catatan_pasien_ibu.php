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

    function getIsiTabel(){
    var id = document.form_utama.nik.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiTabelDetail'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#tabeldiv').html(msg);
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
        Catatan Kesehatan
        <small>Pasien Ibu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('transaksi/catatan_pasienibu'); ?>'><i class="fa fa-dashboard"></i> Catatan Kesehatan </a></li>
        <li class="active">Pasien Ibu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Semua Data -> Pasien Ibu</h3>
              </div>
              <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/catatan_pasienibu_hasil'); ?>'>
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
              </form>

              <div class="box-body">
                <div class="form-group" id="tabeldiv">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Periksa</th>
                        <th>Tanggal Kembali</th>
                        <th>Kehamilan Ke</th>
                        <th>Usia</th>
                        <th>No. JKN
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        // print_r($row);
                        if(isset($row)){
                          $no=1;
                          foreach($row as $a){
                            $url="master/pasienibu_update_form/$a->id_pasien_ibu";
                            $url1="master/pasienibu_delete_form/$a->id_pasien_ibu";
                            echo"<tr>"
                            .  "<td>".$no."</td>"
                            .  "<td >".$a->nik."</td>"
                            .  "<td >".$a->nama."</td>"
                            .  "<td >".$a->alamat."</td>"
                            .  "<td >".$a->tempat_lahir.", ".mediumdate_indo($a->tgl_lahir)."</td>"
                            .  "<td ><center>".$a->kehamilan_ke."</center></td>"
                            .  "<td ><center>".$a->usia."</center></td>"
                            .  "<td >".$a->no_jkn."</td>"
                            .  "<td >"
                            .  "<a href='".site_url($url)."' class='btn btn-primary margin'> <i class='fa fa-edit'></i> Edit </a>&nbsp;"
                            .  "<a href='".site_url($url1)."' class='btn btn-danger margin'> <i class='fa fa-remove'></i> Hapus </a>"
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
