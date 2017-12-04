
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
                    <h1>Service Categories</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp;Service Categories</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
        
        <div class="main">
            <div class="section">
                <div class="row">
                <?php
                foreach($cat_data as $key){
                ?>
                  <a href="<?php echo base_url();?>service/fetch_service/<?php echo $key->service_cat_id;?>">
                    <div class="col-md-4">
                    <div class="front-services">
                        <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->service_cat_image;?>" height="250px;">
                        <div class="service-description">
                            <h5><?php echo $key->service_cat_name;?></h5>
                        </div>
                    </div>
                  </div>
                  </a>
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
