<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Data Kesehatan Ibu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('histori/historipasienibu'); ?>'><i class="fa fa-dashboard"></i> Riwayat </a></li>
        <li class="active">Kesehatan Ibu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Riwayat Kesehatan Ibu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Tgl Periksa</th>
                  <th>Riwayat Penyakit</th>
                  <th>Keluhan</th>
                  <th>Usia<br/>Kehamilan</th>
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
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->nik."</td>"
                              .  "<td >".$a->nama."</td>"
                              .  "<td >".mediumdate_indo($a->tgl_periksa)."</td>"
                              .  "<td >".$a->riwayat_penyakit."</td>"
                              .  "<td >".$a->keluhan_sekarang."</td>"
                              .  "<td >".$a->umur_kehamilan."</td>"
                              .  "<td >".$a->nasihat."</td>"
                              .  "<td >".mediumdate_indo($a->kapan_kembali)."</td>"
                              .  "<td >"
                              .  "<a href='".site_url($url)."' class='btn bg-purple margin' disable><i class='fa fa-book'></i> Detail </a>&nbsp;"
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
