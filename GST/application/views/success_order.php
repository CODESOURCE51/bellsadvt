<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Print Order</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Print Order</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                    
                       <div class="col-md-4 col-md-push-4">
<div class="box box-blue">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> <?php echo $lastDetail[0]['invoice_no'];?></h3>
<div class="box-tool">
<a data-action="config" data-modal="setting-modal-1" href="#"><i class="fa fa-gear"></i></a>
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<p style="text-align:center;"><code>Your Billing Entry was Successful. Please click to Print the Bill now .</code></p>
<p style="text-align:center;"><?php if($lastDetail[0]['bill_type'] == 'R') { ?><a href="<?php echo base_url();?>index.php/Index/RentalPrint/<?php echo $lastDetail[0]['order_id'];?>" target="_blank"><button class="btn btn-success">Print</button></a><?php } elseif($lastDetail[0]['bill_type'] == 'P') { ?> <a href="<?php echo base_url();?>index.php/Index/Printing/<?php echo $lastDetail[0]['order_id'];?>" target="_blank"><button class="btn btn-success">Print</button></a><?php } elseif($lastDetail[0]['bill_type'] == 'M') { ?><a href="<?php echo base_url();?>index.php/Index/MountPrint/<?php echo $lastDetail[0]['order_id'];?>" target="_blank"><button class="btn btn-success">Print</button></a> <?php } ?></p>
<p style="text-align:center;"><a href="<?php echo base_url();?>index.php/Index/Order" target="_blank"><button class="btn btn-warning">Enter New Billing</button></a> </p>
</div>
</div>
</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->
       
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
 
 