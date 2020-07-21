<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Data Persalinan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Riwayat </a></li>
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
              <h3 class="box-title">Semua Riwayat Persalinan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
