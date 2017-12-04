<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $this->load->view("common/metalinks");
?>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
<?php
   $this->load->view("common/header");
?>

  <div class="inner">

<?php
   $this->load->view("common/sidebar");
?>
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Edit News</h1>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Edit News</a></li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->    
     
       <div class="row">
        <div class="col-md-12">
    <?php
      if($this->session->flashdata('success')){
    ?>
      <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
    <?php
      }
      if($this->session->flashdata('failed')){
    ?>
      <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
    <?php
      }
    ?>
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">News Details</h3>
            </div>



            <?php
            foreach ($news_data->result() as $value) {
            ?>
            <div class="porlets-content" id="details_div">
             <div class="form-group">
                <label>News Image</label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                    <?php
                    if($value->news_image == '')
                    {
                    ?>
                      <img style="height:150px;" src= "http://via.placeholder.com/190x140" alt="">
                    <?php
                    }
                    else{
                    ?>
                      <img style="height:150px;" src= "<?php echo base_url();?>uploads/<?php echo $value->news_image;?>" alt="">
                    <?php
                    }
                    ?>
                    
                  </div>
                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                </div>
              </div>
                <div class="form-group">
                  <label><b>News Date :</b> <?php echo date("D M Y",$value->date);?></label>
                </div>
                <div class="form-group">
                  <label><b>News Title :</b> <?php echo $value->news_name;?></label>
                </div>
                <div class="form-group">
                    <label><b>News Details :</b> <?php echo $value->news_description;?></label>
                  </div><!--/form-group-->
                <button class="btn btn-primary"  onclick="show_edit();">Edit News</button>
            </div><!--/porlets-content-->
            <?php
          }
            ?>



            <?php
            foreach ($news_data->result() as $key) {
            ?>
            <div class="porlets-content" id="edit_div" style="display:none;">
              <form method="POST" action="<?php echo base_url();?>edit_news/update_news" enctype="multipart/form-data" parsley-validate novalidate>
             <div class="form-group">
                <label>Select Image</label>
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                   <?php
                    if($key->news_image == '')
                    {
                    ?>
                      <img style="height:150px;" src= "http://via.placeholder.com/190x140" alt="">
                    <?php
                    }
                    else{
                    ?>
                      <img style="height:150px;" src= "<?php echo base_url();?>uploads/<?php echo $key->news_image;?>" alt="">
                    <?php
                    }
                    ?>
                  </div>
                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                   <span class="btn btn-white btn-file" style="margin-left:1px;">
                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                   <input type="file" name="image" class="default">
                   </span>
                  </div> 
                </div>
              </div>
                <div class="form-group">
                  <label>News Title</label>
                  <input type="text" name="news_name" parsley-trigger="change" value="<?php echo $key->news_name;?>" required placeholder="Enter News Title" class="form-control">
                </div>
                <div class="form-group">
                    <label>News Details</label>
                      <textarea class="form-control ckeditor" name="news_details" rows="6"><?php echo $key->news_description;?></textarea>
                  </div><!--/form-group-->
                  <input type="hidden" value="<?php echo $key->news_id;?>" name="news_id">
                <button class="btn btn-primary" type="submit">Update News</button>
              </form>
            </div><!--/porlets-content-->
            <?php
            }
            ?>



          </div><!--/block-web--> 
        </div><!--/col-md-6--> 
      </div><!--/row-->
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<?php
   $this->load->view("common/footer");
?>
<script>
  function show_edit()
  {
    $('#details_div').hide();
    $('#edit_div').show();
  }
</script>

</body>
</html>
