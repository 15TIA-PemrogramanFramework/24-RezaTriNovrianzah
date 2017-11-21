<?php 
$username = $this->session->userdata('username');
$nama_karyawan = $this->session->userdata('nama_karyawan'); 
$jabatan = $this->session->userdata('jabatan');
?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Rental Mobil RIE3</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url('assets/') ?>build2/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $this->session->userdata('nama_karyawan');  ?></h2><br/>
              <?php echo $this->session->userdata('jabatan');  ?><br/>
              <b><?php echo tanggal() ?></b>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-users"></i> Pelanggan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('Pelanggan'); ?>">Lihat Data</a></li>
                    <li><a href="<?php echo site_url('Pelanggan/tambah_Pelanggan'); ?>">Tambah Data</a></li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Karyawan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('Karyawan'); ?>">Lihat Data</a></li>
                    <?php $jabatan = $this->session->userdata('jabatan'); 
                    if($jabatan == 'Admin'){ ?>
                    <li><a href="<?php echo site_url('Karyawan/tambah_Karyawan'); ?>">Tambah Data</a></li>
                    <?php } ?> 
                  </ul>
                </li>
                <li><a><i class="fa fa-car"></i> Mobil <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('Mobil'); ?>">Lihat Data</a></li>
                    <?php $jabatan = $this->session->userdata('jabatan'); 
                    if($jabatan == 'Admin'){ ?>
                    <li><a href="<?php echo site_url('Mobil/tambah_mobil'); ?>">Tambah Data</a></li>
                    <?php } ?> 
                  </ul>
                </li>
                <li><a><i class="fa fa-mail-reply"></i> Rental <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('rental'); ?>">Lihat Data</a></li>
                    <li><a href="<?php echo site_url('rental/tambah_rental'); ?>">Tambah Data</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-mail-forward"></i> Pengembalian <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('pengembalian'); ?>">Lihat Data</a></li>
                    <li><a href="<?php echo site_url('pengembalian/tambah_pengembalian'); ?>">Tambah Data</a></li>
                    
                  </ul>
                </li>
                
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url('assets/') ?>build2/images/img.jpg" alt=""><?php echo $this->session->userdata('username');  ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                  <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
        <!-- /top navigation -->