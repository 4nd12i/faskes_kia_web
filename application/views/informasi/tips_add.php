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
        <li><a href="#"><i class="fa fa-dashboard"></i> Layanan Informasi </a></li>
        <li class="active">Tips Hidup Sehat</li>
        <li class="active">Tambah</li>
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
                <h3 class="box-title">Tambah Tips Pola Hidup Sehat</h3>
              </div>
            </div>
            <!-- /.box-header -->
              <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('informasi/TipsSave'); ?>'>
                <div class="box-body">
                  <div class="form-group">
                    <label>ID Tips
                    </label>
                    <input type="text" class="form-control" name="idtips" value="<?php
                    if($idtips==0){
                      echo '1';
                    }else{
                      echo $idtips;
                    }
                    ?>" readonly required>
                  </div>
                  <div class="form-group">
                    <label>Judul Tips Hidup Sehat
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="judul" required>
                  </div>
                  <div class="form-group">
                    <label>Sampul Foto
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="file" class="form-control" name="fotosampul">
                  </div>
                  <div class="form-group">
                    <label>Isi Artikel
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="isi" rows="10" cols="80">
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Penulis
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="penulis" value="<?php $nama=$this->session->userdata('nama'); echo $nama; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Posting
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_posting" value="<?php echo date('Y/m/d') ?>" required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('informasi/semuaTips'); ?>" class="btn btn-default pull-left">Close</a>
                <button type="submit" class="btn btn-success  pull-right" name="simpan" id="simpan"><i class="fa fa-plus"></i> Simpan </button>
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
