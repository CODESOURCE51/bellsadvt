<?php include_once('templates/header.php');?>
<body>
    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Client List</h1>
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
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Dynamic Table</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">


                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                    <th style="width:18px"><input type="checkbox"/></th>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th class="text-center">Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-flag-blue">
                                    <td><input type="checkbox"/></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="text-center">7</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Trident</td>
                                    <td><a href="#">AOL browser (AOL desktop)</a></td>
                                    <td>Win XP</td>
                                    <td class="text-center">6</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr class="table-flag-orange">
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td><span class="label label-success">Not Bad</span> Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="text-center">1.8</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="text-center">1.8</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="text-center">1.8</td>
                                    <td><span class="label label-warning">B</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="text-center">1.8</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr class="table-flag-blue">
                                    <td><input type="checkbox"/></td>
                                    <td>Trident</td>
                                    <td><span class="label label-warning">So crazy!</span> <a href="#">Internet Explorer
                                        6</a></td>
                                    <td>Win 98+</td>
                                    <td class="text-center">6</td>
                                    <td><span class="label label-important">C</span></td>
                                </tr>
                                <tr class="table-flag-red">
                                    <td><input type="checkbox"/></td>
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="text-center">-</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr class="table-flag-red">
                                    <td><input type="checkbox"/></td>
                                    <td>Presto</td>
                                    <td><span class="label label-info">It's Opera!</span> Opera 8.0</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="text-center">-</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td><a href="#">Mozilla 1.0</a></td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="text-center">1</td>
                                    <td><span class="label label-warning">B</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="text-center">1.1</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr class="table-flag-blue">
                                    <td><input type="checkbox"/></td>
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="text-center">-</td>
                                    <td><span class="label label-important">C</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td><a href="#">Mozilla 1.2</a></td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="text-center">1</td>
                                    <td><span class="label label-warning">B</span></td>
                                </tr>
                                <tr class="table-flag-red">
                                    <td><input type="checkbox"/></td>
                                    <td>Presto</td>
                                    <td>Opera 7.7</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="text-center">-</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"/></td>
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="text-center">1.8</td>
                                    <td><span class="label label-success">A</span></td>
                                </tr>
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
<script>
$( document ).ready(function() {
    loded();
});
function loaded()
{
    alert("Beep!");
    window.setTimeout(CloseMe, 500);
}

function CloseMe() 
{
    window.close();
}
</script>
