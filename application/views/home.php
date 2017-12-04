
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

<?php
	 $this->load->view("common/header");
?>

	         <div class="main-header">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->

                  <div class="carousel-inner">
                    <?php
                    $i = 1;
                    foreach ($slider->result() as $key) {
                    ?>
                    <div class="item <?php echo(($i == 1)?'active':'');?>">
                      <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->image;?>"  style="height:650px;width:100%;">
                    </div>
                    <?php
                    $i++;
                  }
                    ?>
                  </div>

  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div><!-- END MAIN HEADER -->
        
        <div class="main-call-out">
            <div class="section">
                <div class="call-out">
                    <div class="text-label">
                        <h2>WE TAKE YOUR BUSINESS FURTHER</h2>
                        <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                    </div>
                    <p style="float:right;margin-top:-50px;"><a class="btn btn-info" href="<?php echo base_url();?>index.php/contact" role="button">GET A QUOTE</a></p>
                </div>
            </div>
        </div>


			<!--<div class="section">
                <div class="shop-grid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="careers-box">
                                <div class="job-img"><img src="<?php echo base_url();?>images/gal.png" style="height:60px;width:60px;margin-top:-10px;    margin-left: -5px" alt=""></div>
                                <div class="job-info">
                                    <h4>Gallery</h4>
                                </div>
			                </div>
                          </div>
                          <div class="col-md-3">
                            <div class="careers-box">
                                <div class="job-img"><img src="<?php echo base_url();?>images/service.png" style="height:60px;width:60px;margin-top:-10px;    margin-left: -5px" alt=""></div>
                                <div class="job-info">
                                    <h4>SERVICES</h4>
                                </div>
			                </div>
                          </div>
                          <div class="col-md-3">
                            <div class="careers-box">
                                <div class="job-img"><img src="<?php echo base_url();?>images/labotory.png" style="height:60px;width:60px;margin-top:-10px;    margin-left: -5px" alt=""></div>
                                <div class="job-info">
                                    <h4>LABORATORIES</h4>
                                </div>
			                </div>
                          </div>
                          <div class="col-md-3">
                            <div class="careers-box">
                                <div class="job-img"><img src="<?php echo base_url();?>images/carrier.png" style="height:60px;width:60px;margin-top:-10px;    margin-left: -5px" alt=""></div>
                                <div class="job-info">
                                    <h4>CAREER</h4>
                                </div>
			                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>-->
		
		<!-- <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-3">
                    <div class="front-services">
                        <img src="images/image14.jpg" alt="...">
                        <div class="service-description">
                            <h5>INVESTMENT</h5>
                            <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="front-services center-box">
                        <img src="images/image9.jpg" alt="...">
                        <div class="service-description">
                            <h5>TAXATION</h5>
                            <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="front-services">
                        <img src="images/image15.jpg" alt="...">
                        <div class="service-description">
                            <h5>CONSULTING</h5>
                            <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                        </div>
                    </div>
                  </div>
				  <div class="col-md-3">
                    <div class="front-services">
                        <img src="images/image15.jpg" alt="...">
                        <div class="service-description">
                            <h5>CONSULTING</h5>
                            <p>There are many variations of passages of Lorem Ipsum available have suffered.</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div> -->
        
        <div class="main" style="margin-top:-30px;">
            <div class="section-full">
               <?php
               foreach ($about_us->result() as $fetch_about) {
               ?>
                <div class="row">
                  <div class="col-sm-12 col-md-6 panel-left">
                      <h1>About Qualissure Laboratory</h1>
                    
                      <p>
						<?php 
							$about_content = $fetch_about->about_us_details;
							echo substr($about_content,0,870);
							echo "...";
						?>
					  </p>
                      
                      <p><a href="<?php echo base_url();?>about" class="btn btn-info">Read More</a></p>
                  </div>
                
                  <div class="col-sm-12 col-md-6">  
                   <img style="height: 600px;margin-left: -15px;" src ="<?php echo base_url();?>admin/uploads/<?php echo $fetch_about->about_us_image;?>">
                  </div>
                
                </div>
                <?php
                    }
                      ?>
            </div>
        </div>
        
        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>OUR SERVICES</h2>
                    <hr class="short">
                </div>
                <?php
                foreach ($services->result() as $service_details) {
                ?>
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>admin/uploads/<?php echo $service_details->service_image;?>" style="height:250px;width:100%;" alt="...">
                      <div class="caption">
                        <h4><?php echo ucfirst($service_details->service_name);?></h4>
                        <p><a href="<?php echo base_url();?>service_details/fetch_service/<?php echo $service_details->service_id;?>" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>                  
                  <?php
                }
                  ?>
                  
                </div>
            </div>
        </div>
        

        
        <!-- <div class="main counter-parallax">
            <div class="section">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">2899</span>
                          <h4>HAPPY CUSTOMERS</h4>
                      </circle-counter>
                    </div>
                  <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">844</span>
                          <h4>DEVELOPED PROJECTS</h4>
                      </circle-counter>
                    </div>
                  <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">321</span>
                          <h4>AWARDS</h4>
                      </circle-counter>
                    </div>
                  <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-building" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">1322</span>
                          <h4>ASSOCIATED COMPANIES</h4>
                      </circle-counter>
                    </div>
                </div>
            </div>
        </div> -->
        

    
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>
    
    
</body>

</html>
