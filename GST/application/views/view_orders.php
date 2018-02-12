<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Order List</h1>
                
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
                <li class="active">Order List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Order List</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        
                        <br/><br/>

                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                    <th>INV No</th>
                                    <th>Main Media</th>
                                    <th>Media Type</th>
                                    <th>Area</th>
                                    <th>Size</th>
                                    <th>Client</th>
                                    <th>Media Title</th>
                                    <th>Quantity</th>
                                     <th>Rental Starts</th>
                                    <th>Rental Ends</th>
                                    <th>Billing Date</th>
                                    <th>Service Charges</th>
                                    <th>Other Charges</th>
                                    <th>Billing Amount</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) {
									$expt = explode(',',$values['tax_id']); 
									$exp_cnt = count($expt)-1;
									if($exp_cnt == 1){
									$exp_cnt1 = 3;
									$ck = 3;
									} else{
									$exp_cnt1 = $exp_cnt;
									$ck=1;
									}
								?>
                                    <tr class="table-flag-blue">
                                    <?php if($values['bill_type'] == 'R') { ?>
                                    <td><a href="<?php echo base_url();?>index.php/Index/RentalPrint/<?php echo $values['order_id'];?>" target="_blank"><?php echo $values['invoice_no'];?></a></td><?php } elseif($values['bill_type'] == 'P') { ?>
                                    <td><a href="<?php echo base_url();?>index.php/Index/Printing/<?php echo $values['order_id'];?>" target="_blank"><?php echo $values['invoice_no'];?></a></td>
                                     <?php } elseif($values['bill_type'] == 'M') { ?>
									 <td><a href="<?php echo base_url();?>index.php/Index/MountPrint/<?php echo $values['order_id'];?>" target="_blank"><?php echo $values['invoice_no'];?></a></td>
									 <?php } ?>
                                    <td><?php echo $MainM[0]['service_name'];?></td>
                                     <td><?php echo $Mtype[0]['type'];?></td>
                                    <td><?php echo $marea[0]['area_name'];?></td>
                                    <td><?php echo $msize[0]['size'];?></td>
                                    <td><?php echo $mclient[0]['client_name'];?></td>
                                     <td><?php echo $values['main_media_title'];?></td>
                                    <td><?php echo $values['quantity'];?></td>
                                     <td><?php echo $values['rent_f'];?></td>
                                    <td><?php echo $values['rent_t'];?></td>
                                     <td><?php echo $values['bill_m'].'/'.$values['bill_d'].'/'.$values['bill_y'];?></td>
                                    <td><?php if($values['tax_id'] != '') {for($i=$ck;$i<=$exp_cnt1;$i++) { $taxes = $this->db->query('SELECT * FROM td_service_charge WHERE sc_id='.$expt[$i])->result_array();$tid = $i+1;?><?php echo $taxes[0]['charge_name'];?><br/>(<?php echo $values['tax'.$i];?>)<hr style="border-top:1px solid #000;"><?php }}?></td>
                                    <td><?php echo $values['other_charge'];?></td>
                                    <td><?php echo $values['chrge_amt'];?></td>
                                    <td><a href="<?php echo base_url();?>index.php/Delete/Orders/<?php echo $values['order_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a>
                                                                     
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
            <p>2016 © BELL</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

<?php include_once('templates/footer.php');?>
