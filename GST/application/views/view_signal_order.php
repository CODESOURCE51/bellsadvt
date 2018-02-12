<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Signal Details List</h1>
                
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
                <li class="active">Signal Details List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Signal Details List</h3>
						
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
                                <th></th>
                                <!-- <th>BILL</th>-->
                                <th>Area</th>
                                  <th>Client</th>
                                   <th>Order From</th>
                                    <th>Order No</th>
                                     <th>Order Upto</th>
                                    <th>Pole</th>
                                    <th>Arm</th>
                                    <th>Bldng. Material</th>
                                    <th>Paints</th>
                                    <th>Aspects</th>
                                    <th>Led</th>
                                    <th>Meter Box</th>
                                    <th>Ctrl. Box</th>
                                    <th>Cable</th>
                                    <th>Note</th>
                                    <th>CPU</th>
                                    <th>Pwr.Sply</th>
                                    <th>Modular</th>
                                    <th>Modem</th>
                                    <th>Antena</th>
                                    <th>Note</th>
                                   <th>Others</th>
                                   <th>Note</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) {
								$marea = $this->db->query('SELECT * FROM td_area WHERE area_id In('.$values['area'].')')->result_array();
									$mclient = $this->db->query('SELECT * FROM td_client WHERE client_id='.$values['client'])->result_array();	
								
								?>
                                    <tr class="table-flag-blue">
                                    <td></td>
                                    <td><?php echo $marea[0]['area_name'];?></td>
                                     <td><?php echo $mclient[0]['client_name'];?></td>
                                     <td><?php echo $values['od_from'];?></td>
                                     <td><?php echo $values['od_num'];?></td>
                                     <td><?php echo $values['duration'];?></td>
                                    <td><?php echo $values['pole'];?></td>
                                     <td><?php echo $values['arm'];?></td>
                                    <td><?php echo $values['bld_mat'];?></td>
                                    <td><?php echo $values['paints'];?></td>
                                    <td><?php echo $values['aspects'];?></td>
                                     <td><?php echo $values['led'];?></td>
                                    <td><?php echo $values['met_box'];?></td>
                                     <td><?php echo $values['ctrl_box'];?></td>
                                    <td><?php echo $values['cble'];?></td>
                                    <td><?php echo $values['first_note'];?></td>
                                     <td><?php echo $values['cpu'];?></td>
                                    <td><?php echo $values['psply'];?></td>
                                     <td><?php echo $values['moduler'];?></td>
                                    <td><?php echo $values['modem'];?></td>
                                     <td><?php echo $values['antena'];?></td>
                                      <td><?php echo $values['second_note'];?></td>
                                    <td>JB: <?php echo $values['jb'];?><br/>
                                    Connector: <?php echo $values['connector'];?><br/>
                                    Wire: <?php echo $values['wiring_wire'];?><br/>
                                    OP Box: <?php echo $values['op_box'];?><br/>
                                    DP: <?php echo $values['dp'];?><br/>
                                    Push Swtch: <?php echo $values['push_switch'];?><br/>
                                    Transfrmr: <?php echo $values['transform'];?><br/>
                                    Rlay Pnl: <?php echo $values['rlay_pan'];?><br/>
                                    Fuse con: <?php echo $values['fuse_conect'];?><br/>
                                    Fuse: <?php echo $values['fuse'];?><br/>
                                    Tie: <?php echo $values['tie'];?><br/>
                                    Terminal: <?php echo $values['terminal'];?><br/>
                                     Earthin: <?php echo $values['earthin'];?><br/>
                                      <td><?php echo $values['third_note'];?></td>
                                    </td>
                                    <td><a href="<?php echo base_url();?>index.php/Delete/Signal/<?php echo $values['sig_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a>
                                                                     
                                    </td>
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
