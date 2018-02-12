<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Land Lord List</h1>
                
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
                <li class="active">Trading List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Trading List</h3>
						
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <h3 style="color:#FF0000"><?php if(isset($_REQUEST['d'])) echo 'You already have billed with one / both of these orders. Please check';?></h3>
                        <br/><br/>

                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                <!--<th><a href="#" onclick="getCheckedCheckboxesFor()">Print</a></th>-->
                                <th></th>
                                    
                                    <th>Name</th>
                                    <th>Acquired From</th>
                                    <th>Deal ends</th>
                                    <th>Tax</th>
                                    <th>Electricity</th>
                                    <th>Miscellaneous</th>
                                    <th>Billing Amount</th>
                                   <th>Total Amount</th>
                                     
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) {
									
									
								?>
                                    <tr class="table-flag-blue">
                                    <!--<td><input type="checkbox" name="clients" value="<?php echo $values['order_id'];?>" /></td>-->
                                    <!--<td><a href="<?php echo base_url();?>index.php/Index/Rentalreview/<?php echo $values['bill_no'];?>/<?php echo $values['bill_m'];?>/<?php echo $values['bill_y'];?>" target="_blank">B/SYNS/<?php echo $values['bill_no'];?></a></td>-->
                                    <td><!--<a href="<?php echo base_url();?>index.php/Index/PrintBill/<?php echo $values['land_id'];?>" target="_blank">Print</a>--></td>
                                    
                                    <td><?php echo $values['sp_lord'];?></td>
                                     <td><?php echo $values['sp_start'];?></td>
                                    <td><?php echo $values['sp_ends'];?></td>
                                    <td><?php echo $values['sp_tax'];?></td>
                                    <td><?php echo $values['sp_elec'];?></td>
                                    <td><?php echo $values['sp_misc'];?></td>
                                    <td><?php echo $values['sp_price'];?></td>
                                    <td><?php echo $values['sp_price']+$values['sp_misc']+$values['sp_elec']+$values['sp_tax'];?></td>
                                   <td><a href="<?php echo base_url();?>index.php/Edit/Trading/<?php echo $values['trad_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Delete/Trading/<?php echo $values['trad_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a></td>
                                </tr>
                               <?php } ?>
                                
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © Bell</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

<?php include_once('templates/footer.php');?>
<script type="text/javascript">
function getCheckedCheckboxesFor() {
   var checkboxes = document.getElementsByName('clients');
var selected = [];
for (var i=0; i<checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        selected.push(checkboxes[i].value);
    }
}
 if(selected == '') {
    alert('You didn"t Select Any Order');
 } else {
    //alert(selected);
    //window.location.href = 'billing_multiple.php?bill_id='+selected;
    window.open('<?php echo base_url();?>index.php/Index/MultiRental/'+btoa(encodeURIComponent(selected)),'_blank');
 }
}
</script>
