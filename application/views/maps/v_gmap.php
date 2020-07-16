<html>
<head>
 <title></title>
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
 <?php echo $map['js']; ?>
</head>
<body>
<div class="container">
<div class="jumbotron">
  <button type="button" class="btn btn-success"><a href="<?php echo site_url('gmaps/lihatdata'); ?>">Lihat Data</a></button>

</div>
 <?php echo $map['html']; ?>
</div>

</body>
</html>
