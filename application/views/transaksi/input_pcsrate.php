
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formulir
        <small>Pcs Rate</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-edit"></i> Formulir</a></li>
        <li class="active">Input Pcs Rate</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- Left col -->
        <!-- <section class="col-lg-5 connectedSortable"> -->
        <section class="col-lg-12 connectedSortable">
          <!-- Box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Perhitungan Pcs Rate Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- Date -->

                <div class="form-group">
                  <label>Tanggal :</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                      <input type="text" class="form-control pull-right" name="tanggal" id="datepicker">
                  </div>
                </div>
                <!-- Date -->

                <div class="form-group">
                  <label>Nama Karyawan :</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" class="form-control" placeholder="NIK" disabled>
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" placeholder="Jabatan" disabled>
                </div>

                <div class="form-group">
                  <label>Departemen</label>
                  <input type="text" class="form-control" placeholder="Departemen" disabled>
                </div>

                <div class="form-group" style="padding-bottom:40px;">
                  <label>Bagian</label>
                  <input type="text" class="form-control" placeholder="Bagian" disabled>
                </div>

                <!-- Box -->
                <div class="box">
                  <div class="box-header">
                    <h2 class="box-title">Details Tabel Pcs Rate</h2>
                    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-add">
                      <i class="fa fa-plus"></i> Tambah
                    </button>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Nama Karyawan</th>
                        <th>NIK</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga Produk</th>
                        <th>Harga Pcs Rate</th>
                        <th>Total</th>
                        <th>Action</th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">M. Muhlasin</option>
                            <option>Sumanto</option>
                            <option>Alex Amirullah</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </td>
                        <td>16040631</td>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Emerald</option>
                            <option>Emerald Reserve Trap</option>
                            <option>Arabian</option>
                            <option>Eureka</option>
                            <option>Premio</option>
                            <option>Sapphira</option>
                            <option>Ruby</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="jumlah">
                        </td>
                        <td>106.000</td>
                        <td>1.843</td>
                        <td>
                          500.000
                        </td>
                        <td>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-edit"></i> Edit
                          </button> -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">
                            <i class="fa fa-remove"></i> Hapus
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option>M. Muhlasin</option>
                            <option selected="selected">Sumanto</option>
                            <option>Alex Amirullah</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </td>
                        <td>15120618</td>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Emerald</option>
                            <option>Emerald Reserve Trap</option>
                            <option>Arabian</option>
                            <option>Eureka</option>
                            <option>Premio</option>
                            <option>Sapphira</option>
                            <option>Ruby</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="jumlah">
                        </td>
                        <td>130.000</td>
                        <td>2.151</td>
                        <td>600.000</td>
                        <td>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-edit"></i> Edit
                          </button> -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">
                            <i class="fa fa-remove"></i> Hapus
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option>M. Muhlasin</option>
                            <option>Sumanto</option>
                            <option selected="selected">Alex Amirullah</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </td>
                        <td>16020623</td>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Emerald</option>
                            <option>Emerald Reserve Trap</option>
                            <option>Arabian</option>
                            <option>Eureka</option>
                            <option>Premio</option>
                            <option>Sapphira</option>
                            <option>Ruby</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="jumlah">
                        </td>
                        <td>106.000</td>
                        <td>1.843</td>
                        <td>700.000</td>
                        <td>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-edit"></i> Edit
                          </button> -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">
                            <i class="fa fa-remove"></i> Hapus
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option>M. Muhlasin</option>
                            <option>Sumanto</option>
                            <option>Alex Amirullah</option>
                            <option selected="selected">Faizal Tarmizi</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </td>
                        <td>18090782</td>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Emerald</option>
                            <option>Emerald Reserve Trap</option>
                            <option>Arabian</option>
                            <option>Eureka</option>
                            <option>Premio</option>
                            <option>Sapphira</option>
                            <option>Ruby</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="jumlah">
                        </td>
                        <td>306.000</td>
                        <td>7.373</td>
                        <td>550.000</td>
                        <td>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-edit"></i> Edit
                          </button> -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">
                            <i class="fa fa-remove"></i> Hapus
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option>M. Muhlasin</option>
                            <option>Sumanto</option>
                            <option>Alex Amirullah</option>
                            <option>Faizal Tarmizi</option>
                            <option selected="selected">Singgih Priambodo</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </td>
                        <td>18090783</td>
                        <td>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Emerald</option>
                            <option>Emerald Reserve Trap</option>
                            <option>Arabian</option>
                            <option>Eureka</option>
                            <option>Premio</option>
                            <option>Sapphira</option>
                            <option>Ruby</option>
                          </select>
                        </td>
                        <td>
                          <input type="text" class="form-control" name="jumlah">
                        </td>
                        <td>480.000</td>
                        <td>27.165</td>
                        <td>600.000</td>
                        <td>
                          <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            <i class="fa fa-edit"></i> Edit
                          </button> -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">
                            <i class="fa fa-remove"></i> Hapus
                          </button>
                        </td>
                      </tr>
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

                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>

                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Simpan </button>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>


    <!-- modal -->
    <div class="modal fade" id="modal-add">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Produk</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>ID
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="idproduk" id="idproduk" required disabled>
            </div>
            <div class="form-group">
              <label>Nama Produk
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="namaproduk" id="namaproduk" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Simpan </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Produk</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>ID
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="idproduk" id="idproduk" required disabled>
            </div>
            <div class="form-group">
              <label>Nama Produk
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="namaproduk" id="namaproduk" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i> Update </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-hapus">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-remove"></i> Hapus Produk</h4>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"> Cancel </button>
            <button type="button" class="btn btn-primary" data-dismiss="modal"> Yes </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
