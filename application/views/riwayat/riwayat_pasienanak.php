<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Riwayat
        <small>Data Kesehatan Anak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('histori/historipasienibu'); ?>'><i class="fa fa-dashboard"></i> Riwayat </a></li>
        <li class="active">Kesehatan Anak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Riwayat Kesehatan Anak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                          $url="master/pasienanak_update_form/$a->nama";
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
