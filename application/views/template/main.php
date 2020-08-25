<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <body class="hold-transition skin-blue sidebar-mini">

      <?php $this->load->view('template/head') ?>
      <?php $this->load->view('template/header'); ?>
      <?php $this->load->view('template/leftbar') ?>
      <?php $this->load->view($main_content); ?>
      <?php $this->load->view('template/footer'); ?>



    </body>
</html>
