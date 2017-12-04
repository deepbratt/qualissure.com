
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
                
                    <?php
                        if($this->session->flashdata('success')){
                    ?>
                        <div class="call-out" style="margin-bottom:30px;height:25px;">
                            <h2 style="margin-top: -8px;font-size:18px;text-align:center;"><?php echo $this->session->flashdata('success');?></h2>
                        </div>
                    <?php
                        }
                        if($this->session->flashdata('failed')){
                    ?>
                         <div class="call-out" style="margin-bottom:30px;height:25px;">
                            <h2 style="margin-top: -8px;font-size:18px;text-align:center;"><?php echo $this->session->flashdata('failed');?></h2>
                        </div>
                    <?php
                        }
                    ?>
                
                <div class="row">
                  <div class="col-md-7">
                    <form  method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>contact/send_feedback">
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
                                        <p><button type="submit" class="btn btn-info">Send message</button></p>
                                    </div>
                                </div>
                            </div>
                    </form>
                  </div>
                    <div class="col-md-5">
                        <div class="address-block">
                            <div class="span-address">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Phone: +91-9831287086 || +91-8017707173</p>
                            </div>
                            <div class="span-address">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Email: info@qualissure.com || qualissure@gmail.com</p>
                            </div>
                            <div class="span-address">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Address: 45/361,Bose Pukur Road,Kasba,Kolkata-700107</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       
        </div>
        
        <div class="maps">
            <div id="map"></div>
           
             <script>

      function initMap() {
        var myLatLng = {lat: 22.521834, lng: 88.389964};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'QUALISSURE LABORATORY SERVICES '
        });
      }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&callback=initMap" async defer></script>
            
        </div> 



    
    </div>
    <!-- END MAIN CONTAINER -->
    
<?php
	 $this->load->view("common/footer");
?>


</body>

</html>
