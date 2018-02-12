<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Edit Profile</h1>
                
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
                        <h3><i class="fa fa-bars"></i> Edit Admin Profile</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="profile" action="<?php echo base_url();?>index.php/Update/Profile" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="prof_id" value="<?php echo $data[0]['id'];?>">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control" name="txt_aname" id="txt_aname" value="<?php echo $data[0]['name'];?>" />
                                    <span class="help-inline">Your Name</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Username</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control" name="txt_username" id="txt_username" value="<?php echo $data[0]['user'];?>" />
                                    <span class="help-inline">Your Login Username</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Password</label>
                                Last Password : <?php /*echo $lstr = strlen($pass[0]['pass_key'])-3;*/ echo $sbstrpass = substr((substr($pass[0]['pass_key'],3)),0,-3);?>
                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="password" class="form-control" data-action="pwindicator"
                                           data-indicator="pwindicator-block" name="txt_pass" id="txt_pass" />
                                    <span class="help-inline">Your New Password</span>

                                    <div class="pwindicator" id="pwindicator-block">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Confirm Password</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="password" class="form-control" data-action="pwindicator"
                                           data-indicator="pwindicator-block" name="txt_cpass" id="txt_cpass" />
                                    <span class="help-inline">Retype Your New Password</span>

                                    <div class="pwindicator" id="pwindicator-block">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                            </div>
                          

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

         <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Edit Admin Avatar</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="profile" action="<?php echo base_url();?>index.php/Update/ProfileImage" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="prof_id" value="<?php echo $data[0]['id'];?>">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Avatar</label>
                                <img src="<?php echo base_url();?>img/<?php echo $data[0]['photo'];?>">
                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="file" class="form-control" name="txt_file" id="txt_file" />
                                    <span class="help-inline">Browse Your Avatar</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>2016 © BELL </p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>
