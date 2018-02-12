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
                                    <a href="javascript:void(0);" onClick="return addRow()">add More</a>
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
                                <label class="col-sm-3 col-lg-2 control-label">Media Title</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_media_title" id="txt_media_title"/>
                                </div>
                            </div>
                           
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Bill Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_bill" id="txt_media_bill">		
                                            <option value="">Select...</option>
                                             <option value="P">Printing</option>
                                             <option value="M">Mounting</option>
                                             <option value="R">Rental</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Area</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_area" id="txt_media_area" >
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($main_area as $main_areas) { ?>
                                        <option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Size</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_size" id="txt_media_size">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($size as $sizes) { ?>
                                        <option value="<?php echo $sizes['size_id'];?>"><?php echo $sizes['size'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Price / Piece</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_price" id="txt_price" onkeyup="NumToWord(this.value,'divDisplayWords');"/>
                                           <div id="divDisplayWords" style="font-size: 13; color: Teal; font-family: Arial;"></div>
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
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental From</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_from" id="datepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental To</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_to" id="datepicker2"/>
                                </div>
                            </div>
                           
                            <div id="mularea" style="display:none;">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Area</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_area" id="txt_media_area" >
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($main_area as $main_areas) { ?>
                                        <option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Size</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6"  data-trigger="hover"
                                           data-content="Enter Main Media Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_media_size" id="txt_media_size">
                                       
                                        <option value="">Select...</option>
                                        <?php foreach($size as $sizes) { ?>
                                        <option value="<?php echo $sizes['size_id'];?>"><?php echo $sizes['size'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Price / Piece</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_price" id="txt_price" onkeyup="NumToWord(this.value,'divDisplayWords1');"/>
                                           <div id="divDisplayWords1" style="font-size: 13; color: Teal; font-family: Arial;"></div>
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
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental From</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_from" id="datepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Rental To</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_rental_to" id="datepicker2"/>
                                </div>
                            </div>
                            </div>
                           
                        	 
                          
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Total</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_total" id="txt_total" value="0" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Billing Date</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_bill_date" id="datepicker3"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Select Service Charge</label>

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
                                <label class="col-sm-3 col-lg-2 control-label">Chargable Amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Client Phone"
                                           data-original-title="Optional" data-placement="top" name="txt_chrg_amt" id="txt_chrg_amt" readonly/>
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
 // var multarea = '<div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Select Area</label><div class="col-sm-9 col-lg-10 controls"><select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6" data-trigger="hover" data-content="Enter Main Media Name" data-original-title="Mandatory ***" data-placement="top" name="txt_media_area" id="txt_media_area" ><option value="">Select...</option><?php foreach($main_area as $main_areas) { ?><option value="<?php echo $main_areas['area_id'];?>"><?php echo $main_areas['area_name'];?> (<?php echo $main_areas['landmark'];?>)</option><?php } ?></select></div></div><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Select Size</label><div class="col-sm-9 col-lg-10 controls"><select class="form-control show-popover chosen" data-placeholder="Choose a Category" multiple="multiple" tabindex="6" data-trigger="hover" data-content="Enter Main Media Name" data-original-title="Mandatory ***" data-placement="top" name="txt_media_size" id="txt_media_size"><option value="">Select...</option><?php foreach($size as $sizes) { ?><option value="<?php echo $sizes['size_id'];?>"><?php echo $sizes['size'];?></option><?php } ?></select></div></div><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Price / Piece</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Client Phone" data-original-title="Optional" data-placement="top" name="txt_price" id="txt_price" onkeyup="NumToWord(this.value,"divDisplayWords1");"/><div id="divDisplayWords1" style="font-size: 13; color: Teal; font-family: Arial;"></div></div></div><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Quantity</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Client Phone"data-original-title="Optional" data-placement="top" name="txt_quantity" id="txt_quantity" onKeyUp="return totAmount(this.value)"/></div></div><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Rental From</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Client Phone" data-original-title="Optional" data-placement="top" name="txt_rental_from" id="datepicker"/></div></div><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Rental To</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Client Phone" data-original-title="Optional" data-placement="top" name="txt_rental_to" id="datepicker2"/></div></div>';
 var tt =  ' <div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Main Media Name 2</label><div class="col-sm-9 col-lg-10 controls"><select class="form-control show-popover" data-placeholder="Choose a Category" tabindex="1"  data-trigger="hover" data-content="Enter Main Media Name" data-original-title="Mandatory ***" data-placement="top" name="txt_media" id="txt_media"  onChange="return getType1(this.value);"> <option value="">Select...</option> <?php foreach($main_m as $main_media) { ?> <option value="<?php echo $main_media['service_id'];?>"><?php echo $main_media['service_name'];?></option> <?php } ?> </select></div></div>';
function addRow() {
	var apndcnt = $('#apndCount').val();
	if(apndcnt < 2) {
    $('#mediaextra').append(tt);
	$('#mularea').css('display','block');
	$('#apndCount').val(2);
	} else {
		alert('You can not add more than 1')
		}
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
			   var qty = count;
			   var total = num*qty;
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
    $( "#datepicker3" ).datepicker();
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