<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Data Pasien Anak</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href='<?php echo site_url('master/pasien_anak'); ?>'><i class="fa fa-dashboard"></i> Master Pasien Anak </a></li>
        <li class="active">Edit Pasien Anak</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Formulir -> Edit Pasien Anak</h3>
            </div>
            <!-- /.box-header -->
            <form method='post' name='form_utama' action='<?php echo site_url('master/pasienanak_update'); ?>'>
              <div class="box-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="id_pasien_anak" value='<?php echo $detail->id_pasien_anak; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama"  value='<?php echo $detail->nama; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="tempat_lahir"  value='<?php echo $detail->tempat_lahir; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir"  value='<?php echo $detail->tgl_lahir; ?>' required>
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin
                    </label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin"  value='<?php echo $detail->jenis_kelamin; ?>' style="width: 100%;" >
                      <?php if($detail->jenis_kelamin=='L'):?>
                        <option value="L" selected="selected">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                      <?php elseif($detail->jenis_kelamin=='P'):?>
                        <option value="L">Laki - Laki</option>
                        <option value="P" selected="selected">Perempuan</option>
                      <?php else:?>
                        <option value=""></option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                     <?php endif;?>
                     </select>
                  </div>

                  <!-- <div class="form-group">
                    <label>Lokasi Praktek Bidan
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="lokasi_bidan" required>
                  </div> -->
                  <div class="form-group">
                    <h3><i class="fa fa-user margin-r-5"></i> Data Orangtua</h3>
                  </div>
                  <div class="form-group">
                    <label>Nama Ayah
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama_ayah"  value='<?php echo $detail->nama_ayah; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Nama Ibu
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <input type="text" class="form-control" name="nama_ibu"  value='<?php echo $detail->nama_ibu; ?>' required>
                  </div>
                  <div class="form-group">
                    <label>Alamat Orangtua
                      <span style="color: red;"><b>*</b></span>
                    </label>
                    <div class="box-body pad">
                        <textarea id="editor1" name="alamat_orangtua" rows="10" cols="80" required>
                             <?php echo $detail->alamat_orangtua; ?>
                        </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <h3><i class="fa fa-plus-square margin-r-5"></i> Data Medis</h3>
                  </div>
                  <!-- <div class="form-group">
                    <label>Usia
                    </label>
                    <div class="col-lg-12">
                      <div class="form-group col-xs-6">
                        <label>Tahun
                        </label>
                        <input type="number" class="form-control" name="tahun_lahir">
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Bulan
                        </label>
                        <input type="number" class="form-control" name="bulan_lahir">
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label>Kondisi Fisik Anak
                    </label>
                    <div class="col-lg-12">
                      <div class="form-group col-xs-6">
                        <label>Berat Lahir
                            <span style="color: red;"><b>(Kg)</b></span>
                        </label>
                        <input type="text" class="form-control" name="berat_lahir"  value='<?php echo $detail->berat_lahir; ?>' required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Panjang Badan
                            <span style="color: red;"><b>(Cm)</b></span>
                        </label>
                        <input type="text" class="form-control" name="panjang_badan"  value='<?php echo $detail->panjang_badan; ?>' required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Anak Ke
                    </label>
                    <input type="number" class="form-control" name="anak_ke"  value='<?php echo $detail->anak_ke; ?>' required>
                  </div>
              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('master/pasien_anak'); ?>" class="btn btn-default pull-left">Close</a>
                <button type="submit" class="btn btn-primary pull-right" name="simpan" id="simpan"><i class="fa fa-edit"></i> Update </button>
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
