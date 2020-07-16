<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Pasien Ibu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/pasien_ibu'); ?>'><i class="fa fa-dashboard"></i> Master Data </a></li>
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
              <a href='<?php echo site_url('master/pasienibu_add_form'); ?>' class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
