
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
                    <h1>Contact</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; Contact</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
            
        <div class="main form-box">
            <div class="section">
                <div class="row">
                  <div class="col-md-7">
                    <form id="contact-form" method="post" action="contact.php">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-info" value="Send message"></p>
                                    </div>
                                </div>
                            </div>
                    </form>
                  </div>
                    <div class="col-md-5">
                        <div class="address-block">
                            <div class="span-address">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Phone: 012-345-6789</p>
                            </div>
                            <div class="span-address">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Email: support@yourdomain.com</p>
                            </div>
                            <div class="span-address">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Address:  Barrackpore, West Bengal, Kol - 700122, India</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       
        </div>
        
        <div class="maps">
            <div id="map"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&callback=initMap" async defer></script>
        </div> 



    
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>

</body>

</html>
