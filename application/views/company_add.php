<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Company Details</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Company Details Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/Company" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_company();">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Company Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Company Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_client" id="txt_client" />
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Company Phone</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Company Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_phn" id="txt_phn"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Company Email</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Company Email"
                                           data-original-title="Optional" data-placement="top" name="txt_email" id="txt_email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">PAN No</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Pan No"
                                           data-original-title="Optional" data-placement="top" name="txt_pan" id="txt_pan"/>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Service Tax no</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Service Tax"
                                           data-original-title="Optional" data-placement="top" name="txt_sa" id="txt_sa"/>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">VAT no</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Vat No"
                                           data-original-title="Optional" data-placement="top" name="txt_vat" id="txt_vat"/>
                                   
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/Company" class="btn">View Company Details</a>
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