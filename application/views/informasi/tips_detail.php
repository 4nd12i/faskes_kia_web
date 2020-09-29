<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Layanan Informasi
        <small>Update Tips Pola Hidup Sehat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Layanan Informasi </a></li>
        <li class="active">Tips Hidup Sehat</li>
        <li class="active">Detail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <div class="col-md-12">
                <div class="box-header with-border">
                  <h2><b><?php echo $detail->judul?></b></h2>
                </div>
                <div>
                  <small>Dipublikasikan pada tanggal : <?php echo longdate_indo($detail->tanggal_posting)?></small></br>
                  <small>Ditulis oleh, <?php echo $detail->penulis?></small>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama'>
              <div class="box-body">
                <div class="col-md-12">
                  <img src="<?php echo base_url()."assets/template/back/"; ?>dist/img/photo4.jpg" style="width:1040px;"/>

                  <div class="form-group">
                    <p><?php echo $detail->isi?></p>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('informasi/semuaTips'); ?>" class="btn btn-default pull-right">Close</a>
              </div>
            </form>
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
