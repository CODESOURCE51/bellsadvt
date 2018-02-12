<?php include_once('templates/header.php');?>
<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1><i class="fa fa-file-o"></i> Client Dashboard</h1>
<!-- <h4>Boxes and containers</h4> -->
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
<li class="active">Client Dashboard</li>
</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-4">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> Default</h3>
<div class="box-tool">
<a data-action="config" data-modal="setting-modal-1" href="#"><i class="fa fa-gear"></i></a>
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="alert alert-info">
<button class="close" data-dismiss="alert">&times;</button>
<p>Change skin to see how colors will change</p>
</div>
<p><code>class="box"</code></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="box box-red">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> Red</h3>
<div class="box-tool">
<a data-action="config" data-modal="setting-modal-1" href="#"><i class="fa fa-gear"></i></a>
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<p><code>class="box box-red"</code></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="box box-orange">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> Orange</h3>
<div class="box-tool">
<a data-action="config" data-modal="setting-modal-1" href="#"><i class="fa fa-gear"></i></a>
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<p><code>class="box box-orange"</code></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<?php include_once('templates/footer.php');?>