<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> View Media / Area</h1>
               
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active"><i class="fa fa-home"></i> Home</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Media / Area View Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/View/Area_media" method="post" enctype="multipart/form-data" class="form-horizontal"> <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Area</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_area" id="txt_media_area" >
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($main_area as $main_areas) { ?>
                                        <option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <center><span style="padding:3px; color:#FFF; background-color:#FF0000; font-weight:bold;">OR</span></center><br/>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Area Code</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Service Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_area_code" id="txt_size"/>
                                </div>
                            </div>
                            <hr/>
                              <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Search
                                    </button>
                                    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © Bell </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>
  