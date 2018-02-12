<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Service Report</h1>
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
                <li class="active">Service Report</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Search Service Report</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form action="<?php echo base_url();?>index.php/View/ReportSearch" method="post" class="form-horizontal" onSubmit="return validate_serviceassign();">
                                                       
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Service</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control" name="txt_service" id="txt_service" data-rule-required="true">
                                  <option value="">-- Please select --</option>
                                 <?php foreach ($data as $show_service): ?>
                                 <option value="<?php echo $show_service['service_id'];?>">
								 <?php echo $show_service['service_name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">From Date</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" name="txt_from" class="form-control show-tooltip date-picker" data-trigger="hover"
                                           data-original-title="From Date" id="txt_from"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">To Date</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" name="txt_to" class="form-control show-tooltip date-picker" data-trigger="hover"
                                           data-original-title="To Date" id="txt_to"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($searchdata)){?>
        <div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-content">
<div class="invoice">
<div class="row">
<div class="col-md-6">
<h2><?php echo $service;?></h2>
</div>
<div class="col-md-6 invoice-info">
<p class="font-size-17"><strong>From</strong> <?php echo date('d M, Y',strtotime($from));?> <strong>To</strong> <?php echo date('d M, Y',strtotime($to));?></p>
</div>
</div>

<hr class="margin-0" />

<br/><br/>
<div class="table-responsive">
<table class="table table-striped table-bordered">
<thead>
<tr>
<th class="center">Sl.No.</th>
<th>Service</th>
<th class="hidden-sm">Service Start Date</th>
<th class="hidden-sm">Allocation Date</th>
<th class="hidden-sm">Duration</th>
<th class="hidden-sm">Submission Date</th>
<th class="hidden-480">Expiry Date</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<?php 

$i=0;
foreach($searchdata as $valreport){
$i++;	
$total[]=$valreport['amount'];
?>
<tr>
<td class="center"><?php echo $i;?></td>
<td><?php echo $valreport['service_name'];?></td>
<td class="hidden-sm"><?php echo $valreport['service_date'];?></td>
<td class="hidden-sm"><?php echo $valreport['allocation_date'];?></td>
<td class="hidden-sm"><?php echo $valreport['duration'];?></td>
<td><?php echo $valreport['expiry_date'];?></td>
<td class="hidden-sm"><?php echo $valreport['submission_date'];?></td>
<td><?php echo $valreport['amount'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>

<div class="row">
<div class="col-md-6">
</div>
<div class="col-md-6 invoice-amount">
<p><strong>Total:</strong> <span class="green font-size-17"><img src="<?php echo base_url();?>assets/rs.png" width="60" height="50"><strong><?php echo array_sum($total);?></strong></span></p>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
         <?php } else echo 'No data found :-(';?>
        <!-- END Main Content -->

        <footer>
            <p>2016 © BELL</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>