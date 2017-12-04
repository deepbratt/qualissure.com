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
          <h1>Edit Service</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Edit Service</a></li>
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
              <h3 class="content-header">Service Details</h3>
            </div>


            <?php
			foreach($fetch_service->result() as $row){
			?>
			<div class="porlets-content" id="details_div">
			  <div class="form-group">
				  <label>Select Image</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload">
					  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					  <?php
						if($row->service_image == '')
						{
						?>
							<img style="height:150px;" src= "http://via.placeholder.com/190x140" alt="">
						<?php
						}
						else{
						?>
							<img style="height:150px;" src= "<?php echo base_url();?>uploads/<?php echo $row->service_image;?>" alt="">
						<?php
						}
					  ?>
						  
					  </div>
				  </div>
				</div>
				<!-- <div class="form-group">
				<?php
				$cat_id = $row->service_cat_id;
				$select_query = mysqli_query($mysqli,"select * from service_cat where service_cat_id='".$cat_id."'");
				$fetch_query = mysqli_fetch_array($select_query);
				?>
                  <label><b>Select Category :</b> <?php echo $fetch_query['service_cat_name']?></label>
                </div> -->
				<div class="form-group">
                  <label><b>Service Category :</b> <?php echo $row->service_cat_name;?></label>
                </div>
                <div class="form-group">
                  <label><b>Service Name :</b> <?php echo $row->service_name;?></label>
                </div>
				<div class="form-group">
                    <label><b>Service Details :</b> <?php echo $row->service_des;?></label>
                  </div><!--/form-group-->
				<a class="btn btn-primary" href="javascipt:void(0);" onclick="edit_this()">Edit</a>
            </div><!--/porlets-content-->
			<?php
			}
			?>



			
			<?php
			foreach($fetch_service->result() as $row){
			?>
			<div class="porlets-content" style="display:none;" id="edit_div">
              <form method="POST" action="<?php echo base_url();?>edit_service/update_service" enctype="multipart/form-data" parsley-validate novalidate>
			  <div class="form-group">
				  <label>Select Image</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload">
					  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					  <?php
					  if($row->service_image =='')
					  {
					  ?>
						  <img style="height:150px;" src= "http://via.placeholder.com/190x140" alt="">
					   <?php
					  }else{
					   ?>
						  <img style="height:150px;" src= "<?php echo base_url();?>uploads/<?php echo $row->service_image; ?>" alt="">
					   <?php
					  }
					   ?>
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
                  <label>Select Category</label>
                    <select class="form-control" name="service_cat" id="source">
						<option selected disabled>Choose A Category...</option>
						<?php
						foreach($fetch_data->result() as $cat){
						?>
						<option value="<?php echo $cat->service_cat_id;?>" <?php echo(($row->service_cat_id == $cat->service_cat_id)?'selected':'');?>><?php echo $cat->service_cat_name;?></option>
						<?php
						}
						?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Service Name</label>
                  <input type="text" name="service_name" value="<?php echo $row->service_name;?>" parsley-trigger="change" required placeholder="Enter Service name" class="form-control">
                </div>
				<div class="form-group">
                    <label>Service Details</label>
                      <textarea class="form-control ckeditor" name="servive_details" rows="6"><?php echo $row->service_des;?></textarea>
                  </div><!--/form-group-->
				  <input type="hidden" value="<?php echo $row->service_id;?>" name="service_id">
				<button class="btn btn-primary" type="submit">Submit</button>
              </form>
            </div><!--/porlets-content-->
			<?php
			}
			?>





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
<script>
function edit_this(){
	$("#edit_div").show();
	$("#details_div").hide();
}
</script>


</body>
</html>
