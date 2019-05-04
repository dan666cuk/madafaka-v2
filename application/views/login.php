<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="<?php echo base_url().'assets/admin/css/bootstrap.css';?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'assets/admin/css/style.css';?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url().'assets/admin/css/font-awesome.css';?>" rel="stylesheet"> 
<link href='<?php echo base_url().'assets/admin/css/SidebarNav.min.css';?>' media='all' rel='stylesheet' type='text/css'/>
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<link href="<?php echo base_url().'assets/admin/css/custom.css';?>" rel="stylesheet">
</head> 
<body>
	<div class="main-content">
	<div>
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="<?= site_url()."/admin/do_login";?>" method="post">
							<input type="email" class="user" name="email" placeholder="Enter Your Email">
							<input type="password" name="password" class="lock" placeholder="Password">
							<input type="submit" name="Sign In" value="Sign In">
						</form>
					</div>
				</div>
			</div>
	</div>
</body>
</html>