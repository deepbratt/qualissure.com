
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
                    <h1>News Details</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; News Details</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
        
        <div class="main">
            <div class="section">
                <div class="post-box">
                    <div class="row">
                      <?php
                      foreach ($news_data  as $key ) {
                      ?>
                      <div class="col-md-8">
                          <div class="post-container">
                            <div class="post-image"><img src="<?php echo base_url();?>admin/uploads/<?php echo $key->news_image;?>" style="height:500px;width:100%;" alt=""></div>
                            <div class="post-info">
                                <h2><?php echo ucfirst($key->news_name);?></h2>
                                
                                <div class="post-content">
                                    <p><?php echo $key->news_description;?></p>
                                </div>
                                
                            </div>
                          </div>
                          
                      </div>
                      <?php
                    }
                      ?>
                      <div class="col-md-4">
                        <div class="shop-sidebar">
                            
                            <div class="popular-posts">
                                <h5>Other News</h5>
                                <hr class="shop">
                                <div class="recent-posts">
                                  <?php
                                  foreach ($related as $rel_value) {
                                  ?>
                                    <div class="media">
                                      <div class="media-left">
                                        <a href="<?php echo base_url();?>news_details/fetch_news/<?php echo $rel_value->news_id;?>">
                                          <img class="media-object" src="<?php echo base_url();?>admin/uploads/<?php echo $rel_value->news_image;?>" alt="...">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <h5 class="media-heading"><?php echo $rel_value->news_name;?></h5>
                                        <p style="font-size:13px;"><?php echo date("D, d M Y",$rel_value->date);?></p>
                                      </div>
                                    </div>
                                    <hr>
                                  <?php
                                  }
                                  ?>
                            </div>
                          </div>
                      </div>
                    </div>
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