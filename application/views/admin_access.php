<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Access List</h1>
                
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
                        <h3><i class="fa fa-table"></i> Access</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <form name="frm_pro" id="frm_pro" method="post" action="<?php echo base_url();?>index.php/Add/GiveAccess"  enctype="multipart/form-data" target="_blank">
<input type="hidden" name="admn_id" value="<?php echo $admin_id;?>" />
                    <div class="box-content">

<div class="row">
<div class="col-md-12">

<div class="tabbable tabs-left">
<ul id="myTab3" class="nav nav-tabs active-red">
<li class="active"><a href="#home3" data-toggle="tab" onclick="return access_type('add')"><i class="fa fa-home"></i> ADD </a></li>
<li><a href="#profile3" data-toggle="tab" onclick="return access_type('view')"><i class="fa fa-user"></i> VIEW</a></li>
<!-- <li><a href="#profile4" data-toggle="tab" onclick="return access_type('report')"><i class="fa fa-user"></i> REPORT</a></li> -->
</ul>

<div id="myTabContent3" class="tab-content">
<div class="tab-pane fade in active" id="home3">
<div class="table-responsive">
<table class="table table-advance">
<thead>
<tr>
<th style="width:18px"><!-- <input type="checkbox" name="adding" value="1" onClick="javascript:checkAll('frm_pro', true);" href="javascript:void();"><a onClick="javascript:checkAll('frm_pro', true);" href="javascript:void();" style="text-decoration:none; color:#006600;">All</a>
                          &nbsp;|&nbsp;
                          <a onClick="javascript:checkAll('frm_pro', false);" href="javascript:void();" style="text-decoration:none; color:#006600;">None</a> --></th>
<th><a class="sort-asc sort-desc" href="#">Sl</a></th>
<th><a class="sort-asc sort-desc" href="#">Menu name</a></th>
<th><a class="sort-asc sort-desc" href="#">Access</a></th>

</tr>
</thead>
<tbody>
<tr class="table-flag-blue">
<td><input type="checkbox" name="a1" value="1"></td>
<td>1</td>
<td>USER</td>
 <?php if($u_t_acc[0]['acc1'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/1"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a2" value="1"></td>
<td>2</td>
<td>Main Media Name</td>
 <?php if($u_t_acc[0]['acc2'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/2"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-orange">
<td><input type="checkbox" name="a3" value="1"></td>
<td>3</td>
<td>Media Type</td>
 <?php if($u_t_acc[0]['acc3'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/3"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a4" value="1"></td>
<td>4</td>
<td>Media Size</td>
 <?php if($u_t_acc[0]['acc4'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/4"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a5" value="1"></td>
<td>5</td>
<td>Area</td>
 <?php if($u_t_acc[0]['acc5'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/5"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a6" value="1"></td>
<td>6</td>
<td>Taxes</td>
 <?php if($u_t_acc[0]['acc6'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/6"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-blue">
<td><input type="checkbox" name="a7" value="1"></td>
<td>7</td>
<td>Media/Area</td>
 <?php if($u_t_acc[0]['acc7'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/7"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox" name="a8" value="1"></td>
<td>8</td>
<td>Client</td>
 <?php if($u_t_acc[0]['acc8'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/8"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox" name="a9" value="1"></td>
<td>9</td>
<td>Company details</td>
 <?php if($u_t_acc[0]['acc9'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/9"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a10" value="1"></td>
<td>10</td>
<td>Order(Excluding Printing)</td>
 <?php if($u_t_acc[0]['acc10'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/10"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a11" value="1"></td>
<td>11</td>
<td>Printing Order</td>
 <?php if($u_t_acc[0]['acc11'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/11"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a12" value="1"></td>
<td>12</td>
<td>Add Land Lord</td>
 <?php if($u_t_acc[0]['acc12'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/12"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a13" value="1"></td>
<td>13</td>
<td>Add Trading Details</td>
 <?php if($u_t_acc[0]['acc13'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/13"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a14" value="1"></td>
<td>14</td>
<td>Signal Installation</td>
 <?php if($u_t_acc[0]['acc14'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/14"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a15" value="1"></td>
<td>15</td>
<td>Details of Pole Kiosk</td>
 <?php if($u_t_acc[0]['acc15'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/15"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a16" value="1"></td>
<td>16</td>
<td>Hording Installation</td>
 <?php if($u_t_acc[0]['acc16'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/16"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="a17" value="1"></td>
<td>17</td>
<td>Bank Details</td>
 <?php if($u_t_acc[0]['acc17'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/add/17"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="profile3">
<div class="table-responsive">
<table class="table table-advance">
<thead>
<tr>
<th style="width:18px"></th>
<th><a class="sort-asc sort-desc" href="#">Sl</a></th>
<th><a class="sort-asc sort-desc" href="#">Menu name</a></th>
<th><a class="sort-asc sort-desc" href="#">Access</a></th>

</tr>
</thead>
<tbody>
<tr class="table-flag-blue">
<td><input type="checkbox" name="b1" value="1"></td>
<td>1</td>
<td>USER</td>
 <?php if($u_t_vw[0]['acc1'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/1"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b2" value="1"></td>
<td>2</td>
<td>Main Media Name</td>
<?php if($u_t_vw[0]['acc2'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/2"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-orange">
<td><input type="checkbox" name="b3" value="1"></td>
<td>3</td>
<td>Media Type</td>
<?php if($u_t_vw[0]['acc3'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/3"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b4" value="1"></td>
<td>4</td>
<td>Media Size</td>
<?php if($u_t_vw[0]['acc4'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/4"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b5" value="1"></td>
<td>5</td>
<td>Area</td>
<?php if($u_t_vw[0]['acc5'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/5"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b6" value="1"></td>
<td>6</td>
<td>Taxes</td>
<?php if($u_t_vw[0]['acc6'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/6"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-blue">
<td><input type="checkbox" name="b7" value="1"></td>
<td>7</td>
<td>Media/Area</td>
<?php if($u_t_vw[0]['acc7'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/7"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox" name="b8" value="1"></td>
<td>8</td>
<td>Client</td>
<?php if($u_t_vw[0]['acc8'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/8"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox" name="b9" value="1"></td>
<td>9</td>
<td>Company details</td>
<?php if($u_t_vw[0]['acc9'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/9"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b10" value="1"></td>
<td>10</td>
<td>Orders</td>
<?php if($u_t_vw[0]['acc10'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/10"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b11" value="1"></td>
<td>11</td>
<td>Land Lord</td>
<?php if($u_t_vw[0]['acc11'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/11"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b13" value="1"></td>
<td>12</td>
<td>Trading Details</td>
<?php if($u_t_vw[0]['acc13'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/13"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b14" value="1"></td>
<td>13</td>
<td>Signal Installation Details</td>
<?php if($u_t_vw[0]['acc14'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/14"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b15" value="1"></td>
<td>14</td>
<td>Pole Kiosk Details</td>
<?php if($u_t_vw[0]['acc15'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/15"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b16" value="1"></td>
<td>15</td>
<td>Hording Installation Details</td>
<?php if($u_t_vw[0]['acc16'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/16"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
<tr>
<td><input type="checkbox" name="b17" value="1"></td>
<td>16</td>
<td>Bank Details</td>
<?php if($u_t_vw[0]['acc17'] == 1) { ?>
<td>Access Given&nbsp;<a href="<?php echo base_url();?>index.php/Update/SubAdminAccess/<?php echo $admin_id;?>/view/17"><span class="badge badge-success">Cancel Access <i class="fa fa-star"></i></span></a></td>
<?php } else { ?>
<td>No Access</td>
<?php } ?>

</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="profile4">
<div class="table-responsive">
<table class="table table-advance">
<thead>
<tr>
<th style="width:18px"></th>
<th><a class="sort-asc sort-desc" href="#">Sl</a></th>
<th><a class="sort-asc sort-desc" href="#">Menu name</a></th>
<th><a class="sort-asc sort-desc" href="#">Access</a></th>

</tr>
</thead>
<tbody>
<tr class="table-flag-blue">
<td><input type="checkbox"></td>
<td>1</td>
<td>USER</td>
<td>Win XP SP2+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>2</td>
<td>Main Media Name</td>
<td>Win XP</td>

</tr>
<tr class="table-flag-orange">
<td><input type="checkbox"></td>
<td>3</td>
<td>Media Type</td>
<td>Win 98+ / OSX.2+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>4</td>
<td>Media Size</td>
<td>Win 98+ / OSX.2+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>5</td>
<td>Area</td>
<td>Win 98+ / OSX.2+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>6</td>
<td>Taxes</td>
<td>Win 98+ / OSX.1+</td>

</tr>
<tr class="table-flag-blue">
<td><input type="checkbox"></td>
<td>7</td>
<td>Media/Area</td>
<td>Win 98+</td>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox"></td>
<td>8</td>
<td>Client</td>
<td>Win 95+ / OSX.2+</td>

</tr>
<tr class="table-flag-red">
<td><input type="checkbox"></td>
<td>9</td>
<td>Company details</td>
<td>Win 95+ / OSX.2+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>10</td>
<td>Order(Excluding Printing)</td>
<td>Win 95+ / OSX.1+</td>

</tr>
<tr>
<td><input type="checkbox"></td>
<td>11</td>
<td>Printing</td>
<td>Win 95+ / OSX.1+</td>

</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>

</div>


</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="button" class="btn btn-primary" onClick="this.form.method='post'; this.form.action='<?php echo base_url();?>index.php/Add/GiveAccess/<?php echo $admin_id;?>';this.form.submit();return confirm('Are you Sure to give access to All These?');"><i class="fa fa-check"></i> Save
                                    </button>
                                    
                                </div>
                    </div>
                    <input type="hidden" name="access_type" id="access_type" value="add">
                    </form>
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
<script>
function checkAll(formname, checktoggle)
{
  var checkboxes = new Array(); 
  checkboxes = document[formname].getElementsByTagName('input');
 
  for (var i=0; i<checkboxes.length; i++)  {
    if (checkboxes[i].type == 'checkbox')   {
      checkboxes[i].checked = checktoggle;
    }
  }
}
  
  function access_type(atyp) {
        $('#access_type').val(atyp);

  }
  
</script>