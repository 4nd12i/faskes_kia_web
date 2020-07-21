riwayat<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets/template/back/"; ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php $nama=$this->session->userdata('nama'); echo $nama; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo site_url("home"); ?>"><i class="fa fa-circle-o"></i> Beranda </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('master/bidan'); ?>"><i class="fa fa-circle-o"></i> Master Bidan</a></li>
          <li><a href="<?php echo site_url('master/pasien_ibu'); ?>"><i class="fa fa-circle-o"></i> Master Pasien Ibu</a></li>
          <li><a href="<?php echo site_url('master/pasien_anak'); ?>"><i class="fa fa-circle-o"></i> Master Pasien Anak</a></li>
          <li><a href="<?php echo site_url('master/user'); ?>"><i class="fa fa-circle-o"></i> Master User</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Aktifitas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('transaksi/catatan_pasienibu_add'); ?>"><i class="fa fa-circle-o"></i> Layanan Kesehatan Ibu</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_pasienanak_add'); ?>"><i class="fa fa-circle-o"></i> Layanan Imunisasi</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_persalinan_add'); ?>"><i class="fa fa-circle-o"></i> Layanan Persalinan</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_programkb_add'); ?>"><i class="fa fa-circle-o"></i> Layanan Program KB</a></li>
          <hr/>
          <li><a href="<?php echo site_url('transaksi/catatan_pasienibu'); ?>"><i class="fa fa-circle-o"></i> Catatan Kesehatan Ibu</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_pasienanak'); ?>"><i class="fa fa-circle-o"></i> Catatan Kesehatan Anak</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_persalinan'); ?>"><i class="fa fa-circle-o"></i> Catatan Persalinan</a></li>
          <li><a href="<?php echo site_url('transaksi/catatan_programkb'); ?>"><i class="fa fa-circle-o"></i> Catatan Program KB</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Riwayat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('riwayat/riwayatpasienibu'); ?>"><i class="fa fa-circle-o"></i> Riwayat Kesehatan Ibu</a></li>
          <li><a href="<?php echo site_url('riwayat/riwayatpasienanak'); ?>"><i class="fa fa-circle-o"></i> Riwayat Kesehatan Anak</a></li>
          <li><a href="<?php echo site_url('riwayat/riwayatpersalinan'); ?>"><i class="fa fa-circle-o"></i> Riwayat Persalinan</a></li>
          <li><a href="<?php echo site_url('riwayat/riwayatprogramkb'); ?>"><i class="fa fa-circle-o"></i> Riwayat Program KB</a></li>
        </ul>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Laporan Kesehatan Ibu</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Laporan Kesehatan Anak</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Laporan Persalinan</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Laporan Program KB</a></li>
        </ul>
      </li> -->
      <li>
        <a href="<?php echo site_url('pengaturan'); ?>">
          <i class="fa fa-gear"></i> <span>Pengaturan</span>
        </a>
      </li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="<?php echo base_url()."assets/template/back/"; ?>pages/calendar.html">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url()."assets/template/back/"; ?>pages/mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li> -->
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="<?php echo base_url()."assets/template/back/"; ?>pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li> -->
      <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
