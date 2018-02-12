<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Payment List</h1>
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
                <li class="active">Payment List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Payment List</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <ul class="messages">
                        <?php
						if(!empty($data)){ 
						foreach($data as $val){?>
                            <li>
                                <img src="<?php echo base_url();?>img/notify.jpg" alt="">

                                <div>
                                    <div class="row">
                                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-10">
                                            <div>
                                                <h5><?php foreach($client as $clientval){echo $clientval['client_name'];}?></h5>
                                            </div>
                                          <p>
                              Service: <?php foreach($service as $serviceval){echo $serviceval['service_name'];}?><br>
                              Cost: <?php echo $val['cost'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Duration: <?php echo $val['duration']." Days";?> <br>
                              Allocation Date: <?php echo $val['allocation_date'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Expiry Date: <?php echo $val['expiry_date'];?><br>
                                          </p>
                                          <p></p>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                            <a href="<?php echo base_url()?>index.php/Update/Payment/<?php echo $val['sa_id'];?>" class="btn btn-primary mybtn">Pay</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }}?>    
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © Client Management System </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->

<?php include_once('templates/footer.php');?>
