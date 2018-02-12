<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add New Order</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Add New Order</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/OrderDetails" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_order();">
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Bill Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_bill" id="txt_media_bill" onChange="return showData(this.value)">		
                                            <option value="">Select...</option>
                                             <option value="P">Printing</option>
                                             <option value="M">Mounting</option>
                                             <option value="R">Rental</option>
                                        
                                    </select>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Billing Date</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_bill_date" id="datepicker3" onchange="return getinvoice()"/>
                                </div>
                            </div>
                            <div class="form-group" id="old_bill" style="display:none;">
                                <label class="col-sm-3 col-lg-2 control-label">OLD Bill Number</label>

                                <div class="col-sm-9 col-lg-10 controls">
                            <span id="txt_bill_no_old" style="display:none; background-color:#C00; color:#FFF; font-size:18px; border:1px dotted #00CCFF; padding:0px 10px"></span>
                        </div>
                            </div>
                             <div class="form-group" id="new_bill" style="display:none;">
                                <label class="col-sm-3 col-lg-2 control-label">New Bill No</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter New Bill Number"
                                           data-original-title="Optional" data-placement="top" name="txt_new_bill" id="txt_new_bill" value=""/>
                                </div>
                            </div>
                             <div class="form-group" id="new_bill">
                                <label class="col-sm-3 col-lg-2 control-label">Place of Work</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Place of Work"
                                           data-original-title="Optional" data-placement="top" name="work_place" id="work_place" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Billing state</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Select Billing state"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_state" id="txt_state"  onChange="return getState(this,this.value);">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($gststate as $state_list) { ?>
                                        <option value="<?php echo $state_list['state_id'];?>" data-code="<?php echo $state_list['state_code'];?>"><?php echo $state_list['state'];?></option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group" id="new_bill">
                                <label class="col-sm-3 col-lg-2 control-label">State Code</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="State Code"
                                           data-original-title="Optional" data-placement="top" name="state_code" id="state_code" readonly="readonly"/>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Main Media Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media" id="txt_media"  onChange="return getType(this.value);">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($main_m as $main_media) { ?>
                                        <option value="<?php echo $main_media['service_id'];?>"><?php echo $main_media['service_name'];?></option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Media Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_type" id="txt_media_type">
                                       
                                       
                                    </select>
                                </div>
                            </div>
                            <div id="mediaextra"></div>
                             <div class="form-group" id="submediaextra" style="display:none;">
                                <label class="col-sm-3 col-lg-2 control-label">Media Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_type" id="txt_media_type1">
                                       
                                       
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Client</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <select class="form-control chosen" data-placeholder="Choose a Category"
                                            tabindex="1" name="txt_media_client" id="txt_media_client">
                                       <option value="">Select...</option>
                                       <?php foreach($client as $clientDtl) { ?>
                                        <option value="<?php echo $clientDtl['client_id'];?>"><?php echo $clientDtl['client_name'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                          
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Bank</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Select Bank Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_bank" id="txt_bank">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($bank as $bankDtl) { ?>
                                        <option value="<?php echo $bankDtl['area_id'];?>"><?php echo $bankDtl['area_name'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Campaign Title</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_media_title" id="txt_media_title"/>
                                </div>
                            </div>
                           
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Area</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <select class="form-control" multiple="multiple" name="txt_media_area[]" id="txt_media_area">
                                       <option value="">Select...</option>
                                        <?php foreach($main_area as $main_areas) { ?>
                                        <option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                
                                <input type="radio" name="package" value="1" onclick="return ptype(this.value)">Package &nbsp;<input type="radio" name="package" value="2" onclick="return ptype(this.value)">Not Package
                                        
                                    
                                </div>
                            </div>
                            <div id="notPackage" style="display:block;">
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Size</label>

                                <div class="col-sm-9 col-lg-10 controls">
                              <!--   <input type='text'
                   placeholder='Search Term'
                   class='flexdatalist'
                   data-min-length='0'
                   multiple='multiple'
                   data-visible-properties='["label"]'
                   data-toggle-selected='true'
                   list='languages'
                   name='txt_media_size'
                   id='txt_media_size'>
                   <datalist id="languages">
               <?php foreach($size as $sizes) { ?>
                 <option value="<?php echo $sizes['size_id'];?>"><?php echo $sizes['size'];?></option>
                <?php }?>
            </datalist>-->
                                 <!--<select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_size[]" id="txt_media_size" onchange="return fuck(this.value)">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($size as $sizes) { ?>
                                        <option value="<?php echo $sizes['size_id'];?>"><?php echo $sizes['size'];?></option>
                                        <?php } ?>
                                    </select>-->
                                    <input type="text" size="120" id="skills" name="txt_media_size">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Price / Piece (Rental)</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_price" id="txt_price" onkeyup="NumToWord(this.value,'divDisplayWords');"/>
                                           <div id="divDisplayWords" style="font-size: 13; color: Teal; font-family: Arial;"></div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Price / Piece (Monthly)</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_price_monthly" id="txt_price_monthly"/>
                                           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Price / Piece (Mounting)</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Mounting charges"
                                           data-original-title="Optional" data-placement="top" name="txt_price_mounting" id="txt_price_mounting" />
                                           
                                </div>
                            </div>
                        
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Quantity</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_quantity" id="txt_quantity" onKeyUp="return totAmount(this.value)"/>
                                </div>
                            </div>
                            </div>
                            <div id="package" style="display:none;">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Space Charge (Monthly)</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter package space charge"
                                           data-original-title="Optional" data-placement="top" name="txt_space_monthly" id="txt_space_monthly"/>
                                           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Chargable Amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Chargable Amount"
                                           data-original-title="Optional" data-placement="top" name="txt_chrge_amt" id="txt_chrge_amt"/>
                                           
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental From</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_from" id="datepickerrr" placeholder="mm/dd/yy"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental To</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_to" id="datepickerrr2" placeholder="mm/dd/yy"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Total</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_total" id="txt_total" value="0"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Tax</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                <?php $i=1; foreach($taxes as $schrg) { ?>
                                    <label class="radio-inline">
                                        <input type="radio" name="txt_<?php echo $i;?>" id="<?php echo $i;?>" value="<?php echo $schrg['percent'];?>-<?php echo $schrg['sc_id'];?>" onClick="return percent_calcu(this.value,<?php echo $i;?>)"><span style="width:150px; display: block;"> <?php echo $schrg['charge_name'];?></span>
                                    </label>&nbsp;&nbsp;Deduct Rs : <input type="text" name="per_<?php echo $i;?>" id="per_<?php echo $i;?>" style="width:80px;"/><br/>
                                    <?php $i++;} ?>
                                    
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Other Charge</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_other_amt" id="txt_other_amt" onkeyup="return calculation_total(this.value)"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">PO No.</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client PO No"
                                           data-original-title="Optional" data-placement="top" name="txt_po_no" id="txt_po_no"/>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Chargable Amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_chrg_amt" id="txt_chrg_amt" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Note</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Note"
                                           data-original-title="Optional" data-placement="top" name="txt_note" id="txt_note"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label"></label>

                                <div class="col-sm-9 col-lg-10 controls">
                            <span style="background-color:#C00; color:#FFF; font-size:18px; border:1px dotted #00CCFF; padding:0px 10px; text-align:center;">Trading Details</span>
                        </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Trading</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Select Trading Details"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_trade_dtlt" id="txt_trade_dtlt">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($trading as $tradedtl) { ?>
                                        <option value="<?php echo $tradedtl['trad_id'];?>"><?php echo $tradedtl['sp_lord'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label"></label>

                                <div class="col-sm-9 col-lg-10 controls">
                            <span style="background-color:#C00; color:#FFF; font-size:18px; border:1px dotted #00CCFF; padding:0px 10px; text-align:center;">Landlord Details</span>
                        </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Landlord</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Select Land Lord Details"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_land_lord_dtl" id="txt_land_lord_dtl">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($Landlord as $landlrddtl) { ?>
                                        <option value="<?php echo $landlrddtl['land_id'];?>"><?php echo $landlrddtl['sp_lord'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" onClick="return disable()" id="hidbut"><i class="fa fa-check"></i> PROCEED
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/OrderDetails" class="btn">View Order Details</a>
                                </div>
                            </div>
                            <input type="hidden" name="txt_tax_id" id="tax_id" value="" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->
        <input type="hidden" name="mediaType" id="mediaType" value="0" />
<input type="hidden" name="per_prcnt_amt" id="per_prcnt_amt" value="0" />
<input type="hidden" name="pay_tot_amt" id="pay_tot_amt" value="0" />
<input type="hidden" name="apndCount" id="apndCount" value="1" />
        <footer>
            <p>2016 © Bell </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
 
 <script type="text/javascript">
       function showData(tval) {
		   $('#mediaType').val(tval);
		   } 
		   
		    function getinvoice() {
			var bdate = $('#datepicker3').val();
			
					var mtype = $('#mediaType').val();
					var expdate = bdate.split('/'); 
                   //alert(expdate);
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getInvoice",
                        dataType: 'json',
                        data: {renttype: mtype, bday: expdate[1], bmnth: expdate[0], byear: expdate[2]},
                        success: function(res) {
							//alert(res);
							var mtype1 = $('#mediaType').val();
							var bill = 'B/SYNS/GST/'+mtype1+'/'+ +res;
							var Newbill = 'B/SYNS/GST/'+mtype1+'/';
							$('#txt_new_bill').val(Newbill);
							$('#new_bill').css('display','block');
							$('#old_bill').css('display','block');
							$('#txt_bill_no_old').css('display','block');
							$('#txt_bill_no_old').html(bill);
							//alert(res);
                        }
                    });
		   } 
            // Ajax post
           function getType(id) {
                    event.preventDefault();
                    var ID = id;
                   
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getSubMedia",
                        dataType: 'json',
                        data: {mid: ID},
                        success: function(res) {
							$('#txt_media_type').css('display','block');
							$('#txt_media_type').html(res);
							//alert(res);
                        }
                    });
		   }
		     function getType1(id) {
                    event.preventDefault();
                    var ID = id;
                   
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getSubMedia",
                        dataType: 'json',
                        data: {mid: ID},
                        success: function(res) {
							$('#submediaextra').css('display','block');
							$('#txt_media_type1').html(res);
							//alert(res);
                        }
                    });
		   }
		    function getSection(id) {
				$('#osec').submit();
				}
		   function getSection1(id) {
                    event.preventDefault();
                    var ID = id;
                   
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getSectionarea",
                        dataType: 'json',
                        data: {mid: ID},
                        success: function(res) {
							$('#orderarea').css('display','block');
							$('#orderarea').html(res);
							//alert(res);
                        }
                    });
		   }
		   
		   function totAmount(count) {
			  
			   var num = $('#txt_price').val();
			   var numcount = num.split(',');
			   var numQty = numcount.length;
			   var numQnty = numQty-1;
			   var totcount = count.split(',');
			   var qty = totcount.length;
			   var Qnty = qty-1;
			   //alert(Qnty);exit;
			  if(Qnty == 0){
			   var totQty = totcount[0];
			   var totAmountPay = numcount[0]*totcount[0];
			   } else if(Qnty == 1) {
				 var totQty = +totcount[0] + +totcount[1]; 
				 var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]); 
				}
				else if(Qnty == 2) {
				 var totQty = +totcount[0] + +totcount[1] + +totcount[2];  
				  var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]) + +(numcount[2]*totcount[2]);
				}
				else if(Qnty == 3) {
				 var totQty = +totcount[0] + +totcount[1] + +totcount[2] + +totcount[3];
				 var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]) + +(numcount[2]*totcount[2]) + +(numcount[3]*totcount[3]);  
				}
				else if(Qnty == 4) {
				 var totQty = +totcount[0] + +totcount[1] + +totcount[2] + +totcount[3] + +totcount[4];  
				 var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]) + +(numcount[2]*totcount[2]) + +(numcount[3]*totcount[3]) + +(numcount[4]*totcount[4]);
				}
				else if(Qnty == 5) {
				 var totQty = +totcount[0] + +totcount[1] + +totcount[2] + +totcount[3] + +totcount[4] + +totcount[5];
				 var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]) + +(numcount[2]*totcount[2]) + +(numcount[3]*totcount[3]) + +(numcount[4]*totcount[4]) + +(numcount[5]*totcount[5]);  
				}
				else if(Qnty == 6) {
				 var totQty = +totcount[0] + +totcount[1] + +totcount[2] + +totcount[3] + +totcount[4] + +totcount[5] + +totcount[6]; 
				 var totAmountPay = +(numcount[0]*totcount[0]) + +(numcount[1]*totcount[1]) + +(numcount[2]*totcount[2]) + +(numcount[3]*totcount[3]) + +(numcount[4]*totcount[4]) + +(numcount[5]*totcount[5]) + +(numcount[6]*totcount[6]);  
				}
				
			   var total = totAmountPay;
			   //alert(total);
			   $('#txt_total').val(total);
			   $('#pay_tot_amt').val(total);
			   $('#txt_chrg_amt').val(total);
			   }
             $(function() {
    $( "#datepicker" ).datepicker();
	multidate: true;
  }); 
   $(function() {
    $( "#datepicker2" ).datepicker();
	multidate: true;
  });
   $(function() {
    $( "#datepicker22" ).datepicker();
	multidate: true;
  });
  $(function() {
    $( "#datepicker3" ).datepicker();
  });
   $(function() {
    $( "#datepicker33" ).datepicker();
  });  
  function percent_calcu(per,pos){
	  var tot = $('#txt_total').val();
	 var res = per.split("-");
	 // alert(res[0]);
	 var taxId = $('#tax_id').val();
	 if(taxId == '') { 
	  var newTaxid = res[1];
	 } else {
	 var newTaxid = taxId+','+res[1];
	 }
	 $('#tax_id').val(newTaxid);
	  var cal_per = (tot*res[0])/100;
	  var posit = 'per_'+ +pos;
	  $('#'+posit).val(cal_per);
	  var cur_pertot = $('#per_prcnt_amt').val();
	  var tot_per = +cur_pertot + +cal_per;
	  $('#per_prcnt_amt').val(tot_per);
	  var chrg_amt_pay = +tot + +tot_per;
	  $('#txt_chrg_amt').val(chrg_amt_pay);
	  $('#pay_tot_amt').val(chrg_amt_pay);
	  }
  function calculation_total(othr_amt) {
	   var tot = $('#pay_tot_amt').val();
	   var cal_tot = +tot + +othr_amt;
	   $('#txt_chrg_amt').val(cal_tot);
	  }
	  
	    
	
        </script>  
         <script>
    $(function() {
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        
        $( "#skills" ).bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                $( this ).autocomplete( "instance" ).menu.active ) {
                event.preventDefault();
            }
        })
        .autocomplete({
            minLength: 1,
            source: function( request, response ) {
                // delegate back to autocomplete, but extract the last term
                $.getJSON("<?php echo base_url();?>skills.php", { term : extractLast( request.term )},response);
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.value );
                // add placeholder to get the comma-and-space at the end
                terms.push( "" );
                this.value = terms.join( ", " );
                return false;
            }
        });
    });
	$('#txt_media_area').multiselect({ 
         includeSelectAllOption: true,
           enableFiltering:true         
           
     });
	 function ptype(tval) {
	 if(tval == 1) {
	 $('#package').css('display','block');
	 $('#notPackage').css('display','none');
	 }
	 else if(tval == 2) {
	 $('#package').css('display','none');
	 $('#notPackage').css('display','block');
	 }
	 }
	 
	 function getState(ths,stateid){
	 var state_code = $(ths).find('[value='+stateid+']').data('code');
	 $('#state_code').val(state_code);
	 }
    </script>