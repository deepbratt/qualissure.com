<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $this->load->view("common/metalinks");
?>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
<?php
   $this->load->view("common/header");
?>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
<?php
   $this->load->view("common/sidebar");
?>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>SETTINGS</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="form.php">SETTINGS</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
            
      <div class="row">
        <div class="col-md-12">
            <?php
      if($this->session->flashdata('success')){
    ?>
      <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('failed')){
    ?>
      <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('pass_error')){
    ?>
      <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('pass_error');?></strong> </div>
    <?php
      }
    ?>
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Change Settings</h3>
            </div>
            <div class="porlets-content">
              <?php
              foreach ($admin_details->result() as $key) {
              ?>
              <form action="<?php echo base_url();?>setting/change_setting" method="post" parsley-validate novalidate>
                <div class="form-group">
                  <label>Change User Name</label>
                  <input type="text" name="username" parsley-trigger="change" required placeholder="Enter New Username" value="<?php echo $key->username;?>" class="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>New Password</label>
                  <input id="pass1" type="password" placeholder="New Password" name="pass_one" required class="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Repeat Password</label>
                  <input parsley-equalto="#pass1" type="password" name="pass_two" required placeholder="Repeat Password" class="form-control">
                </div><!--/form-group-->
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-default">Cancel</button>
              </form>
              <?php
            }
              ?>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->

      </div><!--/row-->
   
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<?php
   $this->load->view("common/footer");
?>

</body>
</html>
