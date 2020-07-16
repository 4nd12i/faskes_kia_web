<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data Bidan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Master Data </a></li>
        <li class="active">Bidan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Data -> Bidan</h3>
              <a href='<?php echo site_url('master/bidan_add_form'); ?>' class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No SIPB</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>No Telp</th>
                  <th>No HP</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    // print_r($row);
                      if(isset($row)){
                        $no=1;
                        foreach($row as $a){
                          $url="master/bidan_detail_form/$a->id_bidan";
                          $url1="master/bidan_update_form/$a->id_bidan";
                          $url2="master/bidan_delete_form/$a->id_bidan";
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->no_sipb."</td>"
                              .  "<td >".$a->nama."</td>"
                              .  "<td >".$a->alamat_domisili."</td>"
                              .  "<td >".$a->tempat_lahir.", ".mediumdate_indo($a->tgl_lahir)."</td>"
                              .  "<td >".$a->tlp."</td>"
                              .  "<td >".$a->hp."</td>"
                              .  "<td >"
                              .  "<a href='".site_url($url)."' class='btn bg-purple margin'> <i class='fa fa-book'></i> Detail </a>&nbsp;"
                              .  "<a href='".site_url($url1)."' class='btn btn-warning margin'> <i class='fa fa-edit'></i> Edit </a>&nbsp;"
                              .  "<a href='".site_url($url2)."' class='btn btn-danger margin'> <i class='fa fa-remove'></i> Hapus </a>"
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
