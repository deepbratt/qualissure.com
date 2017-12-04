
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<?php
	$this->load->view("common/metalinks");
?>  
</head>

<body>
    

    
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="pages-header">
<?php
	 $this->load->view("common/header");
?>
            
        <div class="section-heading">
            <div class="section">
                <div class="span-title">
                    <h1>Services</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; Services</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
            
        <div class="main">
            <div class="section">
                <div class="row">
                  <?php
                  foreach ($fetch_service as $key) {
                  ?>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->service_image;?>" style="height:250px;width:100%;" alt="...">
                      <div class="caption">
                        <h4><?php echo ucfirst($key->service_name);?></h4>
                        <p><a href="<?php echo base_url();?>service_details/fetch_service/<?php echo $key->service_id;?>" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>                  
                 <?php
                  }
                 ?>
               
                </div>
            </div>
        </div>
        
          
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>

</body>

</html>
