
<script>

  function validasi(){
    var nik = document.getElementById('nik');

    if (harusDiisi(nik, "nik belum diisi")) {
        return true;
    };
    return false;
  }

  function harusDiisi(att, msg){
      if (att.value.length == 0) {
          alert(msg);
          att.focus();
          return false;
      }

      return true;
  }

  // function getBagian(){
  //   var id = document.form_utama.nik.value;
  //   console.log(id);
  //   $.ajax({
  //       type:"POST",
  //       data: "id="+id,
  //       url:"<?php echo site_url('user/isiKolomNama'); ?>",
  //       success:function(data){
  //         // console.log(data);
  //         $('#namadiv').html(data);
  //       }
  //     });
  // }

  function getNik(id){
    console.log(id);
  }

  function hapus(id){
    // alert("tes");
    console.log(id);
		$.ajax({
			type:"POST",
			url:"<?php echo site_url('produk/hapusproduk'); ?>",
			data: "id="+id,
			error: function(){
			    alert('Hapus gagal!');
			},
			success:function(msg){
			    //smoke.alert('Data terhapus!', {ok:"Ok"});
                <?php
                $urlHapus="produk";
                ?>
			    document.location="<?php echo site_url($urlHapus); ?>";
			}
		});
  }
</script>

<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master
        <small>Produk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master Produk </a></li>
        <li class="active">Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Produk</h3>
              <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-add">
                <i class="fa fa-plus"></i> Tambah
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Produk</th>
                  <th>Nama Produk</th>
                  <th>Bagian</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                    // print_r($row);
                      if(isset($row)){
                        $no=1;
                        foreach($row as $a){
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->kodeproduk."</td>"
                              .  "<td >".$a->namaproduk."</td>"
                              .  "<td >".$a->NAMA_BAG."</td>"
                              .  "<td >"
                              .  "<a href='". anchor($a->kodeproduk) ."' type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-edit'> <i class='fa fa-edit'></i> Edit </a>&nbsp;"
                              .  "<a href='javascript: hapus(\"$a->kodeproduk\")' type='button' class='btn btn-danger'> <i class='fa fa-remove'></i> Hapus </a>"
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


    <!-- modal -->
    <div class="modal fade" id="modal-add">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Produk</h4>
          </div>
          <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('produk/tambahproduk'); ?>'>
            <div class="modal-body">
              <div class="form-group">
                <label>Kode Produk
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="kodeproduk" id="kodeproduk" maxlength="5" required>
              </div>
              <div class="form-group">
                <label>Nama Produk
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="namaproduk" id="namaproduk" required>
              </div>
              <div class="form-group">
                <label>Bagian
                  <span style="color: red;"><b>*</b></span>
                </label>
                <select class="form-control select2" name="idbag" id="idbag" data-placeholder="Pilih Bagian" style="width: 100%;">
                  <option value=""></option>
                  <?php
                    foreach($bag as $b){
                      echo "<option value='$b->id_bag'>".$b->nama_bag."</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-default pull-left" data-dismiss="modal" name="cancel">Close</button>
              <button type="submit" class="btn btn-success" name="simpan" id="simpan"><i class="fa fa-plus"></i> Simpan </button>
            </div>
          </form>
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
              <label>Kode Produk
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="kodeproduk" id="kodeproduk" required>
            </div>
            <div class="form-group">
              <label>Nama Produk
                <span style="color: red;"><b>*</b></span>
              </label>
              <input type="text" class="form-control" name="namaproduk" id="namaproduk" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" name="cancel">Close</button>
            <button type="submit" class="btn btn-primary" name="update" id="update"><i class="fa fa-edit"></i> Update </button>
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
