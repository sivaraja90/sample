<?php /* Smarty version 2.6.25, created on 2017-11-29 17:06:55
         compiled from dashboard.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
			  <a href="#" class="small-box-footer">Enquiry</a>
              <div class="inner">
                  <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['EnqAnnual']['0']['DATE']; ?>
 </p>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['EnqLastMon']['0']['Month']; ?>
 </p>
				  <p>Current Month&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['EnqCurMon']['0']['Month']; ?>
 </p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-call"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
			  <a href="#" class="small-box-footer">Sales</a>
                <div class="inner">
				<?php if ($this->_tpl_vars['SalAnnual']['0']['Total'] == ""): ?>
				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;0 </p>
				<?php elseif ($this->_tpl_vars['SalAnnual']['0']['Total'] != ""): ?>				   
   				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SalAnnual']['0']['Total']; ?>
 </p>
				   <?php endif; ?>
				   <?php if ($this->_tpl_vars['SalLastMon']['0']['Total'] == ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp; 0 </p>
				  <?php elseif ($this->_tpl_vars['SalLastMon']['0']['Total'] != ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SalLastMon']['0']['Total']; ?>
 </p>
				  <?php endif; ?>
				  <?php if ($this->_tpl_vars['SalCurMon']['0']['Total'] == ""): ?>
				  <p>Current Month&emsp;-&emsp;&emsp;0</p>
				  <?php elseif ($this->_tpl_vars['SalCurMon']['0']['Total'] != ""): ?>                
				  <p>Current Month&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SalCurMon']['0']['Total']; ?>
</p>  
				  <?php endif; ?>              
				  </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
              <a href="#" class="small-box-footer">Service</a>
                <div class="inner">
				   <?php if ($this->_tpl_vars['SerAnnual']['0']['Total'] == ""): ?>
				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;0 </p>
				   <?php elseif ($this->_tpl_vars['SerAnnual']['0']['Total'] != ""): ?>
				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SerAnnual']['0']['Total']; ?>
 </p>
				   <?php endif; ?>
				   <?php if ($this->_tpl_vars['SerLastMon']['0']['Total'] == ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;0 </p>
				  <?php elseif ($this->_tpl_vars['SerLastMon']['0']['Total'] != ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SerLastMon']['0']['Total']; ?>
 </p>
				  <?php endif; ?>
				  <?php if ($this->_tpl_vars['SerCurMon']['0']['Total'] == ""): ?>
				  <p>Current Month&emsp;-&emsp;&emsp;0</p>        
				  <?php elseif ($this->_tpl_vars['SerCurMon']['0']['Total'] != ""): ?>        
				  <p>Current Month&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['SerCurMon']['0']['Total']; ?>
</p>
				  <?php endif; ?>                
				  </div>
                <div class="icon">
                  <i class="ion-ios-pulse"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
				<a href="#" class="small-box-footer">Project</a>
                <div class="inner">
				   <?php if ($this->_tpl_vars['ProAnnual']['0']['Total'] == ""): ?>
				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;0 </p>
				   <?php elseif ($this->_tpl_vars['ProAnnual']['0']['Total'] != ""): ?>
				   <p>Annual&emsp;&emsp;&emsp;&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['ProAnnual']['0']['Total']; ?>
 </p>
				   <?php endif; ?>
				   <?php if ($this->_tpl_vars['ProLastMon']['0']['Total'] == ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;0 </p>
				  <?php elseif ($this->_tpl_vars['ProLastMon']['0']['Total'] != ""): ?>
				  <p>Last Month&emsp;&emsp;&nbsp;&nbsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['ProLastMon']['0']['Total']; ?>
 </p>
				  <?php endif; ?>
				  <?php if ($this->_tpl_vars['ProCurMon']['0']['Total'] == ""): ?>
				  <p>Current Month&emsp;-&emsp;&emsp;0</p>                
				  <?php elseif ($this->_tpl_vars['ProCurMon']['0']['Total'] != ""): ?>
				   <p>Current Month&emsp;-&emsp;&emsp;<?php echo $this->_tpl_vars['ProCurMon']['0']['Total']; ?>
</p>                
				   <?php endif; ?>
				  </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
<section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Sales</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="areaChart" style="height:250px"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <!-- /.box -->
<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Project</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="lineChart" style="height:265px"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div>
            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
 
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Service</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:250px"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

		<div class="box box-primary">			
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                 
                </div>
                <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div>
                <div class="box-footer clearfix">
                  <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
               </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

	</div>
        </section><!-- /.content -->
		</div>
    <?php echo '  

    <!-- page script -->
    <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery\'s .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };

        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\\"<%=name.toLowerCase()%>-legend\\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\\"background-color:<%=datasets[i].lineColor%>\\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = areaChartOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(areaChartData, lineChartOptions);

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery\'s .get() method.


        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[1].fillColor = "#00a65a";
        barChartData.datasets[1].strokeColor = "#00a65a";
        barChartData.datasets[1].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines

          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\\"<%=name.toLowerCase()%>-legend\\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\\"background-color:<%=datasets[i].fillColor%>\\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
    </script>
'; ?>

</div>