<?php
	// if (condition) {
	// 	# code...
	// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>/img/favicon.ico">

    <title>News Blog | Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>/css/dashboard.css" rel="stylesheet">
    <style>
		.box{
			box-shadow:
			  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
			  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
			  0 12.5px 10px rgba(0, 0, 0, 0.06),
			  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
			  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
			  0 100px 80px rgba(0, 0, 0, 0.12)
			;

			  
			  
			  min-height: 200px;
			  width: 100%;
			  margin: 100px auto;
			  background: white;
			  border-radius: 5px;
		}
		.myBox{
			background: #EEF2F7;
		}
	</style>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">NEWS BLOG</a>
      <input style="width: 70% !important;" class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <?php if(session()->get('isLoggedIn')): ?>
      	<li class="nav-item dropdown">
        	<a style="margin-top: -25px; color: #fff;" class="nav-link dropdown-toggle" href="#" id="myDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><?= 'Howdy ' . session()->get('firstname') ?></a>
        	<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="myDropdown" style="margin-left: -35px; padding-left: 30px; padding-right: 30px;">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>">Home</a></li>
          		<li><a class="dropdown-item" href="<?php echo base_url() ?>/users/logout">Logout</a></li>
        	</ul>
        </li>
  	  <?php endif; ?>
      <!-- <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a style="color: #fff;" class="nav-link" href="#">Logout</a>
        </li>
      </ul> -->
    </nav>

    <!-- <?php $uri = session('uri'); ?> -->

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="overflow-x: hidden; overflow-y: hidden;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>/Dashboard">
                  <span data-feather="home"></span>
                  Dashboard <!-- <span class="sr-only">(current)</span> -->
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>/Profile">
                  <span data-feather="user"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() ?>/Posts">
                  <span data-feather="list"></span>
                  Posts
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Other Section</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  First Item
                </a>
              </li>
            </ul>
          </div>
          <div class="row">
	    	<div class="col-sm-12">
	    		<p class="text-center">&copy; <?= date('Y') ?> &#9679; <a style="text-decoration: none; color: #000;" href="<?php echo base_url() ?>"><b>NewsBlog</b></a> &#9679; All rights reserved.</p>
	    	</div>
	      </div>
        </nav>