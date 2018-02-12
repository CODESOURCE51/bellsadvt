<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Signal Installation Details</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Signal Installation Details Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/SignalInstal" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_signal();">
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
                                <label class="col-sm-3 col-lg-2 control-label">Arm</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Arm"
                                           data-original-title="Optional" data-placement="top" name="txt_arm"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Building Material</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Building Material"
                                           data-original-title="Optional" data-placement="top" name="txt_build_material"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Paints</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Paint"
                                           data-original-title="Optional" data-placement="top" name="txt_paint"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Aspects</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Aspects"
                                           data-original-title="Optional" data-placement="top" name="txt_aspects"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">LED</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter LED"
                                           data-original-title="Optional" data-placement="top" name="txt_led"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Meter Box</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Meter Box"
                                           data-original-title="Optional" data-placement="top" name="txt_meter_box"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Ctrl. Box with ply</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Cntrl Box"
                                           data-original-title="Optional" data-placement="top" name="txt_ctrl_box"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Cable Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Select Cable"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_cable" id="txt_cable">
                                       
                                        <option value="Armoured">Armoured</option>
                                       <option value="Unarmoured">Unarmoured</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="1st_note"></textarea>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label"></label>

                                <div class="col-sm-9 col-lg-10 controls">
                            <span style="background-color:#C00; color:#FFF; font-size:18px; border:1px dotted #00CCFF; padding:0px 10px; text-align:center;">Controller</span>
                        </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">CPU</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter CPU"
                                           data-original-title="Optional" data-placement="top" name="txt_cpu"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Power Supply</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Power Supply"
                                           data-original-title="Optional" data-placement="top" name="txt_p_sply"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Modular</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Modular"
                                           data-original-title="Optional" data-placement="top" name="txt_moduler"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Modem</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Modem"
                                           data-original-title="Optional" data-placement="top" name="txt_modem"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Antena</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Antena"
                                           data-original-title="Optional" data-placement="top" name="txt_antena"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="2nd_note"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label"></label>

                                <div class="col-sm-9 col-lg-10 controls">
                            <span style="background-color:#C00; color:#FFF; font-size:18px; border:1px dotted #00CCFF; padding:0px 10px; text-align:center;">Others</span>
                        </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">J.B. Box</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter J.B. Box"
                                           data-original-title="Optional" data-placement="top" name="txt_jb_box"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Connector</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Connector"
                                           data-original-title="Optional" data-placement="top" name="txt_connector"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Pole Wiring Wire</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Pole Wiring wire"
                                           data-original-title="Optional" data-placement="top" name="txt_p_wire"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Operating Box</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Operating Box"
                                           data-original-title="Optional" data-placement="top" name="txt_op_box"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">D.P.switch</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter D.P Switch"
                                           data-original-title="Optional" data-placement="top" name="txt_dp_switch"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Push Switch</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Push Switch"
                                           data-original-title="Optional" data-placement="top" name="txt_psh_swtch"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Transformer</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Transformer"
                                           data-original-title="Optional" data-placement="top" name="txt_transformer"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Relay Panel</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Relay Panel"
                                           data-original-title="Optional" data-placement="top" name="txt_rlay_panel"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Fuse connector</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Fuse Connector"
                                           data-original-title="Optional" data-placement="top" name="txt_fuse_conect"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Fuse</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Fuse"
                                           data-original-title="Optional" data-placement="top" name="txt_fuse"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Tie</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Tie"
                                           data-original-title="Optional" data-placement="top" name="txt_tie"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Terminal</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Terminal"
                                           data-original-title="Optional" data-placement="top" name="txt_terminal"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Earthin rode</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Earthin rode"
                                           data-original-title="Optional" data-placement="top" name="txt_erth_rode"/>
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="3rd_note"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/SignalInstal" class="btn">View Signal Details</a>
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