<?php include_once('templates/header.php');?>
    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Annual Report</h1>
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
            <div class="col-md-6">
                <div class="box box-orange">
                    <div class="box-title">
                        <h3><i class="fa fa-bar-chart-o"></i> Annual Report</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <canvas id="income" width="600" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-red">
                    <div class="box-title">
                        <h3><i class="fa fa-bar-chart-o"></i>Service Report</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                         <canvas id="countries" width="600" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        <footer>
            <p>2016 © Client Management System</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- END Content -->



<?php include_once('templates/footer.php');?>

<script src="<?php echo base_url();?>assets/Chart.min.js"></script>


<script>
           
            // pie chart data
            var pieData = [
                <?php $i=3; $j=1;foreach($data1 as $dta1) {
                // echo 'select SUM(cost) as scost from td_account where sa_id='.$dta1['sa_id'];
                 $service1 = $this->db->query('select service_name from td_service where service_id='.$dta1['service_id'])->result_array();
                 $col = rand(10,100);
                 //print_r($service1);
                
                ?>
                {
                    value: <?php if($dta1['scost'] == '') echo 0; else { echo $dta1['scost'];}?>,
                    color:"#<?php echo $i;?><?php echo $col;?>BB<?php echo $j;?>",
                    highlight: "#<?php echo $j;?><?php echo $col;?>5A<?php echo $i;?>",
                    label: "<?php echo $service1[0]['service_name'];?>"
                },
              <?php $i++; $j++;} ?>  
            ];
            // pie chart options
            var pieOptions = {
                 segmentShowStroke : true,
                 animateScale : true,
                 responsive : true
            }
            // get pie chart canvas
            var countries= document.getElementById("countries").getContext("2d");
            // draw pie chart
            new Chart(countries).Pie(pieData, pieOptions);
            // bar chart data
            var barData = {
                labels : [<?php foreach($datay as $dtay) { $daten = strtotime($dtay['expiry_date']); $d = date('F', $daten);?>"<?php echo $d;?>",<?php } ?>],
                datasets : [
                    {
                        fillColor : "#48A497",
                        strokeColor : "#48A4D1",
                        data : [<?php foreach($datay as $dtay) { ?><?php echo $dtay['scost1'];?>,<?php } ?>]
                    }
                ]
            }
            // get bar chart canvas
            var income = document.getElementById("income").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData, {
            responsive : true
        });
        </script>
  