<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Project</h1>
                
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
                        <h3><i class="fa fa-bars"></i> Project Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/Project" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_project();">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Project Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Service Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_project" id="txt_project" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Project type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <label class="radio">
                                        <input type="radio" class="show-popover type" data-trigger="hover"
                                           data-content="Enter Project Type / Mandatory **"
                                           data-original-title="Any One" data-placement="top" name="txt_type" value="web" onclick="return check_type(this.value)" /> Web
                                    </label>
                                    <label class="radio">
                                        <input type="radio" class="show-popover type" data-trigger="hover"
                                           data-content="Enter Project Type / Mandatory **"
                                           data-original-title="Any One" data-placement="top" name="txt_type" value="stand alone"  onclick="return check_type(this.value)" /> Stand alone
                                    </label>
                                    
                                </div>
                            </div>
                           <div class="form-group" id="domain" style="display:none;">
                                <label class="col-sm-3 col-lg-2 control-label">Domain Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Domain Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_domain"/>
                                </div>
                            </div>
                           
                           

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/Projects" class="btn">View Projects</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © Client Management System </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>