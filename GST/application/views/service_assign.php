<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Service Assign</h1>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <span class="divider"><i class="fa fa-angle-right"></i></span>
                </li>
                <li class="active">Service Assign</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Service Assign</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form action="<?php echo base_url();?>index.php/Add/ServiceAssign" method="post" class="form-horizontal" onSubmit="return validate_serviceassign();">
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Client</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control" name="txt_client" id="txt_client" data-rule-required="true">
                                 <?php foreach ($show_client as $show_client): ?>
                                 <option value="<?php echo $show_client['client_id'];?>">
								 <?php echo $show_client['client_name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Service</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control" name="txt_service" id="txt_service" data-rule-required="true">
                                  <option value="">-- Please select --</option>
                                 <?php foreach ($show_service as $show_service): ?>
                                 <option value="<?php echo $show_service['service_id'];?>">
								 <?php echo $show_service['service_name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Cost</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" name="txt_cost" class="form-control show-tooltip" data-trigger="hover"
                                           data-original-title="Add Project Cost" id="txt_cost"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Website URL</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" name="txt_url" class="form-control show-tooltip" data-trigger="hover"
                                           data-original-title="Add Website URL (If needed)" id="txt_url"/>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Service Type</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                    <label class="radio">
                                        <input type="radio" class="show-popover type" data-trigger="hover"
                                           data-content="Choose Service Type / Mandatory **"
                                           data-original-title="Any One" data-placement="top" name="txt_stype" value="one" onclick="return service_type(this.value)" /> One Time
                                    </label>
                                    <label class="radio">
                                        <input type="radio" class="show-popover type" data-trigger="hover"
                                           data-content="Choose Service Type / Mandatory **"
                                           data-original-title="Any One" data-placement="top" name="txt_stype" value="many"  onclick="return service_type(this.value)" /> Multple Times
                                    </label>
                                   </div> 
                                </div>
                                <div  id="duration" style="display:none;">
                            <div class="form-group" id="duration">
                                <label class="col-sm-3 col-lg-2 control-label">Duration</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-tooltip" data-trigger="hover"
                                           data-original-title="Add Duration" name="txt_duration" id="txt_duration"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Allocation Date</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" name="txt_alloc_date" class="form-control show-tooltip date-picker" data-trigger="hover"
                                           data-original-title="Add Allocation Date" id="txt_alloc_date"/>
                                </div>
                            </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea name="txt_note" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/ServiceAssign" class="btn">View Assigned Services</a>
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