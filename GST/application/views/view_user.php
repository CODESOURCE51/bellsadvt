<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>User List</h1>
                
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
                <li class="active">User List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> User List</h3>

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
                                    <th>User Name</th>
                                    <th>Password</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($Users as $values) { ?>
                                    <tr class="table-flag-blue">
                                    <td><?php echo $values['user'];?></td>
                                    <td><?php echo $values['pass_original'];?></td>
                                     <td><a href="<?php echo base_url();?>index.php/Edit/User/<?php echo $values['id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Delete/User/<?php echo $values['id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a>&nbsp;<?php if($values['login_allow'] != 1){ ?><a href="<?php echo base_url();?>index.php/Index/SubAdminAllow/<?php echo $values['id'];?>"><span class="badge badge-success">Allow Login</span></a><?php } else { ?><a href="<?php echo base_url();?>index.php/Index/SubAdminCancel/<?php echo $values['id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Disallow Login Access" data-original-title="Admin Action" data-placement="top"><i class="fa fa-cut"></i></button></a><?php } ?>&nbsp;<a href="<?php echo base_url();?>index.php/Index/SubAdminAccess/<?php echo $values['id'];?>"><span class="badge badge-success">Give / Cancel Access <i class="fa fa-star"></i></span></a></td>
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
