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
        <li><a href='<?php echo site_url('master/user'); ?>'><i class="fa fa-dashboard"></i> Master User </a></li>
        <li class="active">Hapus User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Konfirmasi hapus data</h3>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('master/user_delete'); ?>'>
              <div class="box-body">
                <div class="form-group">
                  <p>Apakah anda yakin ingin menghapus data user dengan username : <b><?php echo $detail->username; ?></b>, nama : <b><?php echo $detail->nama; ?></b>?</p>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="username" value='<?php echo $detail->username; ?>' required>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/user'); ?>" class="btn btn-default pull-left">Close</a>
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
