
<!--basic scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url();?>assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chosen-bootstrap/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexdatalist.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-multiselect.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/dropzone/downloads/dropzone.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!--flaty scripts-->
<script src="<?php echo base_url();?>js/flaty.js"></script>
<script src="<?php echo base_url();?>js/flaty-demo-codes.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/sweet/sweetalert.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/numtoword.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweet/sweetalert.css">
</div>
<!-- END Container -->
<script type="text/javascript">
	function check_type(val) {
		if( val == 'web') {
			$('#domain').css('display','block');
		} else {
			$('#domain').css('display','none');
		}
	}
	function service_type(val) {
		if( val == 'many') {
			$('#duration').css('display','block');
		} else {
			$('#duration').css('display','none');
		}
	}
function validate_client() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Add Client Name');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_company() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Add Company Name');  
                                }
								if ($('#txt_phn').val() == '') {
                                    errors.push('Please Add Phone no');  
                                }
								if ($('#txt_email').val() == '') {
                                    errors.push('Please Add Email');  
                                }
								if ($('#txt_pan').val() == '') {
                                    errors.push('Please Add PAN No');  
                                }
								if ($('#txt_sa').val() == '') {
                                    errors.push('Please Add Service Tax');  
                                }
								if ($('#txt_vat').val() == '') {
                                    errors.push('Please Add VAT Number');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_order() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_media').val() == '') {
                                    errors.push('Please Select Media Name');  
                                }
								if ($('#txt_media_type').val() == '') {
                                    errors.push('Please Select Media Type');  
                                }
								if ($('#txt_media_area').val() == '') {
                                    errors.push('Please Select Area');  
                                }
								if ($('#txt_media_client').val() == '') {
                                    errors.push('Please Select Client');  
                                }
								if ($('#txt_media_size').val() == '') {
                                    errors.push('Please Select Media Size');  
                                }
								if ($('#txt_media_bill').val() == '') {
                                    errors.push('Please Select bill type');  
                                }
								 
								 
								if ($('#datepicker').val() == '') {
                                    errors.push('Please Choose Rental Start Date');  
                                } 
								if ($('#datepicker2').val() == '') {
                                    errors.push('Please Choose Rental End Date');  
                                } 
								if ($('#datepicker3').val() == '') {
                                    errors.push('Please Choose Billing Date');  
                                }                 
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_m_nom() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_media').val() == '') {
                                    errors.push('Please Select Main Media');  
                                }
								 if ($('#txt_main_booked_no').val() == '') {
                                    errors.push('Please Add Number of Booked Main Media');  
                                }
								if ($('#txt_main_vac_no').val() == '') {
                                    errors.push('Please Add Number of Vacant Main Media');  
                                }
								if ($('#txt_media_area').val() == '') {
                                    errors.push('Please Select Area');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}

function validate_m_type() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_media').val() == '') {
                                    errors.push('Please Select Main Media');  
                                }
								if ($('#txt_type').val() == '') {
                                    errors.push('Please Add Media Type Name');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}

function validate_media_type() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                              
								if ($('#txt_service').val() == '') {
                                    errors.push('Please Add Media Type Name');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}


function validate_service() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_service').val() == '') {
                                    errors.push('Please Add Service Name');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}

function validate_taxes() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_service').val() == '') {
                                    errors.push('Please Add Service Charge Name');  
                                }
								 if ($('#txt_percent').val() == '') {
                                    errors.push('Please Add Percentage');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_size() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_size').val() == '') {
                                    errors.push('Please Add Media Size');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}

function validate_area() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_area').val() == '') {
                                    errors.push('Please Add Area Name');  
                                }
								 if ($('#txt_landmark').val() == '') {
                                    errors.push('Please Add Landmark');  
                                }
								if ($('#txt_address').val() == '') {
                                    errors.push('Please Insert Address');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}


function validate_project() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_project').val() == '') {
                                    errors.push('Please Add Service Name');  
                                }
                                if (!$("input[name='txt_type']:checked").val()) {
                                    errors.push('Please Select Project type');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_serviceassign() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Select Client Name');  
                                }
								if ($('#txt_stype').val() == '') {
                                    errors.push('Please Select Type');  
                                }
								if ($('#txt_service').val() == '') {
                                    errors.push('Please Select Service Name');  
                                }
								if ($('#txt_cost').val() == '') {
                                    errors.push('Please Add Cost');  
                                }
			                	if ($('#txt_stype').val() == 'many') 
                                               {
								if ($('#txt_duration').val() == '') {
                                    errors.push('Please Add Duration');  
                                }
								if ($('#txt_alloc_date').val() == '') {
                                    errors.push('Please Add Allocation Date');  
                                }
                                                    }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
</script>
</body>
</html>
