<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Update Media / Area</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Media / Area Update Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Update/MediaCountr" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_m_nom();">
                        <input type="hidden" name="cid" value="<?php echo $data[0]['num_id'];?>" />
                        <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Main Media Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php $main_sql = $this->db->query("SELECT * FROM td_service WHERE service_id=".$data[0]['main_media'])->result_array();
								  echo $main_sql[0]['service_name'];?>
                                </div>
                            </div>
                           
                        	<div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Booked</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Main Media Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_main_booked_no" id="txt_main_booked_no" value="<?php echo $data[0]['main_media_booked'];?>"/>
                                </div>
                            </div>
                        
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Vacant</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Main Media Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_main_vac_no" id="txt_main_vac_no" value="<?php echo $data[0]['main_media_vac'];?>"/>
                                </div>
                            </div>
                             <?php if($data[0]['display1'] != 'NA') { ?>
                            
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 1 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display1'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 1 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_1" id="txt_display_media_no_1" value="<?php echo $data[0]['display1_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label">Vacant</label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 1 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_1" id="txt_display_media_no_1" value="<?php echo $data[0]['display1_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($data[0]['display2'] != 'NA') { ?>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 2 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display2'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 2 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_2" id="txt_display_media_no_2" value="<?php echo $data[0]['display2_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Vacant </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 2 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_2" id="txt_display_media_no_2" value="<?php echo $data[0]['display2_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($data[0]['display3'] != 'NA') { ?>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 3 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display3'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 3 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_3" id="txt_display_media_no_3" value="<?php echo $data[0]['display3_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Vacant </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 3 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_3" id="txt_display_media_no_3" value="<?php echo $data[0]['display3_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($data[0]['display4'] != 'NA') { ?>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 4 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display4'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 4 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_4" id="txt_display_media_no_4" value="<?php echo $data[0]['display4_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Vacant </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 4 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_4" id="txt_display_media_no_4" value="<?php echo $data[0]['display4_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($data[0]['display5'] != 'NA') { ?>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 5 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display5'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 5 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_5" id="txt_display_media_no_5" value="<?php echo $data[0]['display5_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Vacant </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 5 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_5" id="txt_display_media_no_5" value="<?php echo $data[0]['display5_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($data[0]['display6'] != 'NA') { ?>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Display 6 Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <?php echo $data[0]['display6'];?>
                                </div>
                            </div>
                            <div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Booked </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 6 Booked Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_6" id="txt_display_media_no_6" value="<?php echo $data[0]['display6_booked'];?>"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label"> Vacant </label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display 6 Vacant Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_6" id="txt_display_media_no_6" value="<?php echo $data[0]['display6_vacant'];?>"/>
                                
                                </div>
                            </div>
                            <?php } ?>
                              

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/MediaCount" class="btn">View Media/ area</a>
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
 <script type="text/javascript">
            
            // Ajax post
           function getType(id) {
                    event.preventDefault();
                    var ID = id;
                   
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getMedia",
                        dataType: 'json',
                        data: {mid: ID},
                        success: function(res) {
							$('#show_count').css('display','block');
							$('#show_count').html(res);
							//alert(res);
                        }
                    });
		   }
              
        </script>  