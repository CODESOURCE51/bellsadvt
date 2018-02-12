<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Bells</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/chosen-bootstrap/chosen.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery.flexdatalist.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/bootstrap-multiselect.css">
    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty-responsive.css">

    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>

<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="#">
        <small>
            <i class="fa fa-desktop"></i>
            Bells
        </small>
    </a>

    <!-- BEGIN Navbar Buttons -->
    <ul class="nav flaty-nav pull-right">

        <!-- BEGIN Button Notifications -->
        <li class="hidden-xs">
           <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-important"> <?php //echo $total_notify;?></span>
            </a>-->

            <!-- BEGIN Notifications Dropdown -->
          <!--  <ul class="dropdown-navbar dropdown-menu">
                <li class="nav-header">
                    <i class="fa fa-warning"></i>
                    <?php echo $total_notify;?> Notifications
                </li>
                <?php foreach($notify as $valnotify){?>
                <li class="notify">
                    <a href="#">
                        <i class="fa fa-comment orange"></i>

                        <p><?php echo $valnotify['client_name']." (".$valnotify['service_name'].")";?></p>
                        <span class="badge badge-warning"></span>
                    </a>
                </li>
                <?php }?>

                <li class="more">
                    <a href="<?php echo base_url()?>index.php/View/PaymentList">See all notifications</a>
                </li>
            </ul>-->
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Notifications -->

        <!-- BEGIN Button User -->
        <li class="user-profile">
            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                <?php if($_SESSION['user'] == 'admin'){?><img class="nav-user-photo" src="<?php echo base_url();?>/img/<?php echo $_SESSION['photo'];?>" alt="Penny's Photo"/><?php } ?>
<span class="hhh" id="user_info">
<?php echo $_SESSION['user'];?>
</span>
                <i class="fa fa-caret-down"></i>
            </a>
 
            <!-- BEGIN User Dropdown -->
            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                <li class="nav-header">
                
                </li>

<?php if($_SESSION['user'] == 'admin'){?>
                <li>
                    <a href="<?php echo base_url();?>index.php/Edit/Editprofile">
                        <i class="fa fa-user"></i>
                        Edit Profile
                    </a>
                </li>
 
                <li class="divider visible-xs"></li>


                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                        Notifications
                        <span class="badge badge-important">8</span>
                    </a>
                </li>
                <li class="divider"></li>
<?php } ?>
                <li>
                    <a href="<?php echo base_url();?>index.php/Index/logout">
                        <i class="fa fa-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
           
            <!-- BEGIN User Dropdown -->
        </li>
        <!-- END Button User -->
    </ul>
    <!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
    <!-- BEGIN Sidebar -->
    <div id="sidebar" class="navbar-collapse collapse">
        <!-- BEGIN Navlist -->
        <ul class="nav nav-list">
            <li>
                <a href="<?php echo base_url();?>index.php/Index/dashboard">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Add</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
                <?php $us_t_ad = $this->db->query('SELECT * FROM td_admin_access WHERE adm_id='.$_SESSION['usid'].' AND acc_type ="add"')->result_array();?>
                <!-- BEGIN Submenu -->
                <ul class="submenu">
                <?php if($us_t_ad[0]['acc1'] == 1) { ?>
                <li><a href="<?php echo base_url();?>index.php/Index/NewUser">USER</a></li>
                <?php } ?>
                <?php if($us_t_ad[0]['acc2'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/serviceadd">Media</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc3'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/MediaType">Media Type</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc17'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Bank">Bank Details</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc4'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/MediaSizes">Media Sizes</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc5'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Area">Area</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc6'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Taxes">Taxes</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc7'] == 1) { ?>
                     <li><a href="<?php echo base_url();?>index.php/Index/MediaCount">No. of Media/ Area</a></li>
                     <?php } ?>
                     <?php if($us_t_ad[0]['acc8'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/clientadd">Client</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc9'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/CompanyAdd">Company Details</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc10'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Order">New Order(Except Printing)</a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc11'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/PrintingOrder">New Printing Order </a></li>
                    <?php } ?>
                    <?php if($us_t_ad[0]['acc12'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Landlord">Add Land Lord </a></li>
                     <?php } ?>
                    <?php if($us_t_ad[0]['acc13'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/Trading">Add Trading Details </a></li>
                     <?php } ?>
                    <?php if($us_t_ad[0]['acc14'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/signalInstal">Signal Installation </a></li>
                     <?php } ?>
                   <?php if($us_t_ad[0]['acc15'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/PoleKiosk">Details of Pole Kiosk </a></li>
                     <?php } ?>
                    <?php if($us_t_ad[0]['acc16'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/Index/HordingInstal">Hording Installation </a></li>
                     <?php } ?>
                    
                     <?php /*?><li><a href="<?php echo base_url();?>index.php/Index/serviceassign">Service Assign</a></li> <?php */?>                    
                </ul>
                <!-- END Submenu -->
            </li>
            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>View</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>
<?php $vw_access = $this->db->query('SELECT * FROM td_admin_access WHERE adm_id='.$_SESSION['usid'].' AND acc_type ="view"')->result_array();?>
                <!-- BEGIN Submenu -->
                <ul class="submenu">
                 <?php if($vw_access[0]['acc1'] == 1) { ?>
                <li><a href="<?php echo base_url();?>index.php/view/Users">USERS</a></li>
                <?php } ?>
                 <?php if($vw_access[0]['acc2'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Service">Media List</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc3'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/MediaType">Media Type List</a></li>
                    <?php } ?>
                    <?php if($vw_access[0]['acc17'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Bank">Bank Details</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc4'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/MediaSizes">Media Sizes</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc5'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Area">Area</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc6'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/ServiceCharge">Taxes</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc7'] == 1) { ?>
                     <li><a href="<?php echo base_url();?>index.php/view/MediaCount">No. of Media/ Area</a></li>
                     <?php } ?>
                      <?php if($vw_access[0]['acc8'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Client">Client</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc9'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Orders">Orders</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc10'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Landlords">Land Lord Details</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc13'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/Trading">Trading Details</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc15'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/PoleKiosk">Pole Kiosk Details</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc14'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/SignalInstal">Signal Installation Details</a></li>
                    <?php } ?>
                     <?php if($vw_access[0]['acc16'] == 1) { ?>
                    <li><a href="<?php echo base_url();?>index.php/view/hordingInstal">Hording Installation Details</a></li>
                    <?php } ?>
                     <?php /*?><li><a href="<?php echo base_url();?>index.php/Index/serviceassign">Service Assign</a></li> <?php */?>                    
                </ul>
                <!-- END Submenu -->
            </li>
            <?php if($_SESSION['user'] == 'admin'){?>
             <li>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Report</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>

                <!-- BEGIN Submenu -->
                <ul class="submenu">
                    <li><a href="<?php echo base_url();?>index.php/Index/SearchMediaArea">Media List / Area</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Index/MediaDetails">Media Details</a></li>
                     <li><a href="<?php echo base_url();?>index.php/Index/DateReport">Date Wise Report</a></li>
                     <li><a href="<?php echo base_url();?>index.php/Index/AreaReport">Area Wise Report</a></li>
                     <li><a href="<?php echo base_url();?>index.php/Index/SignalInstallationReport">Installation report / Area</a></li>
                     <li><a href="<?php echo base_url();?>index.php/Index/SignalInstallOrderReport">Installation report / Order From</a></li>
                   <!-- <li><a href="<?php echo base_url();?>index.php/view/Area">Area</a></li>
                    <li><a href="<?php echo base_url();?>index.php/view/ServiceCharge">Taxes</a></li>
                     <li><a href="<?php echo base_url();?>index.php/view/MediaCount">No. of Media/ Area</a></li>
                    <li><a href="<?php echo base_url();?>index.php/view/Client">Client</a></li> -->
                     <?php /*?><li><a href="<?php echo base_url();?>index.php/Index/serviceassign">Service Assign</a></li> <?php */?>                    
                </ul>
                <!-- END Submenu -->
            </li>
           <?php } ?>
            <?php /*?><li>
                <a href="<?php echo base_url();?>index.php/view/Client">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Client List</span>
                </a>
            </li><?php */?>
             <?php /*?><li>
                <a href="<?php echo base_url();?>index.php/view/Projects">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Project List</span>
                </a>
            </li><?php */?>
          
           <!--  <li>
                <a href="<?php echo base_url();?>index.php/view/ServiceAssign">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Service Assign List</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/view/PaymentList">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Notification List</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/view/Report">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Service Report</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/view/ChartReport">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Annual Report</span>
                </a>
            </li> -->
            
            

        </ul>
        <!-- END Navlist -->

        <!-- BEGIN Sidebar Collapse Button -->
        <div id="sidebar-collapse" class="visible-lg">
            <i class="fa fa-angle-double-left"></i>
        </div>
        <!-- END Sidebar Collapse Button -->
    </div>
    <!-- END Sidebar -->

