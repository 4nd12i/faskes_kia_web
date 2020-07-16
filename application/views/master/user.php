<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/user'); ?>'><i class="fa fa-dashboard"></i> Master Data </a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Data -> User</h3>
              <a href='<?php echo site_url('master/user_add_form'); ?>' class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Hak Akses</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    // print_r($row);
                      if(isset($row)){
                        $no=1;
                        foreach($row as $a){
                          $url="master/user_update_form/$a->username";
                          $url1="master/user_delete_form/$a->username";
                          $url2="master/user_bidan_detail_form/$a->id_bidan";
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->username."</td>"
                              .  "<td >".$a->nik."</td>"
                              .  "<td >".$a->nama."</td>"
                              .  "<td >".$a->hak."</td>"
                              .  "<td >"
                              .  "<a href='".site_url($url2)."' class='btn bg-purple margin'> <i class='fa fa-book'></i> Detail </a>&nbsp;"
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
