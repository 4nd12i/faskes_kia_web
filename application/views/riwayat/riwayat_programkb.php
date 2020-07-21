<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Data Program KB</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Riwayat </a></li>
        <li class="active">Program KB</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Riwayat Program KB</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Registrasi</th>
                  <th>Nama Peserta</th>
                  <th>Usia</th>
                  <th>Nama Suami / Istri</th>
                  <th>Alamat</th>
                  <th>Tgl Periksa</th>
                  <th>Tgl Tindakan</th>
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
                              .  "<td >".$a->nama_peserta."</td>"
                              .  "<td >".$a->usia."</td>"
                              .  "<td >".$a->suami_istri."</td>"
                              .  "<td >".$a->alamat."</td>"
                              .  "<td >".mediumdate_indo($a->tgl_mulai)."</td>"
                              .  "<td >".mediumdate_indo($a->tgl_tindakan)."</td>"
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
