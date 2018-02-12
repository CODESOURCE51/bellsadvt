<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Company Details</h1>
                
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
                <li class="active">Company Details</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Company Details</h3>

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
                                    <th> Name</th>
                                    <th> Phone</th>
                                    <th> Email</th>
                                    <th>PAN No</th>
                                    <th>Service Tax No</th>
                                    <th>VAT No</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) { ?>
                                    <tr class="table-flag-blue">
                                    <td><?php echo $values['com_name'];?></td>
                                    <td><?php echo $values['com_ph'];?></td>
                                     <td><?php echo $values['com_email'];?></td>
                                    <td><?php echo $values['pan'];?></td>
                                    <td><?php echo $values['sa'];?></td>
                                    <td><?php echo $values['vat'];?></td>
                                    <td><a href="<?php echo base_url();?>index.php/Edit/Company/<?php echo $values['com_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Delete/Company/<?php echo $values['com_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a>
                                    &nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/View/ClientService/<?php echo $values['com_id'];?>"><button class="btn btn-circle btn-bordered btn-inverse show-popover" data-trigger="hover" data-content="My Assigned Service" data-original-title="Admin Action" data-placement="top"><i class="fa fa-home"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Index/serviceassign/<?php echo $values['com_id'];?>"><button class="btn btn-circle btn-bordered btn-inverse btn-pink show-popover" data-trigger="hover" data-content="Assign New Service" data-original-title="Admin Action" data-placement="top"><i class="fa fa-cog"></i></button></a>                                 
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
