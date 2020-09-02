<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admin EZTrainings</title>
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <!-- Custom Stylesheet -->
  <link href="<?php echo base_url('assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css'); ?>" rel="stylesheet">
  <!-- Page plugins css -->
  <link href="<?php echo base_url('assets/admin/plugins/clockpicker/dist/jquery-clockpicker.min.css'); ?>" rel="stylesheet">
  <!-- Color picker plugins css -->
  <link href="<?php echo base_url('assets/admin/plugins/jquery-asColorPicker-master/css/asColorPicker.css'); ?>" rel="stylesheet">
  <!-- Date picker plugins css -->
  <link href="<?php echo base_url('assets/admin/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
  <!-- Daterange picker plugins css -->
  <link href="<?php echo base_url('assets/admin/plugins/timepicker/bootstrap-timepicker.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/css/sweetalert.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/css/custom.css'); ?>" rel="stylesheet">
</head>
<body>
  <div id="preloader">
    <div class="loader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
      </svg>
    </div>
  </div>
  <div id="main-wrapper">
    <div class="nav-header bg-orange-primary">
      <div class="brand-logo">
        <a href="<?php echo base_url(''); ?>">
          <b class="logo-abbr"><img src="images/favicon.ico" alt=""> </b>
          <span class="logo-compact">
            Admin Dashboard
          </span>
          <span class="brand-title">
            Admin Dashboard
          </span>
        </a>
      </div>
    </div>
    <div class="header">
      <div class="header-content clearfix">

        <div class="nav-control">
          <div class="hamburger">
            <span class="toggle-icon"><i class="icon-menu"></i></span>
          </div>
        </div>
        <div class="header-left">

        </div>
        <div class="header-right">
          <ul class="clearfix">

            <li class="icons dropdown">
              <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                <span class="activity active"></span>
                <img src="<?php echo base_url('assets/images/admin.png'); ?>" height="40" width="40" alt=""><?php // TODO:add admin image ?>
              </div>
              <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                <div class="dropdown-content-body">
                  <ul>
                    <li><a href="<?php echo base_url('logout') ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="nk-sidebar bg-black-primary">
      <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
          <li class="nav-label">Dashboard</li>
          <li>
            <a class="has-arrow" href="<?php echo base_url('admin/dashboard')?>" aria-expanded="false">
              <i class="icon-people menu-icon"></i><span class="nav-text">user</span>
            </a>
          </li>
          <li>
            <a class="has-arrow" href="<?php echo base_url('admin/requests')?>" aria-expanded="false">
              <i class="fa fa-exchange" aria-hidden="true"></i><span class="nav-text">Requests</span>
            </a>
          </li>
          <li>
            <a class="has-arrow" href="<?php echo base_url('admin/add-comment')?>" aria-expanded="false">
              <i class="fa fa-comment"></i><span class="nav-text">Add-comment</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
