<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Layanan Informasi
        <small>Tips Pola Hidup Sehat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Layanan Informasi </a></li>
        <li class="active">Tips Hidup Sehat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Tips Pola Hidup Sehat</h3>
              <a href='<?php echo site_url('informasi/tambahTips'); ?>' class="btn btn-success pull-right">
                <i class="fa fa-plus"></i> Tambah
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Foto Sampul</th>
                  <th>Judul Berita</th>
                  <th>Tanggal Tayang</th>
                  <th>Penulis</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    // print_r($row);
                      if(isset($row)){
                        $no=1;
                        foreach($row as $a){
                          $url="informasi/detailTips/$a->id_tips";
                          $url1="informasi/editTips/$a->id_tips";
                          $url2="informasi/hapusTips/$a->id_tips";
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->fotosampul."</td>"
                              .  "<td >".$a->judul."</td>"
                              .  "<td >".mediumdate_indo($a->tanggal_posting)."</td>"
                              .  "<td >".$a->penulis."</td>"
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
