<?php 
	//$category_data = json_decode(json_encode($category_data), True);
	//print_r($category_data);
	//exit;
 ?>
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
    <!--\\\\\\\ inner start \\\\\\-->
<?php
   $this->load->view("common/sidebar");
?>
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>View Category</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">View Category</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
     
       <div id="main-content">
    <div class="page-content">      
       <div class="row">
        <div class="col-lg-12">
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
            <section class="panel default blue_title h2">
              <div class="panel-heading">
<span class="semi-bold">Service Category List</span> </div>
              <div class="panel-body">
              <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
		 <?php 
			$i = 1;
			foreach($fetch_details->result() as $fetch_cat){
		  ?>
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $fetch_cat->service_cat_name;?></td>
            <td><img src="<?php echo base_url();?>uploads/<?php echo $fetch_cat->service_cat_image; ?>" height="80" width="80"></td>
            <td><a href="<?php echo base_url();?>edit_category/fetch_data/<?php echo $fetch_cat->service_cat_id;?>">Edit</a> <a href="<?php echo base_url();?>view_category/delete_data/<?php echo $fetch_cat->service_cat_id;?>">Delete</a></td>
          </tr>
		  <?php
			$i++;
			}
		  ?>
        </tbody>
      </table>
    </div>
              </div>
              </section>
              </div>
      </div><!--/row-->

      
        </div><!--/page-content end--> 
  </div><!--/main-content end--> 
      
  
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
