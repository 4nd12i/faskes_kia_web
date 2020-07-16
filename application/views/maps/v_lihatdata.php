<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/dt/media/css/jquery.dataTables.min.css">

    <script type= 'text/javascript' src="<?php echo base_url();?>aset/dt/media/js/jquery.js"></script>
    <script type= 'text/javascript' src="<?php echo base_url();?>aset/dt/media/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/bt/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>aset/bt/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

<style type="text/css">
 body {
font-family: 'Raleway', sans-serif;
}

</style>
<script src="<?php echo base_url();?>aset/bt/js/bootstrap.js"></script>
 <title></title>
</head>
<body>
<div class="container">
<div class="jumbotron">
  <h1>TUGAS 6 INDIVIDU</h1>
  <p>Huzaini 130411100105</p>
  <?php
   echo $kemapnya;
  ?>
</div>

<table <table class="table table-striped table-advance table-hover" border="1" cellpadding="4" cellspacing="0" >
 <thead>
  <tr>
   <td >Nama Lokasi</td>
   <td>Longitude</td>
   <td>Latitude</td>
   <td>Keterangan</td>

  </tr>
 </thead>
 <tbody>
 <?php
 foreach ($datanya as $key ) {  //mengambil data
 ?>
  <tr>
   <td><?php echo $key->nama_lokasi ?></td>
   <td><?php echo $key->long ?></td>
   <td><?php echo $key->lat ?></td>
   <td><?php echo $key->keterangan ?></td>

  </tr>
 <?php
        }
 ?>
 </tbody>
</table>

</div>
</body>
</html>
