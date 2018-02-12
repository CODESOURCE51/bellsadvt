<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Area Details</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Area Details Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/Area" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_area();">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Area Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Area Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_area" id="txt_area" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Client Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_client" id="txt_client" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Aggrement Period</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Aggrement Period"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_ag_per" id="txt_ag_per" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental Amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Rental Amount"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_rent_amt" id="txt_rent_amt" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Remarks</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Remarks"
                                           data-original-title="Optional" data-placement="top" name="txt_remarks" id="txt_remarks"></textarea>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Area Landmark</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Landmark"
                                           data-original-title="Optional" data-placement="top" name="txt_landmark" id="txt_landmark"/>
                                </div>
                            </div>
                           
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Address</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Area Address"
                                           data-original-title="Optional" data-placement="top" name="txt_address" id="txt_address"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/Area" class="btn">View Area</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © BEll </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>