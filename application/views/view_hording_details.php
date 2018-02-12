<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Hording Installation List</h1>
                
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
                <li class="active">Hording Installation List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Hording Installation List</h3>
						
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
                                <th><!--<a href="#" onclick="getCheckedCheckboxesFor()">Print</a>--></th>
                                <!-- <th>BILL</th>-->
                                 <th>Area</th>
                                  <th>Client</th>
                                   <th>Order From</th>
                                    <th>Order No</th>
                                     <th>Order Upto</th>
                                    <th>Joist</th>
                                    <th>Channel</th>
                                    <th>Angel</th>
                                    <th>Nut</th>
                                    <th>Note</th>
                                    <th>Building</th>
                                    <th>Building Note</th>
                                    <th>Board</th>
                                    <th>Board Note</th>
                                    <th>Electrical Goods</th>
                                    
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
                                    <td><!--<input type="checkbox" name="clients" value="<?php echo $values['order_id'];?>" />--></td>
                                     <td><?php echo $marea[0]['area_name'];?></td>
                                     <td><?php echo $mclient[0]['client_name'];?></td>
                                     <td><?php echo $values['od_from'];?></td>
                                     <td><?php echo $values['od_num'];?></td>
                                     <td><?php echo $values['duration'];?></td>
                                    <td><?php echo $values['joist'];?></td>
                                     <td><?php echo $values['channel'];?></td>
                                    <td><?php echo $values['angel'];?></td>
                                    <td><?php echo $values['nut'];?></td>
                                    <td><?php echo $values['first_note'];?></td>
                                    <td>Cement: <?php echo $values['cement'];?></br>
                                     Sand : <?php echo $values['sand'];?></br>
                                    Stone Chips :<?php echo $values['stone'];?></br>
                                     Brick : <?php echo $values['brick'];?></td>
                                     <td><?php echo $values['second_note'];?></td>
                                    <td>Sheet : <?php echo $values['sheet'];?></br>
                                     Wood : <?php echo $values['wood'];?></br>
                                     Nail: <?php echo $values['nail'];?></br>
                                    Labour: <?php echo $values['labour'];?></td>
                                   <td><?php echo $values['third_note'];?></td>
                                    <td>Lamp: <?php echo $values['lamp'];?></br>
                                    Choke: <?php echo $values['chok'];?></br>
                                    Ignator: <?php echo $values['ignator'];?></br>
                                    Condensor: <?php echo $values['condensor'];?></br>
                                    Holder: <?php echo $values['holder'];?></td>
                                    <td><?php echo $values['frth_note'];?></td>
                                    <td><a href="<?php echo base_url();?>index.php/Delete/HordingDetails/<?php echo $values['hord_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a>
                                                                     
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
