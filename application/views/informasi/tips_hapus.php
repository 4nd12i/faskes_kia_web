<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Layanan Informasi
        <small>Hapus Berita Terbaru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Layanan Informasi </a></li>
        <li class="active">Hapus Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <div class="box-header with-border">
                <h3 class="box-title"><b>Konfirmasi Hapus Berita</b></h3>
              </div>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('informasi/hapusBeritaTerbaru'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <p>Apakah anda yakin ingin menghapus berita "<b><?php echo $detail->judul; ?></b>" ?</p>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="id_berita" value='<?php echo $detail->id_berita; ?>' required>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/bidan'); ?>" class="btn btn-default pull-left">Close</a>
                <button type="submit" class="btn btn-danger pull-right" name="simpan" id="simpan"><i class="fa fa-remove"></i> Hapus </button>
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
