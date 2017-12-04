
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
                    <h1>About us</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; About us</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
        <?php
        foreach ($fetch_data as $key) {
        ?>
        <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-6">
                      <div class="about-us-image">
                        <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->about_us_image;?>" alt="">
                      </div>
                  
                  </div>
                  <div class="col-md-6">
                    <div class="about-us-info">
                        <h2>Qualissure Laboratory Services (QLS)</h2>  
                        <p><?php echo $key->about_us_details;?></p>
                        
                        <p><a href="<?php echo base_url();?>contact" class="btn btn-info">Contact Us</a></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?php
    }
        ?>
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>

</body>

</html>
