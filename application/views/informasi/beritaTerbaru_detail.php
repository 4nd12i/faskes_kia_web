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
        <li><a href='<?php echo site_url('master/bidan'); ?>'><i class="fa fa-dashboard"></i> Master Bidan </a></li>
        <li class="active">Edit Bidan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <div class="col-md-3">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail bidan</h3>
                </div>
              </div>
              <div class="col-md-9">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama'>
              <div class="box-body">

                <div class="col-md-3">
                  <!-- Profile Image -->
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="../../../assets/template/back/dist/img/user4-128x128.jpg" alt="User profile picture">

                      <h3 class="profile-username text-center"><?php echo $detail->nama; ?></h3>

                      <p class="text-muted text-center"><?php echo $detail->no_ktp; ?></p>

                      <a href='<?php echo site_url('master/bidan_update_form/'.$detail->id_bidan); ?>' class="btn btn-primary btn-block"><b>Edit Foto Profile</b></a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-md-9">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_bidan" value='<?php echo $detail->id_bidan; ?>' required>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>No. SIPB</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->no_sipb; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>No. KTP</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->no_ktp; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Nama Lengkap</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->nama; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Tempat Lahir</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->tempat_lahir; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo longdate_indo($detail->tgl_lahir); ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>No. Telp</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->tlp; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>No. HP</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->hp; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Agama</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->agama; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Golongan Darah</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->gol_darah; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-map-marker margin-r-5"></i> Data Lokasi</h3>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Alamat Sesuai KTP</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->alamat_ktp; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Alamat Domisili</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->alamat_domisili; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Lokasi Praktek Bidan</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>

                    <div class="col-xs-12">
                      <p class="text-muted">
                        <?php echo $map['js'];?>
                        <?php echo $map['html'];?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-book margin-r-5"></i> Data Pendidikan</h3>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Pendidikan Terakhir</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->pendidikan_terakhir; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Nama Sekolah</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->nama_sekolah; ?>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-3">
                      <label>Jurusan</label>
                    </div>
                    <div class="col-xs-1">
                      <label>:</label>
                    </div>
                    <div class="col-xs-8">
                      <p class="text-muted">
                        <?php echo $detail->jurusan; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/bidan'); ?>" class="btn btn-default pull-right">Close</a>
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
