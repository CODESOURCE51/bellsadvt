<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Dashboard</h1>
                <h4>Overview, stats, chat and more</h4>
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
                <div class="box box-orange">
                    <div class="box-title">
                        <h3><i class="fa fa-bar-chart-o"></i> Control Panel</h3>

                        <div class="box-tool">
                        
                        </div>
                    </div>
                    <div class="box-content" style="color:#F00; font-size:18px; font-weight:bold;">
                        HELLO <?php echo $_SESSION['user'];?>,<br/>
                           WELCOME TO BELL ADVERTISING CONTROL PANEL
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
