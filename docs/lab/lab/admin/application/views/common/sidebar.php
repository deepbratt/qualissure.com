<div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->      
      <div class="left_nav_slidebar">
        <ul>
			<li class="<?php echo(($this->uri->segment(1)=='add_category' || $this->uri->segment(1)=='view_category' || $this->uri->segment(1)=='edit_category')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-cogs"></i> Service Category <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_category' || $this->uri->segment(1)=='view_category' || $this->uri->segment(1)=='edit_category')?'block':'');?>">
					<li> <a href="<?php echo base_url();?>add_category" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_category')?'theme_color':'');?>">Add Category</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_category"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_category')?'theme_color':'');?>">View Category</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_service' || $this->uri->segment(1)=='view_service' || $this->uri->segment(1)=='edit_service')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-cog"></i> Service <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_service' || $this->uri->segment(1)=='view_service' || $this->uri->segment(1)=='edit_service')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_service" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_service')?'theme_color':'');?>">Add Service</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_service"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_service')?'theme_color':'');?>">View Service</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_certificate' || $this->uri->segment(1)=='view_certificate' || $this->uri->segment(1)=='edit_certificate')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-file-text"></i> Certificate <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_certificate' || $this->uri->segment(1)=='view_certificate' || $this->uri->segment(1)=='edit_certificate')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_certificate" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_certificate')?'theme_color':'');?>">Add Certificate</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_certificate"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_certificate')?'theme_color':'');?>">View Certificate</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_news' || $this->uri->segment(1)=='view_news' || $this->uri->segment(1)=='edit_news')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-file-text"></i> News <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_news' || $this->uri->segment(1)=='view_news' || $this->uri->segment(1)=='edit_news')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_news" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_news')?'theme_color':'');?>">Add News</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_news"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_news')?'theme_color':'');?>">View News</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='add_image' || $this->uri->segment(1)=='view_image' || $this->uri->segment(1)=='edit_image')?'left_nav_active theme_border':'left_nav_sidebar');?>">
				<a href="javascript:void(0);"><i class="fa fa-home"></i> Home Page Images <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
				<ul style="display:<?php echo(($this->uri->segment(1)=='add_image' || $this->uri->segment(1)=='view_image' || $this->uri->segment(1)=='edit_image')?'block':';');?>">
					<li> <a href="<?php echo base_url();?>add_image" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='add_image')?'theme_color':'');?>">Add Image</b> </a> </li>
					<li> <a href="<?php echo base_url();?>view_image"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b class="<?php echo(($this->uri->segment(1)=='view_image')?'theme_color':'');?>">View Image</b> </a> </li>
				</ul>
			</li>

			<li class="<?php echo(($this->uri->segment(1)=='gallery')?'left_nav_active theme_border':'left_nav_sidebar');?>"><a href="<?php echo base_url();?>gallery"><i class="fa fa-film"></i>Gallery</a></li>

			<li class="<?php echo(($this->uri->segment(1)=='about_us')?'left_nav_active theme_border':'left_nav_sidebar');?>"><a href="<?php echo base_url();?>about_us"><i class="fa fa-info-circle"></i>About Us</a></li>

			<li class="<?php echo(($this->uri->segment(1)=='mail')?'left_nav_active theme_border':'left_nav_sidebar');?>"><a href="<?php echo base_url();?>mail"><i class="fa fa-envelope"></i>User's Mail</a></li>
			
			<!-- <li class="left_nav_active theme_border"><a href="stat.html"><i class="fa fa-folder-open-o"></i>STATISTICS</a></li> -->
			<li class="<?php echo(($this->uri->segment(1)=='setting')?'left_nav_active theme_border':'left_nav_sidebar');?>"><a href="<?php echo base_url();?>setting"><i class="fa fa-wrench"></i>SETTINGS</a></li>
			<li class="left_nav_sidebar"><a href="<?php echo base_url();?>logout"><i class="fa fa-sign-out"></i>LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->