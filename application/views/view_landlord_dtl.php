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
                <li class="active">Land Lord List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Land Lord List</h3>
						
                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <!--<h3 style="color:#FF0000"><?php if(isset($_REQUEST['d'])) echo 'You already have billed with one / both of these orders. Please check';?></h3>-->
                        <br/><br/>

                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                <!--<th><a href="#" onclick="getCheckedCheckboxesFor()">Print</a></th>-->
                                <th>VOUCHER</th>
                                    
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Tax Size</th>
                                    <th>Acquired From</th>
                                    <th>Deal ends</th>
                                    <th>Tax</th>
                                    <th>Electricity</th>
                                    <th>Miscellaneous</th>
                                    <th>Billing Amount</th>
                                   <th>Total Amount</th>
                                     <th>Action</th> 
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) {
									
									
								?>
                                    <tr class="table-flag-blue">
                                    <!--<td><input type="checkbox" name="clients" value="<?php echo $values['order_id'];?>" /></td>-->
                                    <!--<td><a href="<?php echo base_url();?>index.php/Index/Rentalreview/<?php echo $values['bill_no'];?>/<?php echo $values['bill_m'];?>/<?php echo $values['bill_y'];?>" target="_blank">B/SYNS/<?php echo $values['bill_no'];?></a></td>-->
                                    <td><a href="<?php echo base_url();?>index.php/Index/PrintBill/<?php echo $values['land_id'];?>" target="_blank">Print</a></td>
                                    
                                    <td><?php echo $values['sp_lord'];?></td>
                                   <td><?php echo $values['loc'];?></td>
                                   <td><?php echo $values['tax_size'];?></td>
                                     <td><?php echo $values['sp_start'];?></td>
                                    <td><?php echo $values['sp_ends'];?></td>
                                    <td><?php echo $values['sp_tax'];?></td>
                                    <td><?php echo $values['sp_elec'];?></td>
                                    <td><?php echo $values['sp_misc'];?></td>
                                    <td><?php echo $values['sp_price'];?></td>
                                    <td><?php echo $values['sp_price']+$values['sp_misc']+$values['sp_elec']+$values['sp_tax'];?></td>
                                   <td><a href="<?php echo base_url();?>index.php/Edit/Landlord/<?php echo $values['land_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Delete/Landlord/<?php echo $values['land_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a></td>
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

