<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gedhang admin dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url().'assets/admin/css/bootstrap.css';?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'assets/admin/css/style.css';?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'assets/admin/css/font-awesome.css';?>" rel="stylesheet"> 
<link href='<?php echo base_url().'assets/admin/css/SidebarNav.min.css';?>' media='all' rel='stylesheet' type='text/css'/>
<script src="<?php echo base_url().'assets/admin/js/jquery-1.11.1.min.js';?>"></script>
<script src="<?php echo base_url().'assets/admin/js/modernizr.custom.js';?>"></script>
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<script src="<?php echo base_url().'assets/admin/js/Chart.js';?>"></script>
<script src="<?php echo base_url().'assets/admin/js/metisMenu.min.js';?>"></script>
<script src="<?php echo base_url().'assets/admin/js/custom.js';?>"></script>
<link href="<?php echo base_url().'assets/admin/css/custom.css';?>" rel="stylesheet">
<style>#chartdiv {width: 100%;height: 295px;}</style>
<script src="<?php echo base_url().'assets/admin/js/pie-chart.js';?>" type="text/javascript"></script>
<link href="<?php echo base_url().'assets/admin/css/owl.carousel.css';?>" rel="stylesheet">
<script src="<?php echo base_url().'assets/admin/js/owl.carousel.js';?>"></script>


</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php echo base_url().'admin';?>"><span class="fa fa-area-chart"></span>Gedhang<span class="dashboard_text">Admin dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Media</span>
                <i class="fa fa-angle-left pull-right"></i>
                <small class="label label-primary pull-right"><?php echo $this->db->count_all('news');?></small>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?= site_url()."admin/compose";?>"><i class="fa fa-angle-right"></i>Compose</a></li>
                  <li><a href="<?= site_url()."admin/article";?>"><i class="fa fa-angle-right"></i>Articles</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Comments</span>
                <i class="fa fa-angle-left pull-right"></i>
                <small class="label label-info1 pull-right">8</small>
                <small class="label label-primary pull-right"><?php echo $this->db->count_all('comments');?></small>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?= site_url()."admin/comment";?>">
                  	<i class="fa fa-angle-right"></i>
                  	<small class="label label-primary pull-right"><?php echo $this->db->count_all('comments');?></small>Unread Comments</a>
                  </li>
                  <li>
                  	<a href="validation.html">
	                  	<i class="fa fa-angle-right"></i>
	                  	<small class="label label-info1 pull-right">8</small>Readed Comments
                  	</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>

            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $this->db->count_all('comments');?></span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have <?php echo $this->db->count_all('comments');?> new comments</h3>
									</div>
								</li>
								<?php 
								$news = $this->db->query('select * from comments order by id desc limit 3')->result_array();
								foreach ($news as $key) { ?>
								<li>
									<a href="#">
									<div class="user_img">
										<img src="<?php echo base_url().'assets/admin/images/2.jpg';?>" alt="">
									</div>
									<div class="notification_desc">
										<p><?= word_limiter($key['content'], 4); ?></p>
										<p><span>1 hour ago</span></p>
									</div>
									<div class="clearfix"></div>	
									</a>
								</li>
								<?php } ?>
								<li>
									<div class="notification_bottom">
										<a href="<?= site_url()."admin/comment";?>">See all comments</a>
									</div> 
								</li>
							</ul>
						</li>	


						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 4 new problem</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Problem number 1</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Problem number 2</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Problem number 3</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Problem number 4</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
									</a>
								</li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all problems</a>
									</div> 
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?php echo base_url().'assets/admin/images/2.jpg';?>" alt=""> </span> 
									<div class="user-name">
										<p><?php echo "tanjung "//$this->session->userdata('email'); ?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="<?= site_url()."/admin/logout";?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->