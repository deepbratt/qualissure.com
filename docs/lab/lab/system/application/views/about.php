
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
        
        <div class="main">
            <div class="section">
                <div class="row">
                  <div class="col-md-6">
                      <div class="about-us-image">
                        <img src="<?php echo base_url();?>images/image19.jpg" alt="">
                      </div>
                  
                  </div>
                  <div class="col-md-6">
                    <div class="about-us-info">
                        <h2>WE TAKE YOUR BUSINESS FURTHER.</h2>  
                        <h6>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</h6>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page.</p>
                        
                        <p><a href="javascript:void(0);" class="btn btn-info">LEARN MORE</a></p>
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
