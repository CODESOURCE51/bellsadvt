<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Pole Kiosk Details</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Pole Kiosk Details Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/PoleKiosk" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_pole_kiosk();">
                        <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Location</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_area" id="txt_media_area">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($main_area as $main_areas) { ?>
                                        <option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Order Number</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Joist"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_od_no" id="txt_od_no" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Order From</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Joist"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_od_frm" id="txt_od_frm" />
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Client</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_client" id="txt_media_client">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($client as $clientDtl) { ?>
                                        <option value="<?php echo $clientDtl['client_id'];?>"><?php echo $clientDtl['client_name'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Order Upto</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Rental start Date"
                                           data-original-title="Optional" data-placement="top" name="txt_space_rental_start" id="datepicker22"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Pole</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Pole"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_pole" id="txt_pole" />
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Building Material</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Building Material"
                                           data-original-title="Optional" data-placement="top" name="txt_bldng_mat"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Kiosk Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Kiosk Type"
                                           data-original-title="Optional" data-placement="top" name="txt_kiosk_type"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="4th_note"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/PoleKiosk" class="btn">View Pole kiosk</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © BELL</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>
<script type="text/javascript">
 $(function() {
    $( "#datepicker22" ).datepicker();
	multidate: true;
  });
</script>