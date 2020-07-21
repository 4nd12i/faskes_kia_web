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
                  <div class="col-lg-12">
                    <a href='catatan_programkb' class="btn btn-warning margin pull-left">Kembali</a>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group" id="tabeldiv">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>No Registrasi</th>
                      <th>Tempat Pelayanan</th>
                      <th>Tgl Periksa</th>
                      <th>Tgl Tindakan</th>
                      <th>Tgl Kembali</th>
                      <th>Metode Kontrasepsi</th>
                      <th>Keterangan</th>
                      <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                      <?php
                        // print_r($row);
                          if(isset($row)){
                            $no=1;
                            foreach($row as $a){
                              $url="transaksi/catatan_programkb_detail_form/$a->id_programkb";
                              echo"<tr>"
                                  .  "<td>".$no."</td>"
                                  .  "<td >".$a->no_registrasi."</td>"
                                  .  "<td >".$a->tempat_pelayanan."</td>"
                                  .  "<td >".mediumdate_indo($a->tgl_mulai)."</td>"
                                  .  "<td >".mediumdate_indo($a->tgl_tindakan)."</td>"
                                  .  "<td >".mediumdate_indo($a->tgl_kembali)."</td>"
                                  .  "<td >".$a->metode_kontrasepsi."</td>"
                                  .  "<td >".$a->keterangan."</td>"
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
