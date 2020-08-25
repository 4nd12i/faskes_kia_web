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

  function getNama(){
    var id = document.form_utama.nik.value;
    console.log(id);
    $.ajax({
        type:"POST",
        data: "id="+id,
        url:"<?php echo site_url('user/isiKolomNama'); ?>",
        success:function(data){
          // console.log(data);
          $('#namadiv').html(data);
        }
      });
  }

  function getNik(id){
    console.log(id);
  }

  function hapus(id){
    // alert("tes");
    console.log(id);
		$.ajax({
			type:"POST",
			url:"<?php echo site_url('user/pengguna_hapus'); ?>",
			data: "id="+id,
			error: function(){
			    alert('Hapus gagal!');
			},
			success:function(msg){
			    //smoke.alert('Data terhapus!', {ok:"Ok"});
                <?php
                $urlHapus="user";
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
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master User </a></li>
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
              <h3 class="box-title">Semua Pengguna</h3>
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
                  <th>Username</th>
                  <th>NIK</th>
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
                          $url="user/$a->USERNAME";
                          echo"<tr>"
                              .  "<td>".$no."</td>"
                              .  "<td >".$a->USERNAME."</td>"
                              .  "<td >".$a->NIK."</td>"
                              .  "<td >".$a->HAK."</td>"
                              .  "<td >"
                              .  "<a href='". anchor($a->USERNAME) ."' type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-edit'> <i class='fa fa-edit'></i> Edit </a>&nbsp;"
                              .  "<a href='javascript: hapus(\"$a->USERNAME\")' type='button' class='btn btn-danger'> <i class='fa fa-remove'></i> Hapus </a>"
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
          <form method='post' name='form_utama' onSubmit='return validasi();' action='<?php echo site_url('user/pengguna_add'); ?>'>
            <div class="modal-body">
              <div class="form-group">
                <label>NIK
                  <span style="color: red;"><b>*</b></span>
                </label>
                <select class="form-control select2" name="nik" id="nik" data-placeholder="Pilih NIK" onchange="javascript:getNama();" style="width: 100%;">
                  <option value=""></option>
                  <?php
                    foreach($karyawan as $k){
                      echo "<option value='$k->nik'>".$k->nik."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group" id="namadiv">
                <label>Nama
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="nama" id="nama" readonly='readonly'>
              </div>

              <div class="form-group">
                <label>Username
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="username" id="username" required>
              </div>
              <div class="form-group has-feedback">
                <label>Password
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="password" class="form-control" name="password1" id="password1" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <label>Retype Password
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="password" class="form-control" name="password2" id="password2" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group">
                <label>Hak Akses</label>
                <select class="form-control select2" name="hak" id="hak" style="width: 100%;">
                  <option value='operator' selected="selected">Operator</option>
                  <option value='staff'>Staff</option>
                  <option value='dh'>Department Head</option>
                  <option value='manajer'>Manager</option>
                  <option value='admin'>Administrator</option>
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
          <form method='post' name='form_edit' onSubmit='return validasi();' action='<?php echo site_url('user/pengguna_edit'); ?>'>
            <div class="modal-body">
              <div class="form-group">
                <label>NIK
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="nik" id="nik" value=".<?php echo $nik; ?>." readonly required>
              </div>
              <div class="form-group">
                <label>Username
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="text" class="form-control" name="username" id="username" value=".<?php echo $username; ?>." required>
              </div>
              <div class="form-group has-feedback">
                <label>Password
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="password" class="form-control" name="password1" id="password1" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <label>Retype Password
                  <span style="color: red;"><b>*</b></span>
                </label>
                <input type="password" class="form-control" name="password2" id="password2" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group">
                <label>Hak Akses</label>
                <select class="form-control select2" name="hak" id="hak" value=".<?php echo $hak; ?>." style="width: 100%;">
                  <option value='operator' selected="selected">Operator</option>
                  <option value='staff'>Staff</option>
                  <option value='dh'>Department Head</option>
                  <option value='manajer'>Manager</option>
                  <option value='admin'>Administrator</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal" name="cancel">Close</button>
              <button type="submit" class="btn btn-primary" name="update" id="update"><i class="fa fa-edit"></i> Update </button>
            </div>
          </form>
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
            <p>Apakah anda yakin ingin menghapus username ?</p>
          </div>
          <div class="modal-footer">
            <?php
                echo "<a href='' class='btn btn-default pull-left' data-dismiss='modal'> Cancel </a>"
                  .  "<a href='' class='btn btn-primary' data-dismiss='modal'> Yes </a>"
                ;
             ?>
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
