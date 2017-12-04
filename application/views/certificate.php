
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
                    <h1>Certificate</h1>
                    <div class="page-map"><p>Home &nbsp;/&nbsp; Certificate</p></div>
                </div>
            </div>
        </div>
        </div><!-- END MAIN HEADER -->
            
        <div class="main">
            <div class="section">
                <div class="shop-grid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="products-container">
                            <div class="products-heading">
                                <div class="search-results">
                                    <h6>Showing <strong>9</strong> of <strong>36</strong> results</h6>
                                </div>
                            </div>
                            <div class="items-container">
                                <div class="row">
                                  <?php
								  $i = 1;
                                  foreach ($fetch_cert as $key) {
                                  ?>
                                  <div class="col-sm-6 col-md-4">
                                    <div class="item-box">
                                        <div class="item-images">										
											<a href="javascript:void(0);" onclick="document.getElementById('m_div_<?php echo $key->certificate_id;?>').style.display='block'" >
												<img id="imageresource" src="<?php echo base_url();?>admin/uploads/<?php echo $key->certificate_file_name;?>" style="width: 300px; height:460px;">
											</a>
                                        </div>
                                        <div class="item-info">
                                            <h6><?php echo $key->certificate_name;?></h6>
                                        </div>
                                    </div>
                                  </div>
                                  <?php
								  $i++;
                                }
                                  ?>

                                  
                                  
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="pagination-container">
                        <nav aria-label="Page navigation">
                          <div class="pagination">
                              <a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                              <a  class="active" href="#">1</a>
                              <a  href="#">2</a>
                              <a href="#">3</a>
                              <a href="#">4</a>
                              <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          </div>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    
    </div>
    <!-- END MAIN CONTAINER -->
 <?php
	$i = 1;
	foreach ($fetch_cert as $key) {
  ?>
<div class="modal yo_mama" tabindex="-1" role="dialog" id="m_div_<?php echo $key->certificate_id;?>" style="overflow-y:scroll;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $key->certificate_name;?></h5>
        <button type="button" onclick="close_modal();"  class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url();?>admin/uploads/<?php echo $key->certificate_file_name;?>" style="height:auto;width:100%;">
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<?php
	}
?>

<?php
	 $this->load->view("common/footer");
?>
<script>
function close_modal()
{
	$('.yo_mama').hide();
}
</script>

</body>

</html>