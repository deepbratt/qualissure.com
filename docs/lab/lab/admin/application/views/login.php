<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin || Qualissure</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link rel="icon" href="<?php echo base_url();?>images/logo1.png" type="image/x-icon" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  
  
  
  
  
  <div class="login_page" >
  <div class="login_content">
	<?php
		if($this->session->flashdata('failed')){
	?>
		<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
	<?php
		}
	?>
  
  <div class="panel-heading border login_heading" >sign in now</div>	
 <form class="form-horizontal" name="form" method="POST" action="<?php echo base_url();?>Login/login_check" enctype="multipart/form-data">
      <div class="form-group">
        <div class="col-sm-10">
          <input placeholder="Username" type="text" name="username" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10">
          <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class=" col-sm-10">
            <button class="btn btn-default" type="submit" name="submit">Sign in</button>
        </div>
      </div>
      
    </form>
 </div>
  </div> 
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
</body>
</html>
