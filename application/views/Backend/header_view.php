<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?=$title;?> | P3M PENS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('public/plugins/font-awesome-4.3.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=base_url('public/plugins/ionicons-2.0.1/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=base_url('public/plugins/morris/morris.css')?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <!-- <link href="<?=base_url('public/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?=base_url('public/plugins/daterangepicker/daterangepicker-bs3.css')?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?=base_url('public/plugins/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?=base_url('public/plugins/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/datatables/dataTables.responsive.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('public/dist/css/AdminLTE.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('public/dist/css/skins/_all-skins.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- jQueryUI -->
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.structure.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.theme.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link href="<?=base_url('public/plugins/select2/dist/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?=base_url('public/dist/css/select2v4-bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('public/dist/css/custom.css');?>" rel="stylesheet" type="text/css" />

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="<?=base_url('public/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
    <!-- jQueryUI -->
    <script src="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.js');?>" type="text/javascript"></script>
    <!-- Moment -->
    <script src="<?=base_url('public/plugins/moment/min/moment.min.js');?>" type="text/javascript" ></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?=base_url('public/plugins/fastclick/fastclick.min.js');?>" type="text/javascript"></script>
    <!-- Datatables -->
    <script src="<?=base_url('public/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.tableTools.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/datatables/dataTables.responsive.min.js');?>" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.date.extensions.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/input-mask/jquery.inputmask.extensions.js');?>" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?=base_url('public/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?=base_url('public/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url('public/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('public/plugins/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?=base_url('public/plugins/chartjs/Chart.min.js');?>" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="<?=base_url('public/plugins/ckeditor/ckeditor.js');?>"></script>
    <!-- Sparkline -->
    <script src="<?=base_url('public/plugins/sparkline/jquery.sparkline.min.js');?>" type="text/javascript"></script>
    <!-- select2 -->
    <script src="<?=base_url('public/plugins/select2/dist/js/select2.full.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('public/plugins/select2/dist/js/i18n/id.js');?>" type="text/javascript"></script>
    <!-- AngularJS -->
    <!-- <script src="<?=base_url('public/plugins/angular/angular.min.js');?>" type="text/javascript"></script> -->
    <!-- Misc -->
    <script src="<?=base_url('public/dist/js/misc.js');?>" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            //var parent = "#parent-" + window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
            //var child = "#child-" + window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
            var parent = "<?=$aktif['parent'];?>";
            var child = "<?=$aktif['child'];?>";
            var site_url = "<?=site_url()?>";

            //alert(parent);
            //alert(child);
            $(parent).addClass("active");
            $(child).addClass("active");
        });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
    $roleid = $this->user_model->get_roleid();
    $skin = 'blue';
    if($roleid == 70) {
      $skin = "black";
    } else if($roleid == 72) {
      $skin = "black-light";
    } else {
      $skin = $jurusan;
    }

  ?> 
  <body class="sidebar-mini skin-<?=$skin?> <?=$web->web_layout;?>">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>3M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>P3M</b>PENS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <?php if($boxnotif > 0) { ?><span class="label label-warning" id="boxlognotif"><?php echo $boxnotif; ?></span><?php } ?>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">
                  <?php 
                  if($boxnotif > 0) {
                    echo "Anda punya " . $boxnotif . " notifikasi yang belum dibaca"; 
                  } else {
                    echo "Tidak ada Notifikasi baru";
                  }

                  ?> 
                  </li>
                  <?php if($boxnotif > 0) { ?>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <?php if(!empty($daftarnotif)) { foreach ($daftarnotif->result() as $key) { ?>
                      <li>
                        <a href="#">
                          <span class="label label-<?=$key->tipenotif_nama?>"><?=$key->tipenotif_teks?></span> <?php echo substr($key->notif_isi, 0, 30) . "..."; ?>
                        </a>
                      </li>
                      <?php } } ?>
                    </ul>
                  </li>
                  <?php } ?>
                  <li class="footer"><a href="<?=site_url('dashboard/notifikasi')?>">Lihat Semua</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url();?>/public/avatar/<?=$this->user_model->get_avatar();?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?=$this->user_model->get_username();?> <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url();?>/public/avatar/<?=$this->user_model->get_avatar();?>" class="img-circle" alt="User Image" />
                    <p>
                      <?=ucfirst($this->user_model->get_username());?> - <?=ucfirst($this->user_model->get_user_role());?>
                      <small><?=$this->user_model->get_email();?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i>&nbsp; Profil</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=site_url('dashboard/logout');?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>&nbsp; Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button 
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
              -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url();?>/public/avatar/<?=$this->user_model->get_avatar();?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?=$this->user_model->get_username();?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php
                if(!empty($menu)){
                    echo $menu;
                }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?=$title;?>
            <small><?php foreach ($menudesk as $key) { echo $key->akses_deskripsi; }; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?=$title;?></li>
          </ol>
        </section>