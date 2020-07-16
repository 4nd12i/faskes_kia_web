<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Pasien Anak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/pasien_anak'); ?>'><i class="fa fa-dashboard"></i> Master Data </a></li>
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
              <a href='<?php echo site_url('master/pasienanak_add_form'); ?>' class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Nama Orangtua</th>
                  <th>Jenis<br/>Kelamin</th>
                  <th>Tempat, Tgl Lahir</th>
                  <th>Usia</th>
                  <th>Anak Ke</th>
                  <th>Berat<br/>Badan</th>
                  <th>Panjang<br/>Badan</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    // print_r($row);
                      if(isset($row)){
                        $no=1;
                        foreach($row as $a){
                          $url="master/pasienanak_update_form/$a->id_pasien_anak";
                          $url1="master/pasienanak_delete_form/$a->id_pasien_anak";
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->nama."</td>"
                              .  "<td >Ayah : ".$a->nama_ayah."<br/>Ibu : ".$a->nama_ibu."</td>"
                              .  "<td >".$a->jenis_kelamin."</td>"
                              .  "<td >".$a->tempat_lahir.", ".mediumdate_indo($a->tgl_lahir)."</td>"
                              .  "<td >".$a->usia."</td>"
                              .  "<td >".$a->anak_ke."</td>"
                              .  "<td >".$a->berat_lahir." Kg</td>"
                              .  "<td >".$a->panjang_badan." Cm</td>"
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
