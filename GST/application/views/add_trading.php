<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add New Trading Details</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Add New Trading Details</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>index.php/Add/Trading" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_trading();">
                           
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Space acquired from</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Landlord Name"
                                           data-original-title="Optional" data-placement="top" name="txt_space_lord" id="txt_space_lord"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Space acquiring Price</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Price"
                                           data-original-title="Optional" data-placement="top" name="txt_space_price" id="txt_space_price"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Space Size</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Size"
                                           data-original-title="Optional" data-placement="top" name="txt_space_size" id="txt_space_size"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Address</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Address"
                                           data-original-title="Optional" data-placement="top" name="txt_space_add" id="txt_space_add"/>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">space Rental starts</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Rental start Date"
                                           data-original-title="Optional" data-placement="top" name="txt_space_rental_start" id="datepicker22"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">space Rental ends</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Rental end Date"
                                           data-original-title="Optional" data-placement="top" name="txt_space_rental_end" id="datepicker33"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Tax (Corp/Muni/Panch)</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Price"
                                           data-original-title="Optional" data-placement="top" name="txt_space_tax" id="txt_space_tax"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Electricity</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Electricity Price"
                                           data-original-title="Optional" data-placement="top" name="txt_space_elec" id="txt_space_elec"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Miscellaneous</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Miscellaneous Price"
                                           data-original-title="Optional" data-placement="top" name="txt_space_misc" id="txt_space_misc"/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Remarks</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Space Miscellaneous Remarks"
                                           data-original-title="Optional" data-placement="top" name="txt_misc_remarks" id="txt_misc_remarks"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" onClick="return disable()" id="hidbut"><i class="fa fa-check"></i> PROCEED
                                    </button>
                                    <a href="<?php echo base_url();?>index.php/view/Trading" class="btn">View Trading Details</a>
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
		   
		    function getinvoice(bdate) {
                    event.preventDefault();
					var mtype = $('#mediaType').val();
					var expdate = bdate.split('/'); 
                   
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/Index/getInvoice",
                        dataType: 'json',
                        data: {renttype: mtype, bday: expdate[1], bmnth: expdate[0], byear: expdate[2]},
                        success: function(res) {
							var mtype1 = $('#mediaType').val();
							var bill = 'B/SYNS/'+mtype1+'/'+ +res;
							var Newbill = 'B/SYNS/'+mtype1+'/';
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