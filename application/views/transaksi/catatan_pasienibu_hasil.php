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
              <form method='post' name='form_utama' onSubmit='return validasi();' action=''>
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
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->nama; ?>" name="nama" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="usiadiv">
                      <label>Usia
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->usia; ?>" name="usia" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group col-xs-4" id="pekerjaandiv">
                      <label>Pekerjaan
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->pekerjaan; ?>" name="pekerjaan" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="kehamilandiv">
                      <label>Kehamilan Ke
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->kehamilan_ke; ?>" name="kehamilan_ke" readonly>
                    </div>
                    <div class="form-group col-xs-4" id="nojkndiv">
                      <label>No JKN
                      </label>
                      <input type="text" class="form-control input-lg" value="<?php echo $detail->no_jkn; ?>" name="no_jkn" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <a href='catatan_pasienibu' class="btn btn-warning margin pull-left">Kembali</a>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group" id="tabeldiv">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tgl Periksa</th>
                        <th>Usia</br>Kehamilan</th>
                        <th>Keluhan</th>
                        <th>Tekanan Darah</th>
                        <th>Denyut Jantung</th>
                        <th>Nasihat</th>
                        <th>Tgl Kembali</th>
                        <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        // print_r($row);
                        if(isset($row)){
                          $no=1;
                          foreach($row as $a){
                            $url="transaksi/catatan_pasienibu_detail_form/$a->id_cek";
                            // $url1="transaksi/catatan_pasienibu_update_form/$a->id_bidan";
                            // $url2="transaksi/catatan_pasienibu_delete_form/$a->id_bidan";
                            echo"<tr>"
                            .  "<td>".$no."</td>"
                            .  "<td >".$a->tgl_periksa."</td>"
                            .  "<td ><center>".$a->umur_kehamilan."</center></td>"
                            .  "<td >".$a->keluhan_sekarang."</td>"
                            .  "<td ><center>".$a->tekanan_darah."</center></td>"
                            .  "<td ><center>".$a->denyut_jantung."</center></td>"
                            .  "<td >".$a->nasihat."</td>"
                            .  "<td >".$a->kapan_kembali."</td>"
                            .  "<td ><a href='".site_url($url)."' class='btn bg-purple margin'> <i class='fa fa-book'></i> Detail </a>&nbsp;</td>"
                            // .  "<td ><a href='".site_url($url1)."' class='btn btn-warning margin'> <i class='fa fa-edit'></i> Edit </a>&nbsp;</td>"
                            // .  "<td ><a href='".site_url($url2)."' class='btn btn-danger margin'> <i class='fa fa-remove'></i> Hapus </a></td>"
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

    <!-- modal -->
    <div class="modal fade" id="modal-add">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Produk</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>ID
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="idproduk" id="idproduk" required disabled>
            </div>
            <div class="form-group">
              <label>Nama Produk
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="namaproduk" id="namaproduk" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Simpan </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
