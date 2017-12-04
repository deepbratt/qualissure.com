
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
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/img1.jpg" alt="...">
                      <div class="caption">
                        <h4>Business Consulting</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/image2.jpg" alt="...">
                      <div class="caption">
                        <h4>Investment Advisor</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/image3.jpg" alt="...">
                      <div class="caption">
                        <h4>Tax Consultant</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/image4.jpg" alt="...">
                      <div class="caption">
                        <h4>Finance Consulting</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/image5.jpg" alt="...">
                      <div class="caption">
                        <h4>Insurance Adjuster</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>                  
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo base_url();?>images/img6.jpg" alt="...">
                      <div class="caption">
                        <h4>Retirement Advisor</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p><a href="<?php echo base_url();?>index.php/service_details" class="btn btn-info btn-more" role="button">READ MORE</a></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="main counter-parallax">
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
        </div>    
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>

</body>

</html>
