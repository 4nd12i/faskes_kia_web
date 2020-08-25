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
            getIdPasienAnak();
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
        Catatan Kesehatan
        <small>Pasien Anak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('transaksi/catatan_pasienanak'); ?>'><i class="fa fa-dashboard"></i> Catatan Kesehatan </a></li>
        <li class="active">Pasien Anak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Semua Data -> Pasien Anak</h3>
              </div>
              <!-- /.box-header -->
              <form method='post' name='form_utama' action='<?php echo site_url('transaksi/catatan_pasienanak_hasil'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4">
                      <label>Nama Lengkap
                        <span style="color: red;"><b>*</b></span>
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->nama; ?>" name="nama" readonly>
                      <!-- <select name="nama" id="nama" class="form-control select2" style="width: 100%;" onchange="javascript:getNamaAyah();">
                        <option value=""></option>
                        <?php
                          foreach($pasienanak as $pa){
                            echo "<option value='$pa->nama'>$pa->nama</option>";
                          }
                        ?>
                      </select> -->
                    </div>
                    <div class="form-group" id="idpasienanakdiv">
                      <input type="hidden" class="form-control" value="<?php echo $detail->id_pasien_anak; ?>" name="id_pasien_anak" required>
                    </div>
                    <div class="form-group col-xs-4" id="namaayahdiv">
                      <label>Nama Ayah
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->nama_ayah; ?>"  name="nama_ayah" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="namaibudiv">
                      <label>Nama Ibu
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->nama_ibu; ?>"  name="nama_ibu" readonly>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4" id="tempatlahirdiv">
                      <label>Tempat Lahir
                      </label>
                      <input type="text" class="form-control input-lg" name="tempat_lahir" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="tgllahirdiv">
                      <label>Tanggal Lahir
                      </label>
                      <input type="text" class="form-control input-lg" name="tgl_lahir" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="jkdiv">
                      <label>Jenis Kelamin
                      </label>
                      <input type="text" class="form-control input-lg" name="jenis_kelamin" readonly>
                    </div>
                  </div>
                </div> -->
                <div class="form-group">
                  <div class="col-lg-12">
                    <a href='catatan_pasienanak' class="btn btn-warning margin pull-left">Kembali</a>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group" id="tabeldiv">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nama Orangtua</th>
                      <th>Tgl Periksa</th>
                      <th>Usia</th>
                      <th>Jenis Imunisasi</th>
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
                              $url="transaksi/catatan_pasienanak_detail_form/$a->id_cek";
                              echo"<tr>"
                                  .  "<td>".$no."</td>"
                                  .  "<td >".$a->nama."</td>"
                                  .  "<td >Ayah : ".$a->nama_ayah."<br/>Ibu : ".$a->nama_ibu."</td>"
                                  .  "<td >".mediumdate_indo($a->tgl_periksa)."</td>"
                                  .  "<td >".$a->usia."</td>"
                                  .  "<td >".$a->jenis_imunisasi."</td>"
                                  .  "<td >".$a->keterangan."</td>"
                                  .  "<td >"
                                  .  "<a href='".site_url($url)."' class='btn bg-purple margin'> <i class='fa fa-edit'></i> Detail </a>&nbsp;"
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
