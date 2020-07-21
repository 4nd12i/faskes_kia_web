<script>

    function getDetail(){
    var id = document.form_utama.nama_peserta.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomNamaSuamiIstri'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#namadiv').html(msg);
            getUsia();
          }
      });
    }

    function getUsia(){
    var id = document.form_utama.nama_peserta.value;
      $.ajax({
          type:"POST",
          url:"<?php echo site_url('transaksi/isiKolomUsiaPeserta'); ?>",
          data: "id="+id,
          success:function(msg){
            $('#usiadiv').html(msg);
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
        Catatan Program KB
        <small>Keluarga Berencana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('transaksi/catatan_programkb'); ?>'><i class="fa fa-dashboard"></i> Catatan Program KB </a></li>
        <li class="active">Keluarga Berencana</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Semua Data -> Program KB</h3>
              </div>
              <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('transaksi/catatan_persalinan_hasil'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4">
                      <label>Nama Peserta
                        <span style="color: red;"><b>*</b></span>
                      </label>
                      <input type="text" class="form-control input-lg" name="nama_peserta" value="<?php echo $detail->nama_peserta; ?>" readonly>
                      <!-- <select name="nama_peserta" id="nama_peserta" class="form-control select2" style="width: 100%;" onchange="javascript:getDetail();">
                        <option value=""></option>
                        <?php
                          foreach($programkb as $pkb){
                            echo "<option value='$pkb->nama_peserta'>$pkb->nama_peserta  </option>";
                          }
                        ?>
                      </select> -->
                    </div>
                    <div class="form-group col-xs-4" id="namadiv">
                      <label>Nama Suami / Istri
                      </label>
                      <input type="text" class="form-control input-lg" name="nama" value="<?php echo $detail->suami_istri; ?>" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="usiadiv">
                      <label>Usia
                      </label>
                      <input type="text" class="form-control input-lg" name="usia" value="<?php echo $detail->usia; ?>" readonly>
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
                        <th>Alamat Pasien</th>
                        <th>Tempat, Tgl Lahir</th>
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
