        
                    <div class="main-navbar">
                          <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                          <div class="top-header">
                              <div class="container content-top">
                                <div class="leftside">
                                    <div class="header-items">
                                        <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; info@qualissure.com / qualissure@gmail.com</p>
                                    </div>
                                    <div class="header-items">
                                        <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 9831287086 / 8017707173</p>
                                    </div>
                                </div>
                                <div class="rightside">
                                    <div class="header-items"><a href="https://www.facebook.com/Qualissure-Laboratory-services-1700994426835475/" target="_blank"><p><i class="fa fa-facebook" aria-hidden="true"></i></p></a></div>
                                    <div class="header-items"><a href="#"><p><i class="fa fa-twitter" aria-hidden="true"></i></p></a></div>
                                    <div class="header-items no-margin"><a href="#"><p><i class="fa fa-linkedin" aria-hidden="true"></i></p></a></div>
                                </div>
                                <hr class="heading">
                              </div>
                          </div>
                          <div class="container">
                                <div class="navbar-header" >
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" href="<?php echo base_url();?>" style="margin-top:-15px;"><img src="<?php echo base_url();?>images/logo1.png" height="50" width="50"></a>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav navbar-right">
                                    <li class="<?php echo(($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home')?'active':'');?>"><a href="<?php echo base_url();?>">HOME</a></li>
                                    <li class="<?php echo(($this->uri->segment(1) == 'service_categories' || $this->uri->segment(1) == 'service' || $this->uri->segment(1) == 'service_details')?'active':'');?>"><a href="<?php echo base_url();?>service_categories">SERVICES</a></li>
                  									<li class="<?php echo(($this->uri->segment(1) == 'certificate')?'active':'');?>"><a href="<?php echo base_url();?>certificate">CERTIFICATE</a></li>
                                    <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                  									<li class="<?php echo(($this->uri->segment(1) == 'about')?'active':'');?>"><a href="<?php echo base_url();?>about">ABOUT US</a></li>
                                    <li class="<?php echo(($this->uri->segment(1) == 'contact')?'active':'');?>"><a href="<?php echo base_url();?>contact">CONTACT</a></li>
                                  </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                   