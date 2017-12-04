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

	<div class="inner">

<?php
   $this->load->view("common/sidebar");
?>
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Edit Home Page Image</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Edit Home Page Image</a></li>
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
		?>
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Edit Home Page Image</h3>
            </div>
            <div class="porlets-content">
			<?php
			foreach ($image_data->result() as $key) {
			?>
              <form method="POST" action="<?php echo base_url();?>edit_image/update_image" enctype="multipart/form-data" parsley-validate novalidate>
			  <div class="form-group">
				  <label>Select Image</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload">
					  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
						  <img style="height:150px;" src= "<?php echo base_url();?>uploads/<?php echo $key->image;?>" alt="">
					  </div>
					  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
					  <div>
					   <span class="btn btn-white btn-file" style="margin-left:1px;">
					   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
					   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
					   <input type="file" name="image" class="default">
					   </span>
					  </div> 
				  </div>
				</div>
                <div class="form-group">
                  <label>Image heading</label>
                  <input type="text" name="heading" parsley-trigger="change" value="<?php echo $key->heading;?>" required placeholder="Enter Category name" class="form-control">
                  <input type="hidden" name="image_id" value="<?php echo $key->id;?>">
                </div><!--/form-group-->
				<button class="btn btn-primary" type="submit">Submit</button>
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
<!-- Modal -->
<?php
   $this->load->view("common/footer");
?>


</body>
</html>
