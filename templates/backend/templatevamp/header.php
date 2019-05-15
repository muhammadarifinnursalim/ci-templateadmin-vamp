<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=title();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>font-awesome.css" rel="stylesheet">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>style.css" rel="stylesheet">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>pages/dashboard.css" rel="stylesheet">
<script src="<?php echo get_template_directory(dirname(__FILE__), 'js/ckeditor') ;?>/ckeditor.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Bootstrap Admin Template </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Menu Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?=set_url('setting_akun');?>">Setting Akun</a></li>
              <li><a href="<?=set_url('logout');?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="<?=is_active_page_print('dashboard','active');?>"><a href="<?=set_url('dashboard');?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="dropdown <?=is_active_page_print('artikel','active');?>"><a href="<?=set_url('artikel/index');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i><span>Artikel</span> <b class="caret"></b></a> 
          <ul class="dropdown-menu">
            <li><a href="<?=set_url('artikel');?>">Daftar Artikel</a></li>
            <li><a href="<?=set_url('artikel#tambah');?>">Tambah Artikel</a></li>
            <li><a href="<?=set_url('artikel/kategori');?>">Kategori</a></li>
          </ul>
        </li> 
        <li class="dropdown <?=is_active_page_print('user','active');?>"><a href="<?=set_url('user/index');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><span>Sabita</span> <b class="caret"></b></a> 
          <ul class="dropdown-menu">
            <li><a href="<?=set_url('user');?>">Daftar Semua User</a></li>
            <li><a href="<?=set_url('user#tambah');?>">Tambah User</a></li>
          </ul>
        </li>        
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->