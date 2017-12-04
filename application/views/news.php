
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
                    <h1>News</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; News</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
            
        <div class="main">
            <div class="section">
                <div class="row">
                  <?php
                  foreach ($news_data as $key) {
                  ?>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->news_image;?>" style="height:250px;width:100%;" alt="...">
                      <div class="caption">
                        <h4><?php echo ucfirst($key->news_name);?></h4>
                        <p><a href="<?php echo base_url();?>news_details/fetch_news/<?php echo $key->news_id;?>" class="btn btn-info btn-more" role="button">READ MORE</a></p>
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
