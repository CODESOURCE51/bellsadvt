<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Service Assigned List</h1>
                
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
                <li class="active">Service Assigned List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Service Assigned List</h3>

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
                                    <th>Client Name</th>
                                    <th>Service Name</th>
                                    <th>Duration</th>
                                    <th>Cost</th>
                                    <th>Alloc Date</th>
                                    <th>Exp Date</th>
                                    <th>Notif Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) {
					
$client = $this->db->query('select * from td_client where client_id = '.$values['client_id'])->result_array();
$service = $this->db->query('select * from td_service where service_id = '.$values['service_id'])->result_array();
									 ?>
                                    <tr class="table-flag-blue">
                                    <td><?php echo $client[0]['client_name'];?></td>
                                    <td><?php echo $service[0]['service_name'];?></td>
                                    <td><?php echo $values['duration'];?></td>
                                    <td><?php echo $values['cost'];?></td>
                                    <td><?php echo $values['allocation_date'];?></td>
                                    <td><?php echo $values['expiry_date'];?></td>
                                    <td><?php echo $values['notification_date'];?></td>
                                    <td><?php if($values['status']==1){?> 
 <a href="<?php echo base_url();?>index.php/Edit/ServiceAssign/<?php echo $values['sa_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;
 <?php /*?><a href="<?php echo base_url();?>index.php/Update/ServiceStatus/<?php echo $values['client_id'];?>/<?php echo $values['sa_id'];?>" onClick="return confirm('Are you sure to block this service? Once blocked, it can not be activted later')"><button class="btn btn-circle btn-bordered btn-warning btn-success show-popover" data-trigger="hover" data-content="Block This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-star"></i></button></a><?php */?>
  <?php if($values['due_status']==1){?> 
 <button class="btn btn-circle btn-bordered btn-warning btn-danger show-popover" data-content="This Service Has been Expired" data-original-title="Admin Action" data-trigger="hover" data-placement="top"><i class="fa fa-cut"></i></button>
   <?php }?>
 <?php }else{?><button class="btn btn-circle btn-bordered btn-warning btn-danger show-popover" data-content="Blocked Service" data-original-title="Admin Action" data-trigger="hover" data-placement="top"><i class="fa fa-align-justify"></i></button>
  <?php if($values['due_status']==1){?> 
 <button class="btn btn-circle btn-bordered btn-warning btn-danger show-popover" data-content="This Service Has been Expired" data-original-title="Admin Action" data-trigger="hover" data-placement="top"><i class="fa fa-cut"></i></button>
   <?php }?>
 <?php }?></td>
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
