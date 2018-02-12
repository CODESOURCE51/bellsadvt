<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Media List / Area</h1>
                
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
                <li class="active">Media List/ Area</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Media List / Area</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <br/><br/>

                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                        <?php if(!empty($data)) { ?>
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                    <th>Media Name</th>
                                    <?php if($data[0]['display1'] != 'NA') {?>
                                    <th>Display 1</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <?php if($data[0]['display2'] != 'NA') {?>
                                    <th>Display 2</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <?php if($data[0]['display3'] != 'NA') {?>
                                    <th>Display 3</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <?php if($data[0]['display4'] != 'NA') {?>
                                    <th>Display 4</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <?php if($data[0]['display5'] != 'NA') {?>
                                    <th>Display 5</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <?php if($data[0]['display6'] != 'NA') {?>
                                    <th>Display 6</th>
                                    <?php } else echo ' <th>NA</th>';?>
                                    <th>Area</th>
                                    
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) { 
								$main_sql = $this->db->query("SELECT * FROM td_service WHERE service_id=".$values['main_media'])->result_array();
								$area_sql = $this->db->query("SELECT * FROM td_area WHERE area_id=".$values['area'])->result_array();
								?>
                                    <tr class="table-flag-blue">
                                    <td><?php echo $main_sql[0]['service_name'];?><br/>B : <?php echo $values['main_media_booked'];?> &nbsp; V : <?php echo $values['main_media_vac'];?></td>
                                    <?php if($values['display1'] != 'NA') {?>
                                    <td><?php echo $values['display1'];?><br/>B : <?php echo $values['display1_booked'];?> &nbsp; V : <?php echo $values['display1_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <?php if($values['display2'] != 'NA') {?>
                                    <td><?php echo $values['display2'];?><br/>B : <?php echo $values['display2_booked'];?> &nbsp; V : <?php echo $values['display2_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <?php if($values['display3'] != 'NA') {?>
                                    <td><?php echo $values['display3'];?><br/>B : <?php echo $values['display3_booked'];?> &nbsp; V : <?php echo $values['display3_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <?php if($values['display4'] != 'NA') {?>
                                    <td><?php echo $values['display4'];?><br/>B : <?php echo $values['display4_booked'];?> &nbsp; V : <?php echo $values['display4_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <?php if($values['display5'] != 'NA') {?>
                                    <td><?php echo $values['display5'];?><br/>B : <?php echo $values['display5_booked'];?> &nbsp; V : <?php echo $values['display5_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <?php if($values['display6'] != 'NA') {?>
                                    <td><?php echo $values['display6'];?><br/>B : <?php echo $values['display6_booked'];?> &nbsp; V : <?php echo $values['display6_vacant'];?></td>
                                    <?php } else echo ' <td>NA</td>';?>
                                    <td><?php echo $area_sql[0]['area_name'];?> (<?php echo $area_sql[0]['landmark'];?>)</td>
                                     <td><a href="<?php echo base_url();?>index.php/Edit/MediaCount/<?php echo $values['num_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/Delete/MediaCount/<?php echo $values['num_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a></td>
                                </tr>
                               <?php } ?>
                                
                               
                                </tbody>
                            </table>
                            <?php } ?>
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
